 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/georgia/';
    $baseUrl = '/pathogend/public_html/locations/georgia/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost:8888/pathogend/public_html";
}
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/georgia/';
    $baseUrl = '/pathogend/public_html/locations/georgia/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost/pathogend/public_html";
}


//this is live DEV base url
if ($_SERVER['HTTP_HOST'] == 'pathogend.dev.dijatek.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/georgia/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/georgia/';
    $assetBaseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/assets/';
    $corp = $protocol . 'pathogend.dev.dijatek.com/';
}

 //this is LIVE base url
 if ($_SERVER['HTTP_HOST'] == 'pathogend.com') {
     $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/georgia/';
     $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     $baseUrl = $protocol . 'pathogend.com/locations/georgia/';
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
        "meta_desc" => "At Pathogend, we use a hospital grade, EPA approved Hydrogen Peroxide Solution germ spray to kill viruses, bacteria, Fungi, and surface mold. We are located in Roswell, Georgia and provide disinfecting and decontamination services to the entire state of Georgia.",
        "title" => "Pathogend of Georgia"
    ),
    "about-us" => array(
        "meta_desc" => "At Pathogend, we use a hospital grade, EPA approved Hydrogen Peroxide Solution germ spray to kill viruses, bacteria, Fungi, and surface mold. We are located in Roswell, Georgia and provide disinfecting and decontamination services to the entire state of Georgia.",
        "title" => "About Pathogend of Georgia"
    ),

    "contact-us" => array(
        "meta_desc" => "Call Pathogend of Georgia today or use the form on this page to request a consultation or more information. We will get back to you as soon as possible, usually within 24 hours.",
        "title" => "Contact Pathogend of Georgia"

    ),
    "services" => array(
        "meta_desc" => "At Pathogend of Georgia, we are working towards healthier lives at work, home and play. We can disinfect and decontaminate businesses, daycares, schools, EMS, medical facilities, kennels, and residentials.",
        "title" => "Services by Pathogend of GA"

    ),  
    "blog" => array(
        "meta_desc" => "Find out more about our services and other related health topics by reading the Pathogend of Georgia blog.",
        "title" => "Blog Page"
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