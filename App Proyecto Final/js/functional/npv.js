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

    for (var j = 0; j <= 3; j++) {
      var td = document.createElement('TD');
      td.width = '75';
      td.height = '20';

      if(i == 0 && j == 0){
        td.appendChild(document.createTextNode("Inflows"));

      }else if(i == 0 && j == 1){
        td.appendChild(document.createTextNode("Outflows"));

      }else if(i == 0 && j == 2){
        td.appendChild(document.createTextNode("Actual Cash Flow"));

      }else if(i == 0 && j == 3){
        td.appendChild(document.createTextNode("Cumulative Cash Flow"));

      }else{

        var input = document.createElement("input");
        input.setAttribute('type', 'number');
        td.appendChild(input);
        input.setAttribute('id', 'pb_cell_'+i+'_'+j);

        //Disable the inputs if they are the ones you will calculate.
        if(j == 2 || j == 3){
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
 paybackPeriodInflows = new Array(10);
 paybackPeriodOutflows = new Array(10);
 paybackPeriodNetCash = new Array(10);
 paybackPeriodCumulativeCash = new Array(10);

//This function will calculate the payback period.
function calculatePaybackPeriod(){

  var sTableName = document.getElementById("payback_table");
  
  var principal = document.getElementById("principal").value;

  //Get the tax from the page.
  var tax = parseFloat(document.getElementById("tax_rate").value);

  //Get the salvage value.
  var salvage_value = parseFloat(document.getElementById("salvage_value").value);

  //console.log(" after p : "+ principal +" tax : "+tax+" tax p :"+taxPercentage);
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
    alert("Tax percentage must not surpass 100%!");
    document.getElementById("tax_rate").value = "100";
  }

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

  //console.log(" before p : "+ principal +" tax : "+tax+" tax p :"+taxPercentage);

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
    presentValueFactor = 1/(Math.pow(1 + taxPercentage, i));

    var tableRow = sTableName.children[0].children[i];

    for(var j = 0; j < tableRow.childElementCount ; j++)
    {
      var tableColumn = document.getElementById("pb_cell_"+i+"_"+j);
      //console.log('Cell ['+i+','+j+'] value: '+ tableColumn.value);

      //Check for nulls.
      if(tableColumn.value == 0){
        //Fix them visually.
        tableColumn.value = 0;
        document.getElementById("pb_cell_"+i+"_"+j).value = 0;
      }

      //Inflows
      if(j == 0){
        paybackPeriodInflows[i - 1] = tableColumn.value;

        if(i == sTableName.children[0].childElementCount-1){
          paybackPeriodInflows[i - 1] = +paybackPeriodInflows[i - 1] + +salvage_value;
        }
      }
      //Outflows
      if(j == 1){
        paybackPeriodOutflows[i - 1] = tableColumn.value;
      }
      //Get the Net Cash...
      if(j == 2){
        //Create the net cash flow.
        paybackPeriodNetCash[i - 1] = paybackPeriodInflows[i - 1] - paybackPeriodOutflows[i - 1]
        paybackPeriodNetCash[i - 1] = paybackPeriodNetCash[i - 1] * presentValueFactor;
        document.getElementById("pb_cell_"+i+"_"+j).value = paybackPeriodNetCash[i - 1];

        //Create the cumulative cash flow.
        principal += paybackPeriodNetCash[i - 1];
        document.getElementById("pb_cell_"+i+"_3").value = principal;

        //Calculate the salvage value!
        if(i == sTableName.children[0].childElementCount-1){
          var prev_value = document.getElementById("pb_cell_"+i+"_0").value;

          prev_value = +prev_value + +salvage_value;

          document.getElementById("pb_cell_"+i+"_0").value = prev_value;
        }

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