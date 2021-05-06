<!DOCTYPE html>
<html lang="en">







<head>

<title>Request a Quote | i r i d e s c X n t  _  d e s i g n s</title>
<link href="Images/logo-icon.PNG" rel="icon">




<!--meta-->
<meta charset="UTF-8">
<meta name="keywords" content="website, custom, html, css, free, cheap, custom, local">
<meta name="description" content="Custom websites">
<meta name="viewport" content="width=device-width, initial-scale=1.0">




<!--CSS-->
<link href="CSS/main-showcase.css" rel="stylesheet" type="text/css">
<link href="CSS/main-info.css" rel="stylesheet" type="text/css">
<link href="CSS/main-landing.css" rel="stylesheet" type="text/css">
<link href="CSS/quoteCSS/quote-main.css" rel="stylesheet" type="text/css">
<link href="CSS/mobileCSS/mobileLanding.css" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<!--Javascript-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="JS/openShowCase.js"></script>



<!--Font Families-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&amp;display=swap" rel="stylesheet">






</head>




<?php




$name = $_POST['name'];
$email = $_POST['email'];
$about = $_POST['about'];
$local = $_POST['locality'];


$mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "iridesdesignstudio_2471");

if ($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);

$name = $_POST['name'];
$email = $_POST['email'];
$about = $_POST['about'];
$local = $_POST['locality'];


    $sql = "INSERT INTO quoterequest (customerPreferredName, customerEmail, 
                                      textBoxAbout, locality)
                    VALUES ('$name', '$email', '$about', '$locality')";

if($mysqli->query($sql) === true){
  echo "Thank you for your submission.";
} else{
  echo "ERROR: Could not submit form data. " . $mysqli->error;
}

$mysqli->close();



?>
