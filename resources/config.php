 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/';
    $baseUrl = '/pathogend/public_html/';
}
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/pathogend/public_html/';
    $baseUrl = '/pathogend/public_html/';
    $protocol = "http://localhost/";
}


//this is live base url
if ($_SERVER['HTTP_HOST'] == 'pathogend.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'pathogend.com/';

}

// Set commonly used paths
/*Includes path contains the html for each page*/
define('BASE_URL', $protocol . 'pathogend.com/');
define('INCLUDES_PATH', $basePath . 'includes/');
define('SERVICES_INCLUDES_PATH', INCLUDES_PATH . 'services/');
define('LANDING_INCLUDES_PATH', INCLUDES_PATH . 'landingpages/');

//Path for blog
define('BLOG_PATH', $basePath . 'blog/');

// Set common links
define('CSS_URL',   $baseUrl. 'assets/css/');
define('JS_URL',    $baseUrl . 'assets/js/');

/**
 * Set image links:
 *  layout - used for site layout and won't be changed much
 *  content - used for consumer uploaded content -- should be part of .gitignore
 */
define('IMAGE_URL', $baseUrl . 'assets/img/');

// Define the array allowing redirect pretty URLS, topLevelPages are usually what is on the nav bar
// Each page must match a file in the includes folder for example: home.php, services.php, aboutus.php....
$topLevelPages = array(
    'home' => 'home',
    'services' => 'services',
    'resources' => 'resources',
    'our-team' => 'our-team',
    'our-story' => 'our-story',
    'testimonials' => 'testimonials',
    'our-technology' => 'our-technology',
    'find-a-provider' => 'find-a-provider',
    '404' => '404',
);

/*servicesPages are for any other pages on the site and anything from a dropdown on the nav bar*/
// Each page must match a file in the includes folder for example: coding.php....
 $subLevelPages = array(
     'coding' => 'coding',
//     'blog' => 'blog',
     'thank-you' => 'thank-you',
     'healthcare' => 'healthcare',
     'laboratories' => 'laboratories',
     'educational' => 'educational',
     'transportation' => 'transportation',
     'business' => 'business',
     'athletic' => 'athletic',
     'residential' => 'residential',
     'join-us' => 'join-us',
     'what-we-do' => 'what-we-do',
     'who-we-serve' => 'who-we-serve',
     'what-we-promise' => 'what-we-promise',
     'features' => 'features',
     'cleaning-vs-disinfecting' => 'cleaning-vs-disinfecting'
 );

 $landingPages = array(
     'SampleLanding' => 'samplelanding'
 );
