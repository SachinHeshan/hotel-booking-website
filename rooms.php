<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rooms</title>
 
<?php require('inc/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
 
<body class="bg-light">
 
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-front text-center">Our Rooms</h2>
  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
     
  <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
      <div class="container-fluid flex-lg-column align-items-stretch">
        <h4 class="mt-2">FILTER</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
          
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
            <label class="form-label">Check-in</label>
            <input type="date" class="form-control shadow-none mb-3">
            <label class="form-label">Check-out</label>
            <input type="date" class="form-control shadow-none">        
          </div>

          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
            <div class="mb-2">
              <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f1">facilities one</label>  
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f2">facilities two</label>  
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f3">facilities three</label>  
            </div>
          </div>
             <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
            <div class="d-flex">
             <div class=me-3>
             <label class="form-label">Adilts</label>
             <input type="number" class="form-control shadow-none">  
           </div>
            <div>
             <label class="form-label">children</label>
             <input type="number" class="form-control shadow-none">  
           </div>
            </div>
          
          </div>

        </div>
      </div>
    </nav>
  </div>
  
 <div class="col-lg-9 col-md-12 px-4">

  <!-- Card 1 -->
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="https://cdn.pixabay.com/photo/2016/04/15/11/43/hotel-1330834_1280.jpg" class="img-fluid rounded">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Simple Room Name</h5>
        <div class="fearture mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
          <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
        </div>
        <div class="Facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
          <span class="badge text-bg-light text-dark text-wrap">Television</span>
          <span class="badge text-bg-light text-dark text-wrap">AC</span>
          <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
        </div>
        <div class="Guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
          <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
        </div>
      </div>
      <br>
      <div class="col-md-2 mt-lg-0 mt-md-0  mt-4 text-center">
        <h6 class="mb-4">රු 17,999 Per night</h6>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="https://cdn.pixabay.com/photo/2016/04/15/11/43/hotel-1330834_1280.jpg" class="img-fluid rounded">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Simple Room Name</h5>
        <div class="fearture mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
          <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
        </div>
        <div class="Facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
          <span class="badge text-bg-light text-dark text-wrap">Television</span>
          <span class="badge text-bg-light text-dark text-wrap">AC</span>
          <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
        </div>
        <div class="Guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
          <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
        </div>
      </div>
       <div class="col-md-2 mt-lg-0 mt-md-0  mt-4 text-center">
        <h6 class="mb-4">රු 17,999 Per night</h6>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="https://cdn.pixabay.com/photo/2016/04/15/11/43/hotel-1330834_1280.jpg" class="img-fluid rounded">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Simple Room Name</h5>
        <div class="fearture mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
          <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
          <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
        </div>
        <div class="Facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
          <span class="badge text-bg-light text-dark text-wrap">Television</span>
          <span class="badge text-bg-light text-dark text-wrap">AC</span>
          <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
        </div>
        <div class="Guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
          <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
        </div>
      </div>
      <div class="col-md-2 mt-lg-0 mt-md-0  mt-4 text-center">
        <h6 class="mb-4">රු 17,999 Per night</h6>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
      </div>
    </div>
  </div>

</div>


<!-- footer -->

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
