function addTable() {
  //Get the div where the table will be.
  var myTableDiv = document.getElementById("PaybackTable");

  //Reset the final value text.
  document.getElementById("finalNpvValue").innerHTML = " ";
  document.getElementById("investmentValue").innerHTML = " ";
  
  

  var tableChild = document.getElementById("payback_table");
  if(tableChild != null){
    myTableDiv.removeChild(tableChild);
  }

  var table = document.createElement('TABLE');
  table.setAttribute("id", "payback_table");

  var n = document.getElementById("total_periods").value;
  if(n > 10){
    n = 10
    alert("WARNING: Exceeding ten period limit.");
    document.getElementById("total_periods").value = 10;
  }else if (n <= 0){
    n = 1;
    alert("WARNING: At least one period must be entered.");
    document.getElementById("total_periods").value = 1;
  }

  table.border = '0';
  table.cellSpacing = 10;
  var tableBody = document.createElement('TBODY');
  table.appendChild(tableBody);

  //Create inflows.
  for (var i = 0; i <= n; i++) {
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);

    for (var j = 0; j <= 5; j++) {
      var td = document.createElement('TD');
      td.width = '75';
      td.height = '20';

      if(i == 0 && j == 0){
        td.appendChild(document.createTextNode("Years"));

      }else if(i == 0 && j == 1){
        td.appendChild(document.createTextNode("Dep Rate %"));

      }else if(i == 0 && j == 2){
        td.appendChild(document.createTextNode("Annual Dep"));

      }else if(i == 0 && j == 3){
        td.appendChild(document.createTextNode("Acc Dep"));

		}else if(i == 0 && j == 4){
        td.appendChild(document.createTextNode("Value in Ledgers"));

		}else if(i == 0 && j == 5){
        td.appendChild(document.createTextNode("Tax per Year "));

      }else{

        var input = document.createElement("input");
        input.setAttribute('type', 'number');
        td.appendChild(input);
        input.setAttribute('id', 'pb_cell_'+i+'_'+j);

        //Disable the inputs if they are the ones you will calculate.
        if(j == 0||j == 1 ||j == 2 || j == 3 || j == 4 || j == 5){
          input.setAttribute('type', 'text');
          input.setAttribute("readonly", true);
          input.setAttribute('value', '-');
        }
      }

      tr.appendChild(td);
    }
  }
  myTableDiv.appendChild(table);

  //Show calculate button!
  ShowCalculateButton();
}

//Define the payback period functions.
 depreciationYears = new Array(10);
 depreciationRate = new Array(10);
 annualDep = new Array(10);
 accDep = new Array(10);
 valueLed= new Array(10);
 taxYear = new Array(10);

