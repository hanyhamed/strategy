<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Strategic Indexes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
.loading {
    width: 300px;
    box-sizing: border-box;
    position: absolute;
    right: 0px;
    left: 0px;
    top: 30%;
    display: table;
    margin: 0 auto;
}
.loading .loading-logo {
    position: absolute;
    width: 100%;
    right: 0px;
    left: 0px;
    display: table;
    margin: 0 auto;    
    border-top: 5px solid #ddd;
    border-bottom: 5px solid #ddd;
    padding: 12px 0px;
}
.loading::before, .loading::after {
    content: '';
    width: 0%;
    position: absolute;
    z-index: 99999;
}
.loading::before {
    border-top: 5px solid #d93025;
    animation: left 2s linear infinite;
}
.loading::after {
    border-top: 5px solid #616161;
    transform: translate(0px, 183px);
    right: 0;
    animation: right 2s linear infinite;
}

/* Standard Syntax */
@keyframes left {
    0% { width: 0%; }
    50% { width: 100%; }
}
/* For Safari Versions */
@-webkit-keyframes left {
  0% { width: 0%; }
    50% { width: 100%; }
}

/* Standard Syntax */
@keyframes right {
    0% { width: 0%; }
    50% { width: 100%; }
}
/* For Safari Versions */
@-webkit-keyframes right {
    0% { width: 0%; }
    50% { width: 100%; }
}
</style>
<script src="lib/js/jquery.min.js" type="text/javascript"></script>
<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>

<script>
myVar = setTimeout(gotohome, 5000);
function gotohome()
{
	//$( "#bdy" ).fadeIn( 3000, function() {
   
$( "#bdy" ).animate({backgroundColor: "rgb( 0, 0, 0 )"},3000,function(){location.replace("generate_results.php")});
  //});
}	
</script>
</head>
<body id="bdy">
    <div class="loading">
        <img src="./images/logo.png" class="loading-logo" alt="logo">
    </div>
</body>
</html


