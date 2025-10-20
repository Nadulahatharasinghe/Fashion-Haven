// JavaScript to handle showing the form and adding new items
const showFormButton = document.getElementById('showFormButton');
const form = document.getElementById('itemForm');
const itemsContainer = document.getElementById('items');

// Show the form when the "Add New Item" button is clicked
showFormButton.addEventListener('click', function() {
    form.style.display = 'block';
});

// Handle form submission and adding a new item
form.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    // Get input values
    const imageUrl = document.getElementById('imageUrl').value;
    const itemTitle = document.getElementById('itemTitle').value;
    const itemDescription = document.getElementById('itemDescription').value;

    // Create a new item div
    const newItem = document.createElement('div');
    newItem.classList.add('item-container');

    // Add the HTML content for the new item
    newItem.innerHTML = `
        <img src="${imageUrl}" alt="New Item Image">
        <div class="item-details">
            <div class="item-title">${itemTitle}</div>
            <div class="item-description">${itemDescription}</div>
        </div>
    `;

    // Append the new item to the items container
    itemsContainer.appendChild(newItem);

    // Hide the form and reset it
    form.reset();
    form.style.display = 'none';
});
