<?php include 'inc/person.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center inner-row">
        <div class="col-md-5">
            <div class="form-box login-form p-5">
                <div class="form-title">
                    <h2>Login</h2>
                </div>
                <form action="">
                    <div class="form-floating mb-3">
                        <label for="email" class="">Email</label>
                        <input type="email" class="form-control form-control-sm" placeholder="Email" id="email" autocomplete="off">
                        <label for="password" class="mt-3">Password</label>
                        <input type="password" class="form-control form-control-sm" placeholder="Password" id="password">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" name="login" id="login">Login</button>
                    </div>
                    <div class="mt-3">
                        <span>Don't have an account?</span> <button href="../register.php" class="p-0 border-0 bg-transparent rounded-pill login-show">Register Here</button>
                    </div>
                </form>
            </div>
            <div class="form-box register-form p-5">
                <div class="form-title">
                    <h2>Register</h2>
                </div>
                <form action="">
                    <div class="form-floating mb-3">
                        <label for="name" class="">Name</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Name" id="name" autocomplete="off">
                        <label for="surname" class="">Surname</label>
                        <input type="text" class="form-control form-control-sm" placeholder="surname" id="surname" autocomplete="off">
                        <label for="password" class="mt-3">Password</label>
                        <input type="password" class="form-control form-control-sm" placeholder="Password" id="password">
                        <label for="confirmPassword" class="mt-3">Password</label>
                        <input type="password" class="form-control form-control-sm" placeholder="Confirm Password" id="confirmPassword">
                        <label for="dob" class="mt-3">Date of Birth</label>
                        <input type="date" class="form-control form-control-sm" id="dob">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" name="register" id="register">Register</button>
                    </div>
                    <div class="mt-3">
                        <span>Already have an account?</span> <button href="index.php" class="p-0 border-0 bg-transparent rounded-pill register-show">Login Here</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>