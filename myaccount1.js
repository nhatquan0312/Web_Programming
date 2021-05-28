function Validator(options) {
    
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};
    function validate(inputElement, rule) {
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        var errorMessage;
        var rules = selectorRules[rule.selector];
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
        }
        
        if (errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        } else {
            errorElement.innerText = '';
            getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
        }

        return !errorMessage;
    }

    var formElement = document.querySelector(options.form);
    if (formElement) {
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                if (typeof options.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]');
                    var formValues = Array.from(enableInputs).reduce(function (values, input) {
                        
                        switch(input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if (!input.matches(':checked')) {
                                    values[input.name] = '';
                                    return values;
                                }
                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }

                        return values;
                    }, {});
                    options.onSubmit(formValues);
                }

                else {
                    formElement.submit();
                }
            }
        }

        options.rules.forEach(function (rule) {

            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {

                inputElement.onblur = function () {
                    validate(inputElement, rule);
                }

                inputElement.oninput = function () {
                    var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                } 
            });
        });
    }

}

Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (input) {
            return input ? undefined :  message || 'This field is required'
        }
    };
}

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (input) {
            var exp = /^(([a-zA-Z0-9][.]?){2,}|([a-zA-Z0-9]\.)+)([a-zA-Z0-9]|(?!\.))+?[a-zA-Z0-9]@(([a-zA-Z0-9]+\.)+[a-zA-Z]{2,5})$/;
            return exp.test(input) ? undefined :  message || 'Invalid email';
        }
    };
}

Validator.isPassword = function (selector, message) {
    return {
        selector: selector,
        test: function (input) {
            var exp = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])$/; 
            return exp.test(input) ? undefined :  message || 'Invalid characters';
        }
    };
} 


Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (input) {
            return input.length >= min ? undefined :  message || `Enter at lease ${min} characters`;
        }
    };
}

Validator.isNumber = function(selector, message) {
    return {
        selector: selector,
        test: function (input) {
            return input === isNaN(input) ? undefined : message || 'This field only contains digits '
            }
        };
}

Validator.isConfirmed = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (input) {
            return input === getConfirmValue(input) ? undefined : message || 'Passwords does not match';
        }
    }
}


Login.Correctpass = function (selector) {
    return {
        selector: selector,
        test: function (input) {
            var corpass = 'password'; 
            return input == corpass ? undefined :  message || 'Wrong password';
        }
    };
} 

const button = document.getElementsByClassName('owner')[0]
const list = document.getElementsByClassName('detail-info')[0]

button.addEventListener('click',() =>{
  list.classList.toggle('show');
})

