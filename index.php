<?php
session_start();

if (isset($_SESSION['username'])) {
header("location: /public/dashboard.php");
die();
}
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Send free and anonymous emails!">
<meta name="keywords" content="emails,anonymous email,fake email, smtp">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Muli:400,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/src/css/main.css">
<title>Vision | Anonymous Mails</title>



</head>

<body>
  <div class="text" id="text">
  <h1 class="floating">The best way
  <br>to send
  <br>anonymous <span>emails.</span>
  <br>
  </h1>
  <br>
<a href="/public/registerPage.php"><button type="button" class="btn btn-lg btn-outline-primary">Register Now</button></a>
<a href="/public/loginPage.php"><button type="button" class="btn btn-lg btn-outline-primary">Login</button></a>
<br>
<br>
</div>
<div>
    <img class = "primary" src="/src/img/email.png">
    </div>
<br>
  <div class="flex-container">

<div style="background-color:rgb(56, 163, 255, .1); border-radius:7px">

      <h5 class="card-title">&nbsp;🔒 Anonymous and Encrypted</h5>
        <p class="card-text">&nbsp;We provide you an anonymous service,as well
            <br> &nbsp;the not traceable tools
            <br> &nbsp;we use for sending the mails.
          </p>
      </div>
  <div style="background-color:rgb(56, 163, 255, .1); border-radius:7px">
          <h5 class="card-title">💲 Free</h5>
            <p class="card-text">We want our service to be avaible for everyone.
                <br>no subscription or any type of payment, we are thinking of
                <br>a premium plan in the future
              </p>

      </div>
  <div style="background-color:rgb(56, 163, 255, .1); border-radius:7px">
    <h5 class="card-title">📝 Logs <span id="word">free</h5>
            <p class="card-text">We do not keep any type of logs,
                <br>our user must be as anonymous as possible.
                </p>
      </div>
<div>
</div>
      </div>
      <div class ="socials">
        <a href="https://github.com/mynameismental"><i style="color:black" class="fab fa-github fa-3x"></i></a>&nbsp;&nbsp;
        <a href=""><i style="color:#7289DA;" class="fab fa-discord fa-3x"></i></a>
      </div>
      <script static="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script static="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script static="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script static="https://kit.fontawesome.com/b022257bf2.js" crossorigin="anonymous"></script>

</body>

</html>
