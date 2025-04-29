
document.addEventListener("DOMContentLoaded", function () {
    // Initialize an empty cart array from localStorage or create a new one
    let cart = JSON.parse(localStorage.getItem('cart')) || [];


    function addToCart(event) {
        let button = event.target; // Get the clicked button
        let productName = button.getAttribute("data-name");
        let productPrice = parseFloat(button.getAttribute("data-price"));

        if (!productName || isNaN(productPrice)) {
            alert("Error: Product data is missing or incorrect!");
            return;
        }

        // Create product object
        let product = { name: productName, price: productPrice, quantity: 1 };

        // Check if product already exists in cart
        let existingProduct = cart.find(item => item.name === productName);
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push(product);
        }

        // Save updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Redirect user to cart page after adding item
        window.location.href = "/cart"; 
    }

    // Attach event listeners to all "Add to Cart" buttons
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", addToCart);
    });
});
