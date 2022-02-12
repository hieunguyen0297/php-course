/* Author: Hieu Nguyen
 * Date: 02/12/2022
 * Name: main.js
 * Description: this is the javascript file for handling client-side scripting.
 */

/******************************************************************************
 * Handle key press event.
 * This function makes asynchronous HTTP request using the XMLHttpRequest object.
 * It passes a name to population.php for processing.
 *****************************************************************************/
function handlekeyup(e) {
    //retrieve user input from the text box
    let name = trim(document.getElementById('name').value);
    if(name == "") {
        error("");
        //when HIGHLIGHT the search term to delete, the population results will still persist
        //that is why the clear() function is called here, I also modified its content.
        clear();
        return;
    }
	
    //add your code here to process ajax requests and handle server's responses
    //make a new xhr object
    let xhr = new XMLHttpRequest();

    //define the request
    xhr.open("GET", "population.php?name=" + name, true);

    //handle the response from server
    xhr.onload = function (){
        let result = xhr.responseText;
        let resultJSON = JSON.parse(result);
        // console.log(resultJSON);

        if(resultJSON['error']){
            error(resultJSON['error']);
        }else{
            clear();
            display(resultJSON);
        }
    }

    //send request
    xhr.send();
}

/*
 * This function accepts a JSON object containing population information
 * and display it in an HTML table. This function get invoked by the handlekeyup function
 * when the country/region name is found in the database.
 * 
 */
function display(population) {
    //add your code here to retrieve data from an JSON object and then display them
    let name = trim(document.getElementById('name').value.toLowerCase());

    let newRows = "";

    //loop through population data
    for(let key in population){
        if (key !== "metadata"){
            //get country population
            let countryPopulation = parseInt(population[key][name]);
            //get world population
            let worldPopulation = parseInt(population[key]['world']);

            //for each record, create a new div and then append to the newRows variable
            newRows += `
            <div class="row"> 
                <div>${key}</div> 
                <div>${numberWithCommas(countryPopulation)}</div> 
                <div>${numberWithCommas(worldPopulation)}</div> 
            </div>
            `
        }
    }
    //set innerHTML for population-results div
    document.getElementById("population-results").innerHTML = newRows;
}

/*
 * This function clears the population. The function is invoked by the handlekeyup function if
 * the country name a user has entered is not found in the database.
 */
function clear() {
    //add your code here to clear the population data
    document.getElementById("message").innerHTML = "";
    document.getElementById("population-results").innerHTML = "";
}

//This function displays an error message in the div block with the id of "message".
function error(message) {
    //add your code here to display an error message.
    document.getElementById("message").innerHTML = message;
}

/*
* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

/*
* A home-made function that displays a number with commas as thousands separators
 */
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}