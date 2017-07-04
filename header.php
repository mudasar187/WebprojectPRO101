<!DOCTYPE html>
<html lang="no">

<head>
    
    <meta charset="utf-8">
    <meta httm-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nærmiljøet Vulkan - Westerdals Oslo ACT</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    
    <!-- Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS-->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- StarRating CSS-->
    <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css">
     
</head>
    
<body>
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">
                        <img src="img/westerdals-logo.svg" alt="Logo" width="150" height="60">
                        </a>
                    </li>
                </ul>
                
                <a class="navbar-brand" href="index.php">NÆRMILJØET VULKAN</a>
                
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="om-oss.php">OM OSS</a>
                    </li>
                    <?php
                    if(isset($_SESSION['user_id'])){?>
                    <li>
                        <a href="controller/logout.php">LOGG OUT</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="login.php">LOGG IN</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>