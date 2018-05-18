<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE><?php echo $title; ?></TITLE>
    <meta name="description" content="<?php echo $meta_desc; ?>" />

    <!--CDN for bootstrap v4 alpha-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--CDN for bootstrap v4 alpha-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--          <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    <link rel="shortcut icon" href="<?= IMAGE_URL ?>favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="<?= JS_URL ?>jquery-3.2.1.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115208911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115208911-1');
</script>



<!-- Example website schema
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "WebSite",
  "name": "Dijatek",
  "alternateName": "Dijatek Custom Web Solutions",
  "url": "https://dijatek.com/"
}
</script> -->

<!-- Example Local Business Schema

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "name": "",
  "image": "",
  "@id": "",
  "url": "",
  "telephone": "",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "",
    "addressLocality": "",
    "postalCode": "",
    "addressCountry": ""
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ,
    "opens": "",
    "closes": ""
  }
}
</script> -->

</head>
<body>
<div class="text-center hidden-md-up" id="callnowmobile">
    <a class="navbar-brand" href="./">
        <img src="<?=IMAGE_URL ?>pathogend-vertical-logo.png" class="img-fluid" id="logo1">
    </a>
</div>

<div class="row hidden-sm-down">
    <div class="col text-center">
        <a class="navbar-brand" href="./">
            <img src="<?= IMAGE_URL ?>pathogend-vertical-logo.png" class="img-fluid" id="logo1">
        </a>
    </div>
</div>

<nav class="navbar navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<!--    <a class="navbar-brand" href="./">-->
<!--        <img src="--><?//=IMAGE_URL ?><!--pathogend-logo.png" class="img-fluid" id="logo1">-->
<!--    </a>-->

    <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">

<!--        <ul class="navbar-nav flex-row justify-content-center">-->
<!--            <li class="active">-->
<!--                <a class="navbar-brand" href="./">-->
<!--                    <img src="--><?//=IMAGE_URL ?><!--pathogend-vertical-logo.png" class="img-fluid" id="logo1">-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link text-left" href="services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="about-us">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="contact-us">CONTACT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="blog">BLOG</a>
            </li>
        </ul>
    </div>
</nav>
