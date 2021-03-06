function addTable() {
  var myTableDiv = document.getElementById("PaybackTable");

  var tableChild = document.getElementById("payback_table");
  if(tableChild != null){
    myTableDiv.removeChild(tableChild);
  }

  var table = document.createElement('TABLE');
  table.setAttribute("id", "payback_table");

  //Reset final answer.
  document.getElementById("payback_period_value").innerHTML = "";

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

    for (var j = 0; j <= 4; j++) {
      var td = document.createElement('TD');
      td.width = '75';
      td.height = '20';

      if(i == 0 && j == 0){
        td.appendChild(document.createTextNode("n"));

      }else if(i == 0 && j == 1){
        td.appendChild(document.createTextNode("Inflows"));

      }else if(i == 0 && j == 2){
        td.appendChild(document.createTextNode("Outflows"));

      }else if(i == 0 && j == 3){
        td.appendChild(document.createTextNode("Actual Cash Flow"));

      }else if(i == 0 && j == 4){
        td.appendChild(document.createTextNode("Cumulative Cash Flow"));

      }else{

        var input = document.createElement("input");
        input.setAttribute('type', 'number');
        td.appendChild(input);
        input.setAttribute('id', 'pb_cell_'+i+'_'+j);
        input.setAttribute('step', '.02');

        //Disable the inputs if they are the ones you will calculate.
        if(j==0){
        	input.value = i;
        }
        if(j == 0 || j == 3 || j == 4){
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

  //Get the interest from the page.
  var interest = parseFloat(document.getElementById("interest_rate").value);

  console.log(" after p : "+ principal +" interest : "+interest+" interest p :"+interestPercentage);
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

  //Calculate the interest percentage for cleaner code.
  var interestPercentage;
  interestPercentage = interest / 100;



  //Validate the principal is negative.
  if(!principal){
    document.getElementById("principal").value = 0;
    alert("WARNING: There is no principal.");
  }
  if(principal > 0){
    principal = principal*-1;
  }

  console.log(" before p : "+ principal +" interest : "+interest+" interest p :"+interestPercentage);

  //Define the present value factor.
  var presentValueFactor;

  var pb = 0;
  var alreadyCountedpb = false;

  for(var i = 1; i < sTableName.children[0].childElementCount ; i++)
  {
    //Calculate the present value factor.
    presentValueFactor = 1/(Math.pow(1 + interestPercentage, i));

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
      if(j == 1){
        paybackPeriodInflows[i - 1] = tableColumn.value;
      }
      //Outflows
      if(j == 2){
        paybackPeriodOutflows[i - 1] = tableColumn.value;
      }
      //Get the Net Cash...
      if(j == 3){
        //Create the net cash flow.
        paybackPeriodNetCash[i - 1] = paybackPeriodInflows[i - 1] - paybackPeriodOutflows[i - 1]
        paybackPeriodNetCash[i - 1] = paybackPeriodNetCash[i - 1] * presentValueFactor;
        document.getElementById("pb_cell_"+i+"_"+j).value = paybackPeriodNetCash[i - 1];

        //Create the cumulative cash flow.
        principal += paybackPeriodNetCash[i - 1];
        document.getElementById("pb_cell_"+i+"_4").value = principal;

        //Paint the final results for design points.
        if(principal < 0){
          document.getElementById("pb_cell_"+i+"_4").style.color = "red";
        }else{

          document.getElementById("pb_cell_"+i+"_4").style.color = "green";

          if(alreadyCountedpb == false){
            alreadyCountedpb = true;
            pb = i;
            if(document.getElementById("pb_cell_"+i+"_4").value == 0){
            	pb++;
            }
          }
        }
      }
    }
  }
  document.getElementById("payback_period_value").innerHTML = "Payback period : "+ pb;


}


function HideCalculateButton(){
  document.getElementById("btn_calculate").style.display = 'none';
}

function ShowCalculateButton(){
  document.getElementById("btn_calculate").style.display = 'inline-block';
}

