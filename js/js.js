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
