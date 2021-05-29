function validate() {
    var  name1= document.getElementById("firstname").value;
      if (name1.length == 0 ||  name1.length <= 3) { 
  document.getElementById('fname').innerHTML = "Required field";    display_error("#firstname","#fname");                
        return false;
      }
    else {
  display_success("#firstname","#fname");
     }
    
    var name2 = document.getElementById("lastname").value;
      if (name2.length == 0 ||  name2.length <= 3) { 
  document.getElementById('lname').innerHTML = "Required field";      display_error("#lastname","#lname");                
        return false;
      }
    else {
  display_success("#lastname","#lname");
     }
    var user = document.getElementById("username").value;
      if (user.length == 0 || user.length <= 3) { document.getElementById('user').innerHTML = "Required field"; 
  display_error("#username","#user");                
        return false;
      }
    else {
  display_success("#username","#user");
     }
    
    var pass = document.getElementById("loginpass").value;
      if (pass.length == 0 ||  pass.length <= 3) { 
  document.getElementById('lpass').innerHTML = "Required field";   display_error("#loginpass","#lpass");                
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
    } else {
  display_success("#loginpass","#lpass");
     }
    
    var city = document.getElementById("city").value;
      if (city.length == 0 ||  city.length <= 3) { 
  document.getElementById('cty').innerHTML = "Required field";      display_error("#city","#cty");             
        return false;
      }
    else {
  display_success("#city","#cty");
     }
    
      var adr = document.getElementById("address").value;
      if (adr.length == 0 ||  adr.length <= 3) { 
   document.getElementById('adr').innerHTML = "Required field";      display_error("#address","#adr");                
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
  
  function isPassword(input) {
    var input = document.querySelector(input);          
   
          }
  