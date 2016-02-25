<?php

  //make sure connection works
  //store username!
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>table page</title>

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
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.typeahead.js"></script>
<script src="js/bootstrap.js"></script>

<script>
$(function(){
  var url = document.location.toString();

  console.log("test");
  if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show');
  }

  setTimeout(function() {
    $(window).scrollTop(0);
  }, 5);

});

</script>
<script>
function saveDplan() {
    var x;
    if (confirm("Do you really wish to save?") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
  }
</script>

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
        <li><a style="color:#F8F8F8; font-size:large" href="main_banner_page.php">Home <span class="sr-only">(current)</span></a> </li>
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
                    <span style="width:40%; font-weight:bold; color:#1A5417"> Name: </span> <br/>
                    <span style="width:40%; font-weight:bold; color:#1A5417"> Year: </span> <br/>
                    <span style="width:40%; font-weight:bold; color:#1A5417"> Degree: </span> <br/>
                  </div>
                  <div class="col-md-9" align="left" style="border-top:2px dotted #1A5417; border-bottom:2px dotted #1A5417">
                    <span style="width:80%; font-weight:bold; color:#1A5417"> Sung, Taeho </span> <br/>
                    <span style="width:80%; font-weight:bold; color:#1A5417"> Class of 2017 </span> <br/>
                    <span style="width:80%; font-weight:bold; color:#1A5417"> Undergraduate </span>
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
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="tabular_page.php#grades_by_term" style="color:black">Grades By Term</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="tabular_page.php#award_letter" style="color:black">Financial Aid</a></td>
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
    <div class="col-md-9">
      <div class="col-md-2">
          
        </div>
      <div class="col-md-10">
          <div class="row" style="display:inline-block">

          <ul class="nav nav-tabs text-center" id="interest_tabs" float="left" style="display:inline-block; font-weight:bolder; font-size:16px; margin-bottom:0px">
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_schedule">My<br/>Schedule</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_degree" text-align="center">My<br/>Degree</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_financial" text-align="center">My<br/>Financials</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_housing" text-align="center">My<br/>Housing</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_student" text-align="center">Student<br/>Life</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_course" text-align="center">My<br/>Courses</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_frequent" text-align="center">Frequent<br/>Links</a></li>
          </ul>
          <div class="tab-content" style="background-color: white; margin-top:0px; color:black; max-width:725px">
              <div id="tab_schedule" class="tab-pane">
                <p>Current schedule goes here</p>
              </div>
            
              <div id="tab_degree" class="tab-pane">
                  <ul class="nav nav-tabs" id="degree_nav">
                    <li><a href="#official_transcript" data-toggle="tab" style="color:black; outline:none; border:0">Official Transcript</a></li>
                    <li><a href="#unofficial_transcript" data-toggle="tab" style="color:black;outline:none; border:0">Unofficial Transcript</a></li>
                    <li><a href="#degree_application" data-toggle="tab" style="color:black;outline:none; border:0">Degree Application</a></li>
                    <li><a href="#grades_by_term" data-toggle="tab" style="color:black;outline:none; border:0">Grades by Term</a></li>
                    <li><a href="#degree_work" data-toggle="tab" style="color:black;outline:none; border:0">Degree Works</a></li>
                    <li><a href="#major_minor" data-toggle="tab" style="color:black;outline:none; border:0">Major Minor</a></li>
                    <li><a href="#verify_enrollment" data-toggle="tab" style="color:black;outline:none; border:0">Verify Enrollment</a></li>
                  </ul>
              </div>
            
              <div id="tab_financial" class="tab-pane">
                  <ul class="nav nav-tabs" id="financial_nav">
                    <li><a href="#financial_aid_application" data-toggle="tab" style="color:black;outline:none; border:0">Apply for Financial Aid</a></li>
                    <li><a href="#award_letter" data-toggle="tab" style="color:black;outline:none; border:0">Financial Aid Award</a></li>
                    <li><a href="#financial_aid_status" data-toggle="tab" style="color:black;outline:none; border:0">Financial Aid Status</a></li>
                    <li><a href="#dash_account" data-toggle="tab" style="color:black;outline:none; border:0">Dash Card</a></li>
                    <li><a href="#d_pay" data-toggle="tab" style="color:black;outline:none; border:0">D-Pay</a></li>
                    <li><a href="#financial_authorization" data-toggle="tab" style="color:black;outline:none; border:0">Financial Authorization</a></li>
                    <li><a href="#tuition_statement" data-toggle="tab" style="color:black;outline:none; border:0">Tuition Statement</a></li>
                  </ul>
              </div>
            
              <div id="tab_housing" class="tab-pane">
                  <ul class="nav nav-tabs" id="housing_nav">
                    <li><a href="#room_assignment" data-toggle="tab" style="color:black;outline:none; border:0">Housing-Room Assignment</a></li>
                    <li><a href="#condition_form" data-toggle="tab" style="color:black;outline:none; border:0">Housing-Condition Form</a></li>
                    <li><a href="#star_portal" data-toggle="tab" style="color:black;outline:none; border:0">Star Portal</a></li>
                  </ul>
              </div>
            
              <div id="tab_student" class="tab-pane">
                  <ul class="nav nav-tabs" id="student_nav">
                    <li><a href="#holds_view" data-toggle="tab" style="color:black;outline:none; border:0">Holds View</a></li>
                    <li><a href="#d_plan" data-toggle="tab" style="color:black;outline:none; border:0">D-Plan</a></li>
                    <li><a href="#schedule_rooms" data-toggle="tab" style="color:black;outline:none; border:0">Schedule Rooms</a></li>
                    <li><a href="#religious_pref" data-toggle="tab" style="color:black;outline:none; border:0">Religious Preferences and Heritage</a></li>
                    <li><a href="#dean" data-toggle="tab" style="color:black;outline:none; border:0">Dean</a></li>
                    <li><a href="#contact_info" data-toggle="tab" style="color:black;outline:none; border:0">Contact Information</a></li>
                    <li><a href="#health" data-toggle="tab" style="color:black;outline:none; border:0">Health Services</a></li>
                  </ul>
              </div>
            
              <div id="tab_course" class="tab-pane">
                  <ul class="nav nav-tabs" id="courses_nav">
                    <li><a href="#register" data-toggle="tab" style="color:black;outline:none; border:0">Course Registration</a></li>
                    <li><a href="#course_offerings" data-toggle="tab" style="color:black;outline:none; border:0">Course Offerings</a></li>
                    <li><a href="#nro" data-toggle="tab" style="color:black;outline:none; border:0">Pass/Fail Option</a></li>
                    <li><a href="#citation" data-toggle="tab" style="color:black;outline:none; border:0">Citation</a></li>
                    <li><a href="#course_assessment" data-toggle="tab" style="color:black;outline:none; border:0">Course Assessment</a></li>
                  </ul>
              </div>
            
              <div id="tab_frequent" class="tab-pane">
                  <h3>Frequent</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
          </div>
              <div class="tab-content">
                <div id="financial_aid_application" class="tab-pane">
                  <p>Financial Aid Application</p>
                </div>

                <div id="award_letter" class="tab-pane">
                  <div class="row text-center">
                  	<p style="font-weight:bold; color:hsla(117,57%,21%,1.00); margin-top:15px; margin-bottom:30px;font-size:larger">My Financial Aid Award</p>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-4" align="center">
                        <div class="dropdown btn-group">
                            <a class="btn dropdown-toggle" style="background-color:hsla(117,57%,21%,1.00); color:white" data-toggle="dropdown" href="#">
                                Choose Academic Year
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">2015 - 2016</a></li>
                                <li><a href="#">2014 - 2015</a></li>
                            </ul>
                         </div> 
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-7 text-center" align="center">
                        <img src="images/award_letter.png" align="center" width="450" style="margin-bottom:50px"></img>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="financial_aid_status" class="tab-pane">
                  <p>Financial Aid Status</p>
                </div>

                <div id="dash_account" class="tab-pane">
                  <p>Dash Account</p>
                </div>

                <div id="d_pay" class="tab-pane">
                  <p>D-Pay</p>
                </div>

                <div id="financial_authorization" class="tab-pane">
                  <p>Finanacial Authorization</p>
                </div>

                <div id="tuition_statement" class="tab-pane">
                  <p>Tuition Statement</p>
                </div>

              </div>

              <div class="tab-content">
                <div id="official_transcript" class="tab-pane">
                  <p>Official Transcript</p>
                </div>

                <div id="unofficial_transcript" class="tab-pane">
                  <p>Unofficial Transcript</p>
                </div>

                <div id="degree_application" class="tab-pane">
                  <p>Degree Application</p>
                </div>

                <div id="grades_by_term" class="tab-pane text-center">
                  <div class="row" style="margin-top:50px">
                    <div class="col-md-3 text-center">
                        <div class="dropdown btn-group">
                            <a class="btn dropdown-toggle" style="background-color:hsla(117,57%,21%,1.00); color:white; margin-left:0px; margin-right:0px" data-toggle="dropdown" href="#">
                                Choose a Term
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Fall 2015</a></li>
                                <li><a href="#">Spring 2015</a></li>
                                <li><a href="#">Winter 2015</a></li>
                                <li><a href="#">Fall 2014</a></li>
                                <li><a href="#">Spring 2014</a></li>
                                <li><a href="#">Winter 2014</a></li>
                                <li><a href="#">Fall 2013</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 text-center">
                  		 <div class="row" style="margin-right:0px">
                         <p style="font-size:larger; font-weight:bolder; color:hsla(117,57%,21%,1.00); margin-bottom:20px">Grades By Term</p>
                    <table class="table table-striped" border="0px" width="500" style="margin-left:0px">
                      <thead>
                        <tr>
                            <th width="20%"><p style="color:black; font-weight:bold; border-right:none; border-left:none; color:white">Department</p></th>
                            <th width="20%"><p style="color:black; font-weight:bold; border-right:none; border-left:none; color:white">Course ID</p></th>
                            <th width="20%"><p style="color:black; font-weight:bold; border-right:none; border-left:none; color:white">Title</p></th>
                            <th width="20%"><p style="color:black; font-weight:bold; border-right:none; border-left:none; color:white">Grade</p></th>
                            <th width="20%"><p style="color:black; font-weight:bold; border-right:none; border-left:none; color:white">Median</p></th>
                        </tr>
                       </thead>
                        <tbody>                         
                          <tr>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">ECON</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">020</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">Econometrics</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">A-</button></p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">B</p></td>
                          </tr>
                          <tr>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">COSC</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">057</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">Compilers</p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">B+</button></p></td>
                            <td width="20%"><p style="color:black; border-right:none; border-left:none;">C+</p></td>
                          </tr>
                          <tr>
                            <td width="20%"><p style="color:black;">COSC</p></td>
                            <td width="20%"><p style="color:black;">089</p></td>
                            <td width="20%"><p style="color:black;">HCI</p></td>
                            <td width="20%"><p style="color:black;">A</button></p></td>
                            <td width="20%"><p style="color:black;">B+</p></td>
                          </tr>

                          <tr>
                            <td width="20%"><p style="color:black;">P.E.</p></td>
                            <td width="20%"><p style="color:black;">032</p></td>
                            <td width="20%"><p style="color:black;">Snowboarding</p></td>
                            <td width="20%"><p style="color:black;">Pass</button></p></td>
                            <td width="20%"><p style="color:black;"></p></td>
                          </tr>
                        </tbody>
                      </table>   
                  </div>                 
                    </div>
                  </div>
                </div>

                <div id="degree_work" class="tab-pane">
                  <p>Degree Work</p>
                </div>

                <div id="major_minor" class="tab-pane">
                  <p>Major/Minor</p>
                </div>

                <div id="verify_enrollment" class="tab-pane">
                  <p>Verify Enrollment</p>
                </div>

              </div>

              <div class="tab-content">
                <div id="room_assignment" class="tab-pane">
                  <p>Room Assignment</p>
                </div>

                <div id="condition_form" class="tab-pane">
                  <p>Condition Form</p>
                </div>

                <div id="star_portal" class="tab-pane">
                  <p>Star Portal</p>
                </div>
              </div>

              <div class="tab-content">
                <div id="course_offerings" class="tab-pane">
                  <p>Course Offerings</p>
                </div>

                <div id="register" class="tab-pane">
                  <p>Course Registration</p>
                </div>

                <div id="nro" class="tab-pane">
                  <p>Pass/Fail Option</p>
                </div>

                <div id="citation" class="tab-pane">
                  <p>Citations</p>
                </div>

                <div id="course_assessment" class="tab-pane">
                  <p>Course Assessment</p>
                </div>
              </div>

              <div class="tab-content">
                <div id="holds_view" class="tab-pane">
                  <p>Holds View</p>
                </div>

                <div id="d_plan" class="tab-pane">
                  <div class="text-center">
                  <p style="font-weight:bold; color:hsla(117,57%,21%,1.00); margin-top:15px; font-size:larger">My D-Plan</p>
                  </div>
                  <p style="font-size:bold">Please note: Only certain changes to your D-Plan can be done online. 
                  Some changes are not allowed or may be approved by petition to the Registrar. 
                  Please contact Registrar@dartmouth.edu if you have further questions or information. 
                  These include: </p>

                  <ul>
                    <li style="font-size:bold">Five year or more enrollment pattern</li>
                    <li style="font-size:bold">Delay or waiver of Sophomore Summer</li>
                    <li style="font-size:bold">More than 12 terms</li>
                    <li style="font-size:bold">Waiver of senior residency</li>
                  </ul>
                  <br/>

                  <div class="row">
                    <table class="table" border="0px" width="500" style="margin-left:0px; width:45">
                      <thead>
                        <tr>
                          <th colspan="5"></th>
                        </tr>
                       </thead>
                        <tbody>
                          <tr>
                            <td width="20%"><p style="color:black; font-weight:bold">Academic Year</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold">Fall</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold">Winter</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold">Spring</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold">Summer</p></td>
                          </tr>
                          <tr>
                            <td width="20%"><p style="color:black; font-weight:bold">2013 - 2014</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">L</button></p></td>
                          </tr>
                          <tr>
                            <td width="20%"><p style="color:black; font-weight:bold">2014 - 2015</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">L</button></p></td>
                          </tr>
                          <tr>
                            <td width="20%"><p style="color:black; font-weight:bold">2015 - 2016</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2">L</button></p></td>
                          </tr>

                          <tr>
                            <td width="20%"><p style="color:black; font-weight:bold">2016 - 2017</p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                            <td width="20%"><p style="color:black; font-weight:bold"><button class="SeeMore2" disabled="true" style="background-color:white; border:none; outline:none">R</button></p></td>
                          </tr>
                        </tbody>
                      </table>   
                  </div>                 
                  <br/>
                  <br/>

                  <p style="font-size:bold">Note: International students are recommended to take three consecutive terms on before taking an off term
                  If planning to make any changes that violate this, please contact the Office of Visa and Immigrations Services
                  (Visa.and.Immigrations.Services@dartmouth.edu)</p><br/>
                  
				  <div class="text-right" style="margin-bottom:40px">
                  <button class="submit" onclick="saveDplan()" style="background-color:hsla(117,57%,21%,1.00); color:white;border:none; outline:none; margin-right:50px">Save Change</button>
                  </div>
                </div>

                <div id="schedule_rooms" class="tab-pane">
                  <p>Schedule Rooms</p>
                </div>

                <div id="religious_pref" class="tab-pane">
                  <p>Religious Preferences and Heritage</p>
                </div>

                <div id="dean" class="tab-pane">
                  <p>Dean</p>
                </div>

                <div id="contact_info" class="tab-pane">
                  <p>Contact Information</p>
                </div>

                <div id="health" class="tab-pane">
                  <p>Health Services</p>
                </div>

              </div>
          </div>
          </div>
      </div>
  </div>
 
  </div>
  <!-- /container -->
  <!-- / CONTAINER-->

</section>
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
  <div class="container">
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
map["D-Plan"] = "d_plan";


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

      onClick: function () {
        setTimeout(function() {
          location.reload();
        }, 5);
      },

      onSubmit: function() {
        setTimeout(function() {
          location.reload();
        }, 5);
      }
    }
})
</script>

<script>
$('#interest_tabs').on('click', 'a[data-toggle="tab"]', function(e) {
  e.preventDefault();
  var $link = $(this);

  if (!$link.parent().hasClass('active')) {
    //remove active class from other tab-panes
    $('.tab-content:not(.' + $link.attr('href').replace('#','') + ') .tab-pane').removeClass('active');
    // click first submenu tab for active section
    $('a[href="' + $link.attr('href') + '_all"][data-toggle="tab"]').click();
    // activate tab-pane for active section
    $('.tab-content.' + $link.attr('href').replace('#','') + ' .tab-pane:first').addClass('active');
  }
});
</script>

<script>
  $('.SeeMore2').click(function(){
    var $this = $(this);
    $this.toggleClass('SeeMore2');
    if($this.hasClass('SeeMore2')){
      $this.text('R');     
    } else {
      $this.text('L');
    }
  });
</script>


</body>
</html>