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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script>
$(function(){
  var url = document.location.toString();

  console.log("test");
  if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
  }

  setTimeout(function() {
    $(window).scrollTop(0);
  }, 5);

});
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
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-search" value="SEARCH">
        	<img src="./images/search_button.jpg" width="15" height="15" alt="submit"/>
        </button>
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
              <img src="images/Taeho.png" width="200" height="230" alt="" style="margin-bottom:10px; border:5px solid black" align="left"/>
              <p style="margin-top:10px; font-weight:bold" align="left">Name: Sung, Taeho </p>
              <p style="font-weight:bold" align="left"> Year: Class of 2017 </p>
              <p style="font-weight:bold" align="left"> Degree: Undergraduate</p>
            </div>
      	 </div>
         <div class="row" style="margin-top:0px">
              <table class="table table-striped" style="margin-left:0px; width:45">
                <caption style="color:#1A5417; font-weight:bolder; font-size:larger">Recent Activities</caption>
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
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="row" style="margin-top:0px">
              <table class="table table-striped" width="200" style="margin-left:0px">
                <caption style="color:#1A5417; font-weight:bolder; font-size:larger" align="center">Action Items</caption>
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
    <div class="col-md-9">
      <div class="col-md-2">
          
        </div>
      <div class="col-md-10">
          <div class="row" style="display:inline-block;">
          <ul class="nav nav-tabs text-center" float="left" style="display:inline-block; font-weight:bolder; font-size:16px">
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_schedule">My<br/>Schedule</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_degree" text-align="center">My<br/>Degree</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_financial" text-align="center">My<br/>Financials</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_housing" text-align="center">My<br/>Housing</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_student" text-align="center">Student<br/>Life</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_course" text-align="center">My<br/>Courses</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_frequent" text-align="center">Frequent<br/>Links</a></li>
            <li><a style="color:#1A5417" data-toggle="tab" href="#tab_help" text-align="center">Need<br/>Help?</a></li>
          </ul>
          <div class="tab-content" style="background-color:hsla(117,24%,82%,1.00)">
              <div id="tab_schedule" class="tab-pane">
                  <h3>Schedule</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            
              <div id="tab_degree" class="tab-pane">
                  <h3>Degree</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> 
              </div>
            
              <div id="tab_financial" class="tab-pane">
                  <h3>Financial</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="tab_housing" class="tab-pane">
                  <h3>Housing</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="tab_student" class="tab-pane">
                  <h3>Student Life</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="tab_course" class="tab-pane">
                  <h3>Courses</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="tab_frequent" class="tab-pane">
                  <h3>Frequent</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="tab_help" class="tab-pane">
                  <h3>Need Help?</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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


</body>
</html>