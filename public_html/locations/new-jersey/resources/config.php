 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/new-jersey/';
    $baseUrl = '/pathogend/public_html/locations/new-jersey/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost:8888/pathogend/public_html";
}
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/locations/new-jersey/';
    $baseUrl = '/pathogend/public_html/locations/new-jersey/';
    $assetBaseUrl = '/pathogend/public_html/locations/assets/';
    $corp = "http://localhost/pathogend/public_html";
}


//this is live DEV base url
if ($_SERVER['HTTP_HOST'] == 'pathogend.dev.dijatek.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/new-jersey/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/new-jersey/';
    $assetBaseUrl = $protocol . 'pathogend.dev.dijatek.com/locations/assets/';
    $corp = $protocol . 'pathogend.dev.dijatek.com/';
}


 //this is LIVE base url
 if ($_SERVER['HTTP_HOST'] == 'pathogend.com') {
     $basePath = $_SERVER['DOCUMENT_ROOT'] . '/locations/new-jersey/';
     $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     $baseUrl = $protocol . 'pathogend.com/locations/new-jersey/';
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
    '404' => '404',
    'testimonials' => 'testimonials'
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
        "meta_desc" => "At Pathogend of New Jersey, we are ending the path to infection. We proudly serve the tri-state area. Contact us today for a free no obligation evaluation.",
        "title" => "Pathogend of New Jersey"
    ),
    "about-us" => array(
        "meta_desc" => "This is the about page of test site",
        "title" => "About Pathogend of New Jersey"
    ),

    "contact-us" => array(
        "meta_desc" => "Contact us today to learn more about how we can help you fight outbreak before it even occurs. You can reach us by phone, email, or through the form on this page.",
        "title" => "Contact Pathogend of New Jersey"

    ),
    "services" => array(
        "meta_desc" => "We decontaminate spaces such as hospitals, nursing homes, schools, universities, homes, gyms, transportation vehicles, businesses, veterinarian offices, and hotels. Our services are available to help you fight outbreak before it even happens in the tri-state area.",
        "title" => "Services by Pathogend of New Jersey"

    ),  
    "blog" => array(
        "meta_desc" => "Learn more about what disinfecting and decontaminating truly means by checking out the Pathogend of New Jersey blog.",
        "title" => "Pathogend of New Jersey Blog"
    ),
    "samplelanding" => array(
        "meta_desc" => "This is our landing page.",
        "title" => "Campaign Title" 
    ),
    "testimonials" => array(
        "meta_desc" => "Find out what our clients are saying about Pathogend Decontamination Services. We have worked with companies such as Wayne Memorial First Aid Squad and Cedar Grove Rescue Squad. We have also served families and small businesses.",
        "title" => "Testimonials"
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