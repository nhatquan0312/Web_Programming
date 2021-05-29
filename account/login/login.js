function validate() {
    var user = document.getElementById("username").value;
      if (user.length == 0 ||  user.length <= 3) { document.getElementById('user').innerHTML = "Required field"; 
  
  document.getElementById('username').classList.add("form-error");                    
        return false;
      }
    else {
  document.getElementById('username').classList.add("form-success"); 
    }
    var pass = document.getElementById("loginpass").value;
      if (pass.length == 0 ||  pass.length <= 3) { document.getElementById('lpass').innerHTML = "Required field"; 
  
  document.getElementById('loginpass').classList.add("form-error");                    
        return false;
      }
    else {
  document.getElementById('lpass').classList.add("form-success"); 
    return true;
    }
    
  
  }
  