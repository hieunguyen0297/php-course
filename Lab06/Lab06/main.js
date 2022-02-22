/* Author: Hieu Nguyen
 * Date: 02/19/2022
 * Name: main.js
 * Description: this javascript file sends ajax request and handles server's responses.
 */

//create a XMLHttpRequest object
const xmlHttp = new XMLHttpRequest();

//handle keyup event fired in the radius and height text boxes
window.onload = function () {
    document.getElementById('width').addEventListener('keyup', calculate);
    document.getElementById('length').addEventListener('keyup', calculate);
    document.getElementById('height').addEventListener('keyup', calculate);
}

//gets called when a keyup event gets fired to handle client-side programming tasks.
function calculate() {
    //add your code below
    let width = document.getElementById("width").value;
    let length = document.getElementById("length").value;
    let height = document.getElementById("height").value;

    if (isNaN(width) || isNaN(length) ||isNaN(height) || width < 0 || length < 0 || height < 0){
        document.getElementById("base").innerHTML = "";
        document.getElementById("volume").innerHTML = "";
        document.getElementById("lateral").innerHTML = "";
        document.getElementById("surface").innerHTML = "";
    }else {
        //define AJAX request
        xmlHttp.open("GET", `pyramid_do.php?width=${width}&length=${length}&height=${height}`, true);

        //handle server's response
        xmlHttp.onload = function (){
            //wrap the response in JSON object
            let result = JSON.parse(xmlHttp.responseText);
            // console.log(result);

            //display base, volume, lateral, and surface of pyramid
            document.getElementById("base").innerHTML = result.Base;
            document.getElementById("volume").innerHTML = result.Volume;
            document.getElementById("lateral").innerHTML = result.Lateral;
            document.getElementById("surface").innerHTML = result.Surface;
        }

        //send request
        xmlHttp.send();
    }
}