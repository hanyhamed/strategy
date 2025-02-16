// JavaScript Document
var discount=0;
var customerrate=0;
var sprice=0;
var customerbackrate=0;
var vendorbackrate=0;
var secretno="";
function record()
{
	 $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : { order:4,val1:$("#clientno").val() },
					
             
                  success : function(data) {
					  inssrtTrans(data);
					   },
                   error : function(jqXHR, textStatus, error)
                                            {
												 
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });
}
function GetSecretNo()
{
			  $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : {order:5,val1:$("#clientno").val()},
					
                  success : function(data) {
					  
					  $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : {order:6,val1:$("#clientno").val()},
					
                  success : function(data) {
                      
                   if(data=="7777") record();
                   else {
					Swal.fire({icon: 'success', title: 'معلومة', text:"أدخل الرقم السري لإتمام العملية",input: 'text'}).then(function(result) {
						
                      if(data==result.value) record();
                     else swal.fire({icon: 'error', title: 'Oops...', text: ' الرقم السري غير صحيح' });
 
                       });
                   }
				  },
                   error : function(jqXHR, textStatus, error)
                                            {
												
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });
				
			
 

	                                  },
                   error : function(jqXHR, textStatus, error)
                                            {
												
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });

}

function inssrtTrans(param)
{
	
	

	
	var currentservice="";
	var servicetype="";
	var srvid="";
	  if($( "#serviceselect option:selected" ).text()!="")
	  {
		  servicetype="service";
		  currentservice=$( "#serviceselect option:selected" ).text();
		  srvid=$( "#serviceselect option:selected" ).val();
		  
	  }
	  
	  else {
		    servicetype="cobon";
		  currentservice=$( "#cobonselect option:selected" ).text();
		  srvid=$( "#cobonselect option:selected" ).val();
		
	  }
	

		  $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : {
                           order: 3,
						   val1:$("#name").data('vendorid'),
						   val2:$("#phone").data('vendorname'),
						   val3:$("#email").data('branch'),
						   val4:param,
						   val5:$("#name").val(),
						   val6:$("#clientno").val(),
						   val7:$("#membership").val(),
						   val8:currentservice,
						   val9:$("#price").val(),
						   val10:customerrate,
						   val11:customerbackrate,
						   val12:vendorbackrate,
						   val13:discount,
						   val14:servicetype,
						   val15:$("#points").val(),
						   val16:$("#transpoint").val(),
						   val17:$("#finalprice").val()
                         },
					
                  success : function(data) {
					  
					 
					  //window.location.replace("tranzit.php");$('#exampleModal').modal('show'); 
					     Swal.fire({icon: 'success', title: 'معلومة', text: 'تم تسجيل العملية بنجاح'}).then(function() { window.location.replace("tranzit.php?scode="+$("#clientno").val());});
                                               
                                              },
                   error : function(jqXHR, textStatus, error)
                                            {
												
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });

}

