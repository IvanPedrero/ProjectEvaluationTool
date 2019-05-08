var n;

var threeYear = [33.33, 44.45, 14.81, 7.41, 100, 100, 100, 100, 100, 100];
var fiveYear = [20, 32, 19.2, 11.52, 11.52, 5.76, 100, 100, 100, 100];
var sevenYear = [14.29, 24.49, 17.49, 12.49, 8.93, 8.93, 4.46, 100, 100, 100];
var tenYear = [10, 18, 14.4, 11.52, 9.22, 7.37, 6.55, 6.55, 6.56, 6.55];
var fifteenYear = [5, 9.5, 8.55, 7.7, 6.93, 6.23, 5.9, 5.9, 5.91, 5.9];
var twentyYear = [3.75, 7.219, 6.677, 6.177, 5.713, 5.285, 4.888, 4.522, 4.462, 4.461];

function addTable() {
  var myTableDiv = document.getElementById("MACRSTable");

  var tableChild = document.getElementById("macrs_table");
  if(tableChild != null){
    myTableDiv.removeChild(tableChild);
  }

  var table = document.createElement('TABLE');
  table.setAttribute("id", "macrs_table");

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

  var currentYear = document.getElementById("year").value;

  //Create inflows.
  for (var i = 0; i <= n; i++) {
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);

    for (var j = 0; j <= 4; j++) {
      var td = document.createElement('TD');
      td.width = '75';
      td.height = '20';

      if(i == 0 && j == 0){
        td.appendChild(document.createTextNode("Year"));
      }else if(i == 0 && j == 1){
        td.appendChild(document.createTextNode("MACRS %"));
      }
      else if(i == 0 && j == 2){
        td.appendChild(document.createTextNode("Depreciation"));

      }else if(i == 0 && j == 3){
        td.appendChild(document.createTextNode("Cum. Depreciation"));

      }else if(i == 0 && j == 4){
        td.appendChild(document.createTextNode("Value in Ledgers"));

      }else{

        var input = document.createElement("input");
        input.setAttribute('type', 'number');
        td.appendChild(input);
        input.setAttribute('id', 'pb_cell_'+i+'_'+j);

        input.setAttribute("readonly", true);

        if(j == 0){
          input.value = currentYear;
          currentYear++;
        }
      }

      tr.appendChild(td);
    }
  }
  myTableDiv.appendChild(table);

  calculateMACRS();
}


//This function will calculate the payback period.
function calculateMACRS (){
  
  var sTableName = document.getElementById("macrs_table");

  var principal = document.getElementById("principal").value;

  var categoryOption = document.getElementById("category");
  var category = categoryOption.options[categoryOption.selectedIndex].value;

  var categoryArray = new Array(0);

  //Validate the principal is negative.
  if(!principal){
    document.getElementById("principal").value = 0;
    alert("WARNING: There is no principal.");
  }
  if(principal < 0){
    principal = principal*-1;
  }

  //Select the corresponding array depending the category.
  if(category == 3){

  categoryArray = threeYear.slice(0);

  }else if(category == 5){

    categoryArray = fiveYear.slice(0);;
    
  }else if(category == 7){

    categoryArray = sevenYear.slice(0);
    
  }else if(category == 10){
 
    categoryArray = tenYear.slice(0);
    
  }else if(category == 15){
    
    categoryArray = fifteenYear.slice(0);
    
  }else if(category == 20){
    
    categoryArray = twentyYear.slice(0);
    
  }


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

      //MACRS
      if(j == 1){
        document.getElementById("pb_cell_"+i+"_"+j).value = categoryArray[i-1];
      }
      //Dep.
      if(j == 2){
        document.getElementById("pb_cell_"+i+"_"+j).value = principal*(categoryArray[i-1]/100);
      }
      //Cum Dep.
      if(j == 3){

        cumDep += principal*(categoryArray[i-1]/100);

        document.getElementById("pb_cell_"+i+"_"+j).value = cumDep;
      }
      //Value un ledgers.
      if(j == 4){
       
        valueInLedgers -= principal*(categoryArray[i-1]/100);

        if(valueInLedgers < 0){
          valueInLedgers = 0;
        }

        document.getElementById("pb_cell_"+i+"_"+j).value = valueInLedgers;

        /*Create the cumulative cash flow.
        principal += paybackPeriodNetCash[i - 1];
        document.getElementById("pb_cell_"+i+"_3").value = principal;*/

      }
    }
  }

}
