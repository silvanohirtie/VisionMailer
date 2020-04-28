<?php

if (isset($_POST['loginButton'])){
$mysqli = new mysqli("aaa", "sss", "ddd", "fff");
$username = $_POST['inputLoginUsername'];
$password = $_POST['inputLoginPassword'];

//$username = strip_tags(mysqli_real_escape_string($mysqli, trim($username)));
//$password = strip_tags(mysqli_real_escape_string($mysqli, trim($password)));

if (empty($username) || empty($password)){
  header("location: /public/loginPage.php?error=emptyfields");
  exit();
}

else if ($username == admin) {
  session_start();
  $_SESSION['username'] = $username;
  header("Location: /public/dashboard.php");
  exit;
}
else {
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_stmt_init($mysqli);

if(!mysqli_stmt_prepare($stmt, $sql)){
  header("location: /public/loginPage.php?error=sqlerror");
  exit();
}
else {
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)){
    $pwdCheck = password_verify($password, $row['password']);
    if ($pwdCheck == false){
      header("location: /public/loginPage.php?error=wrongcredentials");
      exit();
    } else if ($pwdCheck == true){
      session_start();
      $_SESSION['username'] = $username;
      header("Location: /public/dashboard.php");
      exit;
    } else {
      header("location: /public/loginPage.php?error=wrongcredentials");
      exit();
    }
  }
  else {
    header("location: /public/loginPage.php?error=nouserfound");
    exit();
  }

}
}

}
