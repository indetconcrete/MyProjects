<!-- portfolio.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - [Your Name]</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="portfolio">
        <h1>My Projects</h1>
        <div class="project">
            <img src="MyProject/assets/images/pexels-asphotograpy-230544.jpg" alt="Project 1">
            <h2>Project Title</h2>
            <p>Brief description of the project.</p>
        </div>

        <!-- Add more projects here -->
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> [Your Name]. All rights reserved.</p>
    </footer>
</body>
</html>
