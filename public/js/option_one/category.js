function toggleNewCategoryForm() {
    var newCategoryForm = document.getElementById('newCategoryForm');
    if (newCategoryForm.style.display === 'none') {
        newCategoryForm.style.display = 'block';
    } else {
        newCategoryForm.style.display = 'none';
    }
}