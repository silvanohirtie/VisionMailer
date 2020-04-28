function sendMail(){
receiverMail = document.getElementById("receiverEmailInput").value;
mailSubject = document.getElementById("EmailSubjectInput").value;
mailText = document.getElementById("emailTextInput").value;
if (mailSubject == ""){
  window.location.href = "/public/dashboard.php?error=emptyFields";
}
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
Email.send({
    Host : "smtp.libero.it",
    Username : "visionmailerfree@libero.it",
    Password : "Anonymousemailsfree",
    To : receiverMail,
    From : "visionmailerfree@libero.it",
    Subject : mailSubject,
    Body : mailText
});
window.location.href = "/public/dashboard.php?success=mailSend";


}
}
