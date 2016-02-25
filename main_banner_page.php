      <?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dartmouth Student Portal</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery.typeahead.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery-1.11.3.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/jquery.typeahead.js"></script>


</head>
<body style="background-image:url('./images/DartmouthCampus.JPG'); background-repeat:no-repeat">
<nav class="navbar navbar-default" style="margin-bottom:0px; background-color:#1A5417">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<a class="navbar-brand" style="color:#F8F8F8; margin-left:10px" href="#">
    		Dartmouth Banner Student Portal
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" autocomplete="off" role="search">
        <div class="typeahead-container">
          <div class="typeahead-field">
            <span class="query">
              <input id="query" type="text" class="form-control" placeholder="Search" autocomplete="off">
            </span>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:#F8F8F8; font-size:large" href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li><a style="color:#F8F8F8; font-size:large" href="Logout.php">Logout</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!--  SECTION-1 -->
<section>
<div class="row" style="margin-left:100px; margin-top:50px; min-width:1300px">
      <div class="col-md-3" style="width:250px">
         <div class="row" align="center">
         	<div class="row" style="margin:20px">
              <img src="images/Taeho.png" width="200" height="220" alt="" style="margin-bottom:15px; border:5px solid  hsla(117,57%,21%,.80)" align="left"/>
				<div class="row" align="center">
                  <div class="col-md-3" align="center" style="border-top:2px dotted #1A5417; border-bottom:2px dotted #1A5417">
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Name: </span> <br/>
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Year: </span> <br/>
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Degree: </span> <br/>
                  </div>
                  <div class="col-md-9" align="left" style="border-top:2px dotted #1A5417; border-bottom:2px dotted #1A5417">
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Sung, Taeho </span> <br/>
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Class of 2017 </span> <br/>
                    <span style="width:50%; font-weight:bold; color:#1A5417"> Undergraduate </span>
                  </div>
                </div>
            </div>
      	 </div>
         <div class="row" style="margin-top:15px">
        	<table class="table" border="0px" width="250" style="margin-left:0px; width:45">
              <thead>
                <tr>
                  <th>Recent Activities</th>
                </tr>
               </thead>
               <tbody>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://google.com" style="color:black">Grades By Term</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://reslife.dartmouth.edu/StarRezPortal/Default.aspx?Params=L9ezxPcQnQuRGKTzF%2b4sxdIcsWEQNaHhlMKz6FX0gDI%3d" style="color:black">Financial Aid</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://google.com" style="color:black">Schedule</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://google.com" style="color:black">Course Offerings</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://reslife.dartmouth.edu/StarRezPortal/Default.aspx?Params=L9ezxPcQnQuRGKTzF%2b4sxdIcsWEQNaHhlMKz6FX0gDI%3d" style="color:black">Pass-Fail Option</a></td>
              </tr>
              </tbody>
            </table>
        </div>
        <div class="row" style="margin-top:0px">
           <table class="table" border="0px" width="250" style="margin-left:0px; width:45">
              <thead>
                <tr>
                  <th colspan="2">Action Items </th>
                </tr>
               </thead>
                <tbody>
                  <tr>
                    <td width="25%"><p style="color:black; font-weight:bold">Mar 15</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00);" href="https://google.com" style="color:black">Check-In Spring 2016</a></td>
                  </tr>
                  <tr>
                    <td width="25%"><p style="color:black; font-weight:bold">Feb 29</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00);" href="https://reslife.dartmouth.edu/StarRezPortal/Default.aspx?Params=L9ezxPcQnQuRGKTzF%2b4sxdIcsWEQNaHhlMKz6FX0gDI%3d" style="color:black">Apply for Housing</a></td>
                  </tr>
                  <tr>
                    <td width="25%"><p style="color:black; font-weight:bold">Feb 29</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00);" href="https://google.com" style="color:black">Course Assessment 16W</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
    <div class="col-md-9" style="margin-left:65px; margin-top:100px; min-width:800px"> 
    <div class="row">
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_schedule">
            <div align="center"> 
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Schedule.jpeg" data-holder-rendered="true">
              <h3 class="greenH3">Schedule</h3>
              <p class="greenP">View My Term and Weekly Schedule</p>
            </div>
            </a>
           </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_degree">
            <div  align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height:150px;" src="images/Degree.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Degree</h3>
              <p class="greenP">Degree, Enrollment, Grades, Transcript</p>
            </div>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_financial">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Financials.png" data-holder-rendered="true">
              <h3 class="greenH3">Financials</h3>
              <p class="greenP">Dash, D-Pay, Financial Aid, Tuition</p>
            </div>
            </a>
          </div>
       </div>
       <div class="row" style="margin-top:20px">
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_housing">
            <div align="center"> 
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Housing.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Housing</h3>
              <p class="greenP">Housing Assignment and Portal</p>
            </div>
            </a>
           </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_student">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/StudentLife.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Student Life</h3>
              <p class="greenP">Student Information and Activities</p>
            </div>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_course">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Courses.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Courses</h3>
              <p class="greenP">Registration, Pass/Fail, Course Assessment</p>
            </div>
            </a>
          </div>
       </div>
       <div class="row" style="margin-top:20px">
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_frequent">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/FrequentLinks.jpeg" data-holder-rendered="true">
              <h3 class="greenH3">Quick Links</h3>
              <p class="greenP">View Frequent Links</p>
            </div>
            </a>
           </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/NeedHelp.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Need Help</h3>
              <p class="greenP">Contact us for support!</p>
            </div>
            </a>
            </div>
          <div class="col-xs-4">
                <a href="https://canvas.dartmouth.edu">
                <div align="center">
                  <img class="img-circle" alt="200x200" style="width: 150px; height: 150px; margin-top:10px" src="images/Canvas.jpeg" data-holder-rendered="true">
                </div>
                </a>
          </div>
          </div>
     </div>
         </div>
     
  <!-- /container -->
  <!-- / CONTAINER-->

