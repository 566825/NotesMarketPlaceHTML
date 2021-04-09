// nospace
$.validator.addMethod("noSpace", function(value, element) { 
  return value == '' || value.trim().length != 0;  
}, "No space is allowed and don't leave it empty");

// no digits in name fields
$.validator.addMethod("noDigits", function(value, element) { 
  return this.optional( element ) || !/\d/.test( value ); 
}, "No digits are allowed in this field");

// only pdf
$.validator.addMethod("onlyPDF", function(value, element) { 
  return this.optional( element ) || /([a-zA-Z0-9\s_\\.\-:])+(.pdf)/.test( value ); 
}, "Please upload pdf only.");

// only images
$.validator.addMethod("onlyImage", function(value, element) { 
  return this.optional( element ) || /([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)/.test( value ); 
}, "Please upload image(jpg, jpeg, png) only.");

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

// change password form
$(function() {
  var $changePasswordForm = $("#change-password-form");
  if ($changePasswordForm.length) {
    $changePasswordForm.validate({
      rules: {  
        old_password: {
          required: true,          
        },
        new_password: {
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
        confirm_new_password: {
          required: true,
          equalTo: '#exampleInputPassword5',
        },                             
      }
    });
  }
});

// addnote form
$(function () {
  var $addNoteForm = $("#add-note-form");
  if ($addNoteForm.length) {
    $addNoteForm.validate({
      rules: {
        Title: {
          required: true
        },
        Category: {
          required: true
        },
        Description: {
          required: true
        },
        NumberOfPages: {
          digits: true
        },
        SellingPrice: {
          digits: true
        },
        IsPaid: {
          required: true
        },
        'NoteAttachment[]': {
          onlyPDF: true          
        },
        DisplayPicture: {
          onlyImage: true
        },
        NotesPreview: {
          onlyPDF: true
        }        
      },
      errorPlacement: function (error, element) {
        if (element.attr('name') == 'IsPaid') {
          error.insertAfter(element.closest('div'));
        } else if (element.attr('name') == 'NoteAttachment[]') {
          error.insertAfter(element.closest('div'));
        } else if (element.attr('name') == 'NotesPreview') {
          error.insertAfter(element.closest('div'));
        } else if (element.attr('name') == 'DisplayPicture') {
          error.insertAfter(element.closest('div'));
        } else {
          error.insertAfter(element);
        }       
      },
      messages :{
        IsPaid : {
          required : 'Please select atleast one.'
        }
      }
    });
  }
});

// user profile form
$(function() {
  var $userProfileForm = $("#user-profile-form");
  if ($userProfileForm.length) {
    $userProfileForm.validate({
      rules: {  
        FirstName: {
          required: true,
          noDigits: true,
          maxlength: 50
        },
        LastName: {
          required: true,
          noDigits: true,
          maxlength: 50
        },
        EmailID: {
          required: true,
          email: true
        },
        CountryCode: {
          required: true
        },
        PhoneNumber: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10
        },
        ProfilePicture: {
          onlyImage: true
        },
        AddressLine1: {
          required: true,
          maxlength: 100
        },
        AddressLine2: {
          required: true,
          maxlength: 100
        },
        City: {
          required: true,
          maxlength: 50
        },
        State: {
          required: true,
          maxlength: 50
        },
        ZipCode: {
          required: true,
          maxlength: 50
        },
        Country: {
          required: true
        },
        University: {
          maxlength: 100
        },
        College: {
          maxlength: 100
        }                                                     
      },
      messages :{
        PhoneNumber : {
          minlength : 'Please enter 10 digits only.',
          maxlength: 'Please enter 10 digits only.'
        }
      },
      errorPlacement: function (error, element) {
        if (element.attr('name') == 'ProfilePicture') {
          error.insertAfter(element.closest('div'));
        } else {
          error.insertAfter(element);
        }      
      },
    });
  }
});


// note report form
$(function() {
  var $noteReportForm = $("#note-report-form");
  if ($noteReportForm.length) {
    $noteReportForm.validate({
      rules: {          
        NoteRemarks: {
          required: true
        }                            
      }
    });
  }
});

// note review form
$(function() {
  var $noteReviewForm = $("#note-review-form");
  if ($noteReviewForm.length) {
    $noteReviewForm.validate({
      rules: {          
        Comments: {
          required: true
        },
        NoteRate: {
          required: true
        }                            
      },
      messages :{
        NoteRate : {
          required: 'Please rate a note.'
        }
      },
      errorPlacement: function (error, element) {
        if (element.attr('name') == 'NoteRate') {
          error.insertAfter(element.closest('div'));
        } else {
          error.insertAfter(element);
        }      
      }
    });
  }
});


