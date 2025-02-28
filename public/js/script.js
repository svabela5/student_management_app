document.querySelectorAll('.delete').forEach((button) => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
		let action = this.getAttribute('href');
		let form = document.getElementById('form-delete');
        form.setAttribute('action', action);
        $('#deleteModal').modal('show');
    });
});