$(document).ready(function(){
   calculatePrice();
});

$('.select-product-quantity').on('change', function () {
   calculatePrice();
});

$('.select-size-of-product').on('change', function () {
   calculatePrice();
});

function calculatePrice() {
   let productPrice = $('.select-size-of-product').find(":selected").attr('data-price');
   let productQuantity = $('.select-product-quantity').find(":selected").attr('data-quantity');
   let displayProductPrice = $('.price-for-product');
   let displayProductFullPrice = $('.full-price-for-product');
   let buttonProductFullPrice = $('.button-full-price-for-product');
   let totalPrice = productPrice * productQuantity

   displayProductPrice.html(productPrice);
   displayProductFullPrice.html(productPrice);
   buttonProductFullPrice.html('ADD TO BAG' + ' ' + totalPrice + ' ' + '<i class="fas fa-euro-sign"></i>');
}
