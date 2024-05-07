<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mini Grocery Inventory Management System</title>

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


    <div class="header">
        <h1>Welcome to Mini Grocery Inventory System</h1>

</body>
<style>
    .header {
        background-color: #ffffff;
        border-bottom: 1px solid #cccccc;
        padding: 20px;
        text-align: center;
        margin: 20px;
        height: 100px;
        width: 80%;
        border-radius: 25px;

    }

    h1 {
        margin: 0;
        color: #333333;
    }
</style>

</html>