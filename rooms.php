<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('inc/links.php');?>
    <title>HM-Hotel Contact Us</title>

</head>

<body class="bg-light">

    <?php include('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTER</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filter"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filter">
                            <div class="border rounded bg-light p-3 mb-3">
                                <h5 class="mb-3  fs-6">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border rounded bg-light p-3 mb-3">
                                <h5 class="mb-3  fs-6">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label " for="f1">Facility One</label>

                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label " for="f2">Facility Two</label>

                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label " for="f3">Facility Three</label>

                                </div>

                            </div>
                            <div class="border rounded bg-light p-3 mb-3">
                                <h5 class="mb-3  fs-6">GUEST</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <input type="number" id="f1" class="form-control shadow-none mb-3">
                                        <label class="form-label " for="f1">Adult</label>

                                    </div>
                                    <div class="mb-2">
                                        <input type="number" id="f1" class="form-control shadow-none mb-3">
                                        <label class="form-label " for="f1">Children</label>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="images/rooms/5.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guest">
                                <h6 class="mb-1">Guest</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    2 Adult
                                </span>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">₹ 200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="images/rooms/5.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guest">
                                <h6 class="mb-1">Guest</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    2 Adult
                                </span>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">₹ 200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="images/rooms/5.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guest">
                                <h6 class="mb-1">Guest</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    2 Adult
                                </span>
                                <span class="badge rounded-pill text-bg-light text-wrap lh-base ">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">₹ 200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php')?>
</body>

</html>