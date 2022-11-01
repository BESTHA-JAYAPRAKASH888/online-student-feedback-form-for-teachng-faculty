<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['faculty_login'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from faculty where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#E2502C">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['Name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li style="background-color:#E2502C"><a href="index.php"><span style="color:#FFFFFF">Dashboard </span><span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			<!-- check users profile image -->
			<!--<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>-->
			
			
			
			<li><a href="index.php?page=update_password"><span style="color: #ff751a" class="glyphicon glyphicon-user"></span><span style="color:red"> Update Password </span></a></li>
            <li><a href="index.php?page=update_profile"><span style="color: #ff751a" class="glyphicon glyphicon-asterisk"></span><span style="color:red"> Update Profile </span></a></li>
			 <li><a href="index.php?page=feedback"><span style="color: #ff751a" class="glyphicon glyphicon-thumbs-down"></span><span style="color:red"> Feedback </span></a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
				if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="feedback")
			{
				include('feedback.php');
			
			}
		  }
		  else
		  {
		  
		  ?>
		 
		  
		  
		  
		  <h1 class="page-header"><span style="color:#E2502C">Dashboard</span></h1>
		  
      <h3>FEEDBACK DETAILS</h3>


      <button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Strongly Agree 5</button>
      <button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Agree 4</button>
      <button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Neutral 3</button>
      <button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px"> Disagree 2</button>
      <button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Strongly Disagree 1</button><br><br>
		  <h4>Course Notes</h4>
      <table border="1">
        <tr>
          <td>QUESTION</td>
          <td>DESCRIPTION</td>
        </tr>
        <tr>
          <td>quest1</td>
          <td>Teacher provided the course outline having weekly content plan with list of  required text book</td>
        </tr>
        <tr>
          <td>quest2</td>
          <td>Course objectives,learning outcomes and grading criteria are clear to me</td>
        </tr>
        <tr>
          <td>quest3</td>
          <td>Course integrates throretical course concepts with the real world examples</td>
        </tr>
      </table>

      <h4>Class Teaching</h4>
      <table border="1">
        <tr>
          <td>QUESTION</td>
          <td>DESCRIPTION</td>
        </tr>
        <tr>
          <td>quest4</td>
          <td>Teacher is punctual,arrives on time and leaves on time</td>
        </tr>
        <tr>
          <td>quest5</td>
          <td>Teacher is good at stimulating the interest in the course content</td>
        </tr>
        <tr>
          <td>quest6</td>
          <td>Teacher is good at explaining the subject matter</td>
        </tr>
        <tr>
          <td>quest7</td>
          <td>Teacher's presentation was clear,loud ad easy to understand</td>
        </tr>
        <tr>
          <td>quest8</td>
          <td>Teacher is good at using innovative teaching methods/ways</td>
        </tr>
        <tr>
          <td>quest9</td>
          <td>Teacher is available and helpful during counseling hours</td>
        </tr>
        <tr>
          <td>quest10</td>
          <td>Teacher has competed the whole course as per course outline</td>
        </tr>
      </table>

      <h4>Class Assessment</h4>
      <table border="1">
        <tr>
          <td>QUESTION</td>
          <td>DESCRIPTION</td>
        </tr>
        <tr>
          <td>quest11</td>
          <td>Teacher was always fair and impartial</td>
        </tr>
        <tr>
          <td>quest12</td>
          <td>Assessments conducted are clearly connected to maximize learining objectives</td>
        </tr>
        <tr>
          <td>quest13</td>
          <td>What I liked about the course</td>
        </tr>
      </table>

		  
		  
		  
		  

          <!--<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->
<?php } ?>
        
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
