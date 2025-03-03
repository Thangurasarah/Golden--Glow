<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center">Your Cart</h1>

        <!-- Cart Items -->
        <div id="cart-container" class="mt-6 bg-white shadow-md p-6 rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="border-b py-2">Product</th>
                        <th class="border-b py-2">Price</th>
                        <th class="border-b py-2">Quantity</th>
                        <th class="border-b py-2">Total</th>
                        <th class="border-b py-2">Action</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Cart items will be inserted here -->
                </tbody>
            </table>

            <!-- Total Price -->
            <div class="mt-4 text-right">
                <h2 class="text-xl font-bold">Total: $<span id="cart-total">0.00</span></h2>
            </div>

            <!-- Checkout & Clear Cart Buttons -->
            <div class="mt-4 text-center">
                <button onclick="checkout()" class="bg-green-500 text-white px-6 py-2 rounded-lg mr-2">Checkout</button>
                <button onclick="clearCart()" class="bg-red-500 text-white px-6 py-2 rounded-lg">Clear Cart</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            let cartItemsContainer = document.getElementById("cart-items");
            let cartTotal = document.getElementById("cart-total");

            function updateCart() {
                cartItemsContainer.innerHTML = "";
                let total = 0;

                cart.forEach((item, index) => {
                    let itemTotal = item.price * item.quantity;
                    total += itemTotal;

                    let row = document.createElement("tr");
                    row.innerHTML = `
                        <td class="border-b py-2">${item.name}</td>
                        <td class="border-b py-2">$${item.price.toFixed(2)}</td>
                        <td class="border-b py-2">
                            <button onclick="changeQuantity(${index}, -1)" class="px-2 bg-gray-300 rounded">-</button>
                            ${item.quantity}
                            <button onclick="changeQuantity(${index}, 1)" class="px-2 bg-gray-300 rounded">+</button>
                        </td>
                        <td class="border-b py-2">$${itemTotal.toFixed(2)}</td>
                        <td class="border-b py-2">
                            <button onclick="removeFromCart(${index})" class="text-red-500">Remove</button>
                        </td>
                    `;

                    cartItemsContainer.appendChild(row);
                });

                cartTotal.textContent = total.toFixed(2);
                localStorage.setItem("cart", JSON.stringify(cart));
            }

            window.changeQuantity = function (index, amount) {
                if (cart[index].quantity + amount > 0) {
                    cart[index].quantity += amount;
                } else {
                    cart.splice(index, 1);
                }
                updateCart();
            };

            window.removeFromCart = function (index) {
                cart.splice(index, 1);
                updateCart();
            };

            window.clearCart = function () {
                cart = [];
                updateCart();
            };

            window.checkout = function () {
                if (cart.length === 0) {
                    alert("Your cart is empty!");
                    return;
                }
                alert("Proceeding to checkout...");
                // Redirect to checkout page (replace with actual checkout logic)
                window.location.href = "checkout.html";
            };

            updateCart();
        });
    </script>
</body>
</html>
