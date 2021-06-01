function validate() {
  var user = document.getElementById("username").value;
    if (user.length == 0 || user.length <= 3) { document.getElementById('user').innerHTML = "This field is required"; 
display_error("#username","#user");                
      return false;
    }
  else {
display_success("#username","#user");
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
 var input = document.querySelector(input);    
 input.classList.add("form-error");
   span.classList.add("error-message");   
   }