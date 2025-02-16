<?php

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

if(!isset($_SESSION["user_id"])) header('Location: login.php');
if($_SESSION["usertype"]!="result") header('Location: login.php');



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" media="screen" href="css/css.css"></link>	
<link rel="stylesheet" href="./css/sweetalert2.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script src="./js/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>
<body style="background:#F7F7F7">

  <div class="nav" style="direction:rtl;">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">

          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
     
      </div>

<img src="images/bak3.png" style="margin-left:10%;margin-right:10%;width:80%;margin-top:5%;">
<div class="d-flex justify-content-center" >
 <div class=" row col-12 d-flex justify-content-center" style="direction:rtl;" >
 <select id="indexies" class="form-control col-6" aria-label="Default select example" style="font-family:'Times New Roman';font-size:18px;">
  <option selected>اختر المؤشر</option>
  <option value="1">مؤشر الصراع</option>
  <option value="2">مؤشر الأزمة</option>
  <option value="3">مؤشر الأمن القومي</option>
</select>
 </div>

</div>

 <div class="col-12 d-flex justify-content-center">

 <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

 </div>
<script>
function drawconflict()
{
	const context = myChart.getContext('2d');

context.clearRect(0, 0, myChart.width, myChart.height);
	
	var xValues = ["1-3-2022", "7-3-2022", "14-3-2022", "24-3-2022"];
var yValues = [9, 5, 9, 6];
var barColors = ["red", "green","red","orange"];

new Chart("myChart", {
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
      text: "مؤشرات الصراع"
    }
  }
});
}

function drawcrises()
{
	const context = myChart.getContext('2d');

context.clearRect(0, 0, myChart.width, myChart.height);

	var xValues = ["1-3-2022", "8-3-2022", "14-3-2022", "22-3-2022"];
var yValues = [4, 5, 9, 2];
var barColors = ["green", "orange","red","green"];

new Chart("myChart", {
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
      text: "مؤشرات الأزمة"
    }
  }
});
}

function drawsecurity()
{
	const context = myChart.getContext('2d');

context.clearRect(0, 0, myChart.width, myChart.height);
	
	var xValues = ["1-3-2022", "7-3-2022", "14-3-2022", "27-3-2022"];
var yValues = [2, 5, 7, 9];
var barColors = ["green", "yellow","orange","red"];

new Chart("myChart", {
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
      text: "مؤشرات الأزمة"
    }
  }
});
}

$(document).ready(function(e) {
	$("#indexies").change(function(){
	var zz=	$('#indexies').find(":selected").val().trim();
	if(zz=="1") drawconflict();
	if(zz=="2") drawcrises();
	if(zz=="3") drawsecurity();
	});
})
</script>
</body>
</html>