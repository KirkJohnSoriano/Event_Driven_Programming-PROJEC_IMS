<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Management System</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduct" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <p class="h1 mt-3">Product Categories</p>
        <?php
        if (isset($_GET['success'])) {
        ?>
            <div class="alert alert-success">
                <b>New Product Category added.</b>.
            </div>
            <hr>
        <?php
        } elseif (isset($_GET['invalid'])) {
        ?>
            <div class="alert alert-danger">
                <b>Existed Category ID</b>. Please try another. Thank you.
            </div>
            <hr>
        <?php
        }
        ?>
        <p>You can view all the categories here.</p>

        <div class="card mt3">
            <div class=" card-header">List of Categories
                <span style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add Category
                    </button>
                </span>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="150" style="text-align: center;">Category ID</th>
                            <th style=" text-align: left; padding-left: 10px">Category Name</th>

                        </tr>
                    </thead>
                    <tbody id="result">
                        <?php include("./models/categories.php"); ?>

                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                -
            </div>
        </div>
    </div>



    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Categories</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <div class="card">
                        <form action="./models/categsave.php" method="POST">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="productCode">Category ID</label>
                                    <input name="inp_categoryId" required type="text" placeholder="Enter Category ID here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="productName">Category Name</label>
                                    <input name="inp_cName" required type="text" placeholder="Enter Category Name here.." class="form-control mt-2">
                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Add New Brand</button>
                                </div>
                        </form>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</body>
<script>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>