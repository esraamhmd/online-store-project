// script.js
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the link
            if (confirm("Are you sure you want to delete this product?")) {
                window.location.href = button.getAttribute('href');
            }
        });
    });
});
 // JavaScript code to calculate the total price of the products in the card
 document.addEventListener('DOMContentLoaded', function () {
    var totalPrice = 0;
    var productTable = document.getElementById('productTable');
    var priceCells = productTable.querySelectorAll('td:nth-child(2)');
    priceCells.forEach(function (cell) {
        totalPrice += parseFloat(cell.innerText);
    });
    document.getElementById('totalPrice').innerText = totalPrice;
});