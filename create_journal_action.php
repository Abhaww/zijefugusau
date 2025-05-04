<?php
require 'includes/session.php';
require 'includes/connection.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$journal_name = mysqli_real_escape_string($conn, $_POST['journal_name']);
$abstract = mysqli_real_escape_string($conn, $_POST['abstract']);
$visible = mysqli_real_escape_string($conn, $_POST['visible']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$image = mysqli_real_escape_string($conn, $_FILES['image']['name']);

// image file directory
$target = "img/".basename($image);

//
$query = "INSERT INTO journals (id, journal_name, abstract, visible, date, image) VALUES ({$id}, '{$journal_name}', '{$abstract}', {$visible}, '{$date}', '{$image}')";
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}
$result_set = mysqli_query($conn, $query);

if($result_set){
    header("Location: /admin_dashboard.php?create_journal=success");
}
else{
    echo "<p> Journal creation failed. </p>";
	echo "<p>" . mysqli_error($connection) . "</p>";
}