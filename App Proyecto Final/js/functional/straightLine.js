var n;

function addTable() {
  var myTableDiv = document.getElementById("SLMTable");

  var tableChild = document.getElementById("slm_table");
  if(tableChild != null){
    myTableDiv.removeChild(tableChild);
  }

  var table = document.createElement('TABLE');
  table.setAttribute("id", "slm_table");

  n = document.getElementById("total_periods").value;
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
        td.appendChild(document.createTextNode("n"));

      }else if(i == 0 && j == 1){
        td.appendChild(document.createTextNode("Annual Depreciation"));

      }else if(i == 0 && j == 2){
        td.appendChild(document.createTextNode("Cumulative Depreciation"));

      }else if(i == 0 && j == 3){
        td.appendChild(document.createTextNode("Value in Ledgers"));

      }else{

        var input = document.createElement("input");
        input.setAttribute('type', 'number');
        td.appendChild(input);
        input.setAttribute('id', 'pb_cell_'+i+'_'+j);

        input.setAttribute("readonly", true);

        if(j == 0){
          input.value = i;
        }
      }

      tr.appendChild(td);
    }
  }
  myTableDiv.appendChild(table);

  calculateSLM();
}


//This function will calculate the payback period.
function calculateSLM (){

  var sTableName = document.getElementById("slm_table");

  var principal = document.getElementById("principal").value;

  //Get the tax from the page.
  var rescue_value = parseFloat(document.getElementById("rescue_value").value);

  //Validate tax is between 0 - 100.
  if(!rescue_value){
    rescue_value = 0;
    alert("WARNING: There is no rescue value.");
    document.getElementById("rescue_value").value = "0";
  }else if(rescue_value < 0){
    rescue_value = 0;
    alert("Rescue value must be positive!");
    document.getElementById("rescue_value").value = "0";
  }




  //Validate the principal is negative.
  if(!principal){
    document.getElementById("principal").value = 0;
    alert("WARNING: There is no principal.");
  }
  if(principal < 0){
    principal = principal*-1;
  }


  var D;
  D = (principal - rescue_value)/ n;

  var cumDep = 0;

  var valueInLedgers = principal;

  for(var i = 1; i < sTableName.children[0].childElementCount ; i++)
  {


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

      //Annual Dep.
      if(j == 1){
        document.getElementById("pb_cell_"+i+"_"+j).value = D;
      }
      //Cum Dep.
      if(j == 2){
        cumDep += D;
        document.getElementById("pb_cell_"+i+"_"+j).value = cumDep;
      }
      //Value in ledgers.
      if(j == 3){
       
        valueInLedgers -= D;
        document.getElementById("pb_cell_"+i+"_"+j).value = valueInLedgers;

        /*Create the cumulative cash flow.
        principal += paybackPeriodNetCash[i - 1];
        document.getElementById("pb_cell_"+i+"_3").value = principal;*/

      }
    }
  }

}
