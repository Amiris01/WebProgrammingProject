<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="about.css"/>
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Donate4All-AboutPage</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    
  </head>

  <body class="sub_page">
    <div class="hero_area">
    <?php include('include/mainheader.php');?>
    </div>

    <!-- welcome section -->
    <section class="welcome_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>Welcome To Donate4All</h2>
        </div>
        <div class="layout_padding2">
          <div class="img-box">
            <img src="images/welcome.jpg" alt="" />
          </div>
          <div class="detail-box">
            <p>
              A survey conducted by United Nations agencies UNICEF and
              UNFPA in the near end of 2020, when Malaysia underwent the conditional movement control order (CMCO), it is found that
              the socio-economic state of an approximate half of the Malaysian
              households were gradually deteriorating due to them nearing their
              breaking points. These surveys have found that unemployment in
              the country has doubled up to 15% when compared to three months
              prior the occurence, where one-third of a household remains
              unemployed. <br/><br/>

              Due to the current state of unemployment and loss of jobs of the
              public since COVID-19 occured, Donate4All takes the advantage
              to help the families and those who are in need in a rough time.
              Donate4All serves as a platform for users to donate money and
              items as per needed by families who could not afford, as well as
              a platform for those who requires aid to afford basic necessities.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end welcome section -->

    <div class="footer_bg">
      <!-- footer section -->
      <section class="container-fluid footer_section">
        <div class="text-center footer_text">
          <p>
              © 2022 All Rights Reserved By
              <a href="home.php">Donate4All</a>
          </p>
      </div>
      </section>
      <!-- footer section -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
