<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script src="js/pdf/print.min.js"></script>
     
    <title>Checklist</title>

  </head>
  <body id="target">

      <div class="center">
        <button id='gpdf' onclick="GenerateTable()" class="btn btn-primary btn-learn">Display table</button>
        <button onclick="clearAll()" class="btn btn-primary btn-learn">Clear Values</button>

      </div>

      <div class="center">
        <form method="post" action="#" id="printJS-form">
            <table border = "1" style="width:50%" cellpadding="30" id="checklistTable" name = "checklistTable">
                <thead>
                <tr>
                    <th width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 18px;">Topic</th>
                    <th width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 18px;">Question</th>
                    <th width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 18px;">Answer</th>
                </tr>
                </thead>

                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Strategy / Alignment </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What specific organization strategy does this project align with?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">

                        <input type="text" name="">

                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Driver</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What business problem does the project solve?</td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="text" name="">
                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Success Metrics</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">How will measure success?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="text" name="">
                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Risk</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What is the impact of not doing this project?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="number" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Risk</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What is the project risk to our organization?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="number" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Risk</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Where does the proposed project fit in our risk profile?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="text" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Benefits / Value</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What is the value of the project oranization?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="number" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Benefits / Value</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">When will the project shows result?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="date" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Objectives</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">What are the project objectives?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="text" name="">
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Organization Culture</td>

                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Is our organization culture right for this type of project?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="organization" id="organization_culture">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Resources</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Will internal resources be available for this project?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="resources" id="internal_resources">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Approach</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Will we build of buy?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="organization" id="organization_culture">
                            <option value="build">Build</option>
                            <option value="buy">Buy</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Schedule</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">How long will this project take?</td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">

                        <input type="number" name="">

                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Schedule</td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">Is this timeline realistic?</td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">

                        <select name="realistic" id="realistic">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Training / Resources </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Will staff training be required? </td>
                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="training" id="training">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Finance / Portfolio </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> What is the estimated cost of the project? </td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="number" name="">
                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Portfolio </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Is this a new initiative or path of an existing initiative? </td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="training" id="training">

                            <option value="Initiative">Initiative</option>
                            <option value="Existing">Existing</option>

                        </select>
                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Portfolio </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> How does this project interact with current projects? </td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <input type="text" name="">
                    </td>

                </tr>
                <tr>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Technology </td>
                    <td width="400" align="left" valign="top" style="padding-left: 10px; padding-right: 10px; font-size: 15px;"> Is this technology available or new? </td>

                    <td width="400" align="center" valign="center" style="padding-left: 10px; padding-right: 10px; font-size: 15px;">
                        <select name="training" id="training">
                            <option value="Available">Available</option>
                            <option value="New">New</option>
                        </select>
                    </td>

                </tr>

            </table>
        </form>
          <button type="button" onclick="printJS('printJS-form', 'html')">
              Print Form
          </button>
	   </div>
  </body>

  <script type="text/javascript">
    function clearAll(){
      $('input').val('');
    }
  </script>

  <style>
  .center{
    margin-left: 10%;
    margin-top: 4%;
  }
  .tb{
    width: 100%;
  }
  .bt{
    width: 10%;
    height: 30px;

  }
  td
  {
      padding:0 5px 0 0; /* Only right padding*/
  }
  </style>

  <script>
    function GenerateTable(){
      var featureTable = document.getElementById("checklistTable");
      var tablePopup = window.open("", "", "width=1080,height=480,resizeable,scrollbars");
            tablePopup.document.write('<!DOCTYPE html>');
            tablePopup.document.write('<html><head><link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/><script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"><\/script></head><body><h1>Checklist Table</h1></body></html>');
            tablePopup.document.write(featureTable.outerHTML);
            tablePopup.document.close();
      } 
 </script>
    

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

</html>