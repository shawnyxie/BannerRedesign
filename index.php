<?php
	//This is the sign-in page. 
?>

<!DOCTYPE html>
<html lang="en">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script type="text/javascript"> 
//Upon clicking login. 
	$(document).ready(function() {
		//Create ajax/mocking database entry. 
		  $("#LOGIN").click(function(event) {
		  	var password = $("#password").val();
		    var username = $("#username").val();
		    var fetchString = 'username='+ username + '&password='+ password;
	      $.ajax({
	        type: "POST",
	        url: "confirm_login.php",
	        cache: false,
	        data: fetchString,
	        //Depending on the returned value, we go to one of 3 webpages. 
	        success: function(returned_value){
	        	if (returned_value == 2) 
		        	window.location.href = "employee.php";
		        else if (returned_value == 1)
		        	window.location.href = "main_banner_page.php";
		        else if (returned_value == 0)
							alert("gahhhhh");}
	      }); 
		  }); 
	  });
</script> 
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
<nav class="navbar navbar-default" style="margin-bottom:0px">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"> <a class="navbar-brand" href="#">Dartmouth Banner Student Portal</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
<header>
  <div class="jumbotron" style="margin-bottom:0px">

    <div class="container">
      <div class="row" style="margin-top:0px">
        	<div class="col-md-3">
              	<div class="row" align="center">
                    <p>Welcome!</p>
                </div>
           	  <img src="DartmouthHall.png" width="250" height="400" alt=""/>
            </div>
            <div class="col-md-6" style="margin-left:50px">
           	  <div class="row" style="margin-top:140px; font-size:17px">
              	<div class="col-md-8">
               	  <div class="row">
       	    		<label for="textfield" style="margin-right:27px" for="username" class="col-sm-5 control-label">Net ID:</label>
       	    		  <input name="username" type="username" class="form-control" id="textfield" size="20" maxlength="20" placeholder="Net ID">
                    </div>
                  <div class="row" style="margin-top:10px;font-size:17px">
           			  <label for="password" class="col-sm-5 control-label">Password:</label>
               		  <input name="password" type="password" id="password" class="form-control" size="20" maxlength="20" placeholder="Password">
              		</div>
                </div>
                <div class="col-md-4">
                	<a class="btn btn-primary btn-lg" id="LOGIN" value="LOGIN" role="button" style="margin-left:10px; margin-top:90px">Login</a>
                </div>
              </div>
                

              <div class="row" style="margin-top:10px">
              	<a href="http://tech.dartmouth.edu/its/services-support/help-yourself/netid-lookup">Need Net ID? (Applicants and First Time Users)</a>
              </div>
              <div class="row" style="margin-top:10px">
              	<a href="https://dartdm.dartmouth.edu/dartDM/PasswordReset">Forgot Password?</a>
              </div>
       		</div>
      </div>
    </div>
  </div>
</header>
<!-- / HEADER --> 

<!--  SECTION-1 -->

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
