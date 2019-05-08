//Global variables:
var evaluatorName;
var projectName;

//Window displays:
var infoWindow;
var mainWindow;

function getElements(){
  //Get the windows.
  infoWindow  = document.getElementById("infoWindow");
  mainWindow  = document.getElementById("mainWindow");

  //Hide the windows.
  /*infoWindow.style.display = "block";
  mainWindow.style.display = "none";
  document.getElementById("NewProjectButton").style.display = "none";*/
}

function saveNames(){
  console.log("Saving...");

  //Get the names from the text input.
  evaluatorName = document.getElementById("evaluatorName").value;
  projectName = document.getElementById("projectName").value;

  //Hide the windows.
  infoWindow.style.display = "none";
  mainWindow.style.display = "block";
  document.getElementById("NewProjectButton").style.display = "block";

  DisplayTop();
}

function DisplayTop(){
  document.getElementById("evaluatorNameDisplay").innerHTML = "Welcome " + evaluatorName;
  document.getElementById("projectNameDisplay").innerHTML = projectName;
}

function NewProject(){
  //Ask for confirmation to create new project.
  if (confirm("The current project will be lost. Are you sure you want to create a new one?"))
  {
    //Clear all data.
    document.getElementById("evaluatorName").value = "";
    document.getElementById("projectName").value = "";
    document.getElementById("evaluatorNameDisplay").innerHTML = "";
    document.getElementById("projectNameDisplay").innerHTML = "";

    //Show corresponding windows.
    /*infoWindow.style.display = "block";
    mainWindow.style.display = "none";
    document.getElementById("NewProjectButton").style.display = "none";*/
  }
}
