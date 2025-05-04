<?php
    
    require 'includes/connection.php';
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="icon" href="img/favicon.ico" type="image/ico">
    <title>ZIJEFUGUSAU</title>
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
            <a class="navbar-brand" href="https://www.zijefugusau.com.ng"><img src="img/favicon.ico" alt=""style="height: 20px; width: 25px; margin-bottom: 5px; margin-right: 5px;">ZIJEFUGUSAU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="journals.php">Journals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
           
           <!-- 
            <a class="btn btn-outline-light" href="login.php" role="button">
                <i class="fa-solid fa-user-lock"></i> Login
            </a>
            -->
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/fug1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/fug1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/fug1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Container-->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <p class="h3 fst-italic">"Zamfara International Journal of Education (ZIJE) is the official Journal of the Faculty of Education, Federal University Gusau, Zamfara State, Nigeria. The Journal publishes article of diverse fields of interest in education."</p>
            </div>
        </div>
    </div>

    <!--Container-->
    <div class="container mt-5 mb-5">
        <h2>Recent Journals</h2>
        <?php
            $query = "SELECT * FROM journals ORDER BY id DESC LIMIT 2";
            $result_set = mysqli_query($conn, $query);
            echo "<div class='row'>";
            while($row = mysqli_fetch_assoc($result_set)){
                
                    echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                        echo "<div class='card mt-2 mb-2'>";
                            echo '<img src="img/' . $row['image'] . '" alt="" class="card-img-top">';
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>" . $row['journal_name'] . "</h5>";
                                echo "<p class='card-text'>" . $row['date'] . "</p>";
                                echo "<a href='read_journal{$row['id']}.php' class='btn btn-success'>Go to</a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                
            }
            echo "</div>";
        ?>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/abdurrashid.rabiuumar.94" role="button">
                <i class="fab fa-facebook"></i>
            </a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/abdurrashid-rabiu-886220208/" role="button">
                <i class="fab fa-linkedin"></i>
            </a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Abdurrashid-Rabiu" role="button">
                <i class="fab fa-github"></i>
            </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a class="text-white" href="https://www.zijefugusau.com.ng">ZIJEFUGUSAU</a>
            <p class="lead">This website is created by Abdurrashid Rabiu Umar.</p>
        </div>
        <!-- Copyright -->
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>