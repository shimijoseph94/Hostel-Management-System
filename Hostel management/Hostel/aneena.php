$(document).ready(function(){
  $("#contact").on("submit",function(){
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
    $Username =$("#Username").val();
	$Password =$("#Username").val();

    if (!val_Name.test($Name)) {
      $("#first_name").focus();
      alert("enter firstname");
      return false;
	}
	 else if (!val_Fathersname.test($Fathersname)) {
      $("#last_name").focus();
      alert("enter lastname");
      return false;
	 }
	 else if (!val_address.test($Mothersname)) {
      $("#address").focus();
      alert("enter address");
      return false;
	 }
	 else if (!val_place.test($place)) {
      $("#place").focus();
      alert("enter place");
      return false;
	 }
	 else if (!val_pcode.test($pincode)) {
      $("#pincode").focus();
      alert("invalid pincode");
      return false;
    }
	else if (!val_phone.test($phone)) {
      $("mobile").focus();
      alert("enter 10 numbers");
      return false;
    }
	else if(!val_userid.test($user)){
      $("#userid").focus();
      alert("invalid userid");
      return false;
    }
    else if (!val_pass.test($pass)) {
      $("#password").focus();
      alert("invalid password");
      return false;
    }
    else{
      return true;
    }
  });
  $("#first_name").focusout(function(){
	  var val_fname=/^[A-Za-z.\s]{3,30}$/;
	  $firstname= $('#first_name').val();
	  if (!val_fname.test($firstname)) {
      	//$(this).focus();
      	$(this).css('border','2px solid red');
	  	$('#first_name_error').html("Enter alphabets only");
      	return false;
		}
	 else{
		 $(this).css('border','NONE');
		 $('#first_name_error').html("");
		return true;
    } 
  });
  $("#last_name").focusout(function(){
   var val_lname=/^[A-Za-z.\s]{1,30}$/;
   $lastname= $('#last_name').val();
     if (!val_lname.test($lastname)) {
      //$(this).focus();
      $(this).css('border','2px solid red');
	  $('#last_name_error').html("Enter alphabets only");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#last_name_error').html("");
		return true;
    } 
});
 $("#address").focusout(function(){
  var val_address=/^[A-Za-z.\s]{3,50}$/;
  $address= $('#address').val();
   if (!val_address.test($address)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#address_error').html("Invalid Address");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#address_error').html("");
		return true;
    } 
	});
 $("#place").focusout(function(){
  var val_place=/^[A-Za-z.\s]{3,40}$/;
  $place= $('#place').val();
   if (!val_place.test($place)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#place_error').html("Invalid place");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#place_error').html("");
		return true;
    } 
	});	
 $("#pincode").focusout(function(){
 var val_pcode=/^[0-9]{5,6}$/;
  $pincode= $('#pincode').val();
   if (!val_pcode.test($pincode)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#pincode_error').html("Invalid Pin");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#pincode_error').html("");
		return true;
    } 
	});
	$("#mobile").focusout(function(){
 var val_phone= /^[0-9]{9,12}$/;
  $phone= $('#mobile').val();
   if (!val_phone.test($phone)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#mobile_error').html("Invalid Phonenumber");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#mobile_error').html("");
		return true;
    } 
	});
	$("#userid").focusout(function(){
 var val_userid= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
  $user= $('#userid').val();
   if (!val_userid.test($user)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#userid_error').html("Invalid userid");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#userid_error').html("");
		return true;
    } 
	});
	$("#password").focusout(function(){
    var val_pass= /^[^&]{6,30}$/;
  $pass= $('#password').val();
   if (!val_pass.test($pass)) {
      //$("#pin").focus();
      $(this).css('border','2px solid red');
	  $('#password_error').html("Invalid Password");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#password_error').html("");
		return true;
    } 
	});
	
  
 
   })
