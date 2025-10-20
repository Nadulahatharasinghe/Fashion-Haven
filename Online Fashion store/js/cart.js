// Get DOM elements
const cartQuantityInput = document.querySelector('.cart-quantity');
const cartPriceElement = document.querySelector('.cart-price');
const totalPriceElement = document.querySelector('.total-price');

// Parse the price from the cart price element
const productPrice = parseFloat(cartPriceElement.textContent.replace('Rs.', '').replace(',', ''));

// Function to update the total price
function updateTotal() {
    const quantity = parseInt(cartQuantityInput.value);
    const total = productPrice * quantity;
    totalPriceElement.textContent = `Rs.${total.toFixed(2)}`;
}

// Event listener for quantity input change
cartQuantityInput.addEventListener('input', updateTotal);

// Initial call to set total price
updateTotal();

// Get DOM elements
const cartItemsContainer = document.querySelector('.cart-content');


// Sample products data
const products = [
    { id: 1, title: "Product Shirt", price: 3000, quantity: 1 },
    // You can add more products here
];

// Function to render cart items
function renderCartItems() {
    cartItemsContainer.innerHTML = ''; // Clear existing items
    let total = 0;

    products.forEach(product => {
        const itemTotal = product.price * product.quantity;
        total += itemTotal;

        // Create cart item element
        const cartItem = document.createElement('article');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <img src="img/product1.jpeg" alt="${product.title}" class="cart-img" />
            <div class="detail-box">
                <div class="cart-product-title">${product.title}</div>
                <div class="cart-price">Rs.${product.price.toFixed(2)}</div>
                <input type="number" value="${product.quantity}" class="cart-quantity" min="1" data-id="${product.id}" />
            </div>
            <i class="bx bx-trash-alt cart-remove" title="Remove item" data-id="${product.id}"></i>
        `;
        
        // Append the item to the cart container
        cartItemsContainer.appendChild(cartItem);
    });

    // Update the total price
    totalPriceElement.textContent = `Rs.${total.toFixed(2)}`;
}

// Function to update total when quantity changes
function updateTotal(event) {
    const input = event.target;
    const productId = parseInt(input.getAttribute('data-id'));
    const product = products.find(p => p.id === productId);
    
    if (product) {
        product.quantity = parseInt(input.value);
        renderCartItems(); // Re-render to update totals
    }
}

// Function to remove item
function removeItem(event) {
    const productId = parseInt(event.target.getAttribute('data-id'));
    const productIndex = products.findIndex(p => p.id === productId);
    
    if (productIndex > -1) {
        products.splice(productIndex, 1); // Remove the item from the array
        renderCartItems(); // Re-render to update display
    }
}

// Event delegation for quantity input and remove buttons
cartItemsContainer.addEventListener('input', updateTotal);
cartItemsContainer.addEventListener('click', (event) => {
    if (event.target.classList.contains('cart-remove')) {
        removeItem(event);
    }
});

// Initial render
renderCartItems();
