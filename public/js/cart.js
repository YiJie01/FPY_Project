
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready()
}

function ready() {

}

function removeCartProduct(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}


function updateCartTotal() {
    var cartProductContainer = document.getElementsByClassName('cart-products')[0]
    var cartRows = cartProductContainer.getElementsByClassName('cart-row')
    for(var i=0; i<cartRows.length; i++){
        var cartRow = cartRowsp[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var price = parseFloat(priceElement.innerText.replace('RM',''))

        total = total + price
    }
    subtotal=parseFloat(prices[i].value)+parseFloat(total);
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = "RM" + total
}