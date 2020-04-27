<?php
if (!isset($_SESSION['username'])) {
header('HTTP/1.0 401 Unauthorized');
header("location: /public/loginPage.php");
die();
}
