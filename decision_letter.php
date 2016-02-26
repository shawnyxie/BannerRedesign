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
<title>Admissions Page</title>

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
    console.log($('.nav-tabs a[href=#'+url.split('#')[1]+']').parent());
  }

  setTimeout(function() {
    $(window).scrollTop(0);
  }, 5);

});
</script>

</head>
<body style="background-image:url('./images/DartmouthCampus.JPG'); background-repeat:no-repeat">
<nav class="navbar navbar-default" style="margin-bottom:0px; background-color:#1A5417; width:auto">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<a class="navbar-brand" style="color:#F8F8F8; margin-left:10px" href="#">
    		Dartmouth Admissions Portal
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:#F8F8F8; font-size:large" href="AdmissionsLogout.php">Logout</a> </li>
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
              <img src="images/VoxClamantis.png" width="200" height="240" alt="" style="margin-bottom:15px; border:5px solid  hsla(117,57%,21%,.80)" align="left"/>
            </div>
      	 </div>
         <div class="row" style="margin-top:0px">
           <table class="table" border="0px" width="250" style="margin-left:0px; width:45">
              <thead>
                <tr>
                  <th>Recent Activities</th>
                </tr>
               </thead>
               <tbody>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" target="_blank" href="https://admissions.dartmouth.edu/regular-decision-dimensions-dartmouth" style="color:black">Dimensions: Sign Up!</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="#my_decision_letter" id="my_decision" style="color:black">My Decision Letter</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="#my_financial_aid" id="my_fin_aid" style="color:black">My Financial Aid</a></td>
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
                    <td width="25%"><p style="color:black; font-weight:bold">Apr 15</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00); "target="_blank" href="https://admissions.dartmouth.edu/regular-decision-dimensions-dartmouth" style="color:black">Dimensions Sign Up!<br/>(Visiting Dartmouth)</a></td>
                  </tr>
                  <tr>
                    <td width="25%"><p style="color:black; font-weight:bold">Feb 29</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00); "target="_blank" href="http://tech.dartmouth.edu/its/services-support/ask-person/live-chat" style="color:black">Chat with current students!</a></td>
                  </tr>
                  <tr>
                    <td width="25%"><p style="color:black; font-weight:bold">Feb 29</p></td>
                    <td width="75%"><a style="font-weight:bold; color:hsla(117,57%,21%,1.00);" href="#" style="color:black">Submit Your SIR <br/> Commit to Dartmouth Today!</a></td>
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
                <li><a style="color:#1A5417" data-toggle="tab" href="#my_decision_letter">My Decision Letter</a></li>
                <li><a style="color:#1A5417" data-toggle="tab" href="#my_financial_aid" text-align="center">My Financial Aid</a></li>
                <li><a style="color:#1A5417" data-toggle="tab" href="#personal_information" text-align="center">Personal Information</a></li>
                <li><a style="color:#1A5417" data-toggle="tab" href="#international_student" text-align="center">International Student</a></li>
              </ul>
              <div class="tab-content" style="color:#1A5417; margin-top:0px; color:black; margin-bottom:20px">
                  <div id="my_decision_letter" class="tab-pane" style=" max-height:1000px; color:#1A5417;padding:50px; background-color:white">
                    <p>
                    Dear Srinath<br/><br/>
                    
                    <a style="font-weight:bolder; color:#1A5417">Congratulations!</a> <br/><br/>
                    It is with great pleasure that I inform you of your admission to Dartmouth College as a member of the Class of 2020. You have been selected from a group of more than 20,000 of the most accomplished, academically talented, and diverse applicants in the College’s history. In addition, you have the special distinction of being a part of the class that will celebrate its graduation during Dartmouth’s 250th year. Having personally read your application, I know that you and Dartmouth are an ideal match.
                    
                    <br/><br/>Dartmouth today represents the powerful fusion of liberal arts college and research university, engage in understanding and resolving the world’s greatest challenges. Here you will find leading scholars who care deeply about teaching and a liberal arts curriculum that will equip you with the skills and confidence to lead in our global and rapidly evolving society. You will ive and learn among a close-knit student body that thrives on the diversity of perspectives, experiences, talents, and interests of its members, and join an alumni community eager to support your endeavors. Finally, your education will take you around the world but always bring you back to this beautiful college on the hill.
                    
                    <br/><br/>We hope you will visit our campus during the month of April to meet our student and faculty, attend our classes, and stay overnight in a residence hall. A series of programs called Dimensions will introduce you to the academic and extracurricular life of the College. 
                    
                    <br/><br/>Whether or not you are able to visit campus, I encourage you to go to the Admitted Students Webpage. 
                    
                    <br/><br/>Again, congratulations on your acceptance. Please let us know if we can answer any questions in the next few weeks. We would appreciate confirmation of your matriculation plans by May 1. I look forward to welcoming you to Dartmouth. 
                    
                    <br/><br/>Sincerely, <br/>

                    Maria Laskaris
                    <br/>Dean of Admissions and Financial Aid </p>
                    </div>
                
                  <div id="my_financial_aid" class="tab-pane">
                  <div class="row text-center" style="background-color:none">
                  	<p style="font-weight:bold; color:hsla(117,57%,21%,1.00); margin-top:15px; margin-bottom:30px;font-size:larger">My Financial Aid Award</p>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-6" align="center">
                        <div class="dropdown btn-group">
                            <a class="btn dropdown-toggle" style="background-color:hsla(117,57%,21%,1.00); color:white" data-toggle="dropdown" href="#">
                                Choose Academic Year
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">2016 - 2017</a></li>
                            </ul>
                         </div> 
                      </div>
                      <div class="col-md-6" align="center">
                        <img src="images/award_letter.png" align="center" width="300"></img>
                      </div>
                    </div>
                  </div>
                  </div>
                
                  <div id="personal_information" class="tab-pane">
                    <p>Personal Information</p>
                  </div>
                
                  <div id="international_student" class="tab-pane">
                    <p>International Student</p>
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
	$('#my_decision').click(function() {
		location.reload();
	});
</script>

<script>
	$('#my_fin_aid').click(function() {
		location.reload();
	});
</script>
</body>
</html>