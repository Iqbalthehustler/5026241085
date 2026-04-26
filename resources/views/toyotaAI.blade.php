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
    <style>
        /* Reset & Base */
        
        * {
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: 'Toyota Display', Arial, sans-serif;
        }
        /* Navbar */
        
        .navbar {
            background-color: #fff !important;
            border-bottom: 1px solid #e0e0e0;
            padding: 0;
            min-height: 70px;
        }
        
        .navbar .container {
            min-height: 70px;
            align-items: stretch;
        }
        /* Brand */
        
        .navbar-brand {
            padding: 0;
            margin-right: 2rem;
            display: flex;
            align-items: center;
        }
        /* Nav link styling mirip Toyota asli */
        
        .navbar-nav .nav-link {
            color: #1a1a1a !important;
            font-size: 14px;
            font-weight: 600;
            padding: 0 14px !important;
            height: 70px;
            display: flex !important;
            align-items: center;
            border-bottom: 3px solid transparent;
            transition: color 0.2s, border-color 0.2s;
            white-space: nowrap;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-item.dropdown:hover>.nav-link,
        .navbar-nav .nav-item.show>.nav-link {
            color: #EB0A1E !important;
            border-bottom: 3px solid #EB0A1E;
        }
        /* Dropdown arrow mirip asli (lebih kecil) */
        
        .dropdown-toggle::after {
            border: none;
            content: "▾";
            font-size: 11px;
            margin-left: 4px;
            vertical-align: middle;
        }
        /* Dropdown menu */
        
        .dropdown-menu {
            border: none;
            border-radius: 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            padding: 8px 0;
            margin-top: 0;
            min-width: 180px;
        }
        
        .dropdown-item {
            font-size: 14px;
            font-weight: 500;
            color: #1a1a1a;
            padding: 10px 20px;
        }
        
        .dropdown-item:hover {
            background-color: #fff5f5;
            color: #EB0A1E;
        }
        /* Kanan: search, location, login */
        
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 4px;
        }
        /* Tombol Search - tanpa border, tanpa background */
        
        .btn-icon {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            transition: opacity 0.2s;
        }
        
        .btn-icon:focus {
            outline: none;
            box-shadow: none;
        }
        
        .btn-icon:hover {
            opacity: 0.6;
        }
        /* Tombol Login - rounded pill dengan border */
        
        .btn-login {
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1.5px solid #1a1a1a;
            border-radius: 50px;
            padding: 7px 16px;
            background: none;
            font-size: 14px;
            font-weight: 600;
            color: #1a1a1a;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.2s;
            line-height: 1;
        }
        
        .btn-login:hover {
            border-color: #EB0A1E;
            color: #EB0A1E;
            text-decoration: none;
        }
        
        .btn-login img {
            margin-top: 0;
        }
        /* Hamburger */
        
        .navbar-toggler {
            border: none;
            padding: 8px;
        }
        
        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }
        /* Gambar carousel full width */
        
        .carousel-item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid px-6">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://www.toyota.astra.co.id/assets/svg/LogoDark.svg" alt="Toyota Astra" height="38">
            </a>

            <!-- Hamburger (mobile) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toyotaNavbar" aria-controls="toyotaNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="toyotaNavbar">

                <!-- Menu tengah -->
                <ul class="navbar-nav mx-auto align-items-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Toyota Electrified</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gazoo Racing</a>
                    </li>

                    <!-- Dropdown: Models -->
                    <li class="nav-item dropdown">
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
                    <li class="nav-item dropdown">
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
                    <li class="nav-item dropdown">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDiscover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Discover Toyota
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropDiscover">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                </ul>

                <!-- Kanan: Search + Location + Login -->
                <div class="navbar-right ml-auto">

                    <!-- Search -->
                    <button class="btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                         fill="none" stroke="#1a1a1a" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </button>

                    <!-- Location -->
                    <button class="btn-icon">
                    <img src="https://www.toyota.astra.co.id/assets/svg/toyota_locationDark.svg"
                         alt="Location" height="22">
                </button>

                    <!-- Login -->
                    <a id="navbarLoginButton" href="#login" class="btn-login ml-2">
                        <img src="https://www.toyota.astra.co.id/assets/svg/VectorDark.svg" alt="Login" height="18"> Login
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Konten dummy -->
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
            <li data-target="#demo" data-slide-to="7"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/PKbOClGxJteUtu050bJtkOImmvNJaVioXnGiY0QO.webp" alt="1">
            </div>
            <div class="carousel-item ">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/k0lQF1KOn5B4y0oyBoMxhxNBmWFam8TUreKsyNtV.webp" alt="2">
            </div>
            <div class="carousel-item ">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/3h57wfZSTgvrzBCIqSqwE4l0HQALont7Ku7xChiv.webp" alt="3">
            </div>
            <div class="carousel-item">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/vkxb1wB8qVGfGkYtPygRMkwKlwafk854rjrsy2Gp.webp" alt="4">
            </div>
            <div class="carousel-item">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/AMDHel87qurefMy4pSfCtgN9hesIIDUDr7xR6wgT.webp" alt="5">
            </div>
            <div class="carousel-item">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/cNy1y2yBQ3UZvq8LfUoNmuSmiWDpYNqxYUv0ypeN.webp" alt="6">
            </div>
            <div class="carousel-item">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/0b13yl8WsOA4OXyDGCu5QuQPGafQlBQeweJoDhtc.webp" alt="7">
            </div>
            <div class="carousel-item">
                <img src="https://d1g6w7sntckt92.cloudfront.net/public/images/banner_images/jOGmQMIF7BxZmnK3ufiXaDZQMvJcF9meB05YZUv8.webp" alt="8">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</body>

</html>