<head>
    <br>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE><?php echo $title; ?></TITLE>
    <meta name="description" content="<?php echo $meta_desc; ?>"/>

    <!--CDN for bootstrap v4 alpha-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--CDN for bootstrap v4 alpha-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--          <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
<!--    <link rel="shortcut icon" href="--><?//= IMAGE_URL ?><!--favicon.ico" type="image/x-icon">-->
    <link rel="icon" href="http://www.pathogend.com/favicon.ico?v=2" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="<?= JS_URL ?>jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115208911-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
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
<!--    <div class="d-inline float-left px-2 pt-2"><a href="https://www.facebook.com/PathogendNJ" target="_blank"><i-->
<!--                    class="fab fa-facebook fa-2x" aria-hidden="true"></i></a></div>-->
<!--    <div class="d-inline float-left px-2 pt-2"><a href="" target="_blank"><i class="fab fa-youtube fa-2x"-->
<!--                                                                             aria-hidden="true"></i></a></div>-->
<!--    <div class="d-inline float-left px-2 pt-2"><a href="" target="_blank"><i class="fab fa-linkedin fa-2x"-->
<!--                                                                             aria-hidden="true"></i></a></div>-->
<!--    <a href="https://thegermstopshere.com" class="dark-purple-text d-inline float-left text-center">-->
<!--        <small>The Germ Stops Here</small>-->
<!--    </a>-->
    <a href="tel:18663175735" class="text-white text-left pb-2">
        <small><strong>Create your healthy space now! 1-866-317-5735</strong></small>
    </a>
</div>

<div class="container-fluid socialContainer hidden-sm-down">
    <div class="row hidden-sm-down mt-0 socialHeaderRow">
        <div class="col py-2">
            <a href="tel:18663175735" class="text-white d-inline float-left text-center pt-1"><strong>Create your
                    healthy space now! 1-866-317-5735</strong></a>


            <div class="d-inline float-right px-2"><a href="https://www.facebook.com/PathogendNJ" target="_blank"><i
                            class="fab fa-facebook fa-2x" aria-hidden="true"></i></a></div>
            <div class="d-inline float-right px-2"><a href="https://www.youtube.com/channel/UCXvMKKl_IR1f44B0uBQ_1BQ" target="_blank"><i class="fab fa-youtube fa-2x"
                                                                                aria-hidden="true"></i></a></div>
            <div class="d-inline float-right px-2"><a href="https://www.linkedin.com/in/frances-grinstead-0876667a/" target="_blank"><i class="fab fa-linkedin fa-2x"
                                                                                aria-hidden="true"></i></a></div>
            <a href="https://thegermstopshere.com" class="text-white text-right float-right mt-1">
                <small>The Germ Stops Here</small>
            </a>


        </div>
    </div>
</div>


<nav class="navbar navbar-toggleable-md navbar-light pt-0">

    <a class="navbar-brand" href="./">
        <img src="<?= IMAGE_URL ?>Pathogend-vertical-logo.png" class="img-fluid" id="logo1">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-md-block" href="services" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    SERVICES
                </a>
                <a class="d-md-none nav-link dropdown-toggle text-left" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-muted" href="services">Services</a>
                    <a class="dropdown-item text-muted" href="healthcare">Healthcare</a>
                    <a class="dropdown-item text-muted" href="#" disabled>Industrial</a>
                    <a class="dropdown-item text-muted" href="#" disabled>Laboratories</a>
                    <a class="dropdown-item text-muted" href="educational">Educational</a>
                    <a class="dropdown-item text-muted" href="transportation">Transportation</a>
                    <a class="dropdown-item text-muted" href="business">Business</a>
                    <a class="dropdown-item text-muted" href="athletic">Athletic</a>
                    <a class="dropdown-item text-muted" href="residential">Residential</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-md-block text-left" href="resources" id="navbarDropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">
                    RESOURCES
                </a>
                <a class="d-md-none nav-link dropdown-toggle text-left" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">RESOURCES</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-muted" href="resources">FAQ</a>
<!--                    <a class="dropdown-item text-muted" href="blog">Blog</a>-->
                    <a class="dropdown-item text-muted" href="https://thegermstopshere.com">Community Outreach</a>
                    <a class="dropdown-item text-muted" href="#" disabled>Case Studies</a>
                    <a class="dropdown-item text-muted" href="https://www.youtube.com/channel/UCXvMKKl_IR1f44B0uBQ_1BQ" alt="Pathogend youtube">Youtube channel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="our-team">OUR TEAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="our-story">OUR STORY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="testimonials">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-left" href="http://www.curissystem.com/" target="_blank">TECHNOLOGY</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-md-block text-left" href="find-a-provider"
                   id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    LOCATIONS
                </a>
                <a class="d-md-none nav-link dropdown-toggle text-left" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">LOCATIONS</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-muted" href="find-a-provider">Find a provider</a>
                    <a class="dropdown-item text-muted" href="join-us">Join us</a>
            </li>
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link text-left" href="find-a-provider">CONTACT US</a>-->
            <!--            </li>-->
        </ul>
    </div>
</nav>
