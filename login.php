<?php
error_reporting(0);
session_unset();
$errmsg="";
//if(!isset($_POST["pass"]) && !isset($_POST["username"])) session_destroy();
if(isset($_POST["pass"]) && $_POST["pass"]=="") $errmsg="من فضلك أدخل كلمة السر";
//check if password is written
if(isset($_POST["username"]) && $_POST["username"]=="") $errmsg="من فضلك أدخل البريد الإلكتروني";
//check if email is written
//if(isset($_SESSION["login_times"])) if($_SESSION["login_times"]>2) $errmsg=" لقد تم استنفاذ عدد محاولات تسجيل الدخول";
//if(!isset($_SESSION["login_times"])) $_SESSION["login_times"]=0;
// set the counter of login trials

if(isset($_POST["username"]) && $_POST["username"]!="" && isset($_POST["pass"]) && $_POST["pass"]!="" )
{


$errmsg=logFunc($_POST["username"],$_POST["pass"]);	
//check if valid user 




}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="direction:rtl;text-align:center;">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="login.php" method="post">
					<span class="login100-form-title p-b-32" style="text-align:center;">
						تسجيل الدخول
					</span>

					<span class="txt1 p-b-11">
						البريد  الإلكتروني
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						كلمة السر
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<!--<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>-->

					<div  style="text-align:center; width:100%; direction:ltr">
						<button class="login100-form-btn" type="submit">
							تسجيل الدخول
						</button>
					</div>
                  <div class="container-login100-form-btn" style="text-align:center;">
		             <span class="txt1 p-b-11" style="color:red">
						<?php echo $errmsg; ?>
					</span>
          		</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php 
function logFunc($eml,$pwd) 
{
	$temp="خطأ في اسم المستخدم أو كلمة السر";
	include "config.php";
	$db_conf = array( 	
					"type" 		=> PHPGRID_DBTYPE, 
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);
			
//connect to to database				
$conn = mysqli_connect($db_conf["server"], $db_conf["user"], $db_conf["password"], $db_conf["database"]);				
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	else
	{
		$conn->set_charset('utf8');
	//check if user found
	$sql="SELECT COUNT(`id`) FROM `users` WHERE `username`='".$eml."' AND `password`='".$pwd."'";
	$result= mysqli_query($conn,$sql);
	
$cc=0;	
if($row=$result->fetch_row())
{
	$cc=intval($row[0]);
}

if($cc>0)
{


	$sql="SELECT `id`,`user_type` FROM `users` WHERE `username`='".$eml."' AND `password`='".$pwd."'";
	$result= mysqli_query($conn,$sql);
	
if($row=$result->fetch_row())
{
    
    
	session_start();
	//if valid user store user id and user group
	$_SESSION["user_id"]=strval($row[0]);
	$_SESSION["usertype"]=$row[1];
	
	if($_SESSION["usertype"]=="admin") header('Location: splash.php'); 
	if($_SESSION["usertype"]=="result") header('Location: splash2.php'); 
}
}


}

	
return $temp;
}

?>