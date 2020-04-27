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
  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Why do I need to register?</h5>
      </div>
      <div class="modal-body">
        Due to a large number of user using the service, we cannot handle that amount of email sent,
        so we can not permit to random users to just open the page and send an e-mail.
        But don't worry! You can use a random temp mail to register, and the password get encrypted!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Got it</button>
        </div>
    </div>
  </div>
</div>
<div class="login">
  <form class="" method="POST" action="/lib/register.php">
    <h2 align="center">Register</h2>
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "uncompletedform"){
      echo '<p style="color:red">Insert all the required informations!</p>';
      }
      if ($_GET['error'] == "invalidemail"){
      echo '<p style="color:red">Insert a valid email!</p>';
      }
      if ($_GET['error'] == "invalidusername"){
      echo '<p style="color:red">Insert a valid username! (no special characters)</p>';
      }
      if ($_GET['error'] == "sqlerror"){
      echo '<p style="color:red">An SQL ERROR has occured!</p>';
      }
      if ($_GET['error'] == "usertaken"){
      echo '<p style="color:red">That user already exists!</p>';
      }
      if ($_GET['error'] == "captchainvalid"){
      echo '<p style="color:red">Captcha Invalid!</p>';
      }
    }


     ?>
    <br>

    <div class="card">
      <div class="card-body">
<img src="/src/img/Security.png">
    <div class="form-group">
        <label style="margin-right:39em;" for="inputUsername"><i class="fas fa-user-shield"></i> Username</label>
        <input type="text" class="form-control" id="inputRegisterUsername" name="inputRegisterUsername" placeholder="Enter username">
  </div>
  <div class="form-group">
      <label style="margin-right:41.5em;" for="inputUsername"><i class="fas fa-envelope"></i> Email</label>
      <input type="text" class="form-control" id="inputRegisterEmail" name="inputRegisterEmail" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We suggest to use <a href="temp-mail.org">temp-mail.org</a></small>
</div>
      <div class="form-group">
        <label style="margin-right:39.5em;" for="inputPassword"><i class="fas fa-key"></i> Password</label>
        <input type="password" class="form-control" id="inputRegisterPassword" name="inputRegisterPassword" placeholder="Password">
        <small class="form-text text-muted"><a href="loginPage.php">I already have an account</a></small>
      </div>

        <p><img src="/lib/captcha.php"></p>
        <label><input type="text" name="captcha" />
          <br>
          <br>

      <button type="submit" id="registerButton" name="registerButton" class="btn btn-lg btn-outline-primary">Register</button>
      <br>
  </form>
  </div>
</div>
<small id="emailHelp" class="form-text text-muted"><a><button data-toggle="modal" data-target="#ModalCenter" style="border:none; background-color:transparent; font-color:blue;">Why do I need to register an account? Isn't this an anonymous service?</button></a></small>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src='https://www.hCaptcha.com/1/api.js' async defer></script>
<script src="https://kit.fontawesome.com/b022257bf2.js" crossorigin="anonymous"></script>
</body>

</html>
