
<?php
  //This page determines whether login works or not, and which student banner page to show. 

  $user = $_POST['username'];
  $password = $_POST['password'];
  $username = 0 + $user; //make sure user is int.
  echo 1;
  return 1;
  // session_start();
  // //define constants for db_host, db_user, db_pass, and db_database
  // define('DB_HOST', 'sunapee.cs.dartmouth.edu');
  // define('DB_USER', 'F000KHG');
  // define('DB_PASS', 'lynbrookPARTY25'); //set DB_PASS as 'root' if you're using mac
  // define('DB_DATABASE', 'F000KHG_db'); //make sure to set your database

  //connect to database host
  //$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);

  //if(!$connection) { die("Error! SQL failure: " . mysql_error()); }
  //mysql_select_db(DB_DATABASE, $connection);
  //mysql_set_charset("utf8mb4");


  // check the password in the database 

  //Returns 1 row if person exists. 
  //$try_login1 = mysql_query("SELECT * FROM Person natural join Psword WHERE Psword_txt='$password' AND Person_id='$username'");
  //Returns 1 row if person isn't an employee. It's a customer
  //$try_login2 = mysql_query("SELECT * FROM Person natural join Psword WHERE Psword_txt='$password' AND Person_id='$username' AND If_employee != TRUE");

  // make sure logins works 
  //if(!$try_login1) { die("Error! SQL failure: " . mysql_error()); }
  //if(!$try_login2) { die("Error! SQL failure: " . mysql_error()); }

  //number of rows. This should help determine whether someone is employee or customer.
  //$num_rows_1 = mysql_num_rows($try_login1);
  //$num_rows_2 = mysql_num_rows($try_login2);

  //If it's a customer
  /*
  if ($num_rows_1 == 1 && $num_rows_2 == 1) {
    $_SESSION['user']=$username; // Set the username
    $myrow = mysql_fetch_assoc($try_login2);       
    $_SESSION['If_employee']=$myrow['If_employee']; 
    echo 1; 
    return 1; 
  } 
  //If it's an employee
  else if ($num_rows_1 == 1 && $num_rows_2 == 0) {
    $_SESSION['user']=$username; // Set the username
    $myrow = mysql_fetch_assoc($try_login1);       
    $_SESSION['If_employee']=$myrow['If_employee']; // Set the type 
    echo 2; 
    return 2; 
  }
  //If it's neither (incorrect login)
  else {
    $error = "Invalid username/password combination.";
    $_SESSION['user'] = 0; 
    echo 0;  
    return 1; 
  }
  */
?>
