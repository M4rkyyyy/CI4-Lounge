document.addEventListener("DOMContentLoaded", function () {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function renderCartSummary() {
        let cartSummary = document.getElementById('cart-summary');
        cartSummary.innerHTML = '';
        let totalPrice = 0;

        cart.forEach(item => {
            let itemTotal = item.price * item.quantity;
            totalPrice += itemTotal;

            cartSummary.innerHTML += `
                <div class="cart-item">
                    <span>${item.name} (x${item.quantity})</span>
                    <span>₱${itemTotal.toFixed(2)}</span>
                    <button class="btn btn-sm btn-outline-danger remove-item" data-id="${item.id}">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            `;
        });

        document.getElementById('total-price').innerText = `₱${totalPrice.toFixed(2)}`;
        attachEventListeners();
    }

    function attachEventListeners() {
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function () {
                let productId = this.getAttribute('data-id');
                removeItemFromCart(productId);
            });
        });
    }

    function removeItemFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCartSummary();
    }

    document.getElementById('complete-purchase').addEventListener('click', function() {
        let paymentMethod = document.getElementById('payment-method').value;
        alert(`Thank you for purchasing! Payment method: ${paymentMethod}`);
        localStorage.removeItem('cart');
        window.location.href = 'index.html';
    });

    renderCartSummary();
});
