<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Management System</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./assets/js.main.js"></script>
    <link rel="stylesheet" href="./assets/css/admindashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/barcode.js"></script>




</head>

<body>



    <div class="slidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active"><a href="admindash.php">
                    <i class="fas fa-tech-alt">
                        <image src="./assets/img/dashboard.png" height="15">
                    </i>
                    <span>Dashboard</span>
                </a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduct" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-profile">
                        <img src="./assets/img/order.png" height="15" alt="Product">
                    </i>
                    <span>Product</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProduct">
                    <a class="dropdown-item" href="supplier.php">Supplier</a>
                    <a class="dropdown-item" href="brand.php">Brands</a>
                    <a class="dropdown-item" href="category.php">Categories</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="product.php">View Products</a>
                </div>
            </li>

            <li><a href="pos.php">
                    <i class="fas fa-votes">
                        <image src="./assets/img/pos.png" height="15">
                    </i>
                    <span>Point of Sales</span>

                </a></li class="Logout">
            <li><a href="">
                    <i class="fas fa-log-out">
                        <image src="./assets/img/out.png" height="15">
                    </i>
                    <span>Logout</span>
                </a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <p class="h1 mt-3">Point of Sale</p>
        <p>Mini Grocery.</p>
        <div class="card mt-3">

            <form action="/models/productinfo.php" method="GET">
                <div class="card-header">Transaction here.</div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-2">
                            <label for="productCode">Product Code</label>
                            <input name="inp_productCode" id="inp_productCode" required type="text"
                                placeholder="Enter Product ID here.." class="form-control mt-2"
                                onkeydown="handleEnter(event)">

                        </div>
                        <div class="row-md-3">
                            <label for="productName">Product Name</label>
                            <input name="inp_productName" id="inp_productName" required type="text"
                                placeholder="Product Name" class="form-control mt-2" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="productPrice">Price</label>
                            <input name="inp_productPrice" id="inp_productPrice" required type="number"
                                placeholder="Product Price" class="form-control mt-2" readonly>
                        </div>
                        <div class="col-md-2">
                            <label>Quantity <b class="text-danger">*</b></label>
                            <input name="inp_quantity" id="inp_quantity" required type="number"
                                placeholder="Enter Qunatity here" class="form-control mt-2" oninput="amount()">
                        </div>

                        <div class="col-md-2">
                            <label for="amount">Amount</label>
                            <input name="inp_amount" id="inp_amount" required type="number" placeholder="Amount"
                                class="form-control mt-2" readonly>
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" onclick="addProduct()">Add
                                Product</button>
                        </div>
                        < <div class="card-body">
                    </div>

                </div>
        </div>
    </div>

    <div class="container mt-3">

        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
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
        data: {
            'inp_barcode': product_code
        },
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

function amount() {
    var price = parseFloat(document.getElementById('inp_productPrice').value);
    var quantity = parseFloat(document.getElementById('inp_quantity').value);
    var amount = price * quantity;

    // Display the total cost in the totalCost input
    document.getElementById('inp_amount').value = amount.toFixed(2);
}

function handleKeyPress(event) {
    if (event.key === "Enter") {
        amount();
    }
}

function addProduct() {
    // Get values from input fields
    var productName = $('#inp_productName').val();
    var productPrice = parseFloat($('#inp_productPrice').val());
    var quantity = parseInt($('#inp_quantity').val());
    var amount = productPrice * quantity;

    // Validate input
    if (!productName || isNaN(productPrice) || isNaN(quantity) || quantity <= 0) {
        alert('Please fill in all fields with valid values.');
        return;
    }

    // Add product to table
    var newRow = '<tr>' +
        '<td>' + productName + '</td>' +
        '<td>' + productPrice.toFixed(2) + '</td>' +
        '<td>' + quantity + '</td>' +
        '<td>' + amount.toFixed(2) + '</td>' +
        '</tr>';
    $('#productTable tbody').append(newRow);

    // Clear input fields
    $('#inp_productCode').val('');
    $('#inp_productName').val('');
    $('#inp_productPrice').val('');
    $('#inp_quantity').val('');
    $('#inp_amount').val('');
}
</script>

</html>