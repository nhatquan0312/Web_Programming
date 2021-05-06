
/*Add and Subtract*/
/*var i = 1
function Add() {
    document.getElementById('number1').value = ++i;
}

function Sub() {
    document.getElementById('number1').value = --i;
    if (i == 0) {
        document.getElementById('box1').style.display = 'none';
        var pr = document.getElementById('price');
        numPrice = pr.textContent;
        tot_price = Number(numPrice);
        tot_Price = tot_Price - Number(399000);
        document.getElementById('price').innerHTML = 1;
    }
} */

/*apply data form local storage*/

function auto() {

    x = JSON.parse(localStorage.getItem('products') );
    document.getElementById('p-name1').innerHTML = x.product1.name;
    document.getElementById('p-price1').innerHTML = x.product1.price;
    document.getElementById('p-name2').innerHTML = x.product2.name;
    document.getElementById('p-price2').innerHTML = x.product2.price;

    document.getElementById('box2').style.display = '';
    var p_price = Number(x.product1.price);
    document.getElementById('price').InnerHTML = x.product1.price;
    var x = document.getElementById('p-price1');
    var y = document.getElementById('p-price2');
    numPrice1 = x.textContent;
    numPrice2 = y.textContent;
    price1 = Number(numPrice1);
    price2 = Number(numPrice2);
    var total = price1 + price2;
    document.getElementById('price').innerHTML = total;
}

var RemoveButton = document.getElementsByClassName('remove-button')
console.log(RemoveButton)
for ( var i = 0; i < RemoveButton.length; i++) {
    var button = RemoveButton[i]
    button.addEventListener('click', function(event) {
        var Clicked = event.target 
        Clicked.parentElement.parentElement.remove()
        updateCart()
    })
} 
