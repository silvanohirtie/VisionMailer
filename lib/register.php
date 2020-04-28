
<?php
session_start();
if (isset($_POST['registerButton'])) {
$mysqli = new mysqli("aaa", "sss", "ddd", "fff");
$username = $_POST['inputRegisterUsername'];
$password = $_POST['inputRegisterPassword'];
$email = $_POST['inputRegisterEmail'];

if ($_POST['captcha'] != $_SESSION['captcha']) {
  header("Location: /public/registerPage.php?error=captchainvalid&username=".$username."&email=".$email);
  exit();
}

if(empty($username) || empty($password) || empty($email)){
  header("Location: /public/registerPage.php?error=uncompletedform");
  exit();
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
header("Location: /public/registerPage.php?error=invalidemail&username=".$username);
exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
header("Location: /public/registerPage.php?error=invalidusername&email=".$email);
exit();
}

else {
$sql = "SELECT username FROM users WHERE username=?";
  $stmt = mysqli_stmt_init($mysqli);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: /public/registerPage.php?error=sqlerror");
    exit();

  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
      header("Location: /public/registerPage.php?error=usertaken&email=".$email);
      exit();
      }
      else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
        $stmt->execute();
        $stmt->close();
        header("Location: /public/loginPage.php?register=completed");
        exit();
      }
    }
  }
  mysqli_close($mysqli);
}
else{
  header("Location: /public/registerPage.php");
  exit();
}
