 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/florida/';
    $baseUrl = '/pathogend/public_html/locations/florida/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost:888/pathogend/public_html";
}
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/florida/';
    $baseUrl = '/pathogend/public_html/locations/florida/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost/pathogend/public_html";
}


//this is live DEV base url
if ($_SERVER['HTTP_HOST'] == 'pathogend.dev.dijatek.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/florida/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/florida/';
    $assetBaseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/assets/';
    $corp = $protocol . 'pathogend.dev.dijatek.com/';
}

 //this is live base url
 if ($_SERVER['HTTP_HOST'] == 'pathogend.com') {
     $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/florida/';
     $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     $baseUrl = $protocol . 'pathogend.com/locations/florida/';
     $assetBaseUrl = $protocol . 'pathogend.com/locations/assets/';
     $corp = $protocol . 'pathogend.com/';
 }

// Set commonly used paths
/*Includes path contains the html for each page*/
define('CORP_BASE', $corp);
define('BASE_URL', $baseUrl);
define('INCLUDES_PATH', $basePath . 'includes/');
define('SERVICES_INCLUDES_PATH', INCLUDES_PATH . 'services/');
define('LANDING_INCLUDES_PATH', INCLUDES_PATH . 'landingpages/');

//Path for blog
define('BLOG_PATH', $basePath . 'blog/');

// Set common links
define('CSS_URL',   $baseUrl. 'assets/css/');
define('JS_URL',    $assetBaseUrl . 'js/');

/**
 * Set image links:
 *  layout - used for site layout and won't be changed much
 *  content - used for consumer uploaded content -- should be part of .gitignore
 */
define('IMAGE_URL', $assetBaseUrl . 'img/');

// Define the array allowing redirect pretty URLS, topLevelPages are usually what is on the nav bar
// Each page must match a file in the includes folder for example: home.php, services.php, aboutus.php....
$topLevelPages = array(
    'home' => 'home',
    'services' => 'services',
    'about-us' => 'about-us',
    'contact-us' => 'contact-us',
    '404' => '404'
);

/*servicesPages are for any other pages on the site and anything from a dropdown on the nav bar*/
// Each page must match a file in the includes folder for example: coding.php....
 $subLevelPages = array(
     'coding' => 'coding',
     'blog' => 'blog',
     'thank-you' => 'thank-you',
     
 );

 $landingPages = array(
     'SampleLanding' => 'samplelanding'
 );
/*This description array sets up the meta description and title tag for each page identified in the topLevelPages or subLevelPages array*/
$description = array (
    "home" => array(
        "meta_desc" => "As a leader in whole-space decontamination, we pride ourselves in creating germ-free spaces. Our headquarters is in Oviedo, Florida. While we are located in central Florida, we service the entire state for decontamination and disinfecting services.",
        "title" => "Pathogend of Florida"
    ),
    "about-us" => array(
        "meta_desc" => "This is the about page of test site",
        "title" => "About Pathogend of Florida"
    ),

    "contact-us" => array(
        "meta_desc" => "Need disinfecting and decontamination services in Florida? Contact us today to discuss pricing and available options for your location.",
        "title" => "Contact Pathogend of Florida"

    ),
    "services" => array(
        "meta_desc" => "Our environmentally-friendly, whole-space decontamination approach kills the most dangerous hospital superbugs and the bulk of other bacteria and viruses to stop outbreaks in their tracks. At Pathogend of Florida, we provide on-going maintenance services help disinfected facilities stay healthy.",
        "title" => "Services by Pathogend of Florida"

    ),  
    "blog" => array(
        "meta_desc" => "Learn more about how Pathogend of Florida is working towards healthier lives at work, home and play by reading our blog.",
        "title" => "Pathogend of Florida Blog"
    ),
    "samplelanding" => array(
        "meta_desc" => "This is our landing page.",
        "title" => "Campaign Title" 
    ),
    "404" => array (
        "meta_desc" => "404 error",
        "title" => "Error 404",
        "keywords" => "404"    ),
    "thank-you" => array (
        "meta_desc" => "Thank you for contacting us.",
        "title" => "Thank you",
        "keywords" => "Contact Us Thank You"    ),
);