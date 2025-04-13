<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('inc/links.php');?>
    <title>HM-Hotel About</title>
    <style>
        .box:hover{
border-top-color:var(--teal) !important;
transition:all 0.3s linear;
cursor:pointer;
        }
    </style>
</head>
<body class="bg-light">
<?php include('inc/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> About Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
         Laborum impedit aperiam inventore sapiente explicabo
         dicta at asperiores aut alias? Aliquid.
    </p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
            <h3 class="mb-3">Lorem, ipsum dolor.</h3>
            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum minus non error quidem. Vero hic esse qui inventore perspiciatis
                facilis fugit deleniti totam quo est? Molestias adipisci, aut pariatur voluptatem officia exercitationem totam eius repudiandae
                velit autem odit dolor distinctio quis fuga in, corrupti repellendus
                reprehenderit harum deleniti reiciendis placeat. Dolore vel labore doloremque consequatur eveniet, sed quas iure libero?</p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-1">
            <img src="images/rooms/5.jpg" alt="" class="w-100 d-block rounded border-5 border-dark border-top">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white shadow p-4 rounded border-top border-4 text-center box">
                <img src="images/about-us/hotel-rooms.svg" alt="" width="70px" >
                <h4 class="mt-3">100+ Rooms</h4>
            </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white shadow p-4 rounded border-top border-4 text-center box">
                 <img src="images/about-us/customer.svg" alt="" width="70px" >
                <h4 class="mt-3">200+ Customers</h4>
            </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white shadow p-4 rounded border-top border-4 text-center box">
                <img src="images/about-us/review.svg" alt="" width="70px" >
                <h4 class="mt-3">150+ Reviews</h4>
            </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white shadow p-4 rounded border-top border-4 text-center box">
                <img src="images/about-us/staff.svg" alt="" width="70px" >
                <h4 class="mt-3">200+ Staffs</h4>
            </div>
        </div>


    </div>
</div>
 <h2 class="fw-bold h-font text-center my-5"> Hotel Management</h2>
 <div class="container px-4">
    <div class="swiper mySwiper">
            <div class="swiper-wrapper " style="opacity:1;">
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-1.png" alt="" class="img-fluid w-100 d-block">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-2.png" alt="" class=" w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                         <img src="images/team/team-1.png" alt="" class="w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-4.png" alt="" class="w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-1.png" alt="" class="img-fluid w-100 d-block">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-2.png" alt="" class=" w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                         <img src="images/team/team-1.png" alt="" class="w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/team/team-4.png" alt="" class="w-100 ">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
            </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>

<?php include('inc/footer.php')?>
 <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView:4,
    spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
      },
  autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
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
          slidesPerView: 4,
        },
      }
    });
  </script>
</body>
</html>