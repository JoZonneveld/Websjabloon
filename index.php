<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
</head>
<body>
<?php
session_start();
include("include/functions.php");
require_once 'mobb/Mobile_Detect.php';
$detect = new Mobile_Detect;

$currenttime = date('H:i:s');
$currentdate = date('d-m-Y');
$currentweek = date('W');
$currentyear = date('Y');
?>

 <?php 
if (!$detect->isMobile() ) {
echo '<meta name="viewport" content="initial-scale=0.65,minimum-scale=0.5,maximum-scale=0.5,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" /> ';
} elseif( $detect->isiOS() ){
echo '<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes"/> ';
} else {
  echo '<meta name="viewport" content="width=device-width, initial-scale=0.80, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes"/> ';

  //echo '<meta name="viewport" content="initial-scale=0.65,minimum-scale=0.5,maximum-scale=0.5,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" /> 
       // <link rel="stylesheet" href="css/android.css" />';
}
?>

<div id="menu">
<?php
	include("include/menu.php");
?>
</div>

<div id="content">
<center>
 <?php 
   if(isset($_GET['page']))
   {
	   $page = $_GET['page'];
	   
	   if(file_exists("pages/".$page.".php"))
	   {
		   include("pages/".$page.".php");
	   }
	   else
	   {
		   include("pages/home.php");
	   }
   }
   else
   {
	  include("pages/home.php");
   }
 ?>
 </center>
 </div>

     <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>