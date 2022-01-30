<?php

  $clientName = $_POST['clientName'];
  $clientEmail = $_POST['clientEmail'];
  $clientPhone = $_POST['clientPhone'];
  $clientAge = $_POST['clientAge'];
  $clientHeight = $_POST['clientHeight'];
  $clientWeight = $_POST['clientWeight'];
  $clientLikes = $_POST['clientLikes'];
  $clientDislikes = $_POST['clientDislikes'];
  $clientAllergies = $_POST['clientAllergies'];
  $clientMeds = $_POST['clientMeds'];
  $clientTrains = $_POST['clientTrains'];
  $clientSupps = $_POST['clientSupps'];
  $clientNatty = $_POST['clientNatty'];
  $clientExp = $_POST['clientExp'];
  $clientCardio = $_POST['clientCardio'];
  $clientRestricts = $_POST['clientRestricts'];
  $clientShakes = $_POST['clientShakes'];
  $clientWorkouts = $_POST['clientWorkouts'];
  $clientGoals = $_POST['clientGoals']
  ?>
  
  <?php

	$email_from = 'auto@ironelitetraining.com';

	$email_subject = "$clientName Initial Interview";

	$email_body = 
    "
    Contact Info:
    Name: $clientName
	Email: $clientEmail 
	Phone: $clientPhone

    Bios:
    Age: $clientAge
    Weight: $clientWeight
    Height: $clientHeight

    Interview:

    1. What foods do you like?
      $clientLikes

    2. What foods do you dislike?
      $clientDislikes

    3. Do you have any food allergies or dietary preferences?
      $clientAllergies

    4. Do you have any medical conditions/injuries/issues?
      $clientMeds

    5. How often do you train? Days/times a week
      $clientTrains

    6. Do you taken any supplements? If so, which ones?
      $clientSupps

    7. Are you an enhanced athlete?
      $clientNatty

    8. What is your gym experience? 
    <2 years = clientLow
    2-4 years = clientMed
    5+ years = clientHi
    Answer: $clientExp

    9. What is your cardio regimen?
      $clientCardio

    10. Do you have time restrictions on meals? Shift work etc...
      $clientRestricts

    11. Do any of your meals need to be shakes due to these limits?
      $clientShakes

    12. What time will you be working out?
      $clientWorkouts

    13. What is your overall goal?
      $clientGoals			
    "
							
?>

<?php							

  $to = "roman@ironelitetraining.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>

<!DOCTYPE html>
<!--  Last Published: Sun Jan 30 2022 16:29:35 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="61e0eddf9907ff52b78bef9c" data-wf-site="6181ee0ead041b69afcdecf8" lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank you!</title>
  <meta content="Thank you page for form submissions" name="description">
  <meta content="Thank you!" property="og:title">
  <meta content="Thank you page for form submissions" property="og:description">
  <meta content="Thank you!" property="twitter:title">
  <meta content="Thank you page for form submissions" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/iron-elite-training-4ee386.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>

    <!--Nav-->
  <div data-collapse="medium" data-animation="default" data-duration="300" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
    <div class="navigation-items">
      <a href="index.html" class="logo-link w-nav-brand"><img src="images/Iron-Elite-Logo.svg" alt="Iron Elite Logo - a wolf biting a barbell" class="logo-image"></a>
      <div class="navigation-wrap">
        <nav role="navigation" class="navigation-items w-nav-menu">
          <a href="index" class="navigation-item w-nav-link">Home</a>
          <a href="coaches" class="navigation-item w-nav-link">Coaches</a>
          <a href="clients" class="navigation-item w-nav-link">Clients</a>
          <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
            <div class="dropdown-toggle w-dropdown-toggle">
              <div class="navigation-item coaching">COACHING</div>
              <a href="coaching/coaching" class="navigation-item coaching-small w-nav-link">Coaching</a>
            </div>
            <nav class="dropdown-list w-dropdown-list">
              <a href="coaching/lifestyle" class="dropdown-item w-dropdown-link">Lifestyle</a>
              <a href="coaching/competition" class="dropdown-item w-dropdown-link">Competition</a>
            </nav>
          </div>
          <a href="https://my-store-c65fd2.creator-spring.com/" target="_blank" class="navigation-item w-nav-link">merch</a>
          <a href="http://ironsocietygym.com/" target="_blank" class="navigation-item w-nav-link">THe gym</a>
        </nav>
        <div class="menu-button w-nav-button"><img src="images/menu-icon_1menu-icon.png" width="45" alt="" class="menu-icon"></div>
      </div>
    </div>
  </div>

  <!--Content-->
  <div class="_404-wrap wf-section">
    <div class="w-container">
      <h1 class="hero-header">Thank You!</h1>
    </div>
    <h2 class="sub-header white">We typically respond within 24 hours, make sure to check your spam folder!<br><br>‍</h2>
    <a href="index.html" class="button w-button">Go Back Home</a>
  </div>

  <!--Footer-->
  <div data-w-id="f98c44d6-4045-3c6d-e445-407544028853" class="footer wf-section">
    <div class="footercontainer w-container"><img src="images/Iron-Elite-Logo.svg" loading="lazy" width="150" alt="Iron Elite Logo - a wolf biting a barbell" class="footer-logo">
      <div class="footer-link-box">
        <a href="index" class="footer-item">Home</a>
        <a href="coaches" class="footer-item">Coaches</a>
        <a href="clients" class="footer-item">Clients</a>
        <a href="coaching/coaching" class="footer-item">Coaching</a>
        <a href="https://my-store-c65fd2.creator-spring.com/" target="_blank" class="footer-item">Merch</a>
        <a href="http://ironsocietygym.com" target="_blank" class="footer-item">The Gym</a>
      </div>
      <div class="div-block-3">
        <a href="https://www.facebook.com/EmpireTPC/" target="_blank" class="social-link">facebook</a>
        <a href="https://www.instagram.com/ironelitetraining/" target="_blank" class="social-link">instagram</a>
        <a href="https://www.instagram.com/ironelitetraining" target="_blank" class="social-link">youtube</a>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6181ee0ead041b69afcdecf8" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>