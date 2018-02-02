$(document).ready(function() {

  $("#signup_form").on("submit", function(){
    var val_fullname= /^[A-Za-z.\s]{3,30}$/;
    var val_username= /^[A-Za-z0-9_.]{3,30}$/;
    var val_phone= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_address_line1= /^[^&]{10,300}$/;
    var val_password= /^[^&]{6,30}$/;
    $fullname = $('#signup-fullname').val();
    $username = $('#signup-username').val();
    $phone = $('#signup-phone').val();
    $email = $('#signup-email').val();
    $address_line1 = $('#signup-address_line1').val();
    $password = $('#signup-password').val();


    if(!val_fullname.test($fullname)){
      $("#signup-fullname").focusout();
      return false;
    }
    else if(!val_username.test($username)){
      $("#signup-username").focusout();
      return false;
    }
    else if(!val_phone.test($phone)){
      $("#signup-phone").focusout();
      return false;
    }
    else if(!val_email.test($email)){
      $("#signup-email").focusout();
      return false;
    }
    else if(!val_address_line1.test($address_line1)){
      $("#signup-address_line1").focusout();
      return false;
    }
    else if(!val_password.test($password)){
      $("#signup-password"),focusout();
      return false;
    }
    else {
      return true;
    }
  });
  $("#signup-fullname").focusout(function() {
    var val_fullname= /^[A-Za-z.\s]{3,30}$/;
    $fullname = $(this).val();
    if(!val_fullname.test($fullname)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#name_error').html("Invalid name");
      $('#name_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#name_error').html("");
      $('#name_error').removeClass('is-visible');
      return true;
    }
  });
  $("#signup-username").focusout(function() {
    var val_username= /^[A-Za-z0-9_.]{3,30}$/;
    $username = $(this).val();
    if(!val_username.test($username)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#username_error').html("Invalid Username");
      $('#username_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#username_error').html("");
      $('#username_error').removeClass('is-visible');
      return true;
    }
  });
  $("#signup-phone").focusout(function() {
    var val_phone= /^[0-9]{9,12}$/;
    $phone = $(this).val();
    if(!val_phone.test($phone)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#phone_error').html("Invalid phone number");
      $('#phone_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#phone_error').html("");
      $('#phone_error').removeClass('is-visible');
      return true;
    }
  });
  $("#signup-email").focusout(function() {
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    $email = $(this).val();
    if(!val_email.test($email)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#email_error').html("Invalid email");
      $('#email_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#email_error').html("");
      $('#email_error').removeClass('is-visible');
      return true;
    }
  });
  $("#signup-address_line1").focusout(function() {
    var val_address_line1= /^[^&]{10,300}$/;
    $address_line1 = $(this).val();
    if(!val_address_line1.test($address_line1)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#address_error').html("Invalid address");
      $('#address_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#address_error').html("");
      $('#address_error').removeClass('is-visible');
      return true;
    }
  });
  $("#signup-password").focusout(function() {
    var val_password= /^[^&]{6,30}$/;
    $password  = $(this).val();
    if(!val_password.test($password )){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#password_error').html("Invalid password");
      $('#password_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#password_error').html("");
      $('#password_error').removeClass('is-visible');
      return true;
    }
  });


  $("#signin_form").on("submit", function(){
    var val_username= /^[A-Za-z0-9_.]{3,30}$/;
    var val_password= /^[^&]{6,30}$/;
    $username = $('#username').val();
    $password = $('#password').val();
    var v = grecaptcha.getResponse();

    if(!val_username.test($username)){
      $("#username").focusout();
      return false;
    }
    else if(!val_password.test($password)){
      $("#password").focusout();
      return false;
    }
    else if(v.length==0){
         $("#signin-captcha_error ").addClass('is-visible');
         return false;
    }
    else {
      return true;
    }
  });
  $("#username").focusout(function() {
    var val_username= /^[A-Za-z0-9_.]{3,30}$/;
    $username = $(this).val();
    if(!val_username.test($username)){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#signin-username_error').html("Invalid Username");
      $('#signin-username_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#signin-username_error').html("");
      $('#signin-username_error').removeClass('is-visible');
      return true;
    }
  });
  $("#password").focusout(function() {
    var val_password= /^[^&]{6,30}$/;
    $password  = $(this).val();
    if(!val_password.test($password )){
      $(this).focus();
      $(this).css('border','1px solid red');
      $('#signin-password_error').html("Invalid password");
      $('#signin-password_error').addClass('is-visible');
      return false;
    }
    else {
      $(this).css('border','1px solid #cccccc');
      $('#signin-password_error').html("");
      $('#signin-password_error').removeClass('is-visible');
      return true;
    }
  });
});
 