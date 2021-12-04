var cart_remove = document.getElementsByClassName("cart_remove");
console.log(cart_remove);
for (var i = 0; i < cart_remove.length; i++) {
    var button = cart_remove[i]
    button.addEventListener("click", function(event) {
        var clicked_button = event.target
        clicked_button.parentElement.parentElement.remove();
    })
}