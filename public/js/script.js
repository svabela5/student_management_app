document.querySelectorAll('.delete').forEach((button) => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
		let action = this.getAttribute('href');
		let form = document.getElementById('form-delete');
        form.setAttribute('action', action);
        $('#deleteModal').modal('show');
    });
});

let orderBy = "none";

function setFilters(){
    window.location.href = window.location.href.split('?')[0] + '?order='+ orderBy
}

function sortTable() {
    let currentState = arrow.innerHTML;

    if (currentState === "&uarr;&darr;" || currentState === "↑↓") { // Sort ascending
        document.getElementById("arrow").innerHTML = "&uarr;";
        orderBy = "asc"
    } else if (currentState === "&uarr;" || currentState === "↑") { // Sort descending
        document.getElementById("arrow").innerHTML = "&darr;";
        orderBy = "desc"
    } else { // Reset to default order
        document.getElementById("arrow").innerHTML = "&uarr;&darr;";
        orderBy = "none"
    }

    setFilters();
}