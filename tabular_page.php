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
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').parent().addClass('active');
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
      <form class="navbar-form navbar-right" autocomplete="off" role="search">
        <div class="typeahead-container">
          <div class="typeahead-field">
            <span class="query">
              <input id="query" type="text" class="form-control" placeholder="Search" autocomplete="off">
            </span>
              <button type="submit" value="SEARCH">
                <img src="./images/search_button.jpg" width="15" height="15" alt="submit"/>
              </button>
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
              <p style="margin-top:10px; font-weight:bold" align="left">Name: Sung, Taeho </p>
              <p style="font-weight:bold" align="left"> Year: Class of 2017 </p>
              <p style="font-weight:bold" align="left"> Degree: Undergraduate</p>
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
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://google.com" style="color:black">Grades By Term</a></td>
              </tr>
              <tr>
                <td><a style="color:hsla(117,57%,21%,1.00); font-weight:bold" href="https://reslife.dartmouth.edu/StarRezPortal/Default.aspx?Params=L9ezxPcQnQuRGKTzF%2b4sxdIcsWEQNaHhlMKz6FX0gDI%3d" style="color:black">Financial Aid</a></td>
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
          <div class="tab-content" style="background-color: white; margin-top:0px; color:black">
              <div id="tab_schedule" class="tab-pane">
                <p>Current schedule goes here</p>
              </div>
            
              <div id="tab_degree" class="tab-pane">
                  <ul class="nav nav-tabs" id="degree_nav">
                    <li><a href="#official_transcript" data-toggle="tab" style="color:black; outline:none; border:0">official transcript</a></li>
                    <li><a href="#unofficial_transcript_web" data-toggle="tab" style="color:black;outline:none; border:0">unofficial transcript</a></li>
                    <li><a href="#degree_application" data-toggle="tab" style="color:black;outline:none; border:0">degree application</a></li>
                    <li><a href="#grades_by_term" data-toggle="tab" style="color:black;outline:none; border:0">grades_by_term</a></li>
                  </ul>
              </div>
            
              <div id="tab_financial" class="tab-pane">
                  <ul class="nav nav-tabs" id="financial_nav">
                    <li><a href="#financial_aid_menu" data-toggle="tab" style="color:black;outline:none; border:0">financial aid menu</a></li>
                    <li><a href="#dash_account" data-toggle="tab" style="color:black;outline:none; border:0">dash card</a></li>
                    <li><a href="#d_pay" data-toggle="tab" style="color:black;outline:none; border:0">d pay</a></li>
                    <li><a href="#financial_authorization" data-toggle="tab" style="color:black;outline:none; border:0">financial authorization</a></li>
                    <li><a href="#tuition_statement" data-toggle="tab" style="color:black;outline:none; border:0">tuition statement</a></li>
                  </ul>
              </div>
            
              <div id="tab_housing" class="tab-pane">
                  <ul class="nav nav-tabs" id="housing_nav">
                    <li><a href="#room_assignment" data-toggle="tab" style="color:black;outline:none; border:0">housing-room assignment</a></li>
                    <li><a href="#condition_form" data-toggle="tab" style="color:black;outline:none; border:0">housing-condition form</a></li>
                    <li><a href="#star_portal" data-toggle="tab" style="color:black;outline:none; border:0">star portal</a></li>
                  </ul>
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
            

          </div>
              <div class="tab-content">
                <div id="financial_aid_menu" class="tab-pane">
                  <p>financial aid menu</p>
                </div>

                <div id="dash_account" class="tab-pane">
                  <p>dash account</p>
                </div>

                <div id="d_pay" class="tab-pane">
                  <p>d-pay</p>
                </div>

                <div id="financial_authorization" class="tab-pane">
                  <p>finanacial authorization</p>
                </div>

                <div id="tuition_statement" class="tab-pane">
                  <p>tuition statement</p>
                </div>

              </div>

              <div class="tab-content">
                <div id="official_transcript" class="tab-pane">
                  <p>official transcript</p>
                </div>

                <div id="unofficial_transcript_web" class="tab-pane">
                  <p>unofficial transcript (web)</p>
                </div>

                <div id="unofficial_transcript_pdf" class="tab-pane">
                  <p>unofficial transcript (pdf)</p>
                </div>

                <div id="degree_application" class="tab-pane">
                  <p>degree application</p>
                </div>

                <div id="grades_by_term" class="tab-pane">
                  <p>grades by term</p>
                </div>
              </div>

              <div class="tab-content">
                <div id="room_assignment" class="tab-pane">
                  <p>room assignment</p>
                </div>

                <div id="condition_form" class="tab-pane">
                  <p>condition form</p>
                </div>

                <div id="star_portal" class="tab-pane">
                  <p>star portal</p>
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

map["Financial Aid Menu"] = "financial_aid_menu";
map["Dash Account"] = "dash_account";
map["D-Pay"] = "d_pay";
map["Financial Authorization"] = "financial_authorization";
map["Tuition Statement"] = "tuition_statement";
map["Official Transcript"] = "official_transcript";
map["Unofficial Transcript Web"] = "unofficial_transcript_web";
map["Unofficial Transcript PDF"] = "unofficial_transcript_pdf";
map["Degree Application"] = "degree_application";
map["Grades By Term"] = "grades_by_term";
map["Room Assignment"] = "room_assignment";
map["Room Condition Form"] = "condition_form";
map["Housing Star Portal"] = "star_portal";

$('#query').typeahead({
    minLength: 1,
    maxItem: 20,
    order: "asc",
    href: function(item) {
      console.log("tabular_page.php#" + map[item.display])
      return "tabular_page.php#" + map[item.display];
    },
    template: "{{display}}",
    source: {
      data: ["Financial Aid Menu", "Dash Account", "D-Pay", "Financial Authorization", "Tuition Statement", "Official Transcript",
      "Unofficial Transcript Web", "Unofficial Transcript PDF", "Degree Application", "Grades By Term", "Room Assignment", "Room Condition"
      ,"Housing Star Portal"]
    },

    callback: {
      onInit: function (node) {
        console.log("worked!");
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

</body>
</html>