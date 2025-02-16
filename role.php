<?php

session_start();

if(!isset($_SESSION["user_id"])) header('Location: index.php');
if($_SESSION["usertype"]!="admin") header('Location: index.php');

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

$grid["caption"] = "الدول ذات الدور الدولي أو الإقليمي";
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
$grid["add_options"] = array("recreateForm" => true, "closeAfterEdit"=>true, 'width'=>'640', 'top'=>'200', 'left'=>'200');
$grid["edit_options"] = array("recreateForm" => true, "closeAfterEdit"=>true, 'width'=>'640', 'top'=>'200', 'left'=>'200');						

$g->table = "roles";
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
$col["title"] = "الدولة ذات التأثير";
$col["name"] = "affecting_country"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str = $g->get_dropdown_values("select distinct affecting_country  as k, affecting_country as v from affecting_countries");
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
$cols[] = $col;	


$col = array();
$col["title"] = "الأزمات";
$col["name"] = "crises"; 
$col["width"] = "200";
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "طبيعة الدور";
$col["name"] = "role"; 
$col["width"] = "200";
$col["editable"] = true;
$cols[] = $col;


$col = array();
$col["title"] = "المعلومة"; // caption of column
$col["name"] = "information";
$col["width"] = "200";
$col["editable"] = true;
$col["edittype"] = "textarea"; // render as textarea on edit
$col["editoptions"] = array("rows"=>5, "cols"=>30); // with these attributes
$cols[] = $col;

$col = array();
$col["title"] = "المصدر";
$col["name"] = "source"; 
$col["width"] = "200";
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = " التاريخ ";
$col["name"] = "info_date"; 
$col["editable"] = true;
$col["editrules"] = array("required"=>false);
$col["width"] = "200";
$col["formatter"] = "datetime";
$col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d/m/Y');
$cols[] = $col;	

$col = array();
$col["title"] = "التأثير";
$col["name"] = "effect_type"; 
$col["editable"] = true;
$col["width"] = "150";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str ="إيجابي:إيجابي;سلبي:سلبي";
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
$cols[] = $col;	

$col = array();
$col["title"] = "قوة التأثير";
$col["name"] = "effect_strength"; 
$col["editable"] = true;
$col["width"] = "150";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$col["edittype"] = "select"; // render as select
$str ="قوي:قوي;متوسط:متوسط;ضعيف:ضعيف";
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$col["editoptions"] = array("value"=>":;".$str);
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


 
<div style="margin-top:120px;">
 <?php echo $out;?>		
 
</div>


</body>
</html>