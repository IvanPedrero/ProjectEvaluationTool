
function hideCurtain(){
  var curt = document.getElementById("curtain");
  curt.style.display = "none";
}

function showCurtain(){
  var curt = document.getElementById("curtain");
  curt.style.display = "block";
}


function showPaybackPeriod(){
  hideCurtain();
  var frame = document.getElementById("calculationFrame");
  frame.src = "PaybackPeriod.html";
}

function returnToMain(){
  showCurtain();
}
