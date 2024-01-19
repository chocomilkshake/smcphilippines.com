<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Admin</title>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS Style -->
    <link rel="stylesheet" href="css/login.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #FFC000 50%, white 50%);">
    <div class="col-md-6">
        <img src="../img/smc-logo.png" alt="" class="img-fluid">
    </div>
    <div class="container login-contain">
        <div class="row">
            <div class="container-login col-md-5">
                <div class="form-group">
                    <label for="username" class="label-field">Username</label>
                    <input type="text" class="login-field form-control" id="username" name="username"
                        placeholder="Username">
                </div>

                <br>

                <div class="form-group">
                    <label for="password" class="label-field">Password</label>
                    <div class="input-group">
                        <input type="password" class="login-field form-control" id="password" name="password"
                            placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-eye" id="password-toggle"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>

            </div>

            <div class="col-md-6">
                <img src="images/login.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/show_pass.js"></script>

</body>

</html>
