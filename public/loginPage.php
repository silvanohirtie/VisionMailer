<?php
session_start();

if (isset($_SESSION['username'])) {
header("location: /public/dashboard.php");
die();
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>FakeMailer | Anonymous Mails</title>
<link rel="stylesheet" href="/src/css/login.css">


</head>

<body style="background-color:#fcfcfc">
  <div class="login">
  <form class="" method="POST" action="/lib/login.php">
    <h2 align="center">Login into your account</h2>
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields"){
      echo '<p style="color:red">Insert all the required informations!</p>';
      }
      if ($_GET['error'] == "wrongcredentials"){
      echo '<p style="color:red">Wrong Credentials</p>';
      }

    }
?>
    <br>
    <div class="card">
      <div class="card-body">
        <img src="/src/img/Security.png">
    <div class="form-group">
        <label style="margin-right:37em;" for="inputLoginUsername"><i class="fas fa-user-shield"></i> Username</label>
        <input type="text" class="form-control" id="inputLoginUsername" name="inputLoginUsername" placeholder="Enter username">
  </div>
      <div class="form-group">
        <label style="margin-right:37.5em;" for="inputLoginPassword"><i class="fas fa-key"></i> Password</label>
        <input type="password" class="form-control" id="inputLoginPassword" name="inputLoginPassword" placeholder="Password">
        <small class="form-text text-muted"><a href="registerPage.php">I do not have an account</a></small>
      </div>
      <button type="submit" id="loginButton" name="loginButton" class="btn btn-lg btn-outline-primary">Submit</button>
  </form>
  </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b022257bf2.js" crossorigin="anonymous"></script>
</body>

</html>
