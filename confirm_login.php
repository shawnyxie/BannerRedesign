
<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $taehoUser = "F00173V";
  $taehoPass = "taeho";

  $srUser = "srinath";
  $srPass = "srinathpassword";
  $srUserUpper = "Srinath";
  $srPassUpper = "Srinathpassword";
  
  if ((strcmp($username, $srUser) == 0 and strcmp($password, $srPass) == 0 ) or (strcmp($username, $srUserUpper) == 0 and strcmp($password, $srPassUpper) == 0 )) 
  {
	  echo 2;
	  return 2;
  }
  else if (strcmp($username, $taehoUser) == 0 and strcmp($password, $taehoPass) == 0 ) {
	  echo 1;
	  return 1;
  }
  else {
	  echo 0;
	  return 0;
  }
?>
