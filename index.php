<?php

include 'pages/header.php';
include 'pages/connect.php';

//$sql = "SELECT * FROM auto";
//$result = $conn->query($sql);



if($_GET["link"]) include 'pages/'.$_GET["link"];
else include 'pages/home.php';

include 'pages/footer.php';

?>

