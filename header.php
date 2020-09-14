<?php 
require("config/page_config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,500,500i,600,600i,700,900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- header start -->
    <header id="header-wrap">

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="images/logo.png" width="200" alt="Responsive image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item home_nav active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item active pl-4"><a class="nav-link" href="index.php">Invester</a></li>
                        <li class="nav-item active pl-4"><a class="nav-link" href="index.php">Founder</a></li>
                        <li class="nav-item active pl-4"><a class="nav-link" href="index.php">Market Place</a></li>
                        <li class="nav-item dropdown active pl-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="sign-up.php"><i class="fa fa-sign-in pr-3" aria-hidden="true"></i>Sign-up</a>
                            <a class="dropdown-item" href="login.php"><i class="fa fa-sign-in pr-3" aria-hidden="true"></i>Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- header end -->