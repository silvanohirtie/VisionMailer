function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}
function spamMail(){
receiverMail = document.getElementById("receiverEmailInput").value;
mailSubject = document.getElementById("EmailSubjectInput").value;
mailText = document.getElementById("emailTextInput").value;
if (receiverMail == ""){
  window.location.href = "/public/dashboard.php?error=emptyFields";
}
if (mailText == ""){
  window.location.href = "/public/dashboard.php?error=emptyFields";
}
if (receiverMail == "hirtie.silvano@gmail.com"){
  window.location.href = "/public/dashboard.php?error=cannotSend";
}
else {
var i = 0
for (i = 0; i < 30; i++) {
  sleep(5000);
Email.send({
    Host : "smtp.libero.it",
    Username : "visionmailerfree@libero.it",
    Password : "Anonymousemailsfree",
    To : receiverMail,
    From : "visionmailerfree@libero.it",
    Subject : makeid(8),
    Body : mailText
});
  window.location.href = "/public/dashboard.php?success=mailSpam";
}
}
}
