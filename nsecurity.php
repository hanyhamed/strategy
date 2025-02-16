<?php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();

if(!isset($_SESSION["user_id"])) header('Location: login.php');
if($_SESSION["usertype"]!="admin") header('Location: login.php');

include_once("config.php");

// include and create object
include(PHPGRID_LIBPATH."/inc/jqgrid_dist.php");
//include "../includes/library.php";

// Database config file to be passed in phpgrid constructor
$db_conf = array( 	
					"type" 		=> PHPGRID_DBTYPE, 
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);
				
				
		
$g = new jqgrid($db_conf);

$grid["caption"] = "مؤشرات الأمن القومي";
$grid["autowidth"] = true;
$grid["autoheight"] = false;
$grid["height"] = 400;
//$grid["scroll"] = true;
$grid["forceFit"] = false;
$grid["shrinkToFit"] = false;
$grid["direction"] = "rtl";	
$grid["export"] = array("format"=>"xls", 
						"filename"=>"my-file", 
						"heading"=>"Export to Excel Test", 
						"range"=>"filtered");

$g->table = "nsecurity";
//if(isset($_REQUEST["from"]) && isset($_REQUEST["to"]))
//$g->select_command ="SELECT * FROM `requests` WHERE `ddate`>=DATE('".$_REQUEST["from"]."') AND `ddate`<= DATE('".$_REQUEST["to"]."')";
//$g->select_command ="SELECT * FROM `vendor_services` WHERE `vendor_id`=".$_SESSION["vendor_id"];
$g->set_options($grid);
$g->set_actions(array(	
						"add"=>true, // allow/disallow add
						"edit"=>true, // allow/disallow edit
						"delete"=>true, // allow/disallow delete
						"view"=>true, // allow/disallow delete
						"rowactions"=>true, // show/hide row wise edit/del/save option
						"showhidecolumns" => false,
						"export"=>true
					) 
				);
				
				

$col = array();
$col["title"] = "م";
$col["name"] = "id"; 
$col["width"] = "100";
$col["editable"] = false;
$cols[] = $col;



$col = array();
$col["title"] = " التاريخ ";
$col["name"] = "cdate"; 
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["width"] = "100";
$col["formatter"] = "datetime";
$col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d/m/Y');
$cols[] = $col;	


$col = array();
$col["title"] = "التداعيات";
$col["name"] = "drawbacks"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "المؤشر";
$col["name"] = "nsindex"; 
$col["width"] = "100";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;


$col = array();
$col["title"] = "الوزن النسبي";
$col["name"] = "weight"; 
$col["width"] = "100";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;


$col = array();
$col["title"] = "النتيجة";
$col["name"] = "result"; 
$col["width"] = "100";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;


$col = array();
$col["title"] = "Actions";
$col["name"] = "act"; 
$cols[] = $col;	

$g->set_columns($cols);	

$e["on_after_insert"] = array("add_app", null, true);
$e["on_update"] = array("update_app", null, true);
$e["on_delete"] = array("delete_app", null, true);


$g->set_events($e);


function add_app($data)
{

}

// callback for update
function update_app($data)
{
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////
function delete_upload($data)
{
	
	
}


 //pageHeaderdb();				
//echo $out;			
//PageFooter();
$out = $g->render("list1");	
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

</style>
</head>
<body style="background:#F7F7F7">

  <div class="nav" style="direction:rtl; z-index:10000;">
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
        
        <div class="nav-links">
           <ul>
				<li><a href="countries.php" >الدول</a></li>
          <li><a href="choice.php?choice=crises" >مؤشرات الأزمات</a></li>
          <li><a href="choice.php?choice=conflicts" >مؤشرات الصراع</a></li>
		  <li><a href="choice.php?choice=nsecurity" >مؤشر الأمن القومي</a></li>
         
		  <li><a href="comments.php">التعليق على النتائج</a></li> <li><a href="role_comments.php">التعليق على الأدوار</a></li><li><a href="logout.php">خروج</a></li>	  	 
          <a class="icon">
           <!-- <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-youtube"></i>
             -->
          </a>
            </ul>
        </div>
      </div>


<div style="margin-top:15px;">
 <?php echo $out;?>		
 
</div>

 

</body>
</html>