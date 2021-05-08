function Validator(options) {
    
    var formElement = document.querySelector(options.form);
        
    if (formElement) {
            options.rules.forEach(function(rule) { 
                var inputElement = formElement.querySelector(rule.selector);
                
                if (inputElement) {
                    inputElement.blur = function () {
                    var errorMessage = rule.test(inputElement.value);
                    var errorElement = inputElement.parentElement.querySelector('.error-message');
                    
                    if (errorMessage) {
                        errorElement.innerText = errorMessage;
                        inputElement.parentElement.classList.add('invalid');
                    } else {
                        errorElement.innerText = " ";
                        inputElement.parentElement.classList.remove('invalid');
                    }
                }
            }
            });

        }
    }


Validator.isRequired = function (selector) {
    return {
    selector: selector,
    test: function (value) {
        return value.trim() ? undefined : "This field can not be blank"
    }
    };
}
Validator.isEmail = function (selector) {
    
    return {
        selector: selector,
        test: function () {

        }
    };
}
  
                
            
                