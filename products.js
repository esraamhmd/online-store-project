function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this product?")) {
        window.location.href = 'delete.php?id=' + id;
    }
}

function confirmEdit(id) {
    if (confirm("Are you sure you want to edit this product?")) {
        window.location.href = 'update.php?id=' + id;
    }
}
