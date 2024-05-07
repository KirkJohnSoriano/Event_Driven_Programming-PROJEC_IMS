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
        <p class="h1 mt-3">Suppliers</p>
        <?php
        if (isset($_GET['success'])) {
        ?>
            <div class="alert alert-success">
                <b>New Supplier added.</b>.
            </div>
            <hr>
        <?php
        } elseif (isset($_GET['invalid'])) {
        ?>
            <div class="alert alert-danger">
                <b>Existed Supplier ID</b>. Please try another. Thank you.
            </div>
            <hr>
        <?php
        }
        ?>
        <p>You can view all the supplier here.</p>

        <div class="card mt3">
            <div class=" card-header">List of Guest
                <span style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add Supplier
                    </button>
                </span>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="150" style="text-align: center;">Supplier ID</th>
                            <th style=" text-align: left; padding-left: 10px">Complete Name</th>
                            <th width="50" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                        <?php include("./models/suppliers.php"); ?>

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
                    <h4 class="modal-title">Supplier</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <div class="card">
                        <form action="./models/suppliersave.php" method="POST">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="productCode">Supplier ID</label>
                                    <input name="inp_supplierId" required type="text" placeholder="Enter Supplier ID here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="productName">Supplier Name</label>
                                    <input name="inp_sName" required type="text" placeholder="Enter Supplier Name here.." class="form-control mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="s_contact">Contact Number</label>
                                    <input name="inp_sContact" required type="text" placeholder="Enter Contact Number here.." class="form-control mt-2">>
                                </div>
                                <?php
                                include("./config/database.php");

                                ?>


                                <div class="row mt-3">
                                    <div class=col-md-12>
                                        <hr>
                                    </div>
                                    <div class="col-md-12">

                                        <label>REGION : <b class="text-danger">*</b></label>
                                        <select name="inp_region" id="inp_region" onchange="display_province(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT REGION --</option>

                                            <?php
                                            $sql = "SELECT * FROM ph_region";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {

                                                while ($row = $result->fetch_assoc()) {
                                            ?>

                                                    <option value="<?= $row['regCode'] ?>"><?= $row['regDesc'] ?></option>
                                            <?php
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            $conn->close();
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-12">

                                        <label>PROVINCE : <b class="text-danger">*</b></label>
                                        <select name="inp_province" id="inp_province" onchange="display_citymun(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT PROVINCE --</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">

                                        <label>CITY / MUNICIPALITY : <b class="text-danger">*</b></label>
                                        <select name="inp_citymun" id="inp_citymun" onchange="display_brgy(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT CITY / MUNICIPALITY --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <label>BARANGAY : <b class="text-danger">*</b></label>
                                    <select name="inp_brgy" id="inp_brgy" required class="form-control mt-2">
                                        <option value="" disabled selected>-- SELECT BARANGAY --</option>
                                    </select>
                                </div>

                                <!-- Add your PHP logic and database interactions here -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Add New Supplier</button>
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
    function display_province(regCode) {
        $.ajax({
            url: './models/ph-address.php',
            type: 'POST',
            data: {
                'type': 'region',
                'post_code': regCode
            },
            success: function(response) {
                $('#inp_province').html(response);
            }
        });
    }

    function display_citymun(provCode) {
        $.ajax({
            url: './models/ph-address.php',
            type: 'POST',
            data: {
                'type': 'province',
                'post_code': provCode
            },
            success: function(response) {
                $('#inp_citymun').html(response);
            }
        });
    }

    function display_brgy(citymunCode) {
        $.ajax({
            url: './models/ph-address.php',
            type: 'POST',
            data: {
                'type': 'citymun',
                'post_code': citymunCode
            },
            success: function(response) {
                $('#inp_brgy').html(response);
            }
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>