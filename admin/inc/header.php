<div class="container-fluid bg-dark text-light p-3 d-flex justify-content-between align-items-center sticky-top">
    <h3 class="mb-0">HM Website</h3>
    <a href="Logout.php" class="btn btn-light btn-sm">Logout</a>
</div>
<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-admin">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light ">ADMIN PANEL</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminDropdown" >
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="setting.php">Settings</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>