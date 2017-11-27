function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500); // atnaujiname laiką kas 0.5s
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // pridedame nulį priešais skaičių jei < 10
    return i;
}

// random background for .png's

//  function ran_col() { //function name
//     var color = "#"; // hexadecimal starting symbol
//     var letters = ["000000", "FF0000", "00FF00", "0000FF", "FFFF00", "00FFFF", "FF00FF", "C0C0C0"]; //Set your colors here
//     color += letters[Math.floor(Math.random() * letters.length)];
//     document.getElementsByClassName("randomizer").css("backgroundColor", color); // Setting the random color on your div element.
// }
// <body onload="startTime(); return ran_col()">

