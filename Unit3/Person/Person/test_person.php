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


        //create two GradStudent and two Undergrad objects
        $g1 = new GradStudent ("Bryan Young", "Male", "Informatics", 3.7, "Master");
        $g2 = new GradStudent ("Mellisa Rogers", "Female", "Engineering", 3.2, "Ph.D.");
        $u1= new UndergradStudent("Ian Watson", "Male", "Library Science", 3.0, "Freshman");
        $u2 = new UndergradStudent ("Kimberlee Wang", "Female", "Nursing", 2.8, "Junior");

        //create two MedicalStudent objects
        $m1 = new MedicalStudent("Timothy Lindsey", "Male", "Family Medicine", 3.4, "MD", 11.0);
        $m2 = new MedicalStudent("Amy Ling", "Female", "Anesthesiology", 3.8, "MD", 10.8);

        //Create a new array to store all GraduateStudent and UndergradStudent objects.
        $students = array($g1, $g2, $u1, $u2, $m1, $m2);

        //display information by calling the toString method
        foreach ($students as $student) {
            printStudent($student);
        }

        function printStudent($student){
            if(get_class($student) == "GradStudent"){
                echo "<h3>Graduate Student</h3>";
            }else if (get_class($student) == "UndergradStudent") {
                echo "<h3>Undergraduate Student</h3>";
            } else if (get_class($student) == "MedicalStudent") {
                echo "<h3>Medical Student</h3>";
            }
            $student->toString();
        }

        echo "<h3>", GradStudent::getStudentCount(), " graduate students have been created.</h3>";
        echo "<h3>", UndergradStudent::getStudentCount(), " undergraduate students have been created.</h3>";
        echo "<h3>" , MedicalStudent::getStudentCount() , " medical students have been created.</h3>";
        ?>

    </body>
</html>