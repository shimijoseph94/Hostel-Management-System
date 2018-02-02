$(document).ready(function(){
  $("#myForm").on("submit",function(){
	  alert("enter name,name must be alphabet only");
	var val_Name=/^[A-Za-z.\s]{3,30}$/;
    var val_Fathersname=/^[A-Za-z.\s]{1,30}$/;
	var val_Mothersname=/^[A-Za-z.\s]{3,50}$/;
	var val_Place=/^[A-Za-z.\s]{3,40}$/;
    //var val_pcode=/^[0-9]{5,6}$/;
	var val_Mobileno= /^[0-9]{9,12}$/;
    var val_Username= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_Password= /^[^&]{6,30}$/;
    
	$Name= $('#Name').val();//id in the form
    $Fathersname= $('#Fathersname').val();
	$Mothersname= $('#Mothersname').val();
	$Mobileno= $('#Mobileno').val();
    //$pincode= $('#').val();
    $HouseName= $('#HouseName').val();
    $Place= $('#Place').val();
    $Username =$('#Username').val();
	$Password =$('#Username').val();

    if (!val_Name.test($Name)) {
      $("#Name").focus();
      alert("enter name");
      return false;
	}
	 else if (!val_Fathersname.test($Fathersname)) {
      $("#Fathersname").focus();
      alert("enter name");
      return false;
	 }
	 else if (!val_Mothersname.test($Mothersname)) {
      $("#Mothersname").focus();
      alert("enter name");
      return false;
	 }
	 else if (!val_Mobileno.test($Mobileno)) {
      $("#Mobileno").focus();
      alert("enter number");
      return false;
	 }
	 else if (!val_HouseName.test($HouseName)) {
      $("#HouseName").focus();
      alert("invalid number");
      return false;
    }
	else if (!val_Place.test($Place)) {
      $("#Place").focus();
      alert("enter 10 numbers");
      return false;
    }
	else if(!val_Username.test($Username)){
      $("#Username").focus();
      alert("invalid userid");
      return false;
    }
    else if (!val_Password.test($Password)) {
      $("#Password").focus();
      alert("invalid password");
      return false;
    }
    else{
      return true;
    }
  });
  $("#Name").focusout(function(){
	  var val_Name=/^[A-Za-z.\s]{3,30}$/;
	  $Name= $('#Name').val();
	  if (!val_Name.test($Name)) {
      	$(this).focus();
      	$(this).css('border','2px solid red');
	  	$('#Name_error').html("Enter alphabets only");
      	return false;
		}
	 else{
		 $(this).css('border','NONE');
		 $('#Name_error').html("");
		return true;
    } 
  });
  $("#Fathersname").focusout(function(){
   var val_Fathersname=/^[A-Za-z.\s]{1,30}$/;
   $Fathersname= $('#Fathersname').val();
     if (!val_Fathersname.test($Fathersname)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#Fathersname_error').html("Enter alphabets only");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#Fathersname_error').html("");
		return true;
    } 
});
 $("#Mothersname").focusout(function(){
  var val_Mothersname=/^[A-Za-z.\s]{3,50}$/;
  $Mothersname= $('#Mothersname').val();
   if (!val_Mothersname.test($Mothersname)) {
      $("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#Mobileno_error').html("Invalid name");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#Mothersname_error').html("");
		return true;
    } 
	});
 $("#Mobileno").focusout(function(){
  var val_Mobileno=/^[A-Za-z.\s]{3,40}$/;
  $Mobileno= $('#Mobileno').val();
   if (!val_Mobileno.test($place)) {
      $("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#Mobileno_error').html("Invalid place");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#Mobileno_error').html("");
		return true;
    } 
	});	
 $("#HouseName").focusout(function(){
 var val_HouseName=/^[0-9]{5,6}$/;
  $HouseName= $('#HouseName').val();
   if (!val_HouseName.test($HouseName)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#HouseName_error').html("Invalid Pin");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#HouseName_error').html("");
		return true;
    } 
	});
	$("#Place").focusout(function(){
 var val_Place= /^[0-9]{9,12}$/;
  $Place= $('#Place').val();
   if (!val_Place.test($Place)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#Place_error').html("Invalid Phonenumber");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#Place_error').html("");
		return true;
    } 
	});
	$("#Username").focusout(function(){
 var val_Username= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
  $Username= $('#Username').val();
   if (!val_Username.test($user)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#Username_error').html("Invalid userid");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#Username_error').html("");
		return true;
    } 
	});
	$("#Password").focusout(function(){
    var val_Password= /^[^&]{6,30}$/;
  $Password= $('#Password').val();
   if (!val_Password.test($pass)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#Password_error').html("Invalid Password");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#Password_error').html("");
		return true;
    } 
	});
	
  
 
   })
