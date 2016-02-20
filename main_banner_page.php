<?php

  // define('DB_HOST', 'sunapee.cs.dartmouth.edu');
  // define('DB_USER', 'F000KHG');
  // define('DB_PASS', 'lynbrookPARTY25'); //set DB_PASS as 'root' if you're using mac
  // define('DB_DATABASE', 'F000KHG_db'); //make sure to set your database

  //connect to database host
  //$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
  //make sure connection works
  //if(!$connection) { die("Error! SQL failure: " . mysql_error()); }
  //mysql_select_db(DB_DATABASE, $connection);
  //mysql_set_charset("utf8mb4");
  //store username!
  //$username = $_SESSION['user']; 
  //Prob don't need this since we're already in employee. 
  //$If_employee =  $_SESSION['If_employee'];
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
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"><a class="navbar-brand" href="#">Dartmouth Banner Student Portal</a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go!</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="index.php">Logout</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>


<!--  SECTION-1 -->
<section>
<div class="row" style="margin-left:60px">
    <div class="row">
      <div class="col-md-3">
          <div class="row">
              <div class="col-md-8">
                  <img src="jun.png" width="178" height="190" alt=""/>
                    <p style="margin-top:5px; margin-left:5px">
                     Change to ID Photo
                    </p>
                </div>
                <div class="col-md-4">
                  <p style="margin-top:5px">
                    Name: 
                    Suh,
                    Dongjun</p>
                  <p style="margin-top:30px">Year: '17
                  Undergraduate</p>
                </div>
            </div>
            <div class="row" style="margin-top:30px">
              <table class="table table-striped" width="180" style="margin-left:15px">
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
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table>
          </div>
            <div class="row" style="margin-top:30px">
              <table class="table table-striped" width="200" style="margin-left:10px">
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
    <div class="col-md-8">
        <div class="col-md-4">
          <div class="row">
            <a href="tabular_page.php">
            <div class="col-lg-4 col-sm-12 text-center"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Schedule</h3>
              <p>View My Term Schedule</p>
            </div>
            </a>
            </div>
            <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Degree</h3>
              <p>Degree, Grades, Transcript</p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Financials</h3>
              <p>Financial Aid, D-Pay, Tuition</p>
            </div>
            </div>
      </div>
        
      <div class="col-md-4">
          <div class="row">
              <div class="col-lg-4 col-sm-12 text-center"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Housing</h3>
              <p>Housing Application, Housing Priority Number</p>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 text-center"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Student Life</h3>
              <p>Student Life</p>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 text-center"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Courses</h3>
              <p>My Courses</p>
            </div> 
          </div>  
      </div>
        
      <div class="col-md-4">
          <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Frequent Links</h3>
              <p>Frequent Links</p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>Need Help?</h3>
              <p>Brings up the help menu</p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/140X140.gif" data-holder-rendered="true">
              <h3>What</h3>
              <p>what?</p>
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
<script src="https://code.jquery.com/jquery-1.11.3.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="azul.css"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<title>Customer Portal</title>
</head>

<body>
<div id="wrapper">
<header>
<! FOR CUSTOMERS WE restrict prileges -->
<!-- <section> 
  <h2 > Welcome to Our Customer Portal! </h2>
  <h1 >  </h1>
<form action="customer.php" method="get">
  <button class="btn btn-large option" name="reservation" type="Go" value="past-res">Your Past Reservations</button>
  <button class="btn btn-large option" name="reservation" type="Go" value="future-res">Your Future Reservations</button>
  <button class="btn btn-large option" name="all-flights" type="Go" value="all-flights">View All Upcoming Flights</button>
  <button class="btn btn-large option" name="logout" type="Go" value="logout">Logout</button>
</form>
</section> 
 -->
<?php
  //Deal with buttoms with name reservation. 
  if(isset($_GET['reservation'])) {
    switch ($_GET["reservation"]) {
      case "future-res": 
        //$show_flights = mysql_query("CALL Future_Reserv('$username')"); 
        break;
      case "past-res": 
        //$show_flights = mysql_query("CALL Past_Reserv('$username')"); 
        break;
      default:
        break;
    }
  // check that the flight data is not null. 
  //if(!$show_flights) { die("SQL Error: " . mysql_error()); }
    ?>
    <table class="table table-bordered">
      <thead>
          <tr >
            <td>Reserv #</td>
            <td>Flight</td>
            <td>Flight Status</td>
            <td>Depart Time</td>
            <td>Depart City</td>
            <td>Depart State</td>
            <td>Destination City</td>
            <td>Destination State</td>
          </tr>
          </thead>
      </table> 
    <?php  
  }
  //deal with buttom in charge of displaying all flights. 
  if(isset($_GET['all-flights'])) {
    ?>
        <table class="table table-bordered">
            <thead>
              <tr >
                <td>Flight ID</td>
                <td>Route Number</td>
                <td>Depart City</td>
                <td>Depart State</td>
                <td>Destination City</td>
                <td>Destination State</td>
                <td>Depart Time</td>
                <td>Seats Total</td>
                <td>Seats Occupied</td>
                <td>Book Flight</td>
              </tr>
            </thead>
        </table> 
      <?php  
  }

  //logout. 
  if(isset($_GET['logout'])) {
    echo "<script type=\"text/javascript\"> window.location = \"index.php\" </script>";
  }

  //get
  function GET($k) {
      return isset($_GET[$k]) ? $_GET[$k] : null;
  }
  //Post
  function POST($k) {
      return isset($_POST[$k]) ? $_POST[$k] : null;
  }

?>

<!-- Date picker -->
 <div class="flights-table"></div>
    <script> 
      $(function(){ 
        $( "#dp" ).datepicker({ altFormat: "yy-mm-dd" });
        $( "#dp2" ).datepicker({ altFormat: "yy-mm-dd" });
      }); 
    </script> 

    <script> 
      $(".my-first-link").click(function() {
        window.location = $(this).find("a").attr("href"); 
        return false;
      });
    </script> 

</div>


</body>
</html> -->
