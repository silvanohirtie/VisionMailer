function sendMail(){
receiverMail = document.getElementById("receiverEmailInput").value;
mailSubject = document.getElementById("EmailSubjectInput").value;
mailText = document.getElementById("emailTextInput").value;

Email.send({
    Host : "smtp.libero.it",
    Username : "visionmailerfree@libero.it",
    Password : "Anonymousemailsfree",
    To : receiverMail,
    From : "visionmailerfree@libero.it",
    Subject : mailSubject,
    Body : mailText+"\nThis email was sent using the anonymous mail service: visionmailer.xyz"
}).then(
  message => alert(message)
);
}
