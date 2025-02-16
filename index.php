<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

if(!isset($_SESSION["user_id"])) header('Location: login.php');
if($_SESSION["usertype"]!="admin") header('Location: login.php');


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/blitzer/jquery-ui.custom.css"></link>	
<link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/ui.jqgrid.css"></link>	
  <link rel="stylesheet" type="text/css" media="screen" href="css/css.css"></link>	

<script src="lib/js/jquery.min.js" type="text/javascript"></script>
<script src="lib/js/jqgrid/js/i18n/grid.locale-ar.js" type="text/javascript"></script>
<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	
<style>
ul li ul {
 /* visibility: hidden;*/
  opacity: 0;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 0.5rem;
  right: 0;
  
direction:rtl;
/*  display: none;*/
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
}

ul li ul li {
  clear: both;
 
}
</style>
</head>
<body style="background:#F7F7F7">

  <div class="nav" style="direction:rtl;">
        
        
 <div class="nav-links">
            <ul>
			<li><a href="#" >بيانات أساسية</a>
			 <ul class="dropdown">
             
            <li><a href="countries.php" >المناطق</a></li>
			<li><a href="role_countries.php" >الدول ذات الدور الدولي أو الإقليمي</a></li>
             <li><a href="conflictindexes.php" >المؤشرات</a></li>
			 <li><a href="quarrelindexes.php" >بنود المؤشرات</a></li><li><a href="political.php" >مقارنة المؤشر السياسي</a></li><li><a href="martial.php" >مقارنة المؤشر الأمني و العسكري</a></li><li><a href="inter.php" >مقارنة الدور الدولي و الإقليمي</a></li>
             </ul>
			</li>
			<li><a href="role.php" > الدور الدولي والإقليمي</a></li> 
            <li><a href="crises.php" >المعلومات</a></li>
            <li><a href="conflicts.php" >تقييم المؤشرات</a></li>
             <li><a href="indexes_months.php" >المؤشرات شهريا</a></li>
                <li><a href="comments.php">التعليق على النتائج</a></li> 
				<li><a href="role_comments.php">التعليق على الأدوار</a></li><li><a href="logout.php">خروج</a></li>		
		<a class="icon">
           <!-- <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-youtube"></i>
             -->
          </a>
            </ul>
        </div>
      </div>


<div style="margin-top:120px;">
 <img src="images/logo.png" style="margin-left:10%;margin-right:10%;width:80%">
 
</div>

</body>
</html>