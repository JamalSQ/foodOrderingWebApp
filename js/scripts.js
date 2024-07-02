document.addEventListener('DOMContentLoaded', function () {
    // Initialize basket count
    let basketCount = 0;

    // Select all 'Add to basket' buttons
    const addToBasketButtons = document.querySelectorAll('.add-to-basket');

    // Add click event listeners to 'Add to basket' buttons
    addToBasketButtons.forEach(button => {
        button.addEventListener('click', function () {
            basketCount++;
            document.getElementById('basket-count').textContent = basketCount;
        });
    });
});