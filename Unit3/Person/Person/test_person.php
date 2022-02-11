<?php
/*
 * Author: Louie Zhu
 * Date: 2/08/2019
 * Name: test_person.phpp
 * Description: this client program tests the Person and Student classes.
 */
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php
        //add your code here
        //convert a camel cased string to a underscored string
        function camelCaseToUnderscore($str) {
            //store all characters in an array
            $characters = str_split($str);

            //covert the first character to a lowercase
            $characters[0] = strtolower($characters[0]);

            //exam all characters in the array
            //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
            foreach ($characters as &$character) {
                if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
                    $character = '_' . strtolower($character);
            }

            //convert all elements in the array into a string and return the string
            return implode('', $characters);
        }

        spl_autoload_register(function($class_name){
            require_once camelCaseToUnderscore($class_name) . '.class.php';
        });

        //create a new GradStudent object
        $g = new GradStudent("Kevin", "Male");

        //Set its major, GPA and program
        $g->setMajor("Informatics");
        $g->setGPA(3.6);
        $g->setProgram("MS");

        //print the object
        echo "<h3>Graduate Student</h3>";
        echo "Name: ", $g->getName(), "<br>";
        echo "Gender: ", $g->getGender(), "<br>";
        echo "Major: ", $g->getMajor(), "<br>";
        printf ("GPA: %.1f<br>", $g->getGPA());
        echo "Program: ", $g->getProgram();


        //create new UnderStudent object
        $s = new UndergradStudent("Judy", "Female");

        //set major, GPA, and status;
        $s ->setMajor("Informatics");
        $s->setGPA(3.8);
        $s->setStatus("Junior");

        //print the object
        echo "<h3>Undergraduate Student</h3>";
        echo "Name: ", $s->getName(), "<br>";
        echo "Gender: ", $s->getGender(), "<br>";
        echo "Major: ", $s->getMajor(), "<br>";
        printf ("GPA: %.1f<br>", $s->getGPA());
        echo "Status: ", $s->getStatus();


        ?>

    </body>
</html>