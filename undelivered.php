<?php

session_start();

if(!isset($_SESSION["user_id"])) header('Location: login.php');
if($_SESSION["usertype"]!="marsadmin") header('Location: login.php');

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

$grid["caption"] = "الوجبات التي لم يتم استلامها";
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

$g->table = "requests";
if(isset($_REQUEST["from"]) && isset($_REQUEST["to"]))
$g->select_command ="SELECT * FROM `requests` WHERE `ddate`>=DATE('".$_REQUEST["from"]."') AND `ddate`<= DATE('".$_REQUEST["to"]."') AND delivered=0 AND meal_type<>'No meal for this day'";
else 
$g->select_command ="SELECT * FROM `requests` WHERE delivered=0 AND meal_type<>'No meal for this day'";
//$g->select_command ="SELECT * FROM `vendor_services` WHERE `vendor_id`=".$_SESSION["vendor_id"];
$g->set_options($grid);
$g->set_actions(array(	
						"add"=>false, // allow/disallow add
						"edit"=>false, // allow/disallow edit
						"delete"=>false, // allow/disallow delete
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
$col["title"] = "نوع الوجبة";
$col["name"] = "meal_type"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$str = $g->get_dropdown_values("select distinct meal_type as k, meal_type as v from meal_types");
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$cols[] = $col;	
/*
$col = array();
$col["title"] = "وردية العمل";
$col["name"] = "shift"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$str = "Shift 1: Shift 1;Shift 2:Shift 2;Shift 3:Shift 3";
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$cols[] = $col;	
*/

$col = array();
$col["title"] = "وردية العمل";
$col["name"] = "shift"; 
$col["editable"] = true;
$col["width"] = "200";
$col["edittype"] = "select"; // render as select
# fetch data from database, with alias k for key, v for value
$str = "Shift 1:From 2 AM to 6 AM;Shift 2:From 11 AM to 3 PM;Shift 3:From 6 PM to 10 PM";
$col["editoptions"] = array("value"=>":;".$str); 
$col["editrules"] = array("required"=>true);
$col["formatter"] = "select"; // display label, not value
$cols[] = $col;



$col = array();
$col["title"] = " التاريخ ";
$col["name"] = "ddate"; 
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["width"] = "200";
$col["formatter"] = "datetime";
$col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d/m/Y');
$cols[] = $col;	


$col = array();
$col["title"] = "اسم الموظف";
$col["name"] = "user_name"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;

$col = array();
$col["title"] = "البار كود";
$col["name"] = "barcode"; 
$col["width"] = "200";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;
/*
$col = array();
$col["title"] = "تم التسليم";
$col["name"] = "delivered"; 
$col["width"] = "200";
$col["editable"] = false;
$str="لا:0;1:نعم";
$col["editoptions"] =  array("value"=>$str);
$col["formatter"] = "checkbox";
$col["editrules"] = array("required"=>false);
$cols[] = $col;
*/
/*
$col = array();
$col["title"] = "Actions";
$col["name"] = "act"; 
$cols[] = $col;	
*/
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
           <li><a href="requests.php" >الوجبات المحجوزة</a></li>
        <li><a href="undelivered.php" >الوجبات التي لم يتم استلامها</a></li>
         
		  <li><a href="logout.php">خروج</a></li>
          <a class="icon">
           <!-- <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-youtube"></i>
             -->
          </a>
            </ul>
        </div>
      </div>

 <div style="width:100%; direction:rtl;   margin-right:20px; margin-top:20px;font-family:'Times New Roman';font-size:18px;">
	<table style="width:50%; margin-right:20px; direction:rtl;font-size:18px;border-color:black;border-style:solid;border-width:1px;border-radius:5px;">
	 <tr>
	 <td>
		<span>من</span>
     </td>
		<td>
		<input type="date" class="form-control" id="fromdate">
		</td>
		
		<td>
		<span>إلى</span>
		</td>
		<td>
		<input type="date" class="form-control" id="todate">
		</td>
		<td>
		<button style=" height:40px;font-size:20px; font-family:'Times new roman';" style="margin-left:20px;" id="btnfilter">فلترة بالتاريخ</button>
		</td>
		</tr>
		</table>
</div>     
<div style="margin-top:15px;">
 <?php echo $out;?>		
 
</div>

 <script>
	$(document).ready(function(e) {
		$("#btnfilter").click(function(e){
      if($("#fromdate").val()=="" || $("#todate").val()=="") alert("اختر التواريخ أولا");
	  else {
		  window.location.href="undelivered.php?from="+$("#fromdate").val()+"&to="+$("#todate").val();
	  }
		});
		
	})
	</script>

</body>
</html>