function total() {
    var parent = document.getElementsByClassName('background');
    var sum = parent.getElementById('box');
    document.getElementById('total').innterHTML = sum;
}


function validate() { 
    /*coupon validication*/
    var cp1 = "COSC2430-HD";
    var cp2 = "COSC2430-DI";
    var x,text;
    var span = document.getElementById('price');
    var content = span.textContent;
    var number = Number(content);
    var val = document.getElementById('coupon').value; 

    if (val == cp2) {
        text = "You're discounted 10% total price ";
        x = number-(number*0.1); /*10%*/
        document.getElementById('price').innerHTML = x;
        document.getElementById('coupon').disabled = true;
        document.getElementById('check').disabled = true;
    }
    else if (val == cp1) {
        text = "You're discounted 20% total price";
        x = number-(number*0.2); /*20%*/
        document.getElementById('price').innerHTML = x;
        document.getElementById('coupon').disabled = true;
        document.getElementById('check').disabled = true;
    }
    else {
        text = 'Invalid coupon';
    }
    /*if (val == cp1) {
        text = 'valid coupon';
        x = number-(number*0.2);
        document.getElementById('price').innerHTML = x;
        document.getElementById('coupon').disabled = true;
    }
    else {
        text = 'Invalid code';
    };*/



/*    var t = document.getElementById('price').value = Number(price);
    x = (number(total)-(number(total) * 0.1));
    document.getElementById('price').innterHTML = x; */
    document.getElementById('note').innerHTML = text;


}
