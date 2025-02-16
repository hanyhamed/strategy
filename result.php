<?php

function GetpX() 
{
	
	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `political` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='" "';
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp='"'.$rr[0].'"';
	 else $temp=$temp.',"'.$rr[0].'"';
 }
 return $temp;
}

 
function GetpY() 
{
	
	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `political` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='0';
 while($rr=$res->fetch_row())	
 {
	 
	 if($temp=="") $temp=$rr[1];
	 else $temp=$temp.','.$rr[1];
 }
 return $temp;
}

function GetpColors() 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `political` WHERE 1";
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
///////////////////////////////////////////////////////////////////////////////////////////////
function GetmX() 
{
	
	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `martial` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='" "';
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp='"'.$rr[0].'"';
	 else $temp=$temp.',"'.$rr[0].'"';
 }
 return $temp;
}

 
function GetmY() 
{
	
	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `martial` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='0';
 while($rr=$res->fetch_row())	
 {
	 
	 if($temp=="") $temp=$rr[1];
	 else $temp=$temp.','.$rr[1];
 }
 return $temp;
}

function GetmColors() 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `region`, `val` FROM `martial` WHERE 1";
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
//////////////////////////////////////////////////////////////////////////////////
function GetiX() 
{
	
	include "dbconfig.php";
	$sql="SELECT `affecting_country`, `val` FROM `inter` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='" "';
 while($rr=$res->fetch_row())	
 {
	 if($temp=="") $temp='"'.$rr[0].'"';
	 else $temp=$temp.',"'.$rr[0].'"';
 }
 return $temp;
}

 
function GetiY() 
{
	
	include "dbconfig.php";
	$sql="SELECT `affecting_country`, `val` FROM `inter` WHERE 1";
	$res= mysqli_query($conn,$sql);
 $temp='0';
 while($rr=$res->fetch_row())	
 {
	 
	 if($temp=="") $temp=$rr[1];
	 else $temp=$temp.','.$rr[1];
 }
 return $temp;
}

function GetiColors() 
{
	$colors= array("red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown");

	include "dbconfig.php";
	$sql="SELECT `affecting_country`, `val` FROM `inter` WHERE 1";
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
?>
<!doctype html>
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="nie"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
<!--




 *** DO NOT COPY ANYTHING FROM THE SOURCE CODE OF THIS DEMO PAGE ! ***


 * CSSMap plugin - Africa [ https://cssmapsplugin.com/get/africa ]
 * version: 5.6.0 - June 16th, 2020
 *
 * author: Łukasz Popardowski { Winston_Wolf }
 * license: https://cssmapsplugin.com/license
 * FAQ: https://cssmapsplugin.com/faq
 *
 * email: https://cssmapsplugin.com/contact
 * twitter: @CSSMapplugin




-->
  <link rel="stylesheet" type="text/css" href="includes/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="cssmap-africa/cssmap-africa.css" media="screen" />
<script src="js/jquery.min.js"></script>
 <script src="js/Chart.js"></script> 
<title>CSSMap - Africa</title>
</head>
<body id="demo-page-africa">

  <!--[if lt IE 9 ]><div id="ie-error">This demo page will not work correctly in your web browser!</div><![endif]-->

  <header class="page-header">
   <div class="wrapper" style="text-align:center;">
     <h5>الانذار المبكر للتنبؤ بالصراعات بين الدول في إقليمي حوض النيل والقرن الأفريقي</h5>

    <!-- MAIN MENU -->
    <!--<nav id="main-menu" class="main-menu-list">
      <ul>
        <li><a href="#section-demo" class="in-nav">Demo</a></li>
        <li><a href="#section-setup" class="in-nav">Setup &amp; settings</a></li>
        <li>
          <a href="#section-options" class="in-nav">Script options</a>
          <ul class="sub-menu">
            <li><a href="#options-defaults" class="in-nav">Defaults</a></li>
            <li><a href="#option-visiblelist" class="in-nav">Visible list of regions</a></li>
            <li><a href="#option-multipleclick" class="in-nav">Multiple Clicks mode</a></li>
            <li><a href="#option-agentslist" class="in-nav">List of addresses</a></li>
            <li><a href="#option-markers" class="in-nav">Markers over the map</a></li>
            <li><a href="#option-formsupport" class="in-nav">Form support</a></li>
            <li><a href="#option-navigation" class="in-nav">Navigation controls</a></li>
            <li><a href="#option-custom-events" class="in-nav">Custom events</a></li>
          </ul>
        </li>
        <li><a href="#section-requirements" class="in-nav">Requirements</a></li>
        <li>
          <a href="#section-customizing-css" class="in-nav">Customizing map in <abbr title="Cascading Style Sheets">CSS</abbr></a>
          <ul class="sub-menu">
            <li><a href="#section-editable-elements" class="in-nav">Editable elements</a></li>
            <li><a href="#section-crop-map" class="in-nav">Cropping the map</a></li>
            <li><a href="#section-hide-elements" class="in-nav">Hide list elements</a></li>
          </ul>
        </li>
        <li><a href="#section-map-style" class="in-nav">Editing map style</a></li>
        <li><a href="#section-troubleshooting" class="in-nav">Troubleshooting</a></li>
        <li><a href="#section-license" class="in-nav">License</a></li>
        <li><a href="#section-changelog" class="in-nav">Changelog</a></li>
        <li><a href="#section-contact" class="in-nav">Support &amp; contact</a></li>
      </ul>
    </nav>-->
    <!-- END OF THE MAIN MENU -->
<div style="width:100%;">
<table style="width:100%;">
<tr>
<td >
<?php
 echo '<div style="width:350px !important ;"><canvas id="myChart1" style="width:350px !important ;"></canvas></div>';
 echo '<script>';
 echo 'const xValues = ['.GetpX().'];';
 echo 'const yValues = ['.GetpY().'];';
 echo 'const barColors = ['.GetpColors().'];';
 echo 'new Chart("myChart1", {
  type: "bar",
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
	text: " الأزمات السياسية الداخلية "
    }
	 
  }
});';

 echo '</script>';
 
 ?>
</td>
<td >
<?php
 echo '<div style="width:350px !important ;"><canvas id="myChart2"  style="width:350px !important ;" ></canvas></div>';
 echo '<script>';
 echo 'const xValues2 = ['.GetmX().'];';
 echo 'const yValues2 = ['.GetmY().'];';
 echo 'const barColors2 = ['.GetmColors().'];';
 echo 'new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues2,
    datasets: [{
      backgroundColor: barColors2,
      data: yValues2
	  
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
	text: "الأزمات الأمنية والعسكرية الداخلية"
    }
	 
  }
});';

 echo '</script>';
 
 ?>
</td>
<td >
<?php
 echo '<div style="width:350px !important ;"><canvas id="myChart3"  style="width:350px !important ;"></canvas></div>';
 echo '<script>';
 echo 'const xValues3 = ['.GetiX().'];';
 echo 'const yValues3 = ['.GetiY().'];';
 echo 'const barColors3 = ['.GetiColors().'];';
 echo 'new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues3,
    datasets: [{
      backgroundColor: barColors3,
      data: yValues3
	  
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
	text: "الأدوار الدولية والإقليمية "
    }
	 
  }
});';

 echo '</script>';
 
 ?>
</td>
</tr>
</table>
</div>
   </div><!-- END .wrapper -->
   
  </header>

  <article class="page-content">

    <!-- SECTION DEMO -->
    <section  id="section-demo">
     <hr />

      <!-- MAP -->   
	  <div class="wrapper" style="text-align:center;">
	  
      <div id="display-map" class="display-demo-map">
        <!-- CSSMap - Africa -->
<div id="map-africa">
 <ul class="africa">
  <li class="afr1"><a href="#algeria">Algeria</a></li>
  <li class="afr2"><a href="#angola">Angola</a></li>
  <li class="afr3"><a href="#benin">Benin</a></li>
  <li class="afr4"><a href="#botswana">Botswana</a></li>
  <li class="afr5"><a href="#burkina-faso">Burkina Faso</a></li>
  <li ondblclick="showresult('بوروندي')" class="afr6"><a ondblclick="showresult('بوروندي')" href="#burundi">بوروندي</a></li>
  <li class="afr7"><a href="#cameroon">Cameroon</a></li>
  <li class="afr8"><a href="#cape-verde" class="tooltip-middle">Cape Verde <small>(Portugal)</small></a></li>
  <li class="afr9"><a href="#canary-islands" class="tooltip-middle">Canary Islands <small>(Spain)</small></a></li>
  <li class="afr10"><a href="#central-african-republic">Central African Republic</a></li>
  <li class="afr11"><a href="#chad">Chad</a></li>
  <li class="afr12"><a href="#comoros" class="tooltip-middle">Comoros</a></li>
  <li class="afr13"><a href="#congo">Congo</a></li>
  <li class="afr14"><a href="#cote-d-ivoire">Côte d'Ivoire</a></li>
  <li class="afr15" ondblclick="showresult('الكونغو الديمقراطية')" ><a ondblclick="showresult('الكونغو الديمقراطية')" href="#democratic-republic-of-the-congo">الكونغو الديمقراطية</a></li>
  <li class="afr16" ondblclick="showresult('جيبوتي')" ><a ondblclick="showresult('جيبوتي')" href="#djibouti">جيبوتي</a></li>
  <li class="afr17"><a href="#egypt">Egypt</a></li>
  <li class="afr18"><a href="#equatorial-guinea">Equatorial Guinea</a></li>
  <li class="afr19" ondblclick="showresult('إريتريا')" ><a ondblclick="showresult('إريتريا')"  href="#eritrea">إريتريا</a></li>
  <li ondblclick="showresult('أثيوبيا')"  class="afr20"><a ondblclick="showresult('أثيوبيا')"  href="#ethiopia">أثيوبيا</a></li>
  <li class="afr21"><a href="#gabon">Gabon</a></li>
  <li class="afr22"><a href="#gambia">Gambia</a></li>
  <li class="afr23"><a href="#ghana">Ghana</a></li>
  <li class="afr24"><a href="#guinea">Guinea</a></li>
  <li class="afr25"><a href="#guinea-bisaau">Guinea-Bisaau</a></li>
  <li ondblclick="showresult('كينيا')" class="afr26"><a ondblclick="showresult('كينيا')" href="#kenya">كينيا</a></li>
  <li class="afr27"><a href="#lesotho">Lesotho</a></li>
  <li class="afr28"><a href="#liberia">Liberia</a></li>
  <li class="afr29"><a href="#libya">Libya</a></li>
  <li class="afr30"><a href="#madagascar">Madagascar</a></li>
  <li class="afr31"><a href="#madeira" class="tooltip-middle">Madeira <small>(Portugal)</small></a></li>
  <li class="afr32"><a href="#malawi">Malawi</a></li>
  <li class="afr33"><a href="#mali">Mali</a></li>
  <li class="afr34"><a href="#mauritania">Mauritania</a></li>
  <li class="afr35"><a href="#mauritius">Mauritius</a></li>
  <li class="afr36"><a href="#mayotte">Mayotte <small>(France)</small></a></li>
  <li class="afr37"><a href="#morocco">Morocco</a></li>
  <li class="afr38"><a href="#mozambique">Mozambique</a></li>
  <li class="afr39"><a href="#namibia">Namibia</a></li>
  <li class="afr40"><a href="#niger">Niger</a></li>
  <li class="afr41"><a href="#nigeria">Nigeria</a></li>
  <li class="afr42"><a href="#reunion">Réunion <small>(France)</small></a></li>
  <li ondblclick="showresult('رواندا')" class="afr43"><a ondblclick="showresult('رواندا')" href="#rwanda">رواندا</a></li>
  <li class="afr44"><a href="#sahrawi-arab-democratic-republic">Sahrawi Arab Democratic Republic</a></li>
  <li class="afr45"><a href="#sao-tome-and-principe" class="tooltip-middle">São Tomé and Príncipe</a></li>
  <li class="afr46"><a href="#senegal">Senegal</a></li>
  <li class="afr47"><a href="#seychelles" class="tooltip-middle">Seychelles</a></li>
  <li class="afr48"><a href="#sierra-leone">Sierra Leone</a></li>
  <li ondblclick="showresult('الصومال')" class="afr49"><a ondblclick="showresult('الصومال')" href="#somalia">الصومال</a></li>
  <li ondblclick="showresult('الصومال')" class="afr50"><a ondblclick="showresult('الصومال')" href="#somaliland">الصومال</a></li>
  <li class="afr51"><a href="#south-africa">South Africa</a></li>
  <li class="afr52" ondblclick="showresult('جنوب السودان')"><a ondblclick="showresult('جنوب السودان')" href="#south-sudan">جنوب السودان</a></li>
  <li ondblclick="showresult('السودان')" class="afr53"><a ondblclick="showresult('السودان')" href="#sudan">السودان</a></li>
  <li class="afr54"><a href="#swaziland">Swaziland</a></li>
  <li class="afr55"><a href="#togo">Togo</a></li>
  <li class="afr56"><a href="#tunisia">Tunisia</a></li>
  <li ondblclick="showresult('أوغندا')" class="afr57"><a ondblclick="showresult('أوغندا')" href="#uganda">أوغندا</a></li>
  <li ondblclick="showresult('تنزانيا')" class="afr58"><a ondblclick="showresult('تنزانيا')" href="#united-republic-of-tanzania">تنزانيا</a></li>
  <li class="afr59"><a href="#zambia">Zambia</a></li>
  <li class="afr60"><a href="#zimbabwe">Zimbabwe</a></li>
 </ul>
