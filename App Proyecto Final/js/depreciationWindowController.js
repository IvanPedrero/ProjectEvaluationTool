var chooseMethodWindow;
var frameWindow;
var returnWindow;

function showChooseMethod() {
	chooseMethodWindow = document.getElementById("chooseMethodWindow");
	frameWindow = document.getElementById("frameWindow");
	returnWindow =  document.getElementById("returnWindow");

	showButtons();
}

function showStraightLine(){
	hideButtons();

	document.getElementById("calculationFrame").src = "straightLineMethod.html"; 
}

function showMACRS(){
	hideButtons();

	document.getElementById("calculationFrame").src = "macrsMethod.html"; 
}

function hideButtons(){
	chooseMethodWindow.style.display = 'none';
	returnWindow.style.display = 'block';
	frameWindow.style.display = 'block';
}

function showButtons(){
	chooseMethodWindow.style.display = 'block';
	frameWindow.style.display = 'none';
	returnWindow.style.display = 'none';
}