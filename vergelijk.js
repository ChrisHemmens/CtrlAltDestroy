function show_alert() { 
var msg = "Welkom op ctrlaltdestroy.tk";
alert(msg); 
}

var DDC = "";
var DKC = "";
function myFunction() {
if (document.getElementById('DD').checked) {
DDC = "Ja";
} else {
DDC = "Nee";
}
if (document.getElementById('DK').checked) {
DKC = "Ja";
} else {
DKC = "Nee";
}
document.getElementById("KCB").value = DKC;
document.getElementById("DCB").value = DDC;
}
