function sendMail() {

  var myParams = {
    from_name:document.getElementById('from_name').value,
    from_email:document.getElementById('from_email').value,
    message:document.getElementById('message').value,
    contact_number:document.getElementById('contact_number').value
  };

  emailjs.sendForm('service_m9y0acl','template_udsncry', myParams)
  .then(function(response){
    console.log("successful", response.status);
  }, function(error){
    console.log("failed",error)
  });

}
