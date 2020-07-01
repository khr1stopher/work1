let opcion = 'none';

function elegirOpcion(button) {
	document.getElementById("mailing").style.display = "";
	document.getElementById("landing").style.display = "none";
	opcion = button
	alert('usted eligio la opcion ' + opcion)
}
function back(button) {
	document.getElementById("mailing").style.display = "none";
	document.getElementById("landing").style.display = "";
}

// formulario

let file = document.querySelector("#mailing > div > form > div:nth-child(1) > label > input");
let input = document.querySelector("#mailing > div > form > div:nth-child(1) > label > span.file-cta");
let file2 = document.querySelector("#mailing > div > form > div:nth-child(2) > label > input");
let input2 = document.querySelector("#mailing > div > form > div:nth-child(2) > label > span.file-cta");
let file3 = document.querySelector("#mailing > div > form > div:nth-child(3) > label > input");
let input3 = document.querySelector("#mailing > div > form > div:nth-child(3) > label > span.file-cta");

try{
	input.innerText = file.files[0].name;
	input2.innerText = file2.files[0].name;
	input3.innerText = file3.files[0].name;
} catch(err){
	
}

