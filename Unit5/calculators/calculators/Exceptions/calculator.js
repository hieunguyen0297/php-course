/* Author: Louie Zhu
 * Date: 03/28/2022
 * Name: calculator.php
 * Description: This contains the JavaScript code for the application.
 */

// stores the reference to the XMLHttpRequest object
var xmlHttp;

window.onload = function () {
    //create an XMLHttpRequest object by calling the createXmlHttpRequestObject function
    xmlHttp = createXmlHttpRequestObject();
};

//this function creates a XMLHttpRequest object. It should work with most types of browsers.
function createXmlHttpRequestObject()
{
    // stores the reference to the XMLHttpRequest object
    var objXmlHttp;
    // if running Internet Explorer 6 or older
    if (window.ActiveXObject)
    {
        try {
            objXmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (e) {
            objXmlHttp = false;
        }
    }
    // if running Mozilla or other browsers
    else
    {
        try {
            objXmlHttp = new XMLHttpRequest();
        }
        catch (e) {
            objXmlHttp = false;
        }
    }
    // display an error message
    if (!objXmlHttp)
        alert("Error creating the XMLHttpRequest object.");

    // return the created object
    return objXmlHttp;
}

// perform math operations
function dothemath(operator) {
    var operand1, operand2;
    operand1 = document.getElementById('operand1').value;
    operand2 = document.getElementById('operand2').value;
    operator = encodeURIComponent(trim(operator));

    // open an asynchronous request to the server. Send operands and operator in query string variables
    xmlHttp.open("GET", "calculator.php?operand1=" + operand1 + "&operand2=" + operand2 + "&operator=" + operator, true);

    // define the method to handle server responses
    xmlHttp.onreadystatechange = function () {
        // proceed only if the transaction has completed and the transaction completed successfully
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            // extract the JSON received from the server
            var response = JSON.parse(xmlHttp.responseText);

            result = response.result;
            message = response.message;

            //display the result and message
            document.getElementById('result').innerHTML = result;
            document.getElementById('message').innerHTML = '<font color="red">' + message + '</font>';
        }
    };

    // make the server request
    xmlHttp.send(null);
}

/* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}