function validate() { 
    /*coupon validication*/
    var cp1 = "COSC2430-HD";
    var cp2 = "COSC2430-DI";
    var x,text;

    var val = document.getElementById('coupon').value;


    if (val == cp1 || val == cp2) {
        text = 'Valid coupon';
    }
    else {
        text = 'Invalid code';
    }
/*    var t = document.getElementById('price').value = Number(price);
    x = (number(total)-(number(total) * 0.1));
    document.getElementById('price').innterHTML = x; */
    document.getElementById('note').innerHTML = text;


}