//This function will calculate the payback period.
function calculatePaybackPeriod(){

  var periodo = document.getElementById("total_periods").value;

  var sTableName = document.getElementById("payback_table");

  //Get starting year 
  var year = document.getElementById("anio").value;
  //alert("WARNING: "+year);

  var principal = document.getElementById("principal").value;
  //alert("WARNING: "+principal);

  //Get the interest from the page.
  var interest = parseFloat(document.getElementById("interest_rate").value);

  //Get the interest from the page.
  var tax = parseFloat(document.getElementById("tax_rate").value);

  //Get the salvage value.
  var salvage_value = parseFloat(document.getElementById("salvage_value").value);

  
  //console.log(" after p : "+ principal +" interest : "+interest+" interest p :"+interestPercentage);
  //Validate interest is between 0 - 100.
  if(!interest){
    interest = 0;
    alert("WARNING: There is no interest rate.");
    document.getElementById("interest_rate").value = "0";
  }else if(interest < 0){
    interest = 0;
    alert("interest percentage must be positive!");
    document.getElementById("interest_rate").value = "0";
  }
  if(interest > 100){
    interest = 100;
    alert("interest percentage must not surpass 100%!");
    document.getElementById("interest_rate").value = "100";
  }

  //Validate tax is between 0 - 100.
  if(!tax){
    tax = 0;
    alert("WARNING: There is no tax rate.");
    document.getElementById("tax_rate").value = "0";
  }else if(tax < 0){
    tax = 0;
    alert("Tax percentage must be positive!");
    document.getElementById("tax_rate").value = "0";
  }
  if(tax > 100){
    tax = 100;
    alert("tax percentage must not surpass 100%!");
    document.getElementById("tax_rate").value = "100";
  }

  //Calculate the interest percentage for cleaner code.
  var interestPercentage;
  interestPercentage = interest / 100;

  //Calculate the tax percentage for cleaner code.
  var taxPercentage;
  taxPercentage = tax / 100;

  //Validate the principal is negative.
  if(!principal){
    document.getElementById("principal").value = 0;
    alert("WARNING: There is no principal.");
  }
  if(principal > 0){
    principal = principal*-1;
  }

  //console.log(" before p : "+ principal +" interest : "+interest+" interest p :"+interestPercentage);

  if(!salvage_value){
    salvage_value = 0;
    alert("WARNING: There is no salvage value.");
    document.getElementById("salvage_value").value = "0";
  }

  //Define the present value factor.
  var presentValueFactor;

  for(var i = 1; i < sTableName.children[0].childElementCount ; i++)
  {
    //Calculate the present value factor.
    presentValueFactor = 1/(Math.pow(1 + interestPercentage, i));

    //Consider taxes.
    presentValueFactor = presentValueFactor * (1 - taxPercentage);

    var tableRow = sTableName.children[0].children[i];

    for(var j = 0; j < tableRow.childElementCount ; j++)
    {
      var tableColumn = document.getElementById("pb_cell_"+i+"_"+j);

      //Check for nulls.
      if(tableColumn.value == 0){
        //Fix them visually.
        tableColumn.value = 0;
        document.getElementById("pb_cell_"+i+"_"+j).value = 0;
      }

      //Inflows
      if(j == 0){

		depreciationYears[i-1] = tableColumn.value;



        document.getElementById("pb_cell_"+i+"_"+j).value=year*1+i-1;
		

		//console.log('Cell ['+i+','+j+'] value: '+ depreciationYears.value);
      }
      //Outflows
      if(j == 1){

	  depreciationRate[i-i-1] = tableColumn.value;
		if(periodo<=4)
		{
			document.getElementById("pb_cell_"+1+"_"+1).value=33.33;
			document.getElementById("pb_cell_"+2+"_"+1).value=44.45;
			document.getElementById("pb_cell_"+3+"_"+1).value=14.81;
			document.getElementById("pb_cell_"+4+"_"+1).value=7.41;
		}

		else if (periodo=>5 && periodo<=6)
		{
			document.getElementById("pb_cell_"+1+"_"+1).value=20;
			document.getElementById("pb_cell_"+2+"_"+1).value=32;
			document.getElementById("pb_cell_"+3+"_"+1).value=19.20;
			document.getElementById("pb_cell_"+4+"_"+1).value=11.52;
			document.getElementById("pb_cell_"+5+"_"+1).value=11.52;
			document.getElementById("pb_cell_"+6+"_"+1).value=5.76;
		}

		 if (periodo>=7 && periodo<=8)
		{
			document.getElementById("pb_cell_"+1+"_"+1).value=14.29;
			document.getElementById("pb_cell_"+2+"_"+1).value=24.49;
			document.getElementById("pb_cell_"+3+"_"+1).value=17.49;
			document.getElementById("pb_cell_"+4+"_"+1).value=12.49;
			document.getElementById("pb_cell_"+5+"_"+1).value=8.93;
			document.getElementById("pb_cell_"+6+"_"+1).value=8.92;
			document.getElementById("pb_cell_"+7+"_"+1).value=8.93;
			document.getElementById("pb_cell_"+8+"_"+1).value=4.46;
		}

		 if (periodo>8 && periodo<11)
		{
			document.getElementById("pb_cell_"+1+"_"+1).value=10;
			document.getElementById("pb_cell_"+2+"_"+1).value=18;
			document.getElementById("pb_cell_"+3+"_"+1).value=14.40;
			document.getElementById("pb_cell_"+4+"_"+1).value=11.52;
			document.getElementById("pb_cell_"+5+"_"+1).value=9.22;
			document.getElementById("pb_cell_"+6+"_"+1).value=7.37;
			document.getElementById("pb_cell_"+7+"_"+1).value=6.55;
			document.getElementById("pb_cell_"+8+"_"+1).value=6.55;
			document.getElementById("pb_cell_"+9+"_"+1).value=6.56;
			document.getElementById("pb_cell_"+10+"_"+1).value=6.;

		}


      }
      
      if(j == 2){
		annualDep[i-1] = tableColumn.value;

        document.getElementById("pb_cell_"+i+"_"+j).value = ((depreciationRate[i-i-1]/100)*principal)*-1;
      }

	  if(j == 3){

	   		document.getElementById("pb_cell_"+1+"_"+3).value=annualDep[0];
			document.getElementById("pb_cell_"+2+"_"+3).value=((-annualDep[0])-(annualDep[1]))*-1;
			document.getElementById("pb_cell_"+3+"_"+3).value=((-annualDep[2])-(annualDep[1])-(annualDep[0]))*-1;
			document.getElementById("pb_cell_"+4+"_"+3).value=((-annualDep[3])-(annualDep[2])-(annualDep[1])-(annualDep[0]))*-1;
			document.getElementById("pb_cell_"+5+"_"+3).value=(-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;
			document.getElementById("pb_cell_"+6+"_"+3).value=(-annualDep[4]-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;
			document.getElementById("pb_cell_"+7+"_"+3).value=(-annualDep[6]-annualDep[5]-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;
			document.getElementById("pb_cell_"+8+"_"+3).value=(-annualDep[7]-annualDep[6]-annualDep[5]-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;
			document.getElementById("pb_cell_"+9+"_"+3).value=(-annualDep[8]-annualDep[7]-annualDep[6]-annualDep[5]-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;
			document.getElementById("pb_cell_"+10+"_"+3).value=(-annualDep[9]-annualDep[8]-annualDep[7]-annualDep[6]-annualDep[5]-annualDep[4]-annualDep[3]-annualDep[2]-annualDep[1]-annualDep[0])*-1;

        //document.getElementById("pb_cell_"+i+"_"+j).value = accDep[i-1];

      }

	  if(j == 4){

        document.getElementById("pb_cell_"+i+"_"+j).value = accDep[i-1];

      }
    }
  }
  console.log("Final npv value : "+ principal);

  var investmentDecision = "";

  if(principal < 0){
    investmentDecision = "unacceptable investment!"
    document.getElementById("investmentValue").style.color = "red";
  }else if(principal > 0){
    investmentDecision = "acceptable investment!"
    document.getElementById("investmentValue").style.color = "green";
  }else{
    investmentDecision = "acceptable investment IF more capital is invested.";
    document.getElementById("investmentValue").style.color = "black";
  }

  //Set the final value of fthe npv.
  document.getElementById("finalNpvValue").innerHTML = "Net Present Value is = " +principal;"It is an "+investmentDecision
  document.getElementById("investmentValue").innerHTML = "It is an "+investmentDecision;
}

function HideCalculateButton(){
  document.getElementById("btn_calculate").style.display = 'none';
}

function ShowCalculateButton(){
  document.getElementById("btn_calculate").style.display = 'inline-block';
}

