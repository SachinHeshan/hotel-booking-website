<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH HOTEL-About</title>
 
<?php require('inc/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 <style>
  .box{
    border-top-color: var(--teal)!important;
  }
  .pop:hover{
          border-top-color: var(--teal) !important;
          transform: scale(1.03);
          transition: all 0.3s;
        }
 </style>

</head>

   

<body class="bg-light">
 
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-front text-center">ABOUT OUR</h2>
  <div class="h-line bg-dark "></div>
  <p class= "text-center mt-3 ">
    Stay connected with complimentary high-speed.Enjoy delicious meals and refreshments any 
    time of the day with our round-the-clock room service.<br>
     Wi-Fi available in all rooms and public areas.</p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Wi-Fi available in all rooms and</h3>
      <p>
        Stay connected with complimentary high-speed Wi-Fi. Enjoy delicious meals and refreshments any 
        time of the day with our round-the-clock room service.
        Wi-Fi available in all rooms and public areas.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-md-2 oredr-1">
      <img src="images/about/smiling-handsome-businessman-cafe-counter_1262-1984.avif" class="w-100" alt="Wi-Fi illustration">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box pop">
        <img src="images/about/hotel-svgrepo-com.svg" width="70px" alt="hotel">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box pop">
        <img src="images/about/man-svgrepo-com.svg" width="70px" alt="customer">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box pop">
        <img src="images/about/man-holding-certificate-svgrepo-com.svg" width="70px" alt="reviews">
        <h4 class="mt-3">500+ REVIEWS</h4>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box pop">
        <img src="images/about/hotel-staff-to-guide-svgrepo-com.svg" width="70px" alt="staff">
        <h4 class="mt-3">200+ STAFF</h4>
      </div>
    </div>
  </div>
</div>



<h2 class="my-5 fw-bold h-front text-center">MANAGEMNT TEAM</h2>

<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/receptionists-elegant-suits-work-hours (1).jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/receptionists-elegant-suits-work-hours.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/receptionists-work-elegant-suits.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/receptionists-elegant-suits-work-hours (1).jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
    </div>
    <div class="swiper-pagination mt-3"></div>
  </div>
</div>



 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
    
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{

      }
    });
  </script>



<!-- footer -->

<?php require('inc/footer.php'); ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
