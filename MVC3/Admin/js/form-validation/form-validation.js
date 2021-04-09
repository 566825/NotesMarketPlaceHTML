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

// note unpublish form
$(function() {
  var $unpublishNoteForm = $("#unpublish-note-form");
  if ($unpublishNoteForm.length) {
    $unpublishNoteForm.validate({
      rules: {          
        NoteRemarks: {
          required: true
        }                            
      }
    });
  }
});

// note reject form
$(function() {
  var $rejectNoteForm = $("#reject-note-form");
  if ($rejectNoteForm.length) {
    $rejectNoteForm.validate({
      rules: {          
        NoteRemarks: {
          required: true
        }                            
      }
    });
  }
});


// user profile form
$(function() {
  var $myProfileForm = $("#my-profile-form");
  if ($myProfileForm.length) {
    $myProfileForm.validate({
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
        SecondaryEmailID: {
          email: true
        },        
        PhoneNumber: {
          digits: true,
          minlength: 10,
          maxlength: 10
        },
        ProfilePicture: {
          onlyImage: true
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

// system config form
$(function() {
  var $systemConfigForm = $("#system-config-form");
  if ($systemConfigForm.length) {
    $systemConfigForm.validate({
      rules: {
        SupportEmail: {
          required: true,
          email: true
        },
        SupportPhoneNumber: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10
        },
        EmailAddresses: {
          required: true,
          email: true
        },
        FBURL: {
          required: true,
        },
        TURL: {
          required: true,
        },
        LIURL: {
          required: true,
        },
        DefaultNoteDP: {
          onlyImage: true
        },
        DefaultUserDP: {
          onlyImage: true
        }
      },
      messages :{
        SupportPhoneNumber : {
          minlength : 'Please enter 10 digits only.',
          maxlength: 'Please enter 10 digits only.'
        }
      },
      errorPlacement: function (error, element) {
        if (element.attr('name') == 'DefaultNoteDP') {
          error.insertAfter(element.closest('div'));
        } else if (element.attr('name') == 'DefaultUserDP') {
          error.insertAfter(element.closest('div'));
        } else {
          error.insertAfter(element);
        }      
      },
    });
  }
});


// add admins form
$(function() {
  var $addAdminForm = $("#add-admin-form");
  if ($addAdminForm.length) {
    $addAdminForm.validate({
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
        }
      },
      messages :{
        PhoneNumber : {
          minlength : 'Please enter 10 digits only.',
          maxlength: 'Please enter 10 digits only.'
        }
      },
      errorPlacement: function (error, element) {
        if (element.attr('name') == 'CountryCode') {
          error.insertAfter(element.closest('div'));
        } else {
          error.insertAfter(element);
        }      
      }
    });
  }
});

// add category form
$(function() {
  var $addCategoryForm = $("#add-category-form");
  if ($addCategoryForm.length) {
    $addCategoryForm.validate({
      rules: {
        CatName: {
          required: true,
          noDigits: true,
          maxlength: 100
        },
        CatDesc: {
          required: true
        }
      }
    });
  }
});

// add type form
$(function() {
  var $addTypeForm = $("#add-type-form");
  if ($addTypeForm.length) {
    $addTypeForm.validate({
      rules: {
        TypeName: {
          required: true,
          noDigits: true,
          maxlength: 100
        },
        TypeDesc: {
          required: true
        }
      }
    });
  }
});

// add country form
$(function() {
  var $addCountryForm = $("#add-country-form");
  if ($addCountryForm.length) {
    $addCountryForm.validate({
      rules: {
        CountryName: {
          required: true,
          noDigits: true,
          maxlength: 100
        },
        CountryCode: {
          required: true
        }
      }
    });
  }
});