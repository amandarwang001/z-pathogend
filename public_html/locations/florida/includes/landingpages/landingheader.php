<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE><?php echo $title; ?></TITLE>
    <meta name="description" content="<?php echo $meta_desc; ?>" />
    <link rel="stylesheet" href="<?= CSS_URL ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="icon" href="favicon.ico" type="image/jpg" sizes="16x16"> Need favicon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="<?= JS_URL ?>jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="text-center hidden-md hidden-lg" id="callnowmobile">
    <a href="tel:4072737027"><strong class="consultation">CALL US TODAY</strong><br><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><strong>407.123.4567</strong></a>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home"><img src="<?=IMAGE_URL ?>logo.png" class="img-responsive" id="logo1"> </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
                <li id="callnow" class="text-center">
                    <div class="btn-nav">
                        <strong>CALL US TODAY<br><a href="tel:4079070839" class="navbar-btn"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 407.123.4567</strong></a>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>