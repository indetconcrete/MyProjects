<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
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
    <section class="container-fluid py-4">
 <div class="container">
<h2 class="text-center"> About Us</h2>
<div class="row">
<div class="row">
    <div class="col-lg-6 mb-4">
        <img src="assets/images/website2.jpg" alt="Image not shown" class="img-fluid">
    </div>
    <div class="col-lg-6 mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis similique libero, fuga sint quo nihil ut repellat veniam itaque asperiores! Aliquid modi nesciunt laboriosam pariatur cum possimus deleniti! Quas, ullam.<br> <br>
    </div>
</div>
</div>
 </div>
    </section>
</body>
</html>