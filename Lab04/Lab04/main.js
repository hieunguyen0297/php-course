/*
/ Author: Hieu Nguyen
/ Date: 02/06/2022
/ File: main.js
/ Description: This file contains javascript code that displays a list of countries of a selected continent.
/*

/* Handle window onload event. It creates a selection list of seven continents.
*/
window.onload = function () {
    // load continents from an external json file
    let continents = JSON.parse(loadJSON("continents.json"));

    // console.log(continents);
    //create the drop down list for the continents
    let _html_select = "<option selected='selected' disabled='disabled'>Select a Continent </option>";
    for (let continent in continents) {
        _html_select += "<option value='" + continent + "'>" + continents[continent] + "</option>";
    }
    document.getElementById("continents").innerHTML = _html_select;


    //load countries data from an external json file.
    let countries = JSON.parse(loadJSON("countries.json"));
    // console.log(countries['AD']);


    //handle change event of the drop down list and call the display method.
    document.getElementById("continents").onchange = function () {
        //get selected continent
        let selectedContinent = this.value;
        // console.log(selectedContinent);

        //call display method to display countries in the selected continent
        display(countries, selectedContinent);
    }
}

/* This function takes a json object of countries and a continent as the parameters. 
*  It filters the json document with a continent then appends a row to
*  the div block for each country.
*/
function display(countries, continent) {
    let row = "";
    for (let country in countries) {
        if (countries[country]['continent'] == continent) {
            row += `<div class="row"> 
                    <div>${countries[country]['name']}</div> 
                    <div>${countries[country]['capital']}</div> 
                    <div>${countries[country]['currency'].join()}</div> 
                    <div>${countries[country]['languages'].join()}</div> 
                    <div>${countries[country]['phone'].join()}</div> 
                   </div>`
        }
    }
    //append to countries list
    document.getElementById("countries").innerHTML = row;
}