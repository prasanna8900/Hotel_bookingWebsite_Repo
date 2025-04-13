<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking Management System</title>
  <?php include('inc/links.php')?>
  <style>
    .check-in-form {
      position: relative;
      margin-top: -50px;
      z-index: 1;
    }

    @media screen and (max-width:575px) {
      .check-in-form {
        margin-top: 25px;

      }
    }

    .swiper-wrapper {
      opacity: 1;
    }
  </style>
</head>

<body class="bg-light">
  <!--------------------------------- Navbar -------------------->
  <?php include('inc/header.php')?>
  <!-- slider -->
  <div class="container-fluid p-0">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/slider-1.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/slider-2.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/slider-3.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/slider-4.png" alt="" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>
  <!-- form -->
  <div class="container check-in-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Availability</h5>
        <form>
          <div class="row d-flex justify-content-center align-items-end">
            <div class="col-lg-3 mb-3">
              <label for="data" style="font-weight: 500">Check-in</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label for="data" style="font-weight: 500">Check-out</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label for="data" style="font-weight: 500">Adult</label>
              <select name="" id="" class="form-select shadow-none">
                <option value="">Select</option>
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label for="data" style="font-weight: 500">Children</label>
              <select name="" id="" class="form-select shadow-none">
                <option value="">Select</option>
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mt-2 mb-lg-3">
              <button class="btn text-white custom-bg rounded" type="submit">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--heading card-rooms -->
  <h1 class="room-cards mt-5 p-4 mb-4 fw-bold text-center h-font">
    OUR ROOMS
  </h1>
  <!-- rooms-cards section -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpeg" class="card-img-top w-100 d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4">₹ 200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Televisiom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                AC
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Room Heater
              </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                2 Adult
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill text-bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-between ">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>

          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/10.jpg" class="card-img-top w-100 d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Delux Room</h5>
            <h6 class="mb-4">₹ 500 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                3 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 terris
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Televisiom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                AC
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Room Heater
              </span>
            </div>
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                2 Adult
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill text-bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-between ">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>

          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/2.jpg" class="card-img-top w-100 d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Standard Room</h5>
            <h6 class="mb-4">₹ 800 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Televisiom
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                AC
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                Room Heater
              </span>
            </div>
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                2 Adult
              </span>
              <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill text-bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-between ">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none p-3">More Rooms >>></a>
    </div>
  </div>
  <!-- our facilities -->
  <h1 class="room-cards mt-5 p-4 mb-4 fw-bold text-center h-font">
    OUR Facilities
  </h1>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-sm-5">
      <div class="col-md-2 col-lg-2 bg-white shadow rounded py-4 my-3 text-center">
        <img src="images/features/wifi.png" alt="" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-md-2 col-lg-2 bg-white shadow rounded py-4 my-3 text-center">
        <img src="images/features/wifi.png" alt="" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-md-2 col-lg-2 bg-white shadow rounded py-4 my-3 text-center">
        <img src="images/features/wifi.png" alt="" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-md-2 col-lg-2 bg-white shadow rounded py-4 my-3 text-center">
        <img src="images/features/wifi.png" alt="" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-md-2 col-lg-2 bg-white shadow rounded py-4 my-3 text-center">
        <img src="images/features/wifi.png" alt="" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-md-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none p-3">More Facilities >>></a>
      </div>
    </div>
  </div>
  <!-- our Testimonial -->
  <h1 class="room-cards mt-5 p-4 mb-4 fw-bold text-center h-font">
    Testimonial
  </h1>
  <div class="container">
    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/testimonial/user-icon.webp" alt="" width="80px">
            <h6 class="m-0 ms-2 ">Random Username</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quibusdam impedit, delectus praesentium
            autem repellendus molestiae esse ex nemo eum.</p>
          <div class="rating">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/testimonial/user-icon.webp" alt="" width="80px">
            <h6 class="m-0 ms-2">Random Username</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quibusdam impedit, delectus praesentium
            autem repellendus molestiae esse ex nemo eum.</p>
          <div class="rating">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/testimonial/user-icon.webp" alt="" width="80px">
            <h6 class="m-0 ms-2">Random Username</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quibusdam impedit, delectus praesentium
            autem repellendus molestiae esse ex nemo eum.</p>
          <div class="rating">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/testimonial/user-icon.webp" alt="" width="80px">
            <h6 class="m-0 ms-2">Random Username</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quibusdam impedit, delectus praesentium
            autem repellendus molestiae esse ex nemo eum.</p>
          <div class="rating">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>

          </div>
        </div>
      </div>
      <div class="col-md-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none p-3">Know More >>></a>
      </div>
    </div>
  </div>
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-4 mb-lg-0 mb-3 bg-white rounded p-4">
        <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.52629668376!2d76.76357783356833!3d28.643684634738104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1737476290205!5m2!1sen!2sin"
          height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4 ">
          <h5>Call Us</h5>
          <a href="tel:9667553510" class="d-inline-block mb-2 text-decoration-none text-dark "><i
              class="bi bi-telephone-fill"></i> 9667553510</a>
          <br>
          <a href="tel:9667553510" class="d-inline-block  text-decoration-none text-dark "><i
              class="bi bi-telephone-fill"></i> 9667553510</a>
        </div>
        <div class="bg-white p-4 rounded mb-4 ">
          <h5>Follow Us</h5>
          <a href="#"><span class="badge bg-light text-dark fs-6 p-2 me-3"><i class="bi bi-twitter"></i>
            </span></a>

          <a href="#"><span class="badge bg-light text-dark fs-6 p-2 me-3"><i class="bi bi-facebook"></i>
            </span></a>
          <a href="#"><span class="badge bg-light text-dark fs-6 p-2 me-3"><i class="bi bi-instagram"></i>
            </span>
          </a>
          <a href="#"><span class="badge bg-light text-dark fs-6 p-2 me-3"><i class="bi bi-whatsapp"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include('inc/footer.php')?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    });
    var swiper = new Swiper(".swiper-testimonial", {

      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,

      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>

</html>