<?php

 $months=Array();
 array_push($months,'4');
 array_push($months,'5');
 array_push($months,'6');
 array_push($months,'7');
 array_push($months,'8');
 array_push($months,'9');  
include "dbconfig.php";
 $regions=Array();
 
 $sql="SELECT DISTINCT `region` FROM `informations` WHERE 1";
 $res= mysqli_query($conn,$sql);


 while($rr=$res->fetch_row())	
 {
	 array_push($regions,$rr[0]);
 }
  $indexes=Array();
 
 $sql="SELECT DISTINCT `item` FROM `informations` WHERE 1";
 $res= mysqli_query($conn,$sql);


 while($rr=$res->fetch_row())	
 {
	 array_push($indexes,$rr[0]);
 }
  $sql="DELETE FROM `indexes_months` WHERE `id`>0";

 $res= mysqli_query($conn,$sql);
 for($i=0 ;$i<count($regions);$i++)
 {
	  for($k=0 ;$k<count($indexes);$k++)			  
	     {
	           for($j=0 ;$j<count($months);$j++)
	           {
		          $cc=0;
				  $dd=0;
				  $sql="SELECT count(`id`) FROM `informations` WHERE `region`='".$regions[$i]."' AND `item`='".$indexes[$k]."' AND `month_no`=".$months[$j];
	               
				  $res= mysqli_query($conn,$sql);  
				   if($rr=$res->fetch_row())
				   {
					   $cc=intval($rr[0]);
				   }
				   if($cc>0)
				   {
					   $sqll="SELECT `index_weight` FROM `index_val` WHERE `item`='".$indexes[$k]."'";
					   $ret= mysqli_query($conn,$sqll);
					
					   if($row=$ret->fetch_row())
				      {
					   $dd=floatval($row[0]);
				      } 
                    //$dd=$cc*$dd;
                     $sql="INSERT INTO `indexes_months`(`region`,`cat`, `index_name`, `year`, `month`, `index_value`) VALUES ('".$regions[$i]."','".GetCat($indexes[$k])."','".$indexes[$k]."','2023','".$months[$j]."',".$dd.")";		
					 
					 $res= mysqli_query($conn,$sql); 
				   }
	           }
		 }
 }
 function GetCat($param)
 {
	 $temp="";
	$sql="SELECT `index_name` FROM `items` WHERE `item`='".$param."'";
	 include "dbconfig.php";
	$res= mysqli_query($conn,$sql); 
	if($rr=$res->fetch_row())
	{
		$temp=$rr[0];
	}
	return $temp;
 }
 header("Location: result.php");
?>