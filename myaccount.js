const form = document.getElementById('register-form');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const fname = document.getElementById('fname');
const password = document.getElementById('password');
const lname = document.getElementById('lname');
const password2 = document.getElementById('password2');
const address = document.getElementById('address');
const city = document.getElementById('city');
const zipcode = document.getElementById('zipcode');

form .addEventListener('submit',(n) => {
    n.preventDefault();
    checkInputs(); 
});

function checkInputs()
{

const phoneValue = phone.value.trim();
const emailValue = email.value.trim();
const fnameValue = fname.value.trim();
const passwordValue = password.value.trim();
const lnameValue = lname.value.trim();
const password2Value = password2.value.trim();
const addressValue = address.value.trim();
const cityValue = city.value.trim();
const zipcodeValue = zipcode.value.trim();


if (fnameValue === '') {
    setErrorFor(fname, 'First name can not be blank');
} else {
    setSuccessFor(fname);
}


if (lnameValue === '') {
    setErrorFor(fname, 'First name can not be blank');
} else {
    setSuccessFor(lname);
}

if (fnameValue === '') {
    setErrorFor(fname, 'Last name can not be blank');
} else {
    setSuccessFor(fname);
}

if (emailValue === '') {
    setErrorFor(email, 'Email can not be blank');
} else if (isEmail(emailValue))
{
setErrorFor(email, 'Email is not valid');
}
else { 
    setSuccessFor(email)
}
}

if (fnameValue === '') {
    setErrorFor(fname, 'First name can not be blank');
} else {
    setSuccessFor(fname);
}

if (emailValue === '') {
    setErrorFor(email)
}

function setErrorFor(input,message) {
    const inputField = input.parentElement;
    const small = inputField.querySelector('small');
    small.innerText = message;
    inputField.className = "inputbox error"
}

function setSuccessFor(input) {
    const inputField = input.parentElement;
    inputField.className = "inputbox success"
}
