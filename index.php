<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Additional custom styling (optional) */
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            text-transform: capitalize;
        }
        .cart-icon {
            font-size: 1.5rem;
        }
        .search-bar {
            width: 100%;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="#">MyShop</a>
            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>

                <!-- Search Bar -->
                <form class="d-flex me-3" action="search.php" method="get">
                    <input class="form-control me-2 search-bar" type="search" name="query" placeholder="Search products..." aria-label="Search for products">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

                <!-- Cart Icon -->
                <a class="nav-link position-relative" href="cart.php" aria-label="Cart">
                    <i class="bi bi-cart cart-icon"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                    </span>
                </a>

                <!-- Login/Signup -->
                <a class="btn btn-outline-success ms-2" href="login.php">Login</a>
                <a class="btn btn-primary ms-2" href="register.php">Sign Up</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Images -->
    <img src="assets/images/website.webp" class="img-fluid" alt="Website Image">
    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>