</div>
<div>

<style>
.square1 {
  height: 20px !important;
  width: 20px !important;
  display:block !important;
}
</style>

<table style="font-size:18px;">
<tr><td></td><td>مؤشرات التصعيد</td><td></td><td>مؤشرات التهدئة</td></tr>
<tr><td><div style="background:#4E031E;" class="square1"></div></td><td>قوي</td><td><div style="background:#164C00;" class="square1"></div></td><td>قوي</td></tr>
<tr><td><div style="background:#F61C09;" class="square1"></div></td><td>متوسط</td><td><div style="background:#35C870;" class="square1"></div></td><td>متوسط</td></tr>
<tr><td><div style="background:#FF7F7F;" class="square1"></div></td><td>ضعيف</td><td><div style="background:#4CFF00;" class="square1"></div></td><td>ضعيف</td></tr>
</table>
</div>
<!-- END OF THE CSSMap - Africa -->
        <div id="demo-form-fields" class="demo-form-fields">
          <ul>
            <li><label for="demo-select">Select dropdown</label><div class="select-field"><select id="demo-select" name="demo-select" class="hidden-field"><option value="0">-- Select location</option></select></div></li>
            <li><label for="demo-input">Input field</label><input type="text" id="demo-input" name="demo-input" class="hidden-field" /></li>
          </ul>
        </div>
<div id="demo-agents" class="demo-agents-list wrapper">
 <ul>
  <li id="algeria"><h3>Algeria</h3><p>Some info about Algeria, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="angola"><h3>Angola</h3><p>Some info about Angola, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="benin"><h3>Benin</h3><p>Some info about Benin, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="botswana"><h3>Botswana</h3><p>Some info about Botswana, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="burkina-faso"><h3>Burkina Faso</h3><p>Some info about Burkina Faso, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="burundi"><h3>Burundi</h3><p>Some info about Burundi, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="cameroon"><h3>Cameroon</h3><p>Some info about Cameroon, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="cape-verde"><h3>Cape Verde (Portugal)</h3><p>Some info about Cape Verde (Portugal), or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="canary-islands"><h3>Canary Islands (Spain)</h3><p>Some info about Canary Islands (Spain), or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>
  <li id="central-african-republic"><h3>Central African Republic</h3><p>Some info about Central African Republic, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="chad"><h3>Chad</h3><p>Some info about Chad, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="comoros"><h3>Comoros</h3><p>Some info about Comoros, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="congo"><h3>Congo</h3><p>Some info about Congo, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>
  <li id="cote-d-ivoire"><h3>Côte d'Ivoire</h3><p>Some info about Côte d'Ivoire, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="democratic-republic-of-the-congo"><h3>Democratic Republic of the Congo</h3><p>Some info about Democratic Republic of the Congo, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="djibouti"><h3>Djibouti</h3><p>Some info about Djibouti, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="egypt"><h3>Egypt</h3><p>Some info about Egypt, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="equatorial-guinea"><h3>Equatorial Guinea</h3><p>Some info about Equatorial Guinea, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="eritrea"><h3>Eritrea</h3><p>Some info about Eritrea, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="ethiopia"><h3>Ethiopia</h3><p>Some info about Ethiopia, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="gabon"><h3>Gabon</h3><p>Some info about Gabon, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="gambia"><h3>Gambia</h3><p>Some info about Gambia, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="ghana"><h3>Ghana</h3><p>Some info about Ghana, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="guinea"><h3>Guinea</h3><p>Some info about Guinea, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="guinea-bisaau"><h3>Guinea-Bisaau</h3><p>Some info about Guinea-Bisaau, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="kenya"><h3>Kenya</h3><p>Some info about Kenya, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="lesotho"><h3>Lesotho</h3><p>Some info about Lesotho, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="liberia"><h3>Liberia</h3><p>Some info about Liberia, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="libya"><h3>Libya</h3><p>Some info about Libya, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="madagascar"><h3>Madagascar</h3><p>Some info about Madagascar, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="madeira"><h3>Madeira (Portugal)</h3><p>Some info about Madeira (Portugal), or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="malawi"><h3>Malawi</h3><p>Some info about Malawi, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="mali"><h3>Mali</h3><p>Some info about Mali, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="mauritania"><h3>Mauritania</h3><p>Some info about Mauritania, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="mauritius"><h3>Mauritius</h3><p>Some info about Mauritius, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="mayotte"><h3>Mayotte (France)</h3><p>Some info about Mayotte (France), or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="morocco"><h3>Morocco</h3><p>Some info about Morocco, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>
  <li id="mozambique"><h3>Mozambique</h3><p>Some info about Mozambique, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="namibia"><h3>Namibia</h3><p>Some info about Namibia, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="niger"><h3>Niger</h3><p>Some info about Niger, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="nigeria"><h3>Nigeria</h3><p>Some info about Nigeria, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="reunion"><h3>Réunion (France)</h3><p>Some info about Réunion (France), or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="rwanda"><h3>Rwanda</h3><p>Some info about Rwanda, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="sahrawi-arab-democratic-republic"><h3>Sahrawi Arab Democratic Republic</h3><p>Some info about Sahrawi Arab Democratic Republic, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="sao-tome-and-principe"><h3>São Tomé and Príncipe</h3><p>Some info about São Tomé and Príncipe, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="senegal"><h3>Senegal</h3><p>Some info about Senegal, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="seychelles"><h3>Seychelles</h3><p>Some info about Seychelles, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="sierra-leone"><h3>Sierra Leone</h3><p>Some info about Sierra Leone, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="somalia"><h3>Somalia</h3><p>Some info about Somalia, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="somaliland"><h3>Somaliland</h3><p>Some info about Somaliland, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="south-africa"><h3>South Africa</h3><p>Some info about South Africa, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>
  <li id="south-sudan"><h3>South Sudan</h3><p>Some info about South Sudan, or list of addresses, or anything else you want to display here.</p><p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper.</p>  </li>
  <li id="sudan"><h3>Sudan</h3><p>Some info about Sudan, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="swaziland"><h3>Swaziland</h3><p>Some info about Swaziland, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>
  <li id="togo"><h3>Togo</h3><p>Some info about Togo, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>
  <li id="tunisia"><h3>Tunisia</h3><p>Some info about Tunisia, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="uganda"><h3>Uganda</h3><p>Some info about Uganda, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>
  <li id="united-republic-of-tanzania"><h3>United Republic of Tanzania</h3><p>Some info about United Republic of Tanzania, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>
  <li id="zambia"><h3>Zambia</h3><p>Some info about Zambia, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>
  <li id="zimbabwe"><h3>Zimbabwe</h3><p>Some info about Zimbabwe, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>
 </ul>
</div>
<div id="demo-markers">
 <ul class="cssmap-pins">
  <li class="cssmap-pin" data-cssmap-coords="332,502">

   <div class="cssmap-tooltip-content">
    Proin quis tortor orci. Etiam at risus et justo dignissim congue.
   </div>
   <a href="#" class="cssmap-marker"><img src="includes/pin.png" width="20" height="25" alt="pin"/></a>

  </li>
  <li class="cssmap-pin" data-cssmap-coords="920,1140">

   <div class="cssmap-tooltip-content">
    Proin quis tortor orci. Etiam at risus et justo dignissim congue.
   </div>
   <a href="#" class="cssmap-marker"><img src="includes/pin.png" width="20" height="25" alt="pin"/></a>

  </li>
 </ul>
</div>
      </div>
      <!-- END OF THE MAP -->

     <!--<div class="wrapper">

      <!-- MAP SETTINGS -->
      <div id="map-settings" class="map-settings fixed-container" style="display:none;">
        <form id="map-settings-form" name="map-settings-form" action="#" method="post" novalidate>
          <fieldset id="options-basic">
           <legend class="h-icon icon-options-settings">CSSMap settings</legend>
            <ul>
              <li class="inline-label">
                <label for="map-set-size">Size (map width)</label>
                <div class="select-field">
                 <select id="map-set-size" name="map-set-size">
                  <option value="250">250 px</option>
