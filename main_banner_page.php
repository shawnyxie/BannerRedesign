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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-search" value="SEARCH">
        	<img src="./images/search_button.jpg" width="15" height="15" alt="submit"/>
        </button>
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
              <p style="margin-top:10px; font-weight:bold" align="left">Name: Sung, Taeho </p>
              <p style="font-weight:bold" align="left">Year: Class of 2017 </p>
              <p style="font-weight:bold" align="left">Degree: Undergraduate</p>
            </div>
      	 </div>
         <div class="row" style="margin-top:0px">
           <table class="table table-striped" border="0px" width="200" style="margin-left:0px; width:45">
              <thead>
                <tr>
                  <th>Recent Activities</th>
                </tr>
               </thead>
               <tbody>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="row" style="margin-top:0px">
           <table class="table table-striped" border="0px" width="200" style="margin-left:0px; width:45">
              <thead>
                <tr>
                  <th>Action Items </th>
                </tr>
               </thead>
                <tbody>
                  <tr>
                    <td><a href="https://google.com">google</a></td>
                  </tr>
                  <tr>
                    <td><a href="facebook.com">facebook</a></td>
                  </tr>
                  <tr>
                    <td><a href="amazon.com">amazon</a></td>
                  </tr>
                  <tr>
                    <td><a href="google.com">google</a></td>
                  </tr>
                  <tr>
                    <td><a href="google.com">google</a></td>
                  </tr>
                  <tr>
                    <td><a href="google.com">google</a></td>
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
              <p class="greenP">View My Term Schedule</p>
            </div>
            </a>
           </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_degree">
            <div  align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height:150px;" src="images/Degree.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Degree</h3>
              <p class="greenP">Degree, Grades, Transcript</p>
            </div>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_financial">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Financials.png" data-holder-rendered="true">
              <h3 class="greenH3">Financials</h3>
              <p class="greenP">Financial Aid, D-Pay, Tuition</p>
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
              <p class="greenP">Student Housing</p>
            </div>
            </a>
           </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_student">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/StudentLife.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Student Life</h3>
              <p class="greenP"> Check-in, Cards</p>
            </div>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="tabular_page.php#tab_course">
            <div align="center">
              <img class="img-circle" alt="200x200" style="width: 150px; height: 150px;" src="images/Courses.jpg" data-holder-rendered="true">
              <h3 class="greenH3">Courses</h3>
              <p class="greenP">Registration</p>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery-1.11.3.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>