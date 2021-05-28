function validate() {
    var user = document.getElementById("username").value;
        if (user == "") { document.getElementById('user').innerHTML = "Required field"; 
    
    document.getElementById('username').classList.add("form-error");                    
          return false;
        }
      else {
    document.getElementById('username').classList.add("form-success"); 
      }
      
    var pass =document.getElementById("passWORD").value;
        if (pass == "") { document.getElementById('pass').innerHTML = "Required field";           
          return false;
        }
    }
  
  