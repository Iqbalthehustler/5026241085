<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
        <div class="container">

            <!-- Brand / Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://www.toyota.astra.co.id/assets/svg/LogoDark.svg" alt="Toyota Astra" height="35">
            </a>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="toyotaNavbar">
                <ul class="navbar-nav ml-auto align-items-center">

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">Toyota Electrified</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">Gazoo Racing</a>
                    </li>

                    <!-- Dropdown: Models -->
                    <li class="nav-item dropdown font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="dropModels" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Models
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropModels">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <!-- Dropdown: Shop Now -->
                    <li class="nav-item dropdown font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="dropShop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop Now
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropShop">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <!-- Dropdown: Ownership -->
                    <li class="nav-item dropdown font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="dropOwnership" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ownership
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropOwnership">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <!-- Dropdown: Discover Toyota -->
                    <li class="nav-item dropdown font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDiscover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Discover Toyota
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropDiscover">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <!-- Tombol Search -->
                    <li class="nav-item">
                        <button class="btn-search ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="none" stroke="#333" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://www.toyota.astra.co.id/assets/svg/toyota_locationDark.svg" alt="Toyota Astra" height="30">
                        </a>
                    </li>

                    </li>
                    <li class="nav-item">
                        <a id="navbarLoginButton" href="#login" data-rr-ui-event-key="#login" class="ms-1 me-2 align-items-center text-dark border border-dark rounded-pill px-2 nav-link">
                            <img src="https://www.toyota.astra.co.id/assets/svg/VectorDark.svg" class="me-1 profile-icon" alt="Toyota Login" style="margin-top: -4px;"> Login
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten dummy -->
    <div class="container mt-5">
        <div style="height:1500px" class="d-flex justify-content-center pt-4">
            <p class="text-muted">Scroll untuk melihat efek sticky navbar ⬆️</p>
        </div>
    </div>

</body>

</html>