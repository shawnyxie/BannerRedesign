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
<title>Bootstrap Agency Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid" style="width:100%;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"><a class="navbar-brand" href="main_banner_page.php">Dartmouth Banner Student Portal</a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="width:100%;">
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="main_banner_page.php">Home</a> </li>
        <li><a href="index.php">Logout</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>


<!--  SECTION-1 -->
<section style="margin-left:60px">
<div class="row">
    <div class="row">
      <div class="col-md-2">
          <div class="row" style="margin-top:30px">
              <div class="col-md-8">
                  <img src="jun.png" width="133" height="150" alt=""/>
                </div>
                <div class="col-md-4">
                  <p>Student: </p>
                  <p style="margin-top:50px">Year: </p>
                </div>
            </div>
            <div class="row" style="margin-top:30px">
              <table class="table table-striped" width="250" style="margin-left:10px">
                <caption>Recent Activities</caption>
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
            <div class="row">
              <table class="table table-striped" width="250" style="margin-left:10px">
                <caption>Action Items</caption>
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
      </div>
        <div class="col-md-1">
        </div>
    <div class="col-md-9">
      <div class="col-md-2">
          
        </div>
      <div class="col-md-10">
          <div class="row" style="display:inline-block;">
          <ul class="nav nav-tabs" float="left" style="display:inline-block;">
            <li><a data-toggle="tab" href="#schedule">Schedule</a></li>
            <li><a data-toggle="tab" href="#degree" text-align="center">Degree</a></li>
            <li><a data-toggle="tab" href="#financial" text-align="center">Financial</a></li>
            <li><a data-toggle="tab" href="#housing" text-align="center">Housing</a></li>
            <li><a data-toggle="tab" href="#student" text-align="center">Student<br/>Life</a></li>
            <li><a data-toggle="tab" href="#course" text-align="center">Courses</a></li>
            <li><a data-toggle="tab" href="#frequent" text-align="center">Frequent<br/>Links</a></li>
            <li><a data-toggle="tab" href="#help" text-align="center">Need<br/>Help?</a></li>
          </ul>
          <div class="tab-content">
              <div id="home" class="tab-pane fade in active" >
                  <h3 >HOME</h3>
                  <p>Please choose the tab of your choice</p>
              </div>
            
              <div id="schedule" class="tab-pane fade">
                  <h3>Schedule</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            
              <div id="degree" class="tab-pane fade">
                  <h3>Degree</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> 
              </div>
            
              <div id="financial" class="tab-pane fade">
                  <h3>Financial</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="housing" class="tab-pane fade">
                  <h3>Housing</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="student" class="tab-pane fade">
                  <h3>Student Life</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="course" class="tab-pane fade">
                  <h3>FCourses</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="frequent" class="tab-pane fade">
                  <h3>Frequent</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            
              <div id="help" class="tab-pane fade">
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
<div class="well"> </div>

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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>

