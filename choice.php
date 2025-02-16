<?php

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

if(!isset($_SESSION["user_id"])) header('Location: login.php');



include_once("config.php");

$db_conf = array( 	
					"type" 		=> PHPGRID_DBTYPE, 
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);
				
$con = mysqli_connect($db_conf["server"], $db_conf["user"], $db_conf["password"], $db_conf["database"]);		
$con->set_charset('utf8');
$sql="SELECT country1 FROM countries";
$res= mysqli_query($con,$sql);
	$temp="<div><table>";
	$temp2="<div><table>";
	$i=1;
	while($rr=$res->fetch_row())	
	{
		$temp=$temp."<tr><td><input  id='second".$i."'  name='second' type='radio' onclick ='getsecond(".$i.")' value='".$rr[0]."'/></td><td><span>".$rr[0]."</span></td></tr>";
		$temp2=$temp2."<tr><td><input id='first".$i."' name='first'  type='radio'  onclick ='getfirst(".$i.")' value='".$rr[0]."'/></td><td><span>".$rr[0]."</span></td></tr>";
	$i++;
	}
	$temp=$temp."</table></div>";
	$temp2=$temp2."</table></div>";
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

<img src="images/bak2.png" style="margin-left:10%;margin-right:10%;width:80%;margin-top:10%;">
<div class="d-flex justify-content-center" >
 
 <table>
 <tr>
 <td>
 <div style="direction:rtl; font-family:'Times New Roman';">
  <h2 style="color:#7F0000;">طرف الصراع الثاني<h2>
  <?php echo $temp; ?>
 </div>
 </td>
 <td>
 <img src="images/map.png">
 </td>
 <td>
 <div style="direction:rtl;font-family:'Times New Roman';">
 <h2 style="color:#7F0000;">طرف الصراع الأول<h2>
 <?php echo $temp2; ?>
 </div>
 </td>
 </tr>
<tr>
<td></td>
<td><button id="btnchoose" class="btn-lg btn-primary" style="width:100%">إختيار أطراف الصراع</button></td>
<td></td>
</tr>
</table>
</div>
<script>
	var country1="";
	var country2="";

function getfirst(param)
{
	if (document.getElementById('first'+param).checked) country1=document.getElementById('first'+param).value;
}

function getsecond(param)
{
	if (document.getElementById('second'+param).checked) country2=document.getElementById('second'+param).value;
}

$(document).ready(function(e) {

$("#btnchoose").click(function(e){
	if ( country1=="")
	{
		Swal.fire({type: 'warning',
                                title: '',
                                text: "إختر طرف النزاع الأول",
                                animation: false,
                                customClass: {popup: 'animate__animated animate__fadeInUp'},
                                onClose: () => {
	                              return;
	                              }
                                  }); 
								  
		 return;                           	
	}
	
	if (country2=="")
	{
		Swal.fire({type: 'warning',
                                title: '',
                                text: "إختر طرف النزاع الثاني",
                                animation: false,
                                customClass: {popup: 'animate__animated animate__fadeInUp'},
                                onClose: () => {
	                              return;
	                              }
                                  }); 
				                            	
	return;											
	}
	
	if(country1==country2)
	{
		Swal.fire({type: 'warning',
                                title: '',
                                text: "يجب أن يكون طرفي النزاع بلدين مختلفين",
                                animation: false,
                                customClass: {popup: 'animate__animated animate__fadeInUp'},
                                onClose: () => {
	                              return;
	                              }
                                  }); 
								  
		 return;                
	}
if(country1!="" && country2!="")
{
var url_string = window.location.href;
var url = new URL(url_string);
var choice = url.searchParams.get("choice");
window.location.replace(choice+".php")
}
});

})
</script>
</body>
</html>