</section>
<nav class="navbar navbar-default" style="margin-bottom:0px; background-color:#1A5417; border:hidden">
  <div class="container-fluid"> 
    <div class="navbar-header navbar-right" align="right"> 
    	<a class="navbar-brand" href="#" style="color:#F8F8F8">
    	Dartmouth College
        </a>
    </div>
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- FOOTER -->

<footer class="text-center">
  <div class="container" style="height:10px">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © CS89.01 Team1. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 


<script>
var map = new Object();

map["Apply for Financial Aid"] = "financial_aid_application";
map["Financial Aid Award"] = "award_letter"
map["Financial Aid Status"] = "financial_aid_status";
map["Dash Account"] = "dash_account";
map["D-Pay"] = "d_pay";
map["D-Plan"] = "d_plan";
map["Financial Authorization"] = "financial_authorization";
map["Tuition Statement"] = "tuition_statement";
map["Course Offerings"] = "course_offerings";
map["Course Registration"] = "register";
map["Pass/Fail Option"] = "nro";
map["Citations"] = "citation";
map["Course Assessment"] = "course_assessment";
map["Official Transcript"] = "official_transcript";
map["Unofficial Transcript"] = "unofficial_transcript";
map["Degree Application"] = "degree_application";
map["Grades By Term"] = "grades_by_term";
map["Degree Work"] = "degree_work";
map["Major/Minor Work"] ="major_minor";
map["Verify Enrollment"] = "verify_enrollment";
map["Room Assignment"] = "room_assignment";
map["Room Condition Form"] = "condition_form";
map["Housing Star Portal"] = "star_portal";
map["Hold View"] = "holds_view";
map["Schedule Rooms"] = "schedule_rooms";
map["Religious Preference or Heritage"] = "religious_pref";
map["Deans"] = "dean";
map["Contact Information"] = "contact_info";
map["Check-in"] = "check_in";
map["Health Services"] = "health";

$('#query').typeahead({
    minLength: 1,
    maxItem: 20,
    order: "asc",
    href: function(item) {
      return "tabular_page.php#" + map[item.display];
    },
    template: "{{display}}",
    source: {
      data: ["Apply for Financial Aid", "Financial Aid Award", "Financial Aid Status", "Dash Account", "D-Pay", "Financial Authorization", "Tuition Statement",
      "Pass/Fail Option", "Course Offerings", "Course Registration","Citations", "Course Assessment", "Official Transcript", "Unofficial Transcript", "Degree Application", 
      "Grades By Term", "Major/Minor Work", "Verify Enrollment", "Room Assignment", "Room Condition Form", "Housing Star Portal", "Holds View",
      "Schedule Rooms", "Religious Preference or Heritage", "Deans", "Contact Information", "Check-in", "Health Services", "D-Plan"]
    },

    callback: {
      onInit: function (node) {
        console.log('Typeahead Initiated on ' + node.selector);
      },
    }
})
</script>
</body>
</html>