<?php
session_start();

if (!isset($_SESSION['username'])) {
header("location: /public/loginPage.php?error=unauthorizedUser");
die();
}
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Vision | Anonymous Mails</title>
<link rel="stylesheet" href="/src/css/login.css">


</head>
<body>
  <!-- Modal -->
  <div class="login">


    <h2 align='center'>
<?php echo"Welcome ".$_SESSION['username']?>
    </h2>
    <form action="/lib/logout.php">
<button id="logoutButton" name="logoutButton" type="submit" class="btn btn-lg btn-outline-danger">logout</button>
</form>
<br>
<form>
    <div class="card">
      <h5 class="card-header">Send anonymous email</h5>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyFields"){
        echo '<p style="color:red">Error! Insert all the required informations!</p>';
        }

      }
      ?>
      <div class="card-body">
      <div class="form-group">
        <label style="margin-right:45em;">Receiver</label>
        <input id="receiverEmailInput" type="email" class="form-control">
      </div>
      <div class="form-group">
        <label style="margin-right:46em;">Subject</label>
        <input id="EmailSubjectInput"type="text" class="form-control">
      </div>
      <div class="form-group">
        <label style="margin-right:47em;">Text</label>
        <textarea class="form-control" id="emailTextInput" rows="3"></textarea>
      </div>
      <button type="button" data-toggle="modal" data-target="#ModalCenterInfo" style="border:none; background-color:transparent; color:blue;">By sending the email/spamming, you accept these conditions</button>
      <br>
      <br>
      <button onclick="sendMail()" id="sendButton" type="button" class="btn btn-lg btn-outline-primary">Send Email</button>
      <button onclick="spamMail()" id="sendButton" type="button" class="btn btn-lg btn-outline-primary">Spam</button>
  </form>
  </div>
</div>
</div>
<div class="modal fade" id="ModalCenterInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">The user accepts the next conditions:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        By sending an email or spamming, you're taking care of your actions. VisionMailer's purpose is educational or personal testing and do not take the responsability of illegale uses.
<br>
        <br>NOTICE: We want our service to be avaible for everyone, it is open source and free, multiple illegal use could get the website down.
      </div>
    </div>
  </div>
</div>
<script src="/src/js/sendMails.js"></script>
<script src="/src/js/spamMails.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