<option value="320">320 px</option>
<option value="430">430 px</option>
<option value="540">540 px</option>
<option value="650">650 px</option>
<option value="750">750 px</option>
<option value="850">850 px</option>
<option value="960">960 px</option>
<option value="1280">1280 px</option>
<option value="1450" selected>1450 px</option>
                 </select>
                </div>
              </li>
              <li>
                Map style:
                <ul id="map-set-style-list" class="centered-list-items">
                  <li>
                    <label for="map-set-style" class="radio-image-center">
                      <input type="radio" id="map-set-style" name="map-set-style[]" value="default" checked />
                      <span><img src="includes/img/map-style-default.png" alt="default" title="Map style: default" height="50" width="50" /></span>
                    </label>
                  </li>
                  <li>
                    <label for="map-set-style1" class="radio-image-center">
                      <input type="radio" id="map-set-style1" name="map-set-style[]" value="blue" />
                      <span><img src="includes/img/map-style-blue.png" alt="blue" title="Map style: blue" height="50" width="50" /></span>
                    </label>
                  </li>
                  <li>
                    <label for="map-set-style2" class="radio-image-center">
                      <input type="radio" id="map-set-style2" name="map-set-style[]" value="dark" />
                      <span><img src="includes/img/map-style-dark.png" alt="dark" title="Map style: dark" height="50" width="50" /></span>
                    </label>
                  </li>
                  <li>
                    <label for="map-set-style3" class="radio-image-center">
                      <input type="radio" id="map-set-style3" name="map-set-style[]" value="vintage" />
                      <span><img src="includes/img/map-style-vintage.png" alt="vintage" title="Map style: vintage" height="50" width="50" /></span>
                    </label>
                  </li>
                </ul>
              </li>
              <li>
               <label for="map-set-cities">
                 <input type="checkbox" id="map-set-cities" name="map-set-cities" value="true" />
                 <span>Cities</span>
               </label>
              </li>
              <li>
                <label for="map-set-tooltips" class="options-more">
                 <input type="checkbox" id="map-set-tooltips" name="map-set-tooltips" value="true" checked />
                 <span>Tooltips</span>
                </label>

                  <ul id="options-tooltips" class="hide-options">
                    <li>
                     <label>
                      <input type="radio" id="map-set-tooltips-type" name="map-set-tooltips-type[]" value="floating" checked />
                      <span>Floating <em>follows the mouse pointer</em></span>
                     </label>
                    </li>
                    <li id="sub-options-tooltips" class="inline-label">
                     <label for="map-set-tooltips-type3" class="inline-label">Tooltip position:</label>
                      <div class="select-field">
                        <select id="map-set-tooltips-type3" name="map-set-tooltips-type[]">
                         <option value="floating-top-left">top left</option>
                         <option value="floating-top-center" selected>top center (default)</option>
                         <option value="floating-top-right">top right</option>
                         <option value="floating-middle-left">middle left</option>
                         <option value="floating-middle-right">middle right</option>
                         <option value="floating-bottom-left">bottom left</option>
                         <option value="floating-bottom-center">bottom center</option>
                         <option value="floating-bottom-right">bottom right</option>
                        </select>
                      </div>
                    </li>
                    <li>
                     <label>
                      <input type="radio" id="map-set-tooltips-type1" name="map-set-tooltips-type[]" value="sticky" />
                      <span>Stick to the region</span>
                     </label>
                    </li>
                    <li>
                     <label>
                      <input type="radio" id="map-set-tooltips-type2" name="map-set-tooltips-type[]" value="visible" />
                      <span>Always visible</span>
                     </label>
                    </li>
                  </ul>

              </li>
              <li>
                <label for="map-set-responsive">
                 <input type="checkbox" id="map-set-responsive" name="map-set-responsive" value="true" checked />
                 <span>Responsive</span>
                </label>
              </li>
              <li>
               <label for="map-set-fit-height">
                 <input type="checkbox" id="map-set-fit-height" name="map-set-fit-height" value="true" />
                 <span>Fit height</span>
               </label>
              </li>
              <li>
                <label for="map-set-taponce">
                 <input type="checkbox" id="map-set-taponce" name="map-set-taponce" value="true" />
                 <span>Touch display support</span>
                </label>
              </li>
              <li>
                <label for="map-set-mobile-support">
                 <input type="checkbox" id="map-set-mobile-support" name="map-set-mobile-support" value="true" />
                 <span>Dispaly list if the map can't be loaded</span>
                </label>
              </li>
              <li>
               <label for="map-set-visible-list" class="options-more">
                <input type="checkbox" id="map-set-visible-list" name="map-set-visible-list" value="true" />
                <span>Visible list of regions</span>
               </label>

                <ul id="options-visible-list" class="hide-options">
                 <li class="inline-label">
                  <label for="map-set-visible-list-position">Position of the list</label>
                   <div class="select-field">
                     <select id="map-set-visible-list-position" name="map-set-visible-list-position">
                      <option value="bottom" selected>Under the map</option>
                      <option value="left">Left side</option>
                      <option value="right">Right side</option>
                     </select>
                   </div>
                 </li>
                 <li class="inline-label">
                  <label for="map-set-visible-list-columns">Number of columns <em>(max 6)</em></label>
                   <input type="number" id="map-set-visible-list-columns" name="map-set-visible-list-columns" placeholder="1" value="1" min="1" max="6" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-visible-list-column-width">Column width <em>(in pixels)</em></label>
                    <input type="number" id="map-set-visible-list-column-width" name="map-set-visible-list-column-width" placeholder="0" value="0" step="10" min="120" max="500" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-visible-list-columns-gap">Columns gap <em>(in pixels)</em></label>
                   <input type="number" id="map-set-visible-list-columns-gap" name="map-set-visible-list-columns-gap" placeholder="0" value="0" step="5" min="0" max="60" />
                 </li>
                 <li class="options-info">
                  <p>Display list of regions next to the map.</p>
                   <p><b>Column width</b> must be set to display the list of regions next to the map. The list of regions can also be moved to the container outside the map.</p>
                   <p><a href="#option-visiblelist" class="in-nav">Learn more about the visible list of regions</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-multiple-click" class="options-more">
                <input type="checkbox" id="map-set-multiple-click" name="map-set-multiple-click" value="true" />
                <span>Multiple Clicks mode</span>
               </label>

                <ul id="options-multiple-click" class="hide-options">
                 <li class="inline-label">
                  <label for="map-set-multiple-click-search-label">Search link label</label>
                   <input type="text" id="map-set-multiple-click-search-label" name="map-set-multiple-click-search-label" placeholder="Search" value="Search" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-multiple-click-search-link">Search link URL</label>
                   <input type="text" id="map-set-multiple-click-search-link" name="map-set-multiple-click-search-link" placeholder="search.php" value="search.php" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-multiple-click-search-var">Search link variable</label>
                   <input type="text" id="map-set-multiple-click-search-var" name="map-set-multiple-click-search-var" placeholder="region" value="region" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-multiple-click-search-separator">Variables separator</label>
                   <input type="text" id="map-set-multiple-click-search-separator" name="map-set-multiple-click-search-separator" placeholder="+" value="+" maxlength="3" size="3" />
                 </li>
                 <li>
                  <label for="map-set-multiple-click-search-hide">
                   <input type="checkbox" id="map-set-multiple-click-search-hide" name="map-set-multiple-click-search-hide" value="true" />
                   <span>Hide search link</span>
                  </label>
                 </li>
                 <li class="inline-label">
                  <label for="map-set-multiple-click-limit" class="inline-label">Clicks limit</label>
                   <input type="number" id="map-set-multiple-click-limit" name="map-set-multiple-click-limit" placeholder="0" value="0" min="0" max="60" />
                 </li>
                 <li>
                  <label for="map-set-multiple-clicks-alert">Clicks limit alert</label>
                   <input type="text" id="map-set-multiple-clicks-alert" name="map-set-multiple-clicks-alert" placeholder="You can select only %d region! || regions!" value="You can select only %d region! || regions!" size="40" class="map-settings-full-input" disabled />
                 </li>
                 <li class="options-info">
                   <p>Allows to activate (click) several regions, and pass their values to the search engine script.</p>
                   <p><a href="#option-multipleclick" class="in-nav">Learn more about the Multiple Clicks mode</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-agents-list" class="options-more">
                <input type="checkbox" id="map-set-agents-list" name="map-set-agents-list" value="true" />
                <span>List of addresses</span>
               </label>

                <ul id="options-agents-list" class="hide-options">
                 <li class="inline-label">
                  <label for="map-set-agents-list-id">Addresses container ID</label>
                   <input type="text" id="map-set-agents-list-id" name="map-set-agents-list-id" placeholder="#demo-agents" value="#demo-agents" disabled />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-agents-list-speed">Fade speed</label>
                   <input type="number" id="map-set-agents-list-speed" name="map-set-agents-list-speed" placeholder="0" value="0" min="0" max="3000" step="100" />
                 </li>
                 <li>
                  <label for="map-set-agents-list-hover">
                   <input type="checkbox" id="map-set-agents-list-hover" name="map-set-agents-list-hover" value="true" />
                   <span>Show/hide info onHover</span>
                  </label>
                 </li>
                 <li class="options-info">
                   <p>Allows to show/hide any informations assigned to the region. <b>Additional markup required!</b></p>
                   <p><a href="#option-agentslist" class="in-nav">Learn more about the list of addresses</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-markers" class="options-more">
                <input type="checkbox" id="map-set-markers" name="map-set-markers" value="true" />
                <span>Markers over the map</span>
               </label>

                <ul id="options-markers" class="hide-options">
                 <li class="inline-label">
                  <label for="map-set-markers-id">Markers container ID</label>
                   <input type="text" id="map-set-markers-id" name="map-set-markers-id" placeholder="#demo-markers" value="#demo-markers" disabled />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-markers-position">Position of the marker</label>
                   <div class="select-field">
                     <select id="map-set-markers-position" name="map-set-markers-position">
                      <option value="middle" selected>middle</option>
                      <option value="top">top</option>
                      <option value="bottom">bottom</option>
                     </select>
                   </div>
                 </li>
                 <li class="inline-label">
                  <label for="map-set-markers-tooltip-position">Tooltip position</label>
                   <div class="select-field">
                     <select id="map-set-markers-tooltip-position" name="map-set-markers-tooltip-position">
                      <option value="top" selected>top</option>
                      <option value="bottom">bottom</option>
                      <option value="hidden">hidden</option>
                     </select>
                   </div>
                 </li>
                 <li>
                  <label for="map-set-markers-tooltip-hover">
                   <input type="checkbox" id="map-set-markers-tooltip-hover" name="map-set-markers-tooltip-hover" value="true" />
                   <span>Show tooltip onClick</span>
                  </label>
                 </li>
                 <li>
                  <label for="map-set-markers-clickable-regions">
                   <input type="checkbox" id="map-set-markers-clickable-regions" name="map-set-markers-clickable-regions" value="true" checked />
                   <span>Allow clicking on regions</span>
                  </label>
                 </li>
                 <li class="options-info">
                   <p>Allows to display markers (pins) over the map. <b>Additional markup required!</b></p>
                   <p><a href="#option-markers" class="in-nav">Learn more about the markers (pins) over the map</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-form-support" class="options-more">
                <input type="checkbox" id="map-set-form-support" name="map-set-form-support" value="true" />
                <span>Form support</span>
               </label>

                <ul id="options-form-support" class="hide-options">
                 <li class="inline-label">
                  <label for="map-set-form-support-input-id">Input field ID</label>
                   <input type="text" id="map-set-form-support-input-id" name="map-set-form-support-input-id" placeholder="#input-field-id" value="#input-field" disabled />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-form-support-select-id">Select field ID</label>
                   <input type="text" id="map-set-form-support-select-id" name="map-set-form-support-select-id" placeholder="#select-field-id" value="#select-field" disabled />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-form-support-select-label">Select dropdown first option label</label>
                   <input type="text" id="map-set-form-support-select-label" name="map-set-form-support-select-label" placeholder="-- Select location" value="-- Select location" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-form-support-input-value">Value passed to the input field</label>
                   <div class="select-field">
                     <select id="map-set-form-support-input-value" name="map-set-form-support-input-value">
                      <option value="name" selected>Name of the region</option>
                      <option value="class">Class of the list item</option>
                      <option value="slug">Region's href attribute</option>
                     </select>
                    </div>
                 </li>
                 <li class="options-info">
                  <p>Allows to control the input and/or select form fields, and set values assigned to the active region.</p>
                  <p><a href="#option-formsupport" class="in-nav">Learn more about the form support</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-navigation" class="options-more">
                <input type="checkbox" id="map-set-navigation" name="map-set-navigation" value="true" />
                <span>Navigation controls</span>
               </label>

               <ul id="options-navigation" class="hide-options">
                 <li>
                  <label for="map-set-navigation-loop">
                   <input type="checkbox" id="map-set-navigation-loop" name="map-set-navigation-loop" value="true" />
                   <span>Infinite loop of all regions</span>
                  </label>
                 </li>
                 <li class="inline-label">
                  <label for="map-set-navigation-next">Next region link label</label>
                   <input type="text" id="map-set-navigation-next" name="map-set-navigation-next" placeholder="Next &#187;" value="Next &#187;" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-navigation-prev">Previous region link label</label>
                   <input type="text" id="map-set-navigation-prev" name="map-set-navigation-prev" placeholder="&#171; Previous" value="&#171; Previous" />
                 </li>
                 <li class="inline-label">
                  <label for="map-set-navigation-separator">Navigation links separator</label>
                   <input type="text" id="map-set-navigation-separator" name="map-set-navigation-separator" placeholder="|" value="|" />
                 </li>
                 <li>
                  <label for="map-set-navigation-label">Navigation controls header <em>(optional)</em></label>
                   <input type="text" id="map-set-navigation-label" name="map-set-navigation-label" placeholder="" value="" class="map-settings-full-input" />
                 </li>
                 <li>
                  <label for="map-set-navigation-description">Paragraph above the navigation links <em>(optional)</em></label>
                   <input type="text" id="map-set-navigation-description" name="map-set-navigation-description" placeholder="" value="" class="map-settings-full-input" />
                 </li>
                 <li class="options-info">
                   <p>Allows to navigate through regions using next/prev links under the map. <b>This option doesn't work when the Multiple Clicks mode is enabled.</b></p>
                   <p><a href="#option-navigation" class="in-nav">Learn more about the navigation controls</a></p>
                 </li>
               </ul>

              </li>
              <li>
               <label for="map-set-events" class="options-more">
                <input type="checkbox" id="map-set-events" name="map-set-events" value="true" />
                <span>Custom events</span>
               </label>

                <ul id="options-events" class="hide-options">
                 <li>
                  <label for="map-set-event-onclick"><code>onClick: <span class="hljs-number">function</span>(<span class="hljs-string">e</span>){}</code></label>
                   <textarea id="map-set-event-onclick" name="map-set-event-onclick" rows="10" cols="50" class="textarea-code">// SAMPLE VARS;
 var rLink = e.children("A").eq(0).attr("href"),
 rText = e.children("A").eq(0).text(),
 rClass = e.attr("class").split(" ")[0];