$(document).ready(function(e) {
	
	$("#ratebtn").click(function(e) {
	
	window.location.replace("tranzit.php");
	 });
//////////////////////////////////////////////////////////////////////////////
	
    $("#serviceselect").click(function(e) {
        $("#cobonselect").prop('selectedIndex', 0);
		
    });
//////////////////////////////////////////////////////////////////////////////////////
	
//////////////////////////////////////////////////////////////////////////////////////////////	
	$("#pointscheck").click(function(e) {
         
			  if($( "#serviceselect option:selected" ).text()=="" && $( "#cobonselect option:selected" ).text()=="" )
			  {
				  Swal.fire({icon: 'error', title: 'Oops...', text: ' اختر خدمة أو كوبون أولاً' });
				 $("#pointscheck").prop("checked", false);
				 
			  }
			  else  {
				  if($(this).prop("checked") == false) $("#transpoint").prop("disabled", true);
				  else $("#transpoint").prop("disabled", false);
			  }
    });
///////////////////////////////////////////////////////////////////////////////////////////	
	$("#serviceselect").change(function(e) {
          $("#cobonselect").prop('selectedIndex', 0);
		  $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : {
                           order: 1,val1:$( "#serviceselect option:selected" ).val(),val2:$("#membership").val()
                         },
					
                  success : function(data) {
					                         var ss=data.split('~');
											 sprice=parseInt(ss[0],10);
											 customerrate=parseInt(ss[1],10);
											 customerbackrate=parseInt(ss[2],10);
											 vendorbackrate=parseInt(ss[3],10);
											 discount=parseInt(ss[4],10);
											 $("#price").val(ss[0]);
											 $("#rate").val(ss[4]);
											 $("#finalprice").val(parseInt(ss[0],10)- parseInt(ss[0],10)* parseInt(ss[1],10)/100 );                
				  
                                               
                                              },
                   error : function(jqXHR, textStatus, error)
                                            {
												
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });
    });
	
/////////////////////////////////////////////////////////////////
		$("#cobonselect").change(function(e) {
          $("#serviceselect").prop('selectedIndex', 0);
		  $.ajax({
                  url : 'm3acservice.php',
                  type : 'GET',	
				                  
				  async:false,
                  data : {
                           order:2,val1:$( "#cobonselect option:selected" ).val(),val2:$("#membership").val()
                         },
					
                  success : function(data) {
					                         var ss=data.split('~');
											 sprice=parseInt(ss[0],10);
											 customerrate=parseInt(ss[1],10);
											 customerbackrate=parseInt(ss[2],10);
											 vendorbackrate=parseInt(ss[3],10);
											 discount=parseInt(ss[4],10);
											 $("#price").val(ss[0]);
											 $("#rate").val(ss[1]);
											 
											 $("#finalprice").val(parseInt(ss[0],10)- parseInt(ss[0],10)* parseInt(ss[1],10)/100 );                
				  
                                               
                                              },
                   error : function(jqXHR, textStatus, error)
                                            {
												
                                           // alert("خطأ في الاتصال بالانترنت");
											
                                             }		 
											 
                       });
    });
////////////////////////////////////////////////////	

$("#transpoint").change(function(e) {
	 var fprice=0;
	 var total=0;
	 if($("#price").val()!="") 
		 sprice=parseInt($("#price").val(),10); 
	 else  sprice=0;

if($("#rate").val()!="") customerrate=parseInt($("#rate").val(),10);
else customerrate=0;
 if($("#transpoint").val()!=""){
 fprice =sprice  - sprice * customerrate/100;
 total= fprice- parseInt( $("#transpoint").val(),10);
  
		
		 if(total>=0) $("#finalprice").val(total) ;
 }
	});	
//////////////////////////////////////////////////////////////////////////////////////////////
	$("#price").change(function(e) {
		
	 var fprice=0;
	 var total=0;
	 if($("#price").val()!="") 
		 sprice=parseInt($("#price").val(),10); 
	 else  sprice=0;

if($("#rate").val()!="") customerrate=parseInt($("#rate").val(),10);
else customerrate=0;
 
 fprice =sprice  - sprice * customerrate/100;
 total=fprice;
  if($("#transpoint").val()!="")  total= fprice- parseInt( $("#transpoint").val(),10);

if(total>=0) $("#finalprice").val(total) ;
 
	});	
/////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////////////////////////////////
	$("#rate").change(function(e) {
	
	 var fprice=0;
	 var total=0;
	 if($("#price").val()!="") 
		 sprice=parseInt($("#price").val(),10); 
	 else  sprice=0;

if($("#rate").val()!="") customerrate=parseInt($("#rate").val(),10);
else customerrate=0;
 
 fprice =sprice  - sprice * customerrate/100;
 total=fprice;
  if($("#transpoint").val()!="")  total= fprice- parseInt( $("#transpoint").val(),10);

if(total>=0) $("#finalprice").val(total) ;
	});	
	
////////////////////////////////////////////////////////////	
	$("#cobonselect").click(function(e) {
         $("#serviceselect").prop('selectedIndex', 0);
    });
////////////////////////////////////////////////////////////////////////	
	$("#cobonselect").change(function(e) {
             $("#serviceselect").prop('selectedIndex', 0);
    });
	
	$("#btnok").click(function(e) {
         if($( "#serviceselect option:selected" ).text()=="" && $( "#cobonselect option:selected" ).text()=="" )
			  {
				  Swal.fire({icon: 'error',  title: 'Oops...', text: ' اختر خدمة أو كوبون أولاً' });
			  }
			  
			  else {
				  GetSecretNo();
				 
				  
			  }
    });
});
