<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Navbar Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-0">

        <!-- 7. Sticky top navbar - PALING ATAS -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 1. Horizontal navbar (vertical on small screens) -->
        <h6 class="mt-3 ml-3 text-muted">1. Horizontal Navbar (responsive)</h6>
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 2. Vertical navbar -->
        <h6 class="mt-3 ml-3 text-muted">2. Vertical Navbar</h6>
        <nav class="navbar bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 3. Centered navbar -->
        <h6 class="mt-3 ml-3 text-muted">3. Centered Navbar</h6>
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 4. Grey with black text (navbar-light) -->
        <h6 class="mt-3 ml-3 text-muted">4. Grey with Black Text</h6>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#">Active</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
            </ul>
        </nav>

        <!-- 5. Black with white text (navbar-dark) -->
        <h6 class="mt-3 ml-3 text-muted">5. Black with White Text</h6>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 6. Blue with white text -->
        <h6 class="mt-3 ml-3 text-muted">6. Blue with White Text</h6>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
            </ul>
        </nav>

        <!-- 8. Navbar with search form -->
        <h6 class="mt-3 ml-3 text-muted">8. Navbar with Search</h6>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </nav>

        <!-- 9. Navbar with Toyota Astra logo + dropdown -->
        <h6 class="mt-3 ml-3 text-muted">9. Navbar with Brand & Dropdown</h6>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Logo Toyota Astra -->
            <a class="navbar-brand" href="#">
                <img src="https://www.toyota.astra.co.id/assets/svg/LogoDark.svg" alt="Toyota Astra" height="30" style="filter: brightness(0) invert(1);">
            </a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links + Dropdown -->
            <div class="collapse navbar-collapse" id="navbarDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>



    </div>

</body>

</html>