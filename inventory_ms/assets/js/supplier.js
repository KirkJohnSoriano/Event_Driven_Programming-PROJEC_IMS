// supplier.js

function displaySuppliers() {
    $.ajax({
        url: './models/fetchData.php',
        type: 'GET',
        success: function(response){
            $('#results').html(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

// Call the function to display suppliers when the page loads
$(document).ready(function() {
    displaySuppliers();
});
