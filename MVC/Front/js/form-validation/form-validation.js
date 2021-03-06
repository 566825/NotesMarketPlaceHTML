// nospace
$.validator.addMethod("noSpace", function(value, element) { 
  return value == '' || value.trim().length != 0;  
}, "No space is allowed and don't leave it empty");

// no digits in name fields
$.validator.addMethod("noDigits", function(value, element) { 
  return this.optional( element ) || !/\d/.test( value ); 
}, "No digits are allowed in this field");

// password conditions
$.validator.addMethod("oneLowercase", function(value, element) { 
  return this.optional( element ) || /[a-z]/.test( value ); 
}, "Should have atleast 1 lowercase character");

$.validator.addMethod("oneDigit", function(value, element) { 
  return this.optional( element ) || /\d/.test( value ); 
}, "Should have atleast 1 digit");

$.validator.addMethod("noWhitespace", function(value, element) { 
  return this.optional( element ) || !/\s/.test( value ); 
}, "No whitespace is allowed");

$.validator.addMethod("oneUppercase", function(value, element) { 
  return this.optional( element ) || /[A-Z]/.test( value ); 
}, "Should have atleast 1 uppercase character");

$.validator.addMethod("oneSpecialChar", function(value, element) { 
  return this.optional( element ) || /[!@#$%^&*]/.test( value ); 
}, "Should have atleast 1 special character (! @ # $ % ^ & *)");

// signup form
$(function() {
    var $signupForm = $("#signup-form");
    if ($signupForm.length) {
      $signupForm.validate({
        rules: {
          sign_fname:{
            required: true,
            maxlength: 50,
            noDigits: true,            
            noSpace: true,            
          },
          sign_lname:{
            required: true,
            maxlength: 50,
            noDigits: true,
            noSpace: true,            
          },
          sign_email: {
            required: true,
            email: true,
            maxlength: 100
          },
          sign_password: {
            required: true,
            minlength: 6,
            maxlength: 24,
            oneLowercase: true,
            oneDigit: true,  
            noWhitespace: true,
            oneUppercase: true,
            oneSpecialChar: true,
            noSpace: true                        
          },
          sign_confirm_password: {
            required: true,
            equalTo: '#exampleInputPassword2',
          }                      
        }
      });
    }
  });



// login form
$(function() {
  var $loginForm = $("#login-form");
  if ($loginForm.length) {
    $loginForm.validate({
      rules: {  
        login_email: {
          required: true,
          email: true
        },
        login_password: {
          required: true
        }                            
      }
    });
  }
});



// forgot form
$(function() {
  var $forgotForm = $("#forgot-form");
  if ($forgotForm.length) {
    $forgotForm.validate({
      rules: {  
        EmailID: {
          required: true,
          email: true
        }                           
      }
    });
  }
});



// conatct us form
$(function() {
  var $contactUsForm = $("#contact-us-form");
  if ($contactUsForm.length) {
    $contactUsForm.validate({
      rules: {  
        Subject: {
          required: true,          
        },
        Comments: {
          required: true,          
        }                           
      }
    });
  }
});

// dashboard form 1
$(function() {
  var $ipnForm = $("#ipn-form");
  if ($ipnForm.length) {
    $ipnForm.validate({
      rules: {  
        ipn_keyword: {
          required: true,          
        },                          
      }
    });
  }
});

// dashboard form 2
$(function() {
  var $pnForm = $("#pn-form");
  if ($pnForm.length) {
    $pnForm.validate({
      rules: {  
        pn_keyword: {
          required: true,          
        },                          
      }
    });
  }
});

// buyer requests form 
$(function() {
  var $brForm = $("#br-form");
  if ($brForm.length) {
    $brForm.validate({
      rules: {  
        br_keyword: {
          required: true,          
        },                          
      }
    });
  }
});

