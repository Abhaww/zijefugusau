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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="journals.php">Journals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Container Journals-->
    <div class="container mt-5 mb-5">
        <h2><i class="fa fa-book"></i> Journals</h2>
        <div class="row">
            <?php
                $sql = "SELECT * FROM journals";
                $result = mysqli_query($conn, $sql);
                $result_set = mysqli_num_rows($result);
                if($result_set > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                            echo "<div class='card mt-2 mb-2'>";
                                echo "<img src='img/{$row['image']}' alt='' class='card-img-top'>";
                                echo "<div class='card-body'>";
                                    echo "<h5 class='card-title'>" . $row['journal_name'] . "</h5>";
                                    echo "<p class='card-text'>" . $row['date'] . "</p>";
                                    echo "<a href='read_journal{$row['id']}.php' class='btn btn-success'>Go to</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
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

</body>
</html>