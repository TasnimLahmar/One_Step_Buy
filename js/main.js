// Cart
let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');
//Open Cart
cartIcon.onclick = () =>{
    cart.classList.add('active');
//Close Cart
};
closeCart.onclick = () =>{
    cart.classList.remove('active');

};


//Cart Working JS
if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);

}else{
   ready(); 
}

//Making Function
function ready(){
    //Remove Items From Cart
    var removeCartButtons = document.getElementsByClassName('cart-remove');
    console.log(removeCartButtons);
    for (var i=0; i < removeCartButtons.length; i++){
        var button = removeCartButtons[i];
        button.addEventListener('click', removeCartItem);
    }
    //Quantity Changes
    var QuantityInputs = document.getElementsByClassName('cart-quantity');
    for (var i=0; i < QuantityInputs.length; i++){
        var input = QuantityInputs[i];
        input.addEventListener('change',QuantityChanged);
    }
   //add to card
   var addCart = document.getElementsByClassName('add-cart');
   for (var i=0; i < addCart.length; i++){
    var button = addCart[i];
    button.addEventListener("click",addCartClicked);
   }
   //Buy Button Work
   document.getElementsByClassName('btn-buy')[0].addEventListener('click', buyButtonClicked);

}
//Buy Button
function buyButtonClicked(){
    alert('Your Order is placed');
    var cartContent = document.getElementsByClassName('cart-content')[0];
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}

//Remove Items From Cart
function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
     updatetotal();

}
//Quantity Changes
function QuantityChanged(event){
    var input = event.target;
    if ( isNaN(input.value) || input.value <= 0 ) {
      input.value = 1;
        }
     updatetotal(); 
    }
  //Add To cart
function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopProducts.getElementsByClassName('price')[0].innerText;
    var productImg = shopProducts.getElementsByClassName('product-img')[0].src;

    addProductToCart(title, price, productImg);
    updatetotal();

}
function addProductToCart(title, price, productImg){
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add("cart-box");
    var CartItems = document.getElementsByClassName('cart-content')[0];
    var CartItemsNames = CartItems.getElementsByClassName('cart-product-title');
    for (var i=0; i < CartItemsNames.length; i++){
        if(CartItemsNames[i].innerText == title){
       alert('You have already add this item to cart');
       return;
       }
    }
    var cartBoxContent = ` 
    <img  src="${productImg}" alt="" class="cart-img">
    <div class="detail-box">
    <div class="cart-product-title">${title}</div>
    <div class="cart-price">${price}</div>
    <input type="number" value="1" class="cart-quantity">
    </div>
    <!--Remove Cart-->
    <i class='bx bxs-trash cart-remove'></i>`;
cartShopBox.innerHTML = cartBoxContent;
CartItems.append(cartShopBox);
cartShopBox
.getElementsByClassName('cart-remove')[0]
.addEventListener('click', removeCartItem);
cartShopBox
.getElementsByClassName('cart-quantity')[0]
.addEventListener('change', QuantityChanged);

}







//Update Total
function updatetotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;
    for (var i=0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("$",""));
        var quantity = quantityElement.value;
        total= total + price * quantity;
    }
        //If price contain some Cents Value
        total = Math.round(total * 100 )/ 100;

        document.getElementsByClassName('total-price')[0].innerText = '$' + total;
    
} 
//try

let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () =>{
    search.classList.toggle('active');
    navbar.classList.remove('active');
}
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () =>{
    navbar.classList.toggle('active');
    search.classList.remove('active');
    
}


