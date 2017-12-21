<?PHP include 'includes/db.php'; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Crud System</title>
    <!--Bootstrap links start-->

    <!--jQuery-->
    <script	src="js/jquery.js"></script>

    <!--Latest compiled and minified CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/custom.css">
    <!--font awesome-->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!--Latest compiled and minified JavaScript-->
    <script src="js/bootstrap.js"></script>


    <!--Bootstrap links end-->

</head>
<body>
 <?php include 'includes/nav.php'; ?>

    <div class="container">
        <ul class="nav nav-tabs">
            <li><a data-toggle='tab' href="#index">Index</a></li>
            <li><a data-toggle='tab' href="#login">Login</a></li>
            <li><a data-toggle='tab' href="#signup">SignUp</a></li>
            <li><a data-toggle='tab' href="#admin">Admin</a></li>
        </ul>

        <div class="tab-content">
            <div id="index" class="tab-pane fade in">
                <p>Index</p>
            </div>
            <div id="login" class="tab-pane fade in">
                <p>Login</p>
            </div>
            <div id="signup" class="tab-pane fade in">
               <?php include 'user/signup.php'; ?>
            </div>
            <div id="admin" class="tab-pane fade in">
                <p>Admin</p>
            </div>
        </div>
    </div>
</body>
</html>