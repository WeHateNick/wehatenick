<?php 
include('functions.php'); 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?> | WeHateNick Web Development </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <!-- Gmail tag -->
    <!-- <meta name="google-site-verification" content="l7p6KEidRVw7xlFj4wjpmMEE3ozCzN8S5BWxHI_0M44" /> -->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body<?php echo get_bg_color($bgColor); ?>>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Navigation -->

            <div class="navbar <?php if ($section == "home") { echo "main-nav-home"; } ?>">
                <div class="container-fluid">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><h1>WeHateNick</h1></a>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php if ($section == 'about') { echo 'class="on"'; } ?>><a href="about.php">About</a></li>
                            <li <?php if ($section == 'work') { echo 'class="on"'; } ?>><a href="work.php">Work</a></li>
                            <li <?php if ($section == 'contact') { echo 'class="on"'; } ?>><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            