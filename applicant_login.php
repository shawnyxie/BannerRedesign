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
		        	window.location.href = "congratulations.php";
		        else if (returned_value == 1)
		        	window.location.href = "congratulations.php";
		        else if (returned_value == 0)
					alert("Invalid Username or Password");}
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

<body style="background-image:url('./images/DartSnow.jpg'); background-repeat:no-repeat">>
<nav class="navbar navbar-default" style="margin-bottom:0px; background-color:#1A5417; border:0px">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header navbar-right" align="right"> 
    	<a class="navbar-brand" href="index.php" style="color:#F8F8F8">
    	Dartmouth Banner Student Portal
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
<header>
  <div class="jumbotron" style="margin-bottom:0px">
    <div class="container" align="center" >
      <div class="row" style="margin-top:px">
        	<div class="col-md-6">
              	<div class="row" align="center">
                    <p style="font-size:30x; font-weight:bold; margin-bottom:30px"> Welcome to Your Admissions Portal!</p>
                </div>
           	  <img src="images/UndergradAdmissions.png" width="300" height="450" align="center" alt="Dartmouth Hall"/>
            </div>
            <div class="col-md-6" align="center">
            <div class="row" style="width:400px; margin-top:80px">
            <div class="container-fluid" style="background-color:white; padding:40px">
             <div class="row" style="margin-top:30px;font-size:20px">
                  <label for="textfield" align="left" for="username" class="col-sm-7 control-label">Application ID:</label>
                  <input name="username" type="username" class="form-control" id="username" maxlength="20" style="height:30px" placeholder="Application ID">
              </div>
              <div class="row" style="margin-top:10px;font-size:20px">
                  <label for="password" align="left" class="col-sm-5 control-label">Password:</label>
                  <input name="password" type="password" id="password" class="form-control" maxlength="20" style="height:30px" placeholder="Password">
              </div>
              <div class="row">
                <input type="submit" hidefocus="true" class="btn btn-primary btn-lg" id="LOGIN" value="Login" role="button" style="margin-top:40px; background-color:#1A5417; border:hidden"></a>
              </div>

              <div class="row" style="margin-top:15px">
              	<a style="color:#1A5417" href="https://apply.dartmouth.edu/account/reset?r=https%3a%2f%2fapply.dartmouth.edu%2fapply%2fstatus&s=&ds=">Forgot Password?</a>
              </div>
              <div class="row" style="margin-top:5px">
              	<a style="color:#1A5417" href="index.php">Already a Student? Login here.</a>
              </div>
            </div>
              <div class="row" style="margin-top:40px">
              	<p style="color:hsla(0,0%,0%,1.00); font-size:14px; font-weight:bolder">If you are having trouble logging in, please <a style="color:#1A5417" target="_blank" href="http://admissions.dartmouth.edu/contact-us">contact us</a></p>
              </div>
       		</div>
      </div>
    </div>
  </div>
</header>
</body>
<!-- / HEADER --> 

<!--  SECTION-1 -->

<!-- FOOTER -->

<footer class="text-center" style="background-color:#1A5417; margin-bottom:0px">
  <div class="container">
    <div class="row">
      <div class="col-xs-12" style="color:#F8F8F8">
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
</html>