<?php
include "dbconfig.php";
$indexes=Array();
 
$sql="SELECT DISTINCT `index_name` FROM `indexes_months` WHERE `region`='".$_GET["country"]."'";
$res= mysqli_query($conn,$sql);
 while($rr=$res->fetch_row())	
 {
	 array_push($indexes,$rr[0]);
 }
 
 
function GetX($p1) 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `index_name`,`index_value` FROM `indexes_months` WHERE `region`='".$p1."' AND `cat`='المؤشرات السياسية' ORDER BY `month`";
	$res= mysqli_query($conn,$sql);
  $temp='" "';
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp='"'.$rr[0].'"';
	 else $temp=$temp.',"'.$rr[0].'"';
 }
 return $temp;
}

 
function GetY($p1) 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `index_name`,`index_value` FROM `indexes_months` WHERE `region`='".$p1."' AND `cat`='المؤشرات السياسية' ORDER BY `month`";
	$res= mysqli_query($conn,$sql);
  $temp="0";
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp=$rr[1];
	 else $temp=$temp.','.$rr[1];
 }
 return $temp;
}

function GetColors($p1) 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `index_name`,`index_value` FROM `indexes_months` WHERE `region`='".$p1."' AND `cat`='المؤشرات السياسية' ORDER BY `id`";
	$res= mysqli_query($conn,$sql);
  $temp='"'.$colors[5].'"';
 $i=0;
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp='"'.$colors[$i].'"';
	 else $temp=$temp.',"'.$colors[$i].'"';
	 $i++;
 }
 return $temp;
}

function GetInfo()
{
	include "dbconfig.php";
	$sql="SELECT `year`,`month`,`day`,`item`,`info` FROM `informations` WHERE `region`='".$_GET["country"]."' AND `index_name`='المؤشرات السياسية' ORDER BY `month_no` ,`day`";

     $res= mysqli_query($conn,$sql);
	 $i=1;
		while($rr=$res->fetch_row())	
	    {
			
			$cls='class="primary"';
			if($i % 2 == 0) $cls='class="active"';
				
	
      $temp=$temp.'<tr'. $cls.' ><td style="font-size:1.8em;">'.$i.'</td>';
      $temp=$temp.'<td style="font-size:1.8em;">'.$rr[0].'</td>';
      $temp=$temp.'<td style="font-size:1.8em;">'.$rr[1].'</td>';
	  $temp=$temp.'<td style="font-size:1.8em;">'.$rr[2].'</td>';
	  $temp=$temp.'<td style="font-size:1.8em;">'.$rr[3].'</td>';
	  $temp=$temp.'<td style="font-size:1.8em;">'.$rr[4].'</td></tr>';
	    $i++;
	    }
return $temp;		
}
function GetComment()
{
	$sql="SELECT `comment` FROM `comments` WHERE `region`='".$_GET["country"]."' AND `index_name`='المؤشرات السياسية'";
	include "dbconfig.php";
		$res= mysqli_query($conn,$sql);
		$temp="";
		if($rr=$res->fetch_row())	
	    {
			$temp=$rr[0];
		}
return $temp;		
}
?>


<!doctype html>
<html lang="zxx">

<!-- Mirrored from themfix.com/medishop/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 12:37:13 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
<!-- jQuery library -->
<link rel="stylesheet" href="css/bootstrap-flipped.css"  />

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
 <script src="js/Chart.js"></script> 
<title>نتائج المؤشرات الاستراتيجية</title>
<link rel="icon" type="image/png" href="favicon.png">
<style>

</style>

</head>
<body style="font-family:'Arial'">
<div class="container">
<h1>المؤشرات السياسية لدولة<?php echo " ".$_GET["country"]; ?></h1>
<?php
 echo '<div class="row"><canvas id="myChart" style="width:100%;"></canvas></div>';
 echo '<script>';
 echo 'const xValues = ['.GetX($_GET["country"]).'];';
 echo 'const yValues = ['.GetY($_GET["country"]).'];';
 echo 'const barColors = ['.GetColors($_GET["country"]).'];';
 echo 'new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
	  
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
	text: "المؤشرات السياسية لدولة '.$_GET["country"].'"
    }
  }
});';
 echo '</script>';
 
 ?>
 <style>
 .tab {
  float: left;
  height: 44px;
  margin: 0 8px -1px 0;
  border: 1px solid #DAE0E7;
 background: #F9F9F9;
  border-radius: 8px 8px 0 0;
  overflow: hidden;
}

.tab, .tab a {
  transition: all .25s;
}

.tab a {
  display: inline-block;
 padding-right:10px !important;
}

.tab a:first-child {
  padding: 12px 2px 12px 16px;
 white-space: nowrap;
}

.tab.tabClosed, .tab.tabClosed a:first-child {
  margin-right: 0;
  border-width: 0;
}

.tab.tabClosed {
  width: 0 !important;/* use important because we need to set the width of tabs in javascript in order to be able to animate them to 0 */
}

.tab.tabClosed a {
  opacity: 0;
}

.tab:hover {
  background: #fff;
}
 </style>
</div>
<div class="container">
<div class="row" style="padding-top:30px; padding-bottom:30px; text-align:left;">
<a class="btn btn-lg btn-success" href="result.php">عودة إلى الخريطة</a>
</div>

<div class="row">
<ul class="nav nav-tabs" style="direction:rtl;font-size:18px;">
  <li class="tab tabSelected">
    <a id="first"  href="charts.php?country=<?php echo $_GET["country"]; ?>">المؤشرات الأمنية و العسكرية</a>
  </li>
  <li class="tab selected">
    <a  id="second"  href="charts2.php?country=<?php echo $_GET["country"]; ?>">المؤشرات السياسية</a>
  </li>
  <li class="tab selected">
    <a  id="third"  href="charts3.php?country=<?php echo $_GET["country"]; ?>">مؤشرات التصعيد (صراعات الأقليمية)</a>
  </li>		
  <li class="tab selected">
    <a  id="fourth"  href="charts4.php?country=<?php echo $_GET["country"]; ?>">مؤشرات التهدئة (صراعات الأقليمية)</a>
  </li>
  <li class="tab selected">
    <a  id="fifth"  href="charts5.php?country=<?php echo $_GET["country"]; ?>">الأدوار الأقليمية و الدولية</a>
  </li>
  
</ul>

</div>
<div class="row alert alert-primary" style="text-alig:right;direction:rtl;color:red; font-size:24px;">
<?php echo GetComment(); ?>

</div>

</div>
<div class="container">

<div  class="table-responsive" >

<h2>هذه النتائج ظهرت بعد تطبيق المؤشرات على  المعلومات التي تم جمعها خلال فترة البحث على دولة <?php echo $_GET["country"];?></h2>
  <table class="table">

  <thead>
    <tr>
      <th style="font-size:1.2em;">#</th>
	  <th style="font-size:1.2em;">السنة</th>
      <th style="font-size:1.2em;">الشهر</th>
      <th style="font-size:1.2em;">اليوم</th>   
 	  <th style="font-size:1.2em;">المؤشر</th>
	  <th style="font-size:1.2em;">المعلومة</th>
	  
    </tr>
  </thead>
  <tbody id="tbody2">
   <?php echo GetInfo(); ?>
  </tbody>
</table>
  
   </div>    

</div>
</body>


</html>


