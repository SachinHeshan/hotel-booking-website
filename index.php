<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH HOTEL</title>
 
<?php require('inc/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="bg-light">
 
<?php require('inc/header.php'); ?>


        <!-- login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <from >
    <div class="modal-header">
        <h5 class="model-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i> User login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="Password" class="form-control shadow-none">
            </div>
          <div class= "d-flex align-items-center justify-content-between mb-2 "> 
            <button type="submit class="btn btn-dark shadow-none >Login</button>
            <a href="javascript: vod(0)" class="text-secondary text-decoration-none"> Forgot Password ? </a>
          </div>
        </div>
    </from>
    </div>
  </div>
</div>

  <!-- register  Modal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <from >
    <div class="modal-header">
        <h5 class="model-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill  fs-3 me-2"></i> User Registeration
        </h5> 
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="d-flex justify-content-center">
    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base text-center">
        Note: your details must match with ID (Passport, driving license, etc.) that will be required during check-in.
    </span>
</div>
       <div class="container-fluid">
        <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
                </div>

                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Phone Number</label>
                <input type="Number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0">
                <label  class="form-label">Address</label>
                <textarea class="form-control shaow-none" rows="1"></textarea>
                </div> 

                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">pincode</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">date of birth</label>
                <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Password</label>
                <input type="Password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Comfirm Password</label>
                <input type="Password" class="form-control shadow-none">
                </div>      
        </div>
       </div>
       <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none" >REGISTER</button>
           </div>
        </div>
    </from>
    </div>
  </div>
</div>

<!-- //carousel -->

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
        <div class="swiper-wrapper">
        
        <div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2022/01/08/08/07/home-6923504_1280.jpg">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2018/01/18/15/32/apartment-3090517_1280.jpg" alt="User Booking a Hotel Online">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2019/02/22/13/22/living-room-4013531_1280.jpg" alt="Hotel Reservation Form on Laptop">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2019/03/05/22/58/living-room-4037295_1280.jpg" alt="Mobile Hotel Booking App Interface">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2014/08/11/21/39/wall-416060_1280.jpg" alt="Hotel Booking Website on Desktop">
</div>

    </div>

</div>

<!-- check availability from -->

<div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
  
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
              </select>
              </div>

              <div class="col-lg-2 mb-3 ">
              <label class="form-label" style="font-weight:500">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
              </select>
       </div>
<div class="col-lg-1 mb-lg-3 mt-2">
  <button type ="submit" class="btn text-white shadow-none custom-bg  ">Submit</button>
</div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Our rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-blod h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card borad-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/Rooms/room1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">රු 17.999 Per night</h6>
          <div class="fearture mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
            <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
          </div>
          <div class="Facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
            <span class="badge text-bg-light text-dark text-wrap">Television</span>
            <span class="badge text-bg-light text-dark text-wrap">AC</span>
            <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
         </div>
         <div class="Guests mb-4">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
               </span>
         </div>
        <div class="d-flex justify-content-evenly mb-2 ">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card borad-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/Rooms/room2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">රු 17.999 Per night</h6>
          <div class="fearture mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
            <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
          </div>
          <div class="Facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
            <span class="badge text-bg-light text-dark text-wrap">Television</span>
            <span class="badge text-bg-light text-dark text-wrap">AC</span>
            <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
         </div>
          <div class="Guests mb-4">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
               </span>
         </div>
        <div class="d-flex justify-content-evenly mb-2 ">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card borad-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/Rooms/room3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">රු 17.999 Per night</h6>
          <div class="fearture mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-light text-dark text-wrap">2 rooms</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Bathroom</span>
            <span class="badge text-bg-light text-dark text-wrap">1 Balcony</span>
            <span class="badge text-bg-light text-dark text-wrap">3 Sofa</span>
          </div>
           <div class="Guests mb-4">
          <h6 class="mb-1">Guests</h6>
          <span class="badge text-bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge text-bg-light text-dark text-wrap">4 Children</span>
         </div>
          <div class="Facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge text-bg-light text-dark text-wrap">Wifi</span>
            <span class="badge text-bg-light text-dark text-wrap">Television</span>
            <span class="badge text-bg-light text-dark text-wrap">AC</span>
            <span class="badge text-bg-light text-dark text-wrap">Room heater</span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
               </span>
         </div>
        <div class="d-flex justify-content-evenly mb-2 ">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
        </div>
        </div>
      </div>
    </div>


  </div>
</div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More ROOMS >></a>
    </div>
  </div>
</div>

<!-- OUR FACLILITIES -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-blod h-font">OUR FACLILITIES</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
<<img src="images/feature/wifi-logo-svgrepo-com.svg" width="80px">
<h5 class="mt-3">WIFI</h5>
   </div>
   <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
<<img src="images/feature/wifi-logo-svgrepo-com.svg" width="80px">
<h5 class="mt-3">WIFI</h5>
   </div>
   <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
<<img src="images/feature/wifi-logo-svgrepo-com.svg" width="80px">
<h5 class="mt-3">WIFI</h5>
   </div>
   <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
<<img src="images/feature/wifi-logo-svgrepo-com.svg" width="80px">
<h5 class="mt-3">WIFI</h5>
   </div>
   <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
<<img src="images/feature/wifi-logo-svgrepo-com.svg" width="80px">
<h5 class="mt-3">WIFI</h5>
   </div>
    </div>
</div>
<div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >></a>
    </div>
</div>

<!-- testimoniail -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-blod h-font">TESTIMONIAIL</h2>
 <section class="testimonial-section">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 s">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                           <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                           <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                           <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                           <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>"Exceeded our expectations with innovative designs that brought our vision to life – a truly remarkable creative agency."</p>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Samantha Johnson">
                                        <h5>Samantha Johnson<br>CEO & Co-founder of ABC Company</h5>
                                    </div>
                                   <div class="Rating">
                                    <h5 class="mt-2 ">
                                      Rating</h5>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


       <!-- reach us -->

       <h2 class="mt-5 pt-4 mb-4 mb-4 text-center fw-bpld h-font">REACH US</h2>

       <div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow">
            <iframe class="w-100 rounded" height="480" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63350.809923085406!2d79.87106064198191!3d7.076553389020807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f740b8451b07%3A0x7a32909a84e124c9!2sJa-Ela!5e0!3m2!1sen!2slk!4v1747132039616!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0;"></iframe>
        </div>

        <div class="col-lg-4 col-md-4 p-4 rounded mb-4">
            <div class="bg-white p-4 rounded  w-100">
                <h5 class="mb-3">CALL US</h5>
                <a href="tel:+94721374907" class="d-block mb-2 text-decoration-none text-dark fw-bold">
                    <i class="bi bi-telephone-fill"></i> +94721374907
                </a>
                <a href="tel:+94721374907" class="d-block text-decoration-none text-dark fw-bold">
                    <i class="bi bi-telephone-fill"></i> +94721374907
                </a>
            </div>

            <div class="bg-white p-4 rounded  w-100 mt-3">
                <h5 class="mb-3">Reach us</h5>
                <a href="#" class="d-inline-block mb-2">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter m-1"></i> Twitter
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-2">
                    <span class="badge bg-light text-dark fs-6 p-2">
                       <i class="bi bi-facebook"></i> Facebook
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-2">
                    <span class="badge bg-light text-dark fs-6 p-2">
                       <i class="bi bi-instagram"></i> Instagram
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- footer -->

<?php require('inc/footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper for the first slider (Fade Effect)
    const swiper1 = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false
        },
    });

    
    
</script>
<script>
        // Initialize the carousel with auto-slide every 5 seconds
        const carousel = new bootstrap.Carousel(document.querySelector('#testimonialCarousel'), {
            interval: 5000,
            ride: 'carousel'
        });
    </script>




</body>
</html>
