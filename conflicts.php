<?php
header('Content-Type: text/html; charset=utf-8');
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

$grid["caption"] = "تقييمات المؤشرات";
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

$g->table = "index_val";

$grid["add_options"] = array("recreateForm" => true, "closeAfterEdit"=>true, 'width'=>'640', 'top'=>'200', 'left'=>'200');
$grid["edit_options"] = array("recreateForm" => true, "closeAfterEdit"=>true, 'width'=>'640', 'top'=>'200', 'left'=>'200');						

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
$col["width"] = "50";
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "المنطقة";
$col["name"] = "region"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str = $g->get_dropdown_values("select distinct region as k, region as v from regions");
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
$cols[] = $col;	


$col = array();
$col["title"] = "نوع المؤشر";
$col["name"] = "index_name"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str = $g->get_dropdown_values("select distinct index_name as k, index_name as v from indexes");
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array(
						"value"=>":Select...;".$str, 
						"onchange" => array( "update_field" => "item",
											 "sql" => "select item as k, item as v from items WHERE index_name = '{index_name}'"
 											)
						);
$cols[] = $col;	

$col = array();
$col["title"] = "البند";
$col["name"] = "item"; 
$col["editable"] = true;
$col["width"] = "300";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str = $g->get_dropdown_values("select distinct item as k, item as v from items");
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
$cols[] = $col;	

$col = array();
$col["title"] = "السنة";
$col["name"] = "year"; 
$col["width"] = "100";
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "الشهر";
$col["name"] = "month"; 
$col["editable"] = true;
$col["width"] = "100";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str ="يناير:يناير;فبراير:فبراير;مارس:مارس;إبريل:إبريل;مايو:مايو;يونيو:يونيو;يوليو:يوليو;أغسطس:أغسطس;سبتمبر:سبتمبر;أكتوبر:أكتوبر;نوفمبر:نوفمبر;ديسمبر:ديسمبر";
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
$cols[] = $col;	



$col = array();
$col["title"] = "اليوم";
$col["name"] = "day"; 
$col["width"] = "100";
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الأول";
$col["name"] = "expert1"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الثاني";
$col["name"] = "expert2"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الثالث";
$col["name"] = "expert3"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;


$col = array();
$col["title"] = "تقييم الخبير الرابع";
$col["name"] = "expert4"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الخامس";
$col["name"] = "expert5"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير السادس";
$col["name"] = "expert6"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير السابع";
$col["name"] = "expert7"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الثامن";
$col["name"] = "expert8"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير التاسع";
$col["name"] = "expert9"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير العاشر";
$col["name"] = "expert10"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الحادي عشر";
$col["name"] = "expert11"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "تقييم الخبير الثاني عشر";
$col["name"] = "expert12"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "الوزن النسبي";
$col["name"] = "index_weight"; 
$col["width"] = "200";
$col["editable"] = false;
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
include_once("config.php");

$db_conf = array( 	
					"type" 		=> PHPGRID_DBTYPE, 
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);
				
$connn = mysqli_connect($db_conf["server"], $db_conf["user"], $db_conf["password"], $db_conf["database"]);	
$connn->set_charset('utf8');	
$sql="UPDATE `index_val` SET `index_weight`=(`expert1`+`expert2`+`expert3`+`expert4`+`expert5`+`expert6`+`expert7`+`expert8`+`expert9`+`expert10`+`expert11`+`expert12`)/12 WHERE `id`={$data['id']}";
$res=mysqli_query($connn,$sql);
}

// callback for update
function update_app($data)
{
include_once("config.php");

$db_conf = array( 	
					"type" 		=> PHPGRID_DBTYPE, 
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);
				
$connn = mysqli_connect($db_conf["server"], $db_conf["user"], $db_conf["password"], $db_conf["database"]);	
$connn->set_charset('utf8');	
$sql="UPDATE `index_val` SET `index_weight`=(`expert1`+`expert2`+`expert3`+`expert4`+`expert5`+`expert6`+`expert7`+`expert8`+`expert9`+`expert10`+`expert11`+`expert12`)/12 WHERE `id`={$data['id']}";
$res=mysqli_query($connn,$sql);	
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
<link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/flick/jquery-ui.custom.css"></link>	
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
  z-index:1;
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