/*This description array sets up the meta description and title tag for each page identified in the topLevelPages or subLevelPages array*/
$description = array (
    "home" => array(
        "meta_desc" => "Pathogend Decontamination Services is an expert company specializing in bio-decontamination that is affordable and environmentally safe. With over 10 years of experience in high-level disinfection, our whole-space decontamination ensures you are winning the battle against germs in your environment.",
        "title" => "Pathogend"
    ),
    "resources" => array(
        "meta_desc" => "Disinfect and decontaminate your home to safeguard your health when returning home after surgery, hospitalization, or a trip to the ER. Pathogend's whole-space decontamination will help prepare your environment for optimal health. Contact us for a free consultation today.\"/>",
        "title" => "FAQ"
    ),

    "our-team" => array(
        "meta_desc" => "Learn about the Pathogend Decontamination Services team. Get to know our CEO and location presidents. Each member of our team brings many years of experience in fields such as biomedical decontamination, emergency medical service, national laboratory decontamination, and protocol implementation.",
        "title" => "Our Team"

    ),
    "services" => array(
        "meta_desc" => "At Pathogend, we use EPA-approved sporicidal disinfectants to kill germs and stop outbreaks. We provide reports validating the elimination of targeted pathogens. We can disinfect facilities such as healthcare, educational, transportation, commercial, athletic, and residential.",
        "title" => "Services"

    ),  
    "our-story" => array(
        "meta_desc" => "For Pathogend Decontamination Services, it's not just business. It's personal. Read our story and find out the evolution of Pathogend. We are working hard to end the path to infection and create healthy spaces for our clients.",
        "title" => "Our Story"

    ),  
    "testimonials" => array(
        "meta_desc" => "Find out what our clients are saying about Pathogend Decontamination Services. We have worked with companies such as Kentucky Transit, Seminole County Public Schools, and the Texas Department of Health. We have also served families and small businesses.",
        "title" => "Testimonials"

    ),
    "our-technology" => array(
        "meta_desc" => "This is the page about our technology",
        "title" => "Our Technology"

    ),  
    "find-a-provider" => array(
        "meta_desc" => "We offer locations in Central Florida, Delaware, Georgia, New Jersey, and Utah. If there is not a Pathogend Decontamination Services in your area, we will come to you. Creating your healthy space is our utmost priority. Contact our home office at 866-317-5735 for more information.",
        "title" => "Find a Provider"

    ),
    "healthcare" => array(
        "meta_desc" => "Help prevent your patients from leaving your clinical facility with a healthcare-acquired illness (HAI). HAIs are a leading cause of illness and death in hospitals and long-term care facilities. Our comprehensive EPA-approved methods protect against MRSA, Flu, Meningitis, Norovirus, and many more.",
        "title" => "Healthcare Facilities"

    ),
    "educational" => array(
        "meta_desc" => "Pathogend's fogging treatment will decontaminate all surfaces in a classroom, reaching the places cleaning staffs cannot. Decontaminating educational facilities can reduce absenteeism, improve reputation, and avoid a lawsuit. We offer after hours and rapid response service times for schools.",
        "title" => "Educational, School & Daycare"

    ),
    "transportation" => array(
        "meta_desc" => "Don't let germs and odors drive away business. At Pathogend, we can decontaminate transportation vehicles such as buses, ambulances, and airplanes. Our EPA-validated safe and effective system will disinfect without leaving behind harmful residues and eliminate odor-causing biological oils.",
        "title" => "Transportation"

    ),
    "business" => array(
        "meta_desc" => "Sick days cost companies money, time, and productivity. Traditional cleaning and spot disinfecting can no longer meet the challenge of protecting against today's infectious diseases. Avoid the flu and other illnesses in your office with Pathogend's disinfection and decontamination services.",
        "title" => "Business"

    ),    
    "athletic" => array(
        "meta_desc" => "Pathogend Decontamination Services helps athletic facilities protect against harmful germs through pro-active disinfection and outbreak control. Protect your clients and your business. We can create a tailored plan to protect your gym and locker room from odor-causing bacteria and germ-ridden sweat.",
        "title" => "Athletic Facilities"

    ),
    "residential" => array(
        "meta_desc" => "This is the page about residential",
        "title" => "Residential Facilities"

    ),
    "join-us" => array(
        "meta_desc" => "We are looking for local partners to join us in making Pathogend the top decontamination service nationwide. By partnering with Pathogend, you can become an industry leader, make a healthy difference, and invest in the future. Contact us today to learn more.",
        "title" => "Join Us"

    ),
    "what-we-do" => array(
        "meta_desc" => "This is the page about what we do",
        "title" => "What We Do"

    ),
    "who-we-serve" => array(
        "meta_desc" => "This is the page about who we serve",
        "title" => "Who We Serve"

    ),
    "what-we-promise" => array(
        "meta_desc" => "Our decontamination and disinfecting service guarantees the highest kill rate of pathogens possible, exceeding traditional cleaning, sanitization, and disinfecting processes. Some of the germs that are killed include MRSA, E.Coli, Salmonella, Flu, Meningitis, and Mold.",
        "title" => "What We Promise"

    ),
    "features" => array(
        "meta_desc" => "Our decontamination and disinfecting service guarantees the highest kill rate of pathogens possible, exceeding traditional cleaning, sanitization, and disinfecting processes. Some of the germs that are killed include MRSA, E.Coli, Salmonella, Flu, Meningitis, and Mold.",
        "title" => "Why Choose Us"

    ),
    "coding" => array(
        "meta_desc" => "A service we provide is web development.",
        "title" => "Coding Services"
    ), 
//    "blog" => array(
//        "meta_desc" => "Find out more about Pathogend Decontamination Services through our blog. Learn about how our decontamination services work and some of the strategies we have used to help clients create a disinfected environment.",
//        "title" => "Pathogend's Blog"
//    ),
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
    "rachel" => array (
        "meta_desc" => "Rachel's page",
        "title" => "rachel",    ),
    "cleaning-vs-disinfecting" => array(
        "meta_desc" => "While cleaning, disinfecting, and sterilizing are sometimes used interchangeably, there are differences between all three. Cleaning is for appearance, while bio-decontamination impacts health. Today's pathogens require new germ warfare technology, including UV lights and unique fogging methods.",
        "title" => "Cleaning Vs Disinfecting"
    ),
    
);