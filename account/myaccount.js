function validate() {
  var  name1= document.getElementById("firstname").value;
    if (name1.length == 0 ||  name1.length <3) { 
document.getElementById('fname').innerHTML = "This field is required";    display_error("#firstname","#fname");                
      return false;
    }
  else {
display_success("#firstname","#fname");
   }
  
  var name2 = document.getElementById("lastname").value;
    if (name2.length == 0 ||  name2.length <3) { 
document.getElementById('lname').innerHTML = "This field is requiredd";      display_error("#lastname","#lname");                
      return false;
    }
  else {
display_success("#lastname","#lname");
   }
  
  var zcode = document.getElementById("zipcode").value;
    if (zcode.length == 0) { 
document.getElementById('zcode').innerHTML = "This field is required"; 
display_error("#zipcode","#zcode"); 
     return false;
    }        if (zcode == isNaN(zcode)) { 
document.getElementById('zcode').innerHTML = "This field only contains digits"; display_error("#zipcode","#zcode");             
      return false;
    } if (zcode.length >7 || zcode.length <3) {
document.getElementById('zcode').innerHTML = "Zipcode must contain 4 to 6 digits.";  
display_error("#zipcode","#zcode");      
 } else { display_success("#zipcode","#zcode"); 
   } 

var user = document.getElementById("username").value;
    if (user.length == 0 || user.length <3) { document.getElementById('user').innerHTML = "This field is required"; 
display_error("#username","#user");                
      return false;
    }
  if ( () => {
var exp = /^(([a-zA-Z0-9][.]?){2,}|([a-zA-Z0-9]\.)+)([a-zA-Z0-9]|(?!\.))+?[a-zA-Z0-9]@(([a-zA-Z0-9]+\.)+[a-zA-Z]{2,5})$/; 
if (!exp.test(input)) {
  return false;
}
  }
     ) {
document.getElementById('user').innerHTML = "This field is required"; 
display_error("#username","#user");                
    }
  else {
display_success("#username","#user");
   }
  
  var pass = document.getElementById("loginpass").value;
    if (pass.length == 0 ||  pass.length < 3) { 
document.getElementById('lpass').innerHTML = "This field is required";   
      display_error("#loginpass","#lpass");                
      return false;
    }
  if ( () => {
var exp = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])$/; 
if (!exp.test(input)) {
  return false;
}
  }
     ) {
document.getElementById('lpass').innerHTML = "Invalid characters"; 
display_error("#loginpass","#lpass");   
  } else {
display_success("#loginpass","#lpass");
   }

var repass = document.getElementById("repassword").value;
    if (repass.length == 0) { 
document.getElementById('repass').innerHTML = "This field is required";      display_error("#repassword","#repass");             
      return false;
    } if (repass !== pass) {
document.getElementById('repass').innerHTML = "Passwords does not match";  
display_error("#repassword","#repass");       
    }
  else { display_success("#repassword","#repass"); 
   } 
  
  var city = document.getElementById("city").value;
    if (city.length == 0 ||  city.length < 3) { 
document.getElementById('cty').innerHTML = "This field is required";      display_error("#city","#cty");             
      return false;
    }
  else {
display_success("#city","#cty");
   }
  
    var adr = document.getElementById("address").value;
    if (adr.length == 0 ||  adr.length <3) { 
 document.getElementById('adr').innerHTML = "This field is required";      display_error("#address","#adr");            
  return false;
    }
  else {
display_success("#address","#adr");  
}
}

 function display_success(input,span) {
 var span = document.querySelector(span);
 var input = document.querySelector(input);
   input.classList.remove("form-error");
       input.classList.add("form-success");
  span.innerHTML="Success"
   span.classList.add("success-message");   
   }

 function display_error(input,span) {
 var span = document.querySelector(span);
 var input = document.querySelector(input);    input.classList.add("form-error");
   span.classList.add("error-message");   
   }

