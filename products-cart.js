
var RemoveButton = document.getElementsByClassName('remove-button')
for ( var i = 0; i < RemoveButton.length; i++) {
    var button = RemoveButton[i]
    button.addEventListener('click', function(event) {
        var Clicked = event.target 
        Clicked.parentElement.parentElement.remove()
        localStorage.removeItem("product1")
        localStorage.removeItem("product2")
        updateCart() 
        
    })
}
var quantityInput = document.getElementsByClassName('quantity-input')
for ( var i = 0; i < quantityInput.length; i++) {
    var input = quantityInput[i]
    input.addEventListener('change',quantityChanged)
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCart()
}

function updateCart() {
    var cartContainer = document.getElementsByClassName('items')[0]
    var cartList = cartContainer.getElementsByClassName('flex')
    var total = 0
    for (var i = 0; i < cartList.length; i++) {
        var cartList = cartList[i]
        var PriceElement = cartList.getElementsByClassName('cart-price')[0]
        var QuantityElement = cartList.getElementsByClassName('quantity-input')[0]

        var price = parseFloat(PriceElement.innerText.replace('$', ''))
        var quantity = QuantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('total-price')[0].innerText = total
    console.log(total)
}



/*coupon */

function validate() { 
    /*coupon validication*/
    var cp1 = "COSC2430-HD";
    var cp2 = "COSC2430-DI";
    var x,text;
    var span = document.getElementById('tprice');
    var content = span.textContent;
    var number = Number(content);
    var val = document.getElementById('coupon').value; 
    console.log(number)

    if (val == cp2) {
        text = "You're discounted 10% ";
        x = number-(number*0.1); /*10%*/
        document.getElementById('tprice').innerHTML = x;
        document.getElementById('coupon').disabled = true;
        document.getElementById('check').disabled = true;
    }
    else if (val == cp1) {
        text = "You're discounted 20% ";
        x = number-(number*0.2); /*20%*/
        document.getElementById('tprice').innerHTML = x;
        document.getElementById('coupon').disabled = true;
        document.getElementById('check').disabled = true;
    }
    else {
        text = 'Invalid coupon';
    }
    document.getElementById('note').innerHTML = text;
} 

function autoFill() {


    var passData = localStorage.getItem('product1')
    var p1 = JSON.parse(passData)


    document.getElementById('name1').innerHTML = p1[0]
    document.getElementById('price1').innerHTML = p1[1]

    var passData2 = localStorage.getItem('product2')
    var p2 = JSON.parse(passData2)

    document.getElementById('name2').innerHTML = p2[0]
    document.getElementById('price2').innerHTML = p2[1]

    
}
if (localStorage.getItem("product1") === null) {
    document.getElementById('box1').style.display = 'none'
    document.getElementById('box2').style.display = 'none'
    document.getElementsByClassName('total-price').innerHTML = 0
}