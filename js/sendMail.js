function sendMail(params) {

  var myParams = {
    from_name:document.getElementById('name').value,
    from_email:document.getElementById('email').value,
    message:document.getElementById('message').value,
    contact_number:document.getElementById('contact').value
  };

  emailjs.send('service_m9y0acl','template_udsncry', myParams)
  .then(function(res){
    console.log("successful", res.status);
  });

}
