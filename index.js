function validateForm() {
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var file = document.getElementById("file").value;

    // Name validation: must be a string
    if (!/^[A-Za-z\s]+$/.test(name)) {
        alert("Name must contain only letters.");
        return false;
    }

    // Price validation: must be a number
    if (isNaN(parseFloat(price))) {
        alert("Price must be a valid number.");
        return false;
    }

    // File validation: not empty
    if (name === "" || file === "") {
        alert("Please fill out all fields and select an image.");
        return false;
    }

    // If all validations pass, show success message
    alert("Product uploaded successfully!");
    return true;
}
