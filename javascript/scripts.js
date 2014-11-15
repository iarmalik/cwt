window.onload = initializeBody;

function initializeBody() {
document.getElementById("b1").onclick = item1;
document.getElementById("b2").onclick = item2;
document.getElementById("b3").onclick = item3;
document.getElementById("b4").onclick = item4;

document.getElementById("b-products").onclick = b-products;
document.getElementById("b-services").onclick = b-services;
document.getElementById("b-solutions").onclick = b-solutions;
}

function item1() {
document.getElementById("products").style.dislplay="block";
return false;
}
function item2() {
document.getElementById("vsat").style.dislplay="block";
return false;
}
function item3() {
document.getElementById("clients").style.dislplay="block";
return false;
}
function item4() {
document.getElementById("support").style.dislplay="block";
return false;
}

function b-products() {
var link1 = document.getElementById("sub-products");
var link2 = document.getElementById("sub-services");
var link3 = document.getElementById("sub-solutions");
link1.style.display="none";
link2.style.display="none";
link3.style.display="none";
}

function b-services() {
var link1 = document.getElementById("sub-products");
var link2 = document.getElementById("sub-services");
var link3 = document.getElementById("sub-solutions");
link1.style.display="none";
link2.style.display="block";
link3.style.display="none";
}
function b-services() {
var link1 = document.getElementById("sub-products");
var link2 = document.getElementById("sub-services");
var link3 = document.getElementById("sub-solutions");
link1.style.display="none";
link2.style.display="none";
link3.style.display="block";
}