// YOUR CUSTOM FUNCTIONS GOES HERE;
 </textarea>
                 </li>
                 <li>
                  <label for="map-set-event-onhover"><code>onHover: <span class="hljs-number">function</span>(<span class="hljs-string">e</span>){}</code></label>
                   <textarea id="map-set-event-onhover" name="map-set-event-onhover" rows="10" cols="50" class="textarea-code">// SAMPLE VARS;
 var rLink = e.children("A").eq(0).attr("href"),
 rText = e.children("A").eq(0).text(),
 rClass = e.attr("class").split(" ")[0];

// YOUR CUSTOM FUNCTIONS GOES HERE;
 </textarea>
                 </li>
                 <li>
                  <label for="map-set-event-onload"><code>onLoad: <span class="hljs-number">function</span>(<span class="hljs-string">e</span>){}</code></label>
                   <textarea id="map-set-event-onload" name="map-set-event-onload" rows="5" cols="50" class="textarea-code">// YOUR CUSTOM FUNCTIONS GOES HERE;</textarea>
                 </li>
                 <li class="options-info">
                   <p><b>Custom functions will not be added to the automatically generated source code.</b> Add them manually to the $.CSSMap(); function options object.</p>
                   <p><a href="#option-custom-events" class="in-nav">Learn more about the custom events</a></p>
                 </li>
                </ul>

              </li>
              <li>
               <label for="map-set-author-info">
                <input type="checkbox" id="map-set-author-info" name="map-set-author-info" value="true" />
                <span>Display author's info</span>
               </label>
              </li>
            </ul>
          </fieldset>

          <ul class="map-settings-buttons">
            <li><input type="submit" value="Save settings" id="button-submit" class="button button-submit" /></li>
            <li><input type="reset" value="&#10005;" title="Reset settings" id="button-reset" class="button button-cancel" /></li>
          </ul>
        </form>

        <div id="map-settings-script-source" class="map-settings-script-source fixed-element">
         <h4 class="h-icon icon-options-code">get the code</h4>
         <p>Use the "CSSMap settings" form to play with the demo map and generate the sample script code below.</p>
         <hr />
          <pre id="options-script-source"><code class="script-source-code language-js hljs"></code></pre>
            <div class="options-info">
              <p>Save settings to generate the code and apply changes to the demo map.</p>
              <p>Generated code must be pasted after the CSSMap script declaration.</p>
              <p><a href="#section-setup" class="in-nav">Check out the "Setup &amp; settings" section for details.</a></p>
            </div>
        </div>

      </div>
      <!-- END OF THE MAP SETTINGS -->
     </div>
	 </div>
	 <!-- END .wrapper -->
    </section>
    <!-- END OF THE SECTION DEMO -->

    <!-- SECTION SETUP -->
    <section style="display:none;" id="section-setup" class="wrapper" style="display:none;">
     <hr />
      <h2>Setup &amp; settings</h2>

       <h3>Load the CSSMap stylesheet</h3>
        <p>First, copy the "cssmap-africa" folder to your location and link the map's <abbr title="Cascading Style Sheets">CSS</abbr> file inside the <code class="inline-code">&#60;head&#62;</code> of your page.</p>
        <pre id="source-link-css"><code class="language-html hljs">&#60;!-- CSSMap STYLESHEET - AFRICA --&#62;
&#60;link rel="stylesheet" type="text/css" href="cssmap-africa/cssmap-africa.css" media="screen" /&#62;</code></pre>

       <h3>Load jQuery and the CSSMap script</h3>

        <p>Just before the <code class="inline-code">&#60;&#47;body&#62;</code> closing tag*, link to the jQuery and CSSMap script. <strong>Make sure you're not loading script files multiple times.</strong></p>
        <pre id="source-link-scripts"><code class="language-html hljs">&#60;!-- jQuery --&#62;
&#60;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"&#62;&#60;/script&#62;

&#60;!-- CSSMap SCRIPT --&#62;
&#60;script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"&#62;&#60;/script&#62;</code></pre>
        <p>The CSSMap script file is loaded from the cloud, so you'll always have access to the latest version. Of course, you can store it locally as well.</p>
        <p>* <em>if you prefer, you can add the scripts in the <code>&#60;head&#62;</code> as well.</em></p>

       <h3>Run the script</h3>
        <p>Now you can invoke the <code>$.CSSMap();</code> function.</p>
        <p>Copy the code below and put it just after the links to jQuery and the CSSMap script.<br/>The script may be also invoked under the list of regions in the page content.</p>
        <pre id="source-func"><code class="script-source-code language-html hljs"></code></pre>
        <p><em>The code above has been generated by the <a href="#section-demo" class="in-nav">"CSSMap settings" form</a></em></p>

       <h3>The markup</h3>
        <p>The CSSMap script is based on the unordered list of regions presented below. You can modify all links and text as you need.</p>
        <p>Label (text) of the link will be presented in the tooltip and the <abbr title="HyperText Markup Language">HTML</abbr> markup may be used as well*.</p>
        <pre id="source-list"><code class="language-html hljs">&lt;!-- CSSMap - Africa --&gt;
&lt;div id=&quot;map-africa&quot;&gt;
 &lt;ul class=&quot;africa&quot;&gt;
  &lt;li class=&quot;afr1&quot;&gt;&lt;a href=&quot;#algeria&quot;&gt;Algeria&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr2&quot;&gt;&lt;a href=&quot;#angola&quot;&gt;Angola&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr3&quot;&gt;&lt;a href=&quot;#benin&quot;&gt;Benin&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr4&quot;&gt;&lt;a href=&quot;#botswana&quot;&gt;Botswana&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr5&quot;&gt;&lt;a href=&quot;#burkina-faso&quot;&gt;Burkina Faso&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr6&quot;&gt;&lt;a href=&quot;#burundi&quot;&gt;Burundi&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr7&quot;&gt;&lt;a href=&quot;#cameroon&quot;&gt;Cameroon&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr8&quot;&gt;&lt;a href=&quot;#cape-verde&quot; class=&quot;tooltip-middle&quot;&gt;Cape Verde &lt;small&gt;(Portugal)&lt;/small&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr9&quot;&gt;&lt;a href=&quot;#canary-islands&quot; class=&quot;tooltip-middle&quot;&gt;Canary Islands &lt;small&gt;(Spain)&lt;/small&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr10&quot;&gt;&lt;a href=&quot;#central-african-republic&quot;&gt;Central African Republic&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr11&quot;&gt;&lt;a href=&quot;#chad&quot;&gt;Chad&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr12&quot;&gt;&lt;a href=&quot;#comoros&quot; class=&quot;tooltip-middle&quot;&gt;Comoros&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr13&quot;&gt;&lt;a href=&quot;#congo&quot;&gt;Congo&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr14&quot;&gt;&lt;a href=&quot;#cote-d-ivoire&quot;&gt;Côte d'Ivoire&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr15&quot;&gt;&lt;a href=&quot;#democratic-republic-of-the-congo&quot;&gt;Democratic Republic of the Congo&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr16&quot;&gt;&lt;a href=&quot;#djibouti&quot;&gt;Djibouti&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr17&quot;&gt;&lt;a href=&quot;#egypt&quot;&gt;Egypt&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr18&quot;&gt;&lt;a href=&quot;#equatorial-guinea&quot;&gt;Equatorial Guinea&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr19&quot;&gt;&lt;a href=&quot;#eritrea&quot;&gt;Eritrea&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr20&quot;&gt;&lt;a href=&quot;#ethiopia&quot;&gt;Ethiopia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr21&quot;&gt;&lt;a href=&quot;#gabon&quot;&gt;Gabon&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr22&quot;&gt;&lt;a href=&quot;#gambia&quot;&gt;Gambia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr23&quot;&gt;&lt;a href=&quot;#ghana&quot;&gt;Ghana&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr24&quot;&gt;&lt;a href=&quot;#guinea&quot;&gt;Guinea&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr25&quot;&gt;&lt;a href=&quot;#guinea-bisaau&quot;&gt;Guinea-Bisaau&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr26&quot;&gt;&lt;a href=&quot;#kenya&quot;&gt;Kenya&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr27&quot;&gt;&lt;a href=&quot;#lesotho&quot;&gt;Lesotho&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr28&quot;&gt;&lt;a href=&quot;#liberia&quot;&gt;Liberia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr29&quot;&gt;&lt;a href=&quot;#libya&quot;&gt;Libya&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr30&quot;&gt;&lt;a href=&quot;#madagascar&quot;&gt;Madagascar&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr31&quot;&gt;&lt;a href=&quot;#madeira&quot; class=&quot;tooltip-middle&quot;&gt;Madeira &lt;small&gt;(Portugal)&lt;/small&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr32&quot;&gt;&lt;a href=&quot;#malawi&quot;&gt;Malawi&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr33&quot;&gt;&lt;a href=&quot;#mali&quot;&gt;Mali&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr34&quot;&gt;&lt;a href=&quot;#mauritania&quot;&gt;Mauritania&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr35&quot;&gt;&lt;a href=&quot;#mauritius&quot;&gt;Mauritius&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr36&quot;&gt;&lt;a href=&quot;#mayotte&quot;&gt;Mayotte &lt;small&gt;(France)&lt;/small&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr37&quot;&gt;&lt;a href=&quot;#morocco&quot;&gt;Morocco&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr38&quot;&gt;&lt;a href=&quot;#mozambique&quot;&gt;Mozambique&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr39&quot;&gt;&lt;a href=&quot;#namibia&quot;&gt;Namibia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr40&quot;&gt;&lt;a href=&quot;#niger&quot;&gt;Niger&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr41&quot;&gt;&lt;a href=&quot;#nigeria&quot;&gt;Nigeria&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr42&quot;&gt;&lt;a href=&quot;#reunion&quot;&gt;Réunion &lt;small&gt;(France)&lt;/small&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr43&quot;&gt;&lt;a href=&quot;#rwanda&quot;&gt;Rwanda&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr44&quot;&gt;&lt;a href=&quot;#sahrawi-arab-democratic-republic&quot;&gt;Sahrawi Arab Democratic Republic&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr45&quot;&gt;&lt;a href=&quot;#sao-tome-and-principe&quot; class=&quot;tooltip-middle&quot;&gt;São Tomé and Príncipe&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr46&quot;&gt;&lt;a href=&quot;#senegal&quot;&gt;Senegal&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr47&quot;&gt;&lt;a href=&quot;#seychelles&quot; class=&quot;tooltip-middle&quot;&gt;Seychelles&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr48&quot;&gt;&lt;a href=&quot;#sierra-leone&quot;&gt;Sierra Leone&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr49&quot;&gt;&lt;a href=&quot;#somalia&quot;&gt;Somalia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr50&quot;&gt;&lt;a href=&quot;#somaliland&quot;&gt;Somaliland&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr51&quot;&gt;&lt;a href=&quot;#south-africa&quot;&gt;South Africa&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr52&quot;&gt;&lt;a href=&quot;#south-sudan&quot;&gt;South Sudan&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr53&quot;&gt;&lt;a href=&quot;#sudan&quot;&gt;Sudan&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr54&quot;&gt;&lt;a href=&quot;#swaziland&quot;&gt;Swaziland&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr55&quot;&gt;&lt;a href=&quot;#togo&quot;&gt;Togo&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr56&quot;&gt;&lt;a href=&quot;#tunisia&quot;&gt;Tunisia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr57&quot;&gt;&lt;a href=&quot;#uganda&quot;&gt;Uganda&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr58&quot;&gt;&lt;a href=&quot;#united-republic-of-tanzania&quot;&gt;United Republic of Tanzania&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr59&quot;&gt;&lt;a href=&quot;#zambia&quot;&gt;Zambia&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;afr60&quot;&gt;&lt;a href=&quot;#zimbabwe&quot;&gt;Zimbabwe&lt;/a&gt;&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
