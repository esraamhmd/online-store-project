document.addEventListener('DOMContentLoaded', function () {
    var addToCartButtons = document.querySelectorAll('.addToCartBtn');
    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior of the link

            // Display a confirmation dialog
            if (confirm("Are you sure you want to add this product to your cart?")) {
                // If user clicks OK, redirect to the link's URL (val.php)
                window.location.href = event.target.getAttribute('href');
            }
        });
    });
});
