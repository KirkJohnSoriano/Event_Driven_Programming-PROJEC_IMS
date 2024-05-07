<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Grocery Inventory System</title>

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

    <style>
    body {

        background-image: url('./assets/img/bgg.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;

    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/logo.png" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./login.php">&nbsp;<i class="fas fa-user"></i>Login</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="card mx-auto"
        style="width: 25rem; position: fixed; top: 20%; right: 5%; z-index: 999; background-color: #535c68; color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px;"
        id="loginContainer">
        <img class="card-img-top mx-auto" style="width:60%; opacity: 0.8;" src="./assets/img/login.png"
            alt="Login Icon">
        <div class="card-body">
            <!-- Your form content -->
            <form id="form_login">
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: #f8f9fa;">Username</label>
                    <input type="text" class="form-control" name="log_username" id="log_username"
                        placeholder="Enter username">
                    <small id="e_error" class="form-text text-muted">We'll never share your username with anyone
                        else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: #f8f9fa;">Password</label>
                    <input type="password" class="form-control" name="log_password" id="log_password"
                        placeholder="Password">
                    <small id="p_error" class="form-text text-muted"></small>
                </div>
                <button type="button" class="btn btn-primary" style="background-color: #007bff;" onclick="login()">
                    <i class="fa fa-lock">&nbsp;</i>Login
                </button>

            </form>
        </div>


        <script>
        function login() {
            var email = document.getElementById('log_username').value;
            var password = document.getElementById('log_password').value;

            if (email === 'admin' && password === 'admin123') {
                window.location.href = 'admindash.php';
            } else {
                alert("Incorrect Username or Password. Please try again later.");
            }
        }
        </script>






</body>


</html>