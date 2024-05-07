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
        <p class="h1 mt-3">Products</p>
        <?php
        if (isset($_GET['success'])) {
        ?>
        <div class="alert alert-success">
            <b>New Product Added.</b>. Congrats. Thank you!
        </div>
        <hr>
        <?php
        } elseif (isset($_GET['invalid'])) {
        ?>
        <div class="alert alert-danger">
            <b>Existed Product ID</b>. Please try another. Thank you.
        </div>
        <hr>
        <?php
        }
        ?>
        <p>You can view all available products.</p>
        <div class="card mt3">
            <div class=" card-header">List of Products.
                <span style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add Product
                    </button>
                </span>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="150" style="text-align: center;">Product Code</th>
                            <th style=" text-align: left; padding-left: 10px">Product Name</th>
                            <th width="50" style="text-align: center;">Cost Rate</th>
                            <th width="50" style="text-align: center;">Selling Price</th>
                            <th width="50" style="text-align: center;">Quantity</th>
                            <th width="50" style="text-align: center;">Brand</th>
                            <th width="50" style="text-align: center;">Category</th>
                            <th width="50" style="text-align: center;">Supplier</th>


                        </tr>
                    </thead>
                    <tbody id="results">
                        <?php include("./models/products.php"); ?>

                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                -
            </div>
        </div>
    </div>





    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="card">
                        <form action="./models/productsave.php" method="POST" enctype="multipart/form-data">


                            <div class="card-body">
                                <div class="form-group">
                                    <label for="productCode">Product Code</label>
                                    <input name="inp_productCode" required type="text"
                                        placeholder="Enter Product Code here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input name="inp_productName" required type="text"
                                        placeholder="Enter Product Name here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="productImage">Product Image</label>
                                    <input type="file" name="productImage">
                                </div>
                                <div class=" form-group">
                                    <label for="productCost">Product Cost</label>
                                    <input name="inp_productCost" id="inp_productCost" required type="number"
                                        placeholder="Enter Product Cost here.." class="form-control mt-2"
                                        oninput="calculateTotal()">
                                </div>
                                <div class="form-group">
                                    <label for="sellingPrice">Selling Price</label>
                                    <input name="inp_sellingPrice" required type="number"
                                        placeholder="Enter Selling Price here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input name="inp_quantity" id="inp_quantity" required type="number"
                                        placeholder="Enter Quantity here.." class="form-control mt-2"
                                        oninput="calculateTotal()">
                                </div>
                                <div class="form-group">
                                    <label for="totalCost">Total Cost</label>
                                    <input name="inp_totalCost" id="inp_totalCost" required type="number"
                                        placeholder="Total Cost" class="form-control mt-2" readonly>
                                </div>

                                <?php
                                include("./config/database.php");

                                ?>
                                <div class="form-group">
                                    <label for="BrandId">Brand</label>
                                    <select name="inp_BrandId" required class="form-control mt-2">
                                        <option value="" disabled selected>-- SELECT BRAND --</option>

                                        <?php
                                        $sql = "SELECT * FROM brands";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                        ?>

                                        <option value="<?= $row['in_brand_id'] ?>"><?= $row['in_brand_name'] ?>
                                        </option>
                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>

                                <?php
                                include("./config/database.php");

                                ?>
                                <div class="form-group">
                                    <label for="categoryId">Category</label>
                                    <select name="inp_categoryId" required class="form-control mt-2">
                                        <option value="" disabled selected>-- SELECT CATEGORY--</option>

                                        <?php
                                        $sql = "SELECT * FROM category";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                        ?>

                                        <option value="<?= $row['in_categories_id'] ?>">
                                            <?= $row['in_categories_name'] ?>
                                        </option>
                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>

                                <?php
                                include("./config/database.php");

                                ?>
                                <div class="form-group">
                                    <label for="supplierId">Supplier</label>
                                    <select name="inp_supplierId" required class="form-control mt-2">
                                        <option value="" disabled selected>-- SELECT SUPPLIER--</option>

                                        <?php
                                        $sql = "SELECT * FROM supplier";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                        ?>

                                        <option value="<?= $row['supplier_id'] ?>"><?= $row['supplier_name'] ?>
                                        </option>
                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Add New Product</button>
                                </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <script>
        function calculateTotal() {
            var costPrice = parseFloat(document.getElementById('inp_productCost').value);
            var quantity = parseFloat(document.getElementById('inp_quantity').value);
            var totalCost = costPrice * quantity;

            // Display the total cost in the totalCost input
            document.getElementById('inp_totalCost').value = totalCost.toFixed(2);
        }

        function handleKeyPress(event) {
            if (event.key === "Enter") {
                calculateTotal();
            }
        }
        </script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
function calculateTotal() {
    var costPrice = parseFloat(document.getElementById('inp_productCost').value);
    var quantity = parseFloat(document.getElementById('inp_quantity').value);
    var totalCost = costPrice * quantity;

    // Display the total cost in the totalCost input
    document.getElementById('inp_totalCost').value = totalCost.toFixed(2);
}

function handleKeyPress(event) {
    if (event.key === "Enter") {
        calculateTotal();
    }
}
</script>



</html>