&lt;!-- END OF THE CSSMap - Africa --&gt;</code></pre>
        <p class="aligncenter"><a href="includes/source-africa.txt" class="button button-light">View source code</a></p>
        <p>* <em>some elements, like: <code>&#60;UL&nbsp;&#47;&#62;</code> and <code>&#60;span&nbsp;&#47;&#62;</code> need to be reseted after the CSSMap's style sheet. <a href="#section-customizing-css" class="in-nav">Check out the "Customizing map in <abbr title="Cascading Style Sheets">CSS</abbr>" section for deatils</a>.</em></p>

    </section>
    <!-- END OF THE SECTION SETUP -->

    <!-- SECTION OPTIONS -->
    <section style="display:none;" id="section-options" class="wrapper" style="display:none;">
     <hr />
      <h2>Options</h2>
      <p class="source-func-options-desc">Options object must be pass as the first parameter of the <code>$.CSSMap();</code> function.</p>
      <p><strong>The <code class="inline-code">"size"</code> option must be set</strong>, all other options add as shown:</p>
      <pre><code class="language-js hljs">$("#map-africa").CSSMap({
  // MAP SIZE MUST BE SET;
  "size": 1450,

  // OTHER OPTIONS;
  "cities": true
});</code></pre>
      <p>Ready to use script code may be generated by the <a href="#section-demo" class="in-nav">"CSSMap settings" form</a></p>

      <h3 id="options-defaults" class="source-func-options-h3">Defaults:</h3>
      <dl class="source-func-options">
        <dt class="td-code"><code>size: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>width of the map (in pixels);</p>
          <p>available sizes: 250, 320, 430, 540, 650, 750, 850, 960, 1280, 1450</p>
        </dd>
        <dt class="td-code"><code>mapStyle: <span class="td-default hljs-string">"default"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>appearance of the map</p>
          <p>available styles: <code>"default"</code>, <code>"blue"</code>, <code>"dark"</code>, <code>"vintage"</code> and <code>"custom"</code></p>
          <p>Learn more about the <code>"custom"</code> option in the <a href="#section-map-style" class="in-nav">editing map style section</a>.</p>
        </dd>
        <dt class="td-code"><code>tooltips: <span class="td-default hljs-number">true</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>show tooltip of the region</p>
        </dd>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p><code>"floating"</code> - tooltip follows the mouse pointer</p>
          <p><code>"sticky"</code> - tooltip stick to the center of region</p>
          <p><code>"visible"</code> - always visible tooltips</p>
        </dd>
        <dt class="td-code"><code>tooltipArrowHeight: <span class="td-default hljs-number">5</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>increase bottom offset of the "sticky" tooltips</p>
        </dd>
        <dt class="td-code"><code>cities: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>display cities layer over the map</p>
        </dd>
        <dt class="td-code"><code>responsive: <span class="td-default hljs-string">"auto"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p><code>"auto"</code> - map is resized to fit parent container's width</p>
          <p>The main "size" option is the maximum map width</p>
        </dd>
        <dd class="td-opt">Object</dd>
        <dd class="td-desc">
          <p>resizing steps may be set by an Object: <br/><code>{min_window_width: map_size, min_window_width: map_size}</code></p>
        </dd>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p><code class="hljs-number">false</code> - disable map resizing</p>
        </dd>
        <dt class="td-code"><code>fitHeight: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>resize map to fit parent container's height</p>
        </dd>
        <dt class="td-code"><code>activateOnLoad: <span class="td-default">[]</span></code></dt>
        <dd class="td-opt">Array</dd>
        <dd class="td-desc">
          <p>classes of the list items to activate when the map is loaded, example:</p>
          <p><code>["afr17", "afr27", "afr36"]</code></p>
        </dd>
        <dt class="td-code"><code>tapOnce: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>on the touch devices single tap activate region</p>
        </dd>
        <dt class="td-code"><code>mobileSupport: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>hides an error message and display list of regions when the map image couldn't be loaded</p>
        </dd>
        <dt class="td-code"><code>loadingText: <span class="td-default hljs-string">"Loading ..."</span></code></dt>
        <dd class="td-opt">String <code>[HTML]</code></dd>
        <dd class="td-desc">
          <p>markup for the preloader</p>
        </dd>
        <dt class="td-code"><code>authorInfo: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>display credits and link to the CSSMap plugin website under the map</p>
        </dd>
        <dt class="td-code"><code>disableClicks: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>disables ability to click on regions;<br/>regions can be activated using the <code>activateOnLoad</code> or URL hashtags</p>
        </dd>
      </dl>

      <h3 class="source-func-options-h3" id="option-visiblelist">Visible list of regions</h3>
       <p class="source-func-options-desc">Display list of regions next to the map.</p>
       <p>The script duplicate the main list of regions with all its content and functionality.</p>
      <dl class="source-func-options">
        <dt class="td-code"><code>visibleList:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>show the list of regions</p>
        </dd>
        <dt class="td-code sub-options"><code>listPosition: <span class="td-default hljs-string">"bottom"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>position of the list: <code>"bottom"</code> or <code>"left"</code>, <code>"right"</code> side of the map</p>
        </dd>
        <dt class="td-code sub-options"><code>columns: <span class="td-default hljs-number">1</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>divide list into columns</p>
        </dd>
        <dt class="td-code sub-options"><code>columnWidth: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>width of the columns (in pixels)<br/><em>must be set to show list next to the map</em></p>
        </dd>
        <dt class="td-code sub-options"><code>columnsGap: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>gap between the columns (in pixels)</p>
        </dd>
        <dt class="td-code sub-options"><code>containerId: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">Selector</dd>
        <dd class="td-desc">
          <p>ID of the list container OUTSIDE the map;<br/><em>must start with the hash (#) mark</em></p>
        </dd>
        <dt class="td-code sub-options"><code>hideItems: <span class="td-default">[]</span></code></dt>
        <dd class="td-opt">Array</dd>
        <dd class="td-desc">
          <p>classes of the list items to hide in the visible list of regions, example:</p>
          <p><code>["afr51", "afr55", "afr59"]</code></p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
      </dl>

      <h3 class="source-func-options-h3" id="option-multipleclick">Multiple Clicks mode</h3>
       <p class="source-func-options-desc">Allows to activate (click) several regions, and pass their values to the search engine script.</p>
      <dl class="source-func-options">
        <dt class="td-code"><code>multipleClick:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>allows to select multiple regions</p>
        </dd>
        <dt class="td-code sub-options"><code>searchUrl: <span class="td-default hljs-string">"search.php"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>URL of the search engine</p>
        </dd>
        <dt class="td-code sub-options"><code>searchLink: <span class="td-default hljs-string">"Search"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>label of the search link</p>
        </dd>
        <dt class="td-code sub-options"><code>searchLinkVar: <span class="td-default hljs-string">"region"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>variable passed to the search engine (example: <em>?region=</em>)</p>
        </dd>
        <dt class="td-code sub-options"><code>separator: <span class="td-default hljs-string">"+"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>separator of the values passed to the search engine</p>
        </dd>
        <dt class="td-code sub-options"><code>hideSearchLink: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>hide search link</p>
        </dd>
        <dt class="td-code sub-options"><code>clicksLimit: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>limited number of clicks</p>
          <p><code>0</code> - unlimited</p>
        </dd>
        <dt class="td-code sub-options"><code>clicksLimitAlert: <span class="td-default hljs-string">"You can select only %d region! || regions!"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>error (alert) message when the clicks limit is reached</p>
          <p>syntax: <code>[beginning of sentence] %d [singular] || [plural]</code></p>
          <p><code>%d</code> is a number of clicks (filled by the script)</p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
      </dl>

      <h3 class="source-func-options-h3" id="option-agentslist">List of addresses</h3>
       <p class="source-func-options-desc">Allows to show/hide any informations assigned to the region.</p>
      <dl class="source-func-options">
        <dt class="td-code"><code>agentsList:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>display the list of addresses (informations assigned to the regions)</p>
        </dd>
        <dt class="td-code sub-options"><code>agentsListId: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">Selector</dd>
        <dd class="td-desc">
          <p>ID of the addresses' list container;<br/><em>must start with the hash (#) mark</em></p>
        </dd>
        <dt class="td-code sub-options"><code>agentsListSpeed: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>fade delay in miliseconds;<br/>doesn't work with: <code>agentsListOnHover: <span class="hljs-number">true</span></code></p>
          <p><code>0</code> - no fade effect</p>
        </dd>
        <dt class="td-code sub-options"><code>agentsListOnHover: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>show and hide agent/address on hover, instead of click</p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
      </dl>

        <h5>&#60;&#47;&nbsp;&#62; Additional markup required</h5>
        <div class="column one_third">
          <p>The list of addresses may be used to show address of the office, or distributor, or any other region related informations ...&nbsp;and even other CSSMap.</p>
          <p>There's a second list required, where ID attribute of each list item is the same as the hash link in the main list of regions. That should works as any other internal navigation when JavaScript is disabled.</p>
          <p>List may be freely styled with <abbr title="Cascading Style Sheets">CSS</abbr> as any other unordered list*.</p>
          <p>* <em>nested &#60;UL&nbsp;&#47;&#62; and/or &#60;OL&nbsp;&#47;&#62; list items should be reseted first.</em></p>
        </div>
        <div id="source-agents" class="source-func-more column two_third last_column">
          <pre><code class="language-html hljs">&#60;!-- CSSMap - list of addresses --&#62;
&lt;div id=&quot;demo-agents&quot;&gt;
 &lt;ul&gt;
  &lt;li id=&quot;algeria&quot;&gt;

    &lt;!-- Algeria --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;angola&quot;&gt;

    &lt;!-- Angola --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;benin&quot;&gt;

    &lt;!-- Benin --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;botswana&quot;&gt;

    &lt;!-- Botswana --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;burkina-faso&quot;&gt;

    &lt;!-- Burkina Faso --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;burundi&quot;&gt;

    &lt;!-- Burundi --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;cameroon&quot;&gt;

    &lt;!-- Cameroon --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;cape-verde&quot;&gt;

    &lt;!-- Cape Verde (Portugal) --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;canary-islands&quot;&gt;

    &lt;!-- Canary Islands (Spain) --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;central-african-republic&quot;&gt;

    &lt;!-- Central African Republic --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;chad&quot;&gt;

    &lt;!-- Chad --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;comoros&quot;&gt;

    &lt;!-- Comoros --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;congo&quot;&gt;

    &lt;!-- Congo --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;cote-d-ivoire&quot;&gt;

    &lt;!-- Côte d'Ivoire --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;democratic-republic-of-the-congo&quot;&gt;

    &lt;!-- Democratic Republic of the Congo --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;djibouti&quot;&gt;

    &lt;!-- Djibouti --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;egypt&quot;&gt;

    &lt;!-- Egypt --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;equatorial-guinea&quot;&gt;

    &lt;!-- Equatorial Guinea --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;eritrea&quot;&gt;

    &lt;!-- Eritrea --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;ethiopia&quot;&gt;

    &lt;!-- Ethiopia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;gabon&quot;&gt;

    &lt;!-- Gabon --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;gambia&quot;&gt;

    &lt;!-- Gambia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;ghana&quot;&gt;

    &lt;!-- Ghana --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;guinea&quot;&gt;

    &lt;!-- Guinea --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;guinea-bisaau&quot;&gt;

    &lt;!-- Guinea-Bisaau --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;kenya&quot;&gt;

    &lt;!-- Kenya --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;lesotho&quot;&gt;

    &lt;!-- Lesotho --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;liberia&quot;&gt;

    &lt;!-- Liberia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;libya&quot;&gt;

    &lt;!-- Libya --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;madagascar&quot;&gt;

    &lt;!-- Madagascar --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;madeira&quot;&gt;

    &lt;!-- Madeira (Portugal) --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;malawi&quot;&gt;

    &lt;!-- Malawi --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;mali&quot;&gt;

    &lt;!-- Mali --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;mauritania&quot;&gt;

    &lt;!-- Mauritania --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;mauritius&quot;&gt;

    &lt;!-- Mauritius --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;mayotte&quot;&gt;

    &lt;!-- Mayotte (France) --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;morocco&quot;&gt;

    &lt;!-- Morocco --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;mozambique&quot;&gt;

    &lt;!-- Mozambique --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;namibia&quot;&gt;

    &lt;!-- Namibia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;niger&quot;&gt;

    &lt;!-- Niger --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;nigeria&quot;&gt;

    &lt;!-- Nigeria --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;reunion&quot;&gt;

    &lt;!-- Réunion (France) --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;rwanda&quot;&gt;

    &lt;!-- Rwanda --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;sahrawi-arab-democratic-republic&quot;&gt;

    &lt;!-- Sahrawi Arab Democratic Republic --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;sao-tome-and-principe&quot;&gt;

    &lt;!-- São Tomé and Príncipe --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;senegal&quot;&gt;

    &lt;!-- Senegal --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;seychelles&quot;&gt;

    &lt;!-- Seychelles --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;sierra-leone&quot;&gt;

    &lt;!-- Sierra Leone --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;somalia&quot;&gt;

    &lt;!-- Somalia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;somaliland&quot;&gt;

    &lt;!-- Somaliland --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;south-africa&quot;&gt;

    &lt;!-- South Africa --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;south-sudan&quot;&gt;

    &lt;!-- South Sudan --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;sudan&quot;&gt;

    &lt;!-- Sudan --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;swaziland&quot;&gt;

    &lt;!-- Swaziland --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;togo&quot;&gt;

    &lt;!-- Togo --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;tunisia&quot;&gt;

    &lt;!-- Tunisia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;uganda&quot;&gt;

    &lt;!-- Uganda --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;united-republic-of-tanzania&quot;&gt;

    &lt;!-- United Republic of Tanzania --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;zambia&quot;&gt;

    &lt;!-- Zambia --&gt;

  &lt;/li&gt;
  &lt;li id=&quot;zimbabwe&quot;&gt;

    &lt;!-- Zimbabwe --&gt;

  &lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
&#60;!-- END OF THE CSSMap - list of addresses --&#62;</code></pre>
          <p class="aligncenter"><a href="includes/source-agents-africa.txt" class="button button-light">View source code</a></p>
        </div>

      <h3 class="source-func-options-h3" id="option-markers">Markers over the map</h3>
      <p class="source-func-options-desc">Allows to display markers (pins) over the map.</p>
      <dl class="source-func-options">
        <dt class="td-code"><code>pins:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>display markers (pins) over the map</p>
        </dd>
        <dt class="td-code sub-options"><code>pinsId: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">Selector</dd>
        <dd class="td-desc">
          <p>ID of the markers container;<br/><em>must start with the hash (#) mark</em></p>
        </dd>
        <dt class="td-code sub-options"><code>mapSize: <span class="td-default hljs-number">0</span></code></dt>
        <dd class="td-opt">Integer</dd>
        <dd class="td-desc">
          <p>size of the map for which markers were set;<br/><em>required for the responsive map</em></p>
        </dd>
        <dt class="td-code sub-options"><code>markerPosition: <span class="td-default hljs-string">"middle"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>position of the marker relative to the coords - <code>"top"</code>, <code>"middle"</code>, <code>"bottom"</code></p>
        </dd>
        <dt class="td-code sub-options"><code>tooltipPosition: <span class="td-default hljs-string">"top"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>position of the marker tooltip - <code>"top"</code>, <code>"bottom"</code>, <code>"hidden"</code></p>
        </dd>
        <dt class="td-code sub-options"><code>tooltipOnClick: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>shows marker tooltip only when the marker (pin) is clicked;<br/><em>disable external link if set to the marker's anchor element</em></p>
        </dd>
        <dt class="td-code sub-options"><code>clickableRegions: <span class="td-default hljs-number">true</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>enable clicking on regions</p>
          <p><code>false</code> - only markers clickable</p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
      </dl>

      <h5>&#60;&#47;&nbsp;&#62; Additional markup required</h5>
       <p>Sample list of markers:</p>
      <div id="source-markers" class="source-func-more">

      <pre><code class="language-html hljs">&#60;!-- CSSMap MARKERS --&#62;
&lt;div id=&quot;demo-markers&quot;&gt;
 &lt;ul class=&quot;cssmap-pins&quot;&gt;
  &lt;li class=&quot;cssmap-pin&quot; data-cssmap-coords=&quot;332,502&quot;&gt;

   &lt;div class=&quot;cssmap-tooltip-content&quot;&gt;
    Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae.
   &lt;/div&gt;
   &lt;a href=&quot;#&quot; class=&quot;cssmap-marker&quot;&gt;&lt;img src=&quot;includes/pin.png&quot; width=&quot;20&quot; height=&quot;25&quot; alt=&quot;pin&quot;/&gt;&lt;/a&gt;

  &lt;/li&gt;
  &lt;li class=&quot;cssmap-pin&quot; data-cssmap-coords=&quot;920,1140&quot;&gt;

   &lt;div class=&quot;cssmap-tooltip-content&quot;&gt;
    Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae.
   &lt;/div&gt;
   &lt;a href=&quot;#&quot; class=&quot;cssmap-marker&quot;&gt;&lt;img src=&quot;includes/pin.png&quot; width=&quot;20&quot; height=&quot;25&quot; alt=&quot;pin&quot;/&gt;&lt;/a&gt;

  &lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
&#60;!-- END OF THE CSSMap MARKERS --&#62;</code></pre>
       <p class="aligncenter"><a href="includes/source-pins-africa.txt" class="button button-light">View source code</a></p>
      </div>
      <div class="column one_half">
        <p>Each list item with the <code>.cssmap-pin</code> class is a marker and must be manually positioned over the map using the <code>data-cssmap-coords</code> attribute:</p>
        <pre><code class="language-html hljs">data-cssmap-coords=<span class="hljs-string">"left_position, top_position"</span></code></pre>
        <p><em>Position of the marker may be set only in pixels for the specified map size.</em></p>
      </div>
      <div class="column one_half last_column">
        <p>It's recommended to wrap content of the marker's tooltip into the <code>&#60;div&nbsp;&#47;&#62;</code>:</p>
        <pre><code class="language-html hljs">&#60;div class="cssmap-tooltip-content"&#62;&#60;&#47;div&#62;</code></pre>
        <p>The most important is a link with the <code>.cssmap-marker</code> class where you can set a pin. It can be an image or text.</p>
      </div>

      <h3 class="source-func-options-h3" id="option-formsupport">Form support</h3>
       <p class="source-func-options-desc">Allows to control the input and&#47;or select form fields, and set values assigned to the active region.</p>
      <dl class="source-func-options">
        <dt class="td-code"><code>formSupport:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>allows map to control the form items</p>
        </dd>
        <dt class="td-code sub-options"><code>inputId: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">Selector</dd>
        <dd class="td-desc">
          <p>ID of the input field;<br/><em>must start with the hash (#) mark</em></p>
        </dd>
        <dt class="td-code sub-options"><code>selectId: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">Selector</dd>
        <dd class="td-desc">
          <p>ID of the select dropdown field;<br/><em>must start with the hash (#) mark</em></p>
        </dd>
        <dt class="td-code sub-options"><code>selectLabel: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>label of the first (default) option of the select dropdown</p>
        </dd>
        <dt class="td-code sub-options"><code>value: <span class="td-default hljs-string">"name"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>value of the field: <code>"name"</code>, <code>"slug"</code> (the href attribute) or <code>"class"</code> of the region</p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
      </dl>

      <h3 class="source-func-options-h3" id="option-navigation">Navigation controls</h3>
       <p class="source-func-options-desc">Allows to navigate through regions using next&#47;prev links under the map.</p>
       <p>This option doesn't work when the Multiple Clicks mode is enabled.</p>
       <dl class="source-func-options">
        <dt class="td-code"><code>navigation:&nbsp;{</code></dt>
        <dt class="td-code sub-options"><code>enable: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>enables the navigation controls</p>
        </dd>
        <dt class="td-code sub-options"><code>loop: <span class="td-default hljs-number">false</span></code></dt>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p>allows to navigate within infinite loop of all regions</p>
        </dd>
        <dt class="td-code sub-options"><code>next: <span class="td-default hljs-string">"Next &#187;"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>label of the next region link</p>
        </dd>
        <dt class="td-code sub-options"><code>prev: <span class="td-default hljs-string">"&#171; Previous"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>label of the previous region link</p>
        </dd>
        <dt class="td-code sub-options"><code>separator: <span class="td-default hljs-string">"|"</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>separator of the navigation links</p>
        </dd>
        <dd class="td-opt">Boolean</dd>
        <dd class="td-desc">
          <p><code class="hljs-number">false</code> - remove separator</p>
        </dd>
        <dt class="td-code sub-options"><code>label: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>Adds <code>&#60;H5&#62;</code> header above the navigation links</p>
        </dd>
        <dt class="td-code sub-options"><code>description: <span class="td-default hljs-string">""</span></code></dt>
        <dd class="td-opt">String</dd>
        <dd class="td-desc">
          <p>Adds paragraph above the navigation links</p>
        </dd>
        <dd class="td-code"><code>}</code></dd>
       </dl>

      <h3 class="source-func-options-h3" id="option-custom-events">Custom events</h3>
      <dl class="source-func-options">
        <dt class="td-code"><code>onClick: <span class="td-default">function(<span class="hljs-built_in">listItem</span>){}</span></code></dt>
        <dd class="td-opt">Function</dd>
        <dd class="td-desc">
          <p>function called when region is clicked</p>
          <p>to prevent default click actions add the <code>rel="nofollow"</code> attribute to the links</p>
        </dd>
        <dt class="td-code"><code>onSecondClick: <span class="td-default">function(<span class="hljs-built_in">listItem</span>){}</span></code></dt>
        <dd class="td-opt">Function</dd>
        <dd class="td-desc">
          <p>function called when region is clicked second time</p>
          <p>to prevent default click actions add the <code>rel="nofollow"</code> attribute to the links</p>
        </dd>
        <dt class="td-code"><code>onHover: <span class="td-default">function(<span class="hljs-built_in">listItem</span>){}</span></code></dt>
        <dd class="td-opt">Function</dd>
        <dd class="td-desc">
          <p>function called when the mouse pointer enters a region</p>
        </dd>
        <dt class="td-code"><code>unHover: <span class="td-default">function(<span class="hljs-built_in">listItem</span>){}</span></code></dt>
        <dd class="td-opt">Function</dd>
        <dd class="td-desc">
          <p>function called when the mouse pointer leaves a region</p>
        </dd>
        <dt class="td-code"><code>onLoad: <span class="td-default">function(<span class="hljs-built_in">mapObject</span>){}</span></code></dt>
        <dd class="td-opt">Function</dd>
        <dd class="td-desc">
          <p>function called when map is fully loaded</p>
        </dd>
      </dl>
      <p>Script options (except the "Custom events") may be generated by the <a href="#section-demo" class="in-nav">"CSSMap settings" form</a>.</p>

    </section>
    <!-- END OF THE SECTION OPTIONS -->

    <!-- SECTION REQUIREMENTS -->
    <section style="display:none;" id="section-requirements" class="wrapper">
     <hr />
      <h2>Requirements</h2>
       <div class="column one_half">
        <h3>Basic knowledge of the web</h3>
        <p><strong><abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript knowledge is required for a proper installation.</strong></p>
        <p>Your page should be valid <abbr title="HyperText Markup Language">HTML</abbr>/<abbr title="Extensible HyperText Markup Language">XHTML</abbr> and contain no script errors.</p>
        <p>If you're trying to put a map script onto your page using <abbr title="content management System">CMS</abbr> and/or don't want to use the dedicated CSSMap <a href="https://cssmapsplugin.com/joomla" rel="external">Joomla module</a> or <a href="https://cssmapsplugin.com/wordpress" rel="external">WordPress plugin</a> check out documentation of your <abbr title="content management System">CMS</abbr>. Especially how to add a custom script and style sheet to the page.</p>
       <h4>The CSSMap plugin requires jQuery 1.7+</h4>
        <p>It's always recommended to use the most recent version of the <a href="http://jquery.com" rel="external">jQuery</a>.</p>
       </div>
       <div class="column one_half last_column">
       <h3>Software</h3>
        <dl>
         <dt>Text/code editor</dt>
          <dd>Any text/code editor will be fine. Just <strong>don't use any <abbr title="What You See Is What You Get">WYSIWYG</abbr> editors</strong>.</dd>
         <dt>.PSD file editor</dt>
          <dd>To customize the map appearance you'll need an editor which can handle layered .psd source files properly. <a href="http://adobe.com/products/photoshop.html" rel="external">Adobe&#174;&nbsp;Photoshop&#174;</a> is recommended.</dd>
         <dt>Image optimizer</dt>
          <dd>To reduce weight of the transparent .PNG images <a href="http://pngquant.org" rel="external">pngquant</a> or/and <a href="http://imageoptim.com" rel="external">ImageOptim</a> are recommended.</dd>
       </dl>
      </div>
      <div class="column one_third">
        <h4>Supported browsers:</h4>
        <ul>
          <li>Google Chrome 1+</li>
          <li>Firefox 4+</li>
          <li>Internet Explorer 7+</li>
          <li>Opera 9+</li>
          <li>Safari 3+</li>
          <li>+ all major mobile browsers</li>
        </ul>
        <hr class="dashed-line" />
        <p><em>Appearance of the map may vary in different web browsers and/or <abbr title="Operating System">OS</abbr>.</em></p>
      </div>
      <div class="column one_third">
        <h4>Known issues</h4>
        <dl>
          <dt><abbr title="Internet Explorer">IE</abbr> &#62;8</dt>
           <dd><code class="inline-code">"responsive"</code> option doesn't work.</dd>
           <dd>In the "auto" mode the <code class="inline-code">"size"</code> option is the map width. When using custom steps object, only the first size is set.</dd>
        </dl>
        <dl>
          <dt><abbr title="Internet Explorer">IE</abbr> 7</dt>
           <dd>The cities layer can't be displayed over the map.</dd>
        </dl>
      </div>
      <div class="column one_third last_column">
        <h4>Mobile devices support</h4>
        <p>There's an issue with the map image size (dimensions too) that can be downloaded by the mobile devices.</p>
        <p>Set the <code class="inline-code">"mobileSupport": <span class="hljs-number">true</span></code> option to display the list of regions when the map image can't be loaded and hide an error message.</p>
        <p>Size of the map image will increase the cellular data transfer.</p>
      </div>
      <h3>Limitations</h3>
       <p><strong>The map is hand-coded in specific sizes, which can't be changed.</strong> The only way to change the size of the map is to rewrite most of the CSS file.</p>
       <p>Colors of the map can't be changed dynamically via the JavaScript function etc. Learn more about <a href="#section-map-style" class="in-nav">editing map style</a>.</p>
       <p>Of course there are several limitations caused by lack of the <abbr title="Cascading Style Sheets">CSS</abbr> support in older browsers. For example in the IE7 cities layer can't be displayed, also there's a bug with arrows under tooltips in the IE7 and Firefox below 3.6.</p>

    </section>
    <!-- END OF THE SECTION REQUIREMENTS -->


    <!-- SECTION CUSTOMIZING CSS -->
    <section style="display:none;" id="section-customizing-css" class="wrapper">
     <hr />
      <h2>Customizing map in <abbr title="Cascading Style Sheets">CSS</abbr></h2>
       <p class="source-func-options-desc">You can customize some elements using the <abbr title="Cascading Style Sheets">CSS</abbr> style sheets.</p>
       <p>Check out the <em>cssmap-africa/cssmap-themes.css</em> file for default <abbr title="Cascading Style Sheets">CSS</abbr> rules and modify them as you need.<br/>All custom <abbr title="Cascading Style Sheets">CSS</abbr> rules must be set after the map's style sheet file.</p>

      <div class="column two_third">
       <h3 id="section-editable-elements">Editable elements</h3>

       <h4>Tooltips</h4>
        <p>Use these selectors to customize the tooltips:</p>
        <pre><code class="language-css hljs">.cssmap > li a,.cssmap > li a:hover{}</code></pre>

        <p>If "sticky" tooltips are enabled, you can customize tooltips for specified map size:</p>
        <pre><code class="language-css hljs">.cssmap-[MAPSIZE] .cssmap > li a{}</code></pre>

        <p>..and arrow under the tooltip:</p>
        <pre><code class="language-css hljs">.cssmap > li a .tooltip-arrow{}</code></pre>
        <p><em>Arrows are displayed only if the <code>tooltips: <span class="td-default hljs-string">"sticky"</span></code> option is set.</em></p>

       <h4>Visible list of regions</h4>
        <p>Visible list of regions may be styled using the selector:</p>
        <pre><code class="language-css hljs">.cssmap-visible-list{}</code></pre>

        <p>Links of the visible list:</p>
        <pre><code class="language-css hljs">.cssmap-visible-list a{}
 .cssmap-visible-list a:hover{}
</code></pre>

       <h4>Search link</h4>
        <p>In the <a href="#option-multipleclick" class="in-nav">Multiple Clicks mode</a> the search link may be styled by:</p>
        <pre><code class="language-css hljs">.cssmap-search-link{}</code></pre>
        <p><em>The search link can be hidden by <code>hideSearchLink: <span class="td-default hljs-number">true</span></code> option of the <code>multipleClick{}</code> object.</em></p>

       <h4>Marker (pin) tooltip</h4>
        <p>By default all tooltips are styled the same, but you can customize appearance of the marker tooltip using:</p>
        <pre><code class="language-css hljs">.cssmap-tooltip-content{}</code></pre>

       <h4>Navigation controls</h4>
        <p>Customize each element of the navigation using selectors listed below (defaults shown). Navigation controls elements are centered by default.</p>
        <pre><code class="language-css hljs">/* NAVIGATION CONTAINER */
.cssmap-navigation{ text-align: center }

/* LIST OF NAVIGATION CONTROLS */
.cssmap-nav-list{}
 .cssmap-nav-list li{
   display:inline-block;
   margin: 0 .5em;
  }
  .cssmap-nav-next{} /* LIST ITEM */
  .cssmap-nav-prev{} /* LIST ITEM */
  .cssmap-nav-separator{} /* LIST ITEM */

/* LABEL OF THE NAVIGATION - THE H5 HEADER (OPTIONAL) */
.cssmap-nav-label{}

/* DESCRIPTION SHOWN ABOVE THE NAVIGATION (OPTIONAL) */
.cssmap-nav-description{}</code></pre>

       <h4>Preloader</h4>
        <pre><code class="language-css hljs">.cssmap-loader{}</code></pre>

      </div>
      <div class="column one_third last_column">
       <h3>Reserved classes</h3>
       <p>List of classes used by the CSSMap script:</p>
       <ul>
        <li><code>.cssmap-container</code></li>
        <li><code>.cssmap</code></li>
        <li><code>.cssmap-[0-9]</code></li>
        <li><code>.bg</code></li>
        <li><code>.m</code></li>
        <li><code>.s[0-9]</code></li>
        <li><code>.focus</code></li>
        <li><code>.active-region</code></li>
       </ul>
       <ul>
        <li><code>.africa</code></li>
        <li><code>.africa-cities</code></li>
        <li><code>.afr[0-9]</code></li>
       </ul>
       <ul>
        <li><code>.cssmap-blue</code></li>
        <li><code>.cssmap-dark</code></li>
        <li><code>.cssmap-vintage</code></li>
        <li><code>.cssmap-custom</code></li>
       </ul>
       <ul>
        <li><code>.cssmap-tooltip-content</code></li>
        <li><code>.tooltip-arrow</code></li>
        <li><code>.tooltip-top</code></li>
        <li><code>.tooltip-left</code></li>
        <li><code>.tooltip-right</code></li>
        <li><code>.tooltip-middle</code></li>
       </ul>
       <ul>
        <li><code>.cssmap-visible-list-container</code></li>
        <li><code>.cssmap-visible-list</code></li>
        <li><code>.cssmap-search-link</code></li>
        <li><code>.cssmap-markers-container</code></li>
        <li><code>.cssmap-marker</code></li>
       </ul>
       <ul>
        <li><code>.cssmap-navigation</code></li>
        <li><code>.cssmap-nav-label</code></li>
        <li><code>.cssmap-nav-description</code></li>
        <li><code>.cssmap-nav-list</code></li>
        <li><code>.cssmap-nav-next</code></li>
        <li><code>.cssmap-nav-prev</code></li>
        <li><code>.cssmap-nav-separator</code></li>
       </ul>
       <ul>
        <li><code>.cssmap-loader</code></li>
        <li><code>.cssmap-cities</code></li>
        <li><code>.cssmap-error</code></li>
        <li><code>.cssmap-signature</code></li>
       </ul>
      </div>

      <h3 id="section-crop-map">Cropping the map</h3>
       <p class="source-func-options-desc">You can easily crop the map using few <abbr title="Cascading Style Sheets">CSS</abbr> rules.</p>

       <div class="column one_half">
        <h5>Set new dimentions</h5>
         <p>Dimensions of the map may be set like any other element, i.e.:</p>
         <pre><code class="language-css hljs">.cssmap-container{
  height: 300px;
  width: 400px
 }</code></pre>

       </div>
       <div class="column one_half last_column">
        <h5>Move the map inside its container</h5>
         <p>Use negative values to move the map left and up, i.e.:</p>
         <pre><code class="language-css hljs">.cssmap-container .cssmap{
  left: -100px;
  top: -250px
 }</code></pre>
       </div>

       <h3 id="section-hide-elements">Hide list elements</h3>
       <div class="column one_half">
        <h4>Hide list of regions before map is loaded</h4>
         <pre><code class="language-css hljs">.cssmap > li a{
  margin: -9999em 0 0 0;
  position: absolute
 }</code></pre>
         <p><strong>Use responsibly! It must be set before map's style sheet.</strong> Users will be unable to see and use links when the map doesn't load!</p>
       </div>
       <div class="column one_half last_column">
        <h4>Disable regions</h4>
         <p>To disable (remove) regions just delete their links or wrap entire list items into comments.</p>
       </div>
    </section>
    <!-- END OF THE SECTION CUSTOMIZING CSS -->

    <!-- SECTION APPEARANCE -->
    <section style="display:none;" id="section-map-style" class="wrapper">
     <hr />
      <h2>Editing map style</h2>
       <p class="source-func-options-desc">To customize map style use the editable .PSD source files available in the downloaded package.<br/>The <a href="http://adobe.com/products/photoshop.html" rel="external">Adobe&#174;&nbsp;Photoshop&#174;</a> is recommended to edit.</p>
       <p><strong>Colors of the map can't be changed dynamically via the JavaScript function etc.</strong></p>
       <p><strong>Do not change position of the locked layers and shapes!</strong></p>

      <h3>Changing colors and layer styles</h3>
      <div class="column one_third">
        <h4>Color of the region</h4>
         <p>To change color of the regions just double click on the layer's thumbnail and use the "Color Picker".</p>
        <h5>Modify multiple layers</h5>
         <p>Certainly you will need to change color of all layers at once. There're two ways to do that:</p>
         <ol>
          <li>select all layers you want to change and use the "Fill" option of shape tool <kbd>U</kbd></li>
          <li>merge all shapes (layers) of the map's state (:hover or :active) as shown below.</li>
         </ol>
      </div>
      <div class="column two_third last_column">
        <figure>
         <img src="includes/img/psd-edit-layer-color.png" alt="Layer color" />
         <figcaption>Changing fill color using shape tool options (left) or double clicking on the layer's thumbnail (right)</figcaption>
        </figure>
      </div>

      <div class="column one_third">
       <h4>Layer Style</h4>
        <h5>Stroke</h5>
         <h6>Position</h6>
          <p><b>Must be set to "Center"</b>, otherwise outlines of the regions will not overlap.</p>
         <h6>Color</h6>
          <p>Double click on the color's square and use "Color Picker" to change it as you need.</p>
          <p>"Fill Type" should be set:"Color".</p>
        <h5>Other options</h5>
         <p>You can set any other options like gradients, shadows and glows ..just as you want to.</p>
         <p><strong>Each region has 10px gap around</strong> (5px in maps less than 300px wide), so the outer glow and shadow shouldn't be larger than that.</p>
      </div>
      <div class="column two_third last_column">
        <figure>
         <img src="includes/img/psd-edit-layer-stroke-color.png" alt="Changing outline color of the region" />
         <figcaption>Changing outline color of the region</figcaption>
        </figure>
      </div>

      <div class="column one_third">
        <h4>Merge shapes (optional)</h4>
         <p>Inside one of the map's states (:hover or :active) select all layers you want to merge, but without masks if any.</p>
         <p>If you're using an old version of Photoshop&#174; and you don't have that option, you can use the Path Selection tool <kbd>A</kbd> and merge all shapes manually.</p>
         <p>Merged shapes may be styled as shown above, you can add: outline, glows and shadows, but not the gradients. Gradients may be set properly only for the single shapes (layers).</p>
      </div>
      <div class="column two_third last_column">
        <figure>
         <img src="includes/img/psd-edit-merge-shapes.png" alt="Merge shapes" />
         <figcaption>Merge Shapes option in the Adobe&#174;Photoshop&#174; CC</figcaption>
        </figure>
      </div>

      <div class="column one_third">
       <h3>Saving map files</h3>
       <ol>
        <li>Hide background of the .psd file ("bg" layer).<br/><b>Map image must be transparent!</b></li>
        <li>In the menu select: File &#62; Save for Web...<br/>or press: <kbd title="Control in Windows or Command on Mac">Ctrl</kbd>&nbsp;+&nbsp;<kbd>Alt</kbd>&nbsp;+&nbsp;<kbd>Shift</kbd>&nbsp;+&nbsp;<kbd>S</kbd></li>
        <li>Choose "Preset: PNG-24"</li>
        <li>"Transparency" option must be checked</li>
        <li>Save an image in the map's directory</li>
        <li>Do not change name of the .png file!</li>
       </ol>
       <figure class="alignleft">
        <img src="includes/img/psd-edit-save-presets.png" alt="Transparent .PNG file saving presets" />
        <figcaption>Transparent .PNG file saving presets</figcaption>
       </figure>
      </div>
      <div class="column two_third last_column">
       <h3>Optimize .PNG files</h3>
        <p>The CSSMap plugin is based on the <abbr title="Cascading Style Sheets">CSS</abbr> sprites and it's recommended to optimize map images to reduce their weight and save bandwidth.</p>

        <h5>Recommended .PNG optimizers</h5>
        <dl>
          <dt class="dd-title"><a href="http://pngquant.org" rel="external">pngquant</a></dt>
           <dd class="dd-desc">Command-line utility for Linux, Mac and Windows. Photoshop&#174; plugin available.</dd>
          <dt class="dd-title"><a href="http://imageoptim.com" rel="external">ImageOptim</a></dt>
           <dd class="dd-desc">Mac OS X application.</dd>
        </dl>

        <h3>Using the mapStyle: "custom" option</h3>
         <ol>
          <li>Upload/Save your custom map images into the <em>&#47;cssmap-africa&#47;custom</em> folder.</li>
          <li>Set the <code>mapStyle: <span class="td-default hljs-string">"custom"</span></code> option of the <code>$.CSSMap();</code> function.</li>
         </ol>
         <p>Of course you can overwrite existing files of the default map styles.</p>

      </div>
     </section>
    <!-- END OF THE SECTION APPEARANCE -->

    <!-- SECTION TROUBLESHOOTING -->
    <section style="display:none;" id="section-troubleshooting" class="wrapper">
     <hr />
      <h2>Troubleshooting</h2>

      <h3>The map doesn't appear</h3>
       <ol>
        <li><strong>Make sure you've uploaded the <em>cssmap-africa</em> folder onto your server.</strong></li>
        <li>Check version of jQuery linked. <strong>The CSSMap plugin requires jQuery 1.7+</strong></li>
        <li>Check if there're no other versions of jQuery loaded.</li>
        <li>Check if there're no conflicts with other JavaScript libraries as Mootools or Prototype. <a href="http://api.jquery.com/jquery.noconflict" rel="external">Learn more about the jQuery.noConflict() mode</a>.</li>
        <li>Check if your website isn't in the quirks mode. The <code>!doctype</code> must be set!</li>
        <li>Check if there're no errors in the "Error console" of your browser.</li>
        <li>Check if your source code is valid and contains no errors.</li>
        <li>Check paths to the included files. Back to the <a href="#section-setup" class="in-nav">"Setup &amp; settings" section</a>.</li>
        <li>Check paths to the map images - .PNG files must be in the same folder as the map's style sheet.</li>
       </ol>

      <h3>Doesn't work on mobile devices</h3>
       <p>Most mobile devices limits the size of an image that can be downloaded.<br/>If you're not using the <code>responsive: <span class="td-default hljs-string">"auto"</span></code> option, the size of map's image may be too large to download.</p>

    </section>
    <!-- END OF THE SECTION TROUBLESHOOTING -->

    <!-- SECTION LICENSE -->
    <section style="display:none;" id="section-license" class="wrapper">
     <hr />
      <h2>License</h2>
      <p class="source-func-options-desc">Using the CSSMap plugin is simple as that:</p>
      <div class="column one_half">
        <h3 class="no-top-margin icon-license-yes"><span class="icons"></span>DO</h3>
        <ul class="important-notes">
          <li>use in personal or commercial project</li>
          <li>use in all kinds of web projects</li>
          <li>use in the mobile/desktop application</li>
          <li>customize, crop and modify to your needs</li>
        </ul>
      </div>
      <div class="column one_half last_column">
        <h3 class="no-top-margin icon-license-no"><span class="icons"></span>DO NOT</h3>
        <ul class="important-notes">
          <li>sub-license, resell or share in the downloadable format</li>
          <li>remove or hide the "signature" layer on the images</li>
          <li>remove author info from stylesheets and scripts</li>
          <li>use anything from the source code of this demo page</li>
          <li>share that demo page</li>
        </ul>
      </div>

    </section>
    <!-- END OF THE SECTION LICENSE -->

    <!-- SECTION CHANGELOG -->
    <section style="display:none;" id="section-changelog" class="wrapper">
     <hr />
      <h2>Changelog</h2>
      <dl class="changelog-list">
        <dt>5.6.0 <em>June 16th, 2020</em></dt>
          <dd>Fixed jQuery 3.5 bugs</dd>
          <dd>Fixed static tooltips hover issue - <b>requires <a href="https://cssmapsplugin.com/5/cssmap-themes.css" rel="external">cssmap-themes.css</a> file update</b></dd>
        <dt>5.5.6 <em>March 23rd, 2019</em></dt>
          <dd>Fixed mobile devices reloading on scroll</dd>
        <dt>5.5.5 <em>December 27th, 2018</em></dt>
          <dd>Maps of Mexico, Romania, Lithuania and Ukraine support added</dd>
        <dt>5.5.4 <em>June 10th, 2017</em></dt>
          <dd>Fixed reload bug</dd>
        <dt>5.5.3.1 <em>May 3rd, 2017</em></dt>
         <dd>Updated names of Franch regions.</dd>
        <dt>5.5.3 <em>December 11th, 2016</em></dt>
         <dd>Fixed a bug that caused reload of the map after resizing the window.</dd>
        <dt>5.5.2 <em>September 7th, 2016</em></dt>
         <dd>Maps of Norway and Finland support added.</dd>
        <dt>5.5.1 <em>August 31st, 2016</em></dt>
         <dd>Maps of Sweden and combined maps of the United States and Canada support added.</dd>
         <dd>Added <b>cssmap-mapstyle.psd</b> source file into the download package with ready to use layer styles of default maps.</dd>
        <dt>5.5 <em>August 13th, 2016</em></dt>
         <dd>Navigation controls added - allows to navigate through regions using next/prev links under the map  - <b>requires <a href="https://cssmapsplugin.com/5/cssmap-themes.css" rel="external">cssmap-themes.css</a> file update</b></dd>
        <dt>5.4 <em>July 28th, 2016</em></dt>
         <dd>Map of Switzerland support added.</dd>
         <dd>Added <code>.cssmap-markers-container</code> class to the markers container.</dd>
         <dd>Fixed positioning of the markers over the map when using Bootstrap framework - <b>requires <a href="https://cssmapsplugin.com/5/cssmap-themes.css" rel="external">cssmap-themes.css</a> file update</b></dd>
        <dt>5.3.1 <em>July 25th, 2016</em></dt>
         <dd>Maps of Hungary and The Netherlands support added</dd>
        <dt>5.3 <em>July 5th, 2016</em></dt>
         <dd>Maps of Czech Republic and Slovakia support added.</dd>
         <dd>Fixed jumping to the page top when using keyboard navigation - <b>requires <a href="https://cssmapsplugin.com/5/cssmap-themes.css" rel="external">cssmap-themes.css</a> file update</b></dd>
        <dt>5.2.2 <em>May 30th, 2016</em></dt>
         <dd>Map of Greece support added</dd>
        <dt>5.2.1 <em>May 24th, 2016</em></dt>
         <dd>Map of the French departments support added</dd>
        <dt>5.2 <em>May 20th, 2016</em></dt>
         <dd><code>disableClicks</code> option added</dd>
        <dt>5.1 <em>May 19th, 2016</em></dt>
         <dd>Fixed onClick method in the Multiple Clicks mode</dd>
        <dt>5.0.2 <em>May 7th, 2016</em></dt>
         <dd>Map of the autonomous communities of Spain support added</dd>
        <dt>5.0.1 <em>May 5th, 2016</em></dt>
         <dd>Map of Spain support added</dd>
        <dt>5.0 <em>April 20th, 2016</em></dt>
         <dd><b>New script and style sheets relased</b> - requires update of all files and source code.
         </dd>
         <dd>New features:
          <ul>
            <li>Four default map styles</li>
            <li>Fit width and/or height of the browser window or map's container</li>
            <li>Touch devices support</li>
            <li>Improved visible list of regions</li>
            <li>Markers over the map</li>
            <li>Allows to fill in input fields with name, class or URL of regions</li>
            <li>Allows to convert list of regions into select dropdown menu</li>
            <li>Setup and options generator</li>
            <li>Rewritten script for better performance</li>
          </ul>
         </dd>
      </dl>
    </section>
    <!-- END OF THE SECTION CHANGELOG -->


    <!-- SECTION CONTACT -->
    <section style="display:none;" id="section-contact" class="wrapper">
     <hr />
      <h2>Support &amp; contact</h2>
      <div class="column one_half">
        <p>If you have any questions regarding setup, licensing, payments, or would like to order a custom map of any region, don't hesitate to write.</p>
        <p>But, if your setup doesn't work, check out the <a href="#section-troubleshooting" class="in-nav">"Troubleshooting" section</a> once again and&#47;or visit the <a href="https://cssmapsplugin.com/faq">CSSMap FAQ page</a> before you ask for help.</p>
      </div>
      <div class="column one_half last_column">
        <ul class="contact-icons">
          <li><a href="https://cssmapsplugin.com/contact" rel="external" class="icons icon-email"><span class="hide-email">support&#64;</span></a></li>
          <li><a href="https://twitter.com/cssmapplugin" rel="external" class="icons icon-twitter">&#64;CSSMapplugin</a></li>
          <li><a href="https://www.facebook.com/cssmap" rel="external" class="icons icon-facebook">facebook.com/CSSMap</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF THE SECTION CONTACT -->

  </article>

  <footer class="page-footer">
   <div class="wrapper">

    <!-- SCRIPT META -->
    <section style="display:none;" id="script-meta">
     <hr />
      <h4>CSSMap - Africa</h4>
      <ul>
        <li>version: 5.6.0 - June 16th, 2020</li>
        <li>author: <a href="http://popardowski.pl/web" rel="external">Łukasz Popardowski</a></li>
        <li>license: <a href="https://cssmapsplugin.com/license" rel="external">http://cssmapsplugin.com/license</a></li>
        <li><abbr title="Frequently Asked Questions">FAQ</abbr>: <a href="https://cssmapsplugin.com/faq" rel="external">http://cssmapsplugin.com/faq</a></li>
        <li>web: <a href="https://cssmapsplugin.com/get/africa" rel="external">http://cssmapsplugin.com/get/africa</a></li>
        <li>email: <a href="https://cssmapsplugin.com/contact" rel="external"><span class="hide-email">support&#64;</span></a></li>
        <li>twitter: <a href="https://twitter.com/cssmapplugin" rel="external">&#64;CSSMapplugin</a></li>
      </ul>
      <p>Copyright &#169; 2009 - 2020 <a href="https://cssmapsplugin.com" rel="external">CSSMap plugin</a></p>
    </section>
    <!-- END OF THE SCRIPT META -->

   </div><!-- END .wrapper -->
  </footer>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
<script type="text/javascript" src="includes/script.js"></script>
<script>
function showresult(param)
{

	window.location.replace("charts.php?country="+param);
}
</script>
</body>
</html>