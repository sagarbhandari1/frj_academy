<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--====== Title ======-->
  <title>ENQUIRY - FRJ GROUP OF EDUCATION</title>

  <!--====== Google Fonts ======-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="../../css2?family=PT+Serif:wght@400;700&family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
   <!--====== Favicon Icon ======-->
   <link rel="shortcut icon" href="assets/img/logofrj.png" type="image/png">
   
   <link rel="stylesheet" href="assets/scss/Enquiry.css">
   <link rel="stylesheet" href="assets/scss/banner.css">
  <!--====== Bootstrap css ======-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!--====== Jquery UI css ======-->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!--====== icon css ======-->
  <link href="assets/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/css/remixicon.css" rel="stylesheet">
  <!--====== Animate  css ======-->
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <!--====== Swiper css ======-->
  <link href="assets/css/swiper.min.css" rel="stylesheet">
  <!--====== Style css ======-->
  <link href="assets/scss/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/scss/main.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">
</head>

<body>

  <?php include("./include/header.php") ?>

  <div class="main-enquiry ">
    <div class="row justify-content-center">
      <div class="col-md-8 col-12">
        <div class="enquiry-container">
          <div class="enquiry-header">
            <h1>Enquiry Form</h1>
            <p>Fill in the details below to get more information</p>
          </div>
          <!-- Enquiry Form -->
          <form action="#" method="post">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"
                required>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
            </div>
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea class="form-control p-2" id="message" name="message" rows="4" placeholder="Enter your message"
                required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit Enquiry</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Page wrapper end -->
  <?php include("./include/footer.php") ?>

  <!-- Back-to-top button start -->
  <a href="javascript:void(0)" class="back-to-top bounce"><i class="las la-arrow-up"></i></a>
  <!-- Back-to-top button end -->

  <!--====== jquery js ======-->
  <script data-cfasync="false" src="cdn-cgi/scripts/525dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <!--====== jquery UI js ======-->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!--====== Bootstrap js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validator.min.js"></script>
  <script src="assets/js/contact-form-script.js"></script>
  <!--====== Swiper js ======-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!--====== Fslightbox js ======-->
  <script src="assets/js/fslightbox.js"></script>
  <!--====== Countdown js ======-->
  <script src="assets/js/countdown.js"></script>
  <!--====== Main js ======-->
  <script src="assets/js/main.js"></script>
</body>

</html>