<nav class="navbar navbar-expand-lg bg-white px-lg-2 py-lg-3 shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3 h-font" href="#">Hotel HM</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facility.php">Facilty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <div class="d-flex" role="search">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModel">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#Register">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!--------------------------------- login-form -------------------->
  <div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="#">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
              <i class="bi bi-person-circle me-3" style="font-size: 2rem"></i>User Login
            </h1>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />

            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" aria-describedby="emailHelp" />
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-primary shadow-none">
                <i class="bi bi-person-lock me-2" style="font-size: 1rem"></i>Login
              </button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--------------------------------- Registeration -------------------->
  <div class="modal fade" id="Register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form action="#">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
              <i class="bi bi-person-fill-gear me-3" style="font-size: 2rem"></i>User Register
            </h1>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill text-bg-light text-wrap lh-base mb-3">Note: Your deatils must be match with
              your ID (Adhaar card, Pan
              card, Passport etc..) that will be required during
              check-in</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none" aria-describedby="emailHelp"
                      placeholder="Enter Your Name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none" aria-describedby="emailHelp"
                      placeholder="Enter Your Email" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Number</label>
                    <input type="number" class="form-control shadow-none" placeholder="Enter Your Number" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Choose File</label>
                    <input type="file" class="form-control shadow-none" aria-describedby="emailHelp"
                      placeholder="Upload Your Document" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address
                    </label>
                    <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="1">
                            Type Your Address....

                    </textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control shadow-none" aria-describedby="emailHelp"
                      placeholder="Enter pincode" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control shadow-none" aria-describedby="emailHelp"
                      placeholder="Date of birth" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none" aria-describedby="emailHelp" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control shadow-none" aria-describedby="emailHelp" />
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-dark" type="submit">Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>