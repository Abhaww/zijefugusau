<?php
require 'includes/session.php';
require 'includes/connection.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$journals_id = mysqli_real_escape_string($conn, $_POST['journals_id']);
$author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
$article_name = mysqli_real_escape_string($conn, $_POST['article_name']);
$abstract = mysqli_real_escape_string($conn, $_POST['abstract']);
$visible = mysqli_real_escape_string($conn, $_POST['visible']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$pdf = mysqli_real_escape_string($conn, $_FILES['pdf']['name']);

// image file directory
$target = "pdf/".basename($pdf);

//
$query = "INSERT INTO articles (id, journals_id, author_name, article_name, abstract, visible, date, pdf) VALUES ({$id}, '{$journals_id}', '{$author_name}', '{$article_name}', '{$abstract}', {$visible}, '{$date}', '{$pdf}')";
if (move_uploaded_file($_FILES['pdf']['tmp_name'], $target)) {
    $msg = "pdf uploaded successfully";
}else{
    $msg = "Failed to upload pdf";
}
$result_set = mysqli_query($conn, $query);

if($result_set){
    header("Location: /admin_dashboard.php?create_article=success");
}
else{
    echo "<p> Journal creation failed. </p>";
	echo "<p>" . mysqli_error($connection) . "</p>";
}