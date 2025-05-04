<?php
    require 'includes/session.php';
    require 'includes/connection.php';
    
    if(!isset($_SESSION['user_id'])){
        header("Location: /login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nature</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='fontawesome-free-6.2.0-web/css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='fontawesome-free-6.2.0-web/css/all.min.css'>

    <script src='js/script.js'></script>
    <script src='js/bootstrap.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='fontawesome-free-6.2.0-web/js/all.js'></script>
    <script src='fontawesome-free-6.2.0-web/js/all.min.js'></script>
</head>
<body>
    
    <!-- NavBar -->
    <nav class="navbar navbar-dark bg-success navbar-expand-sm">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nature</a>
            
            <a class="btn btn-outline-light" href="logout.php" role="button">
                <i class="fa-solid fa-user-lock"></i> Logout
            </a>
        </div>
    </nav>

    <!-- Admin Dashboard -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <h5>Welcome to the admin dashboard <?php echo $_SESSION['user_name']; ?></h5>

            <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h3">Journal</div>
                        <div class="card-text lead">From this menu, you can create a journal, edit a journal, and also delete a journal.</div>
                        <a href="create_journal.php" class="btn btn-success mt-2 mb-2">Create Journal</a>
                        <a href="update_journal.php" class="btn btn-success mt-2 mb-2">Update Journal</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h3">Article</div>
                        <div class="card-text lead">From this menu, you can create an article, edit an article, and also delete an article.</div>
                        <a href="create_article.php" class="btn btn-success mt-2 mb-2">Create Article</a>
                        <a href="update_article.php" class="btn btn-success mt-2 mb-2">Update Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-facebook"></i>
            </a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-linkedin"></i>
            </a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-instagram"></i>
            </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://nature.com/">nature.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
</html>