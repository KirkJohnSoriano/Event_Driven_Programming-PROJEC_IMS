function handleEnter(event) {
    if (event.key === "Enter") {
        var productCode = event.target.value;
        barcode(productCode);
    }
}

function barcode(product_code) {
    $.ajax({
        url: './models/productinfo.php',
        type: 'POST',
        data: { 'inp_barcode': product_code },
        dataType: 'json', // Parse response as JSON
        success: function(response) {
            $('#inp_productName').val(response.name); // Set product name
            $('#inp_productPrice').val(response.price); // Set product price
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            // Handle error, display message to the user, etc.
        }
    });
}
