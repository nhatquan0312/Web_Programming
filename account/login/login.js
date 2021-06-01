

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