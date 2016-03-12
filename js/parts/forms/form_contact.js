// Formulaire Contact
$( ".contact-form textarea" ).one( "click", function() {
  $(this).val('');
});

$('#contact-form-btn').on('click',function(e){
  e.preventDefault();

  var nom = $( ".contact-form input[name*='nom']" ).val();
  var prenom = $( ".contact-form input[name='prenom']" ).val();
  var fonction = $( ".contact-form input[name='fonction']" ).val();
  var telephone = $( ".contact-form input[name*='telephone']" ).val();
  var email = $( ".contact-form input[name*='email']" ).val();
  var message = $( ".contact-form textarea[name*='message']" ).val();

  //return false;
  var $this = $(this);

  $.ajax({
    type: "POST",
    url: ajaxurl,
    async: true,
    timeout:5000,
    dataType: 'json', // JSON
    data:{
      action: 'form_contact',
      nom: nom,
      prenom: prenom,
      fonction: fonction,
      telephone: telephone,
      email: email,
      message: message
    },
    success: function(data){
      //this.afterAjaxCall();
      console.log(data);
      $('.erreur').remove();

      if(!data.erreur){

        $('.contact-form input, textarea').each(function(){
          $(this).val('');
        });

        $this.after("<p class='send-ok'>Nous vous remercions de votre message qui a bien été envoyé</p>");

      }else{

        if(data.erreurEmail) $( ".contact-form input[name*='email']" ).after(data.erreurEmail);

        if(data.erreurNom) $( ".contact-form input[name='nom']" ).after(data.erreurNom);

        if(data.erreurPrenom) $( ".contact-form input[name='prenom']" ).after(data.erreurPrenom);

        if(data.erreurTelephone) $( ".contact-form input[name*='telephone']" ).after(data.erreurTelephone);

        if(data.erreurFonction) $( ".contact-form input[name='fonction']" ).after(data.erreurFonction);


        if(data.erreurMessage) $( ".contact-form textarea[name*='message']" ).after(data.erreurMessage);

      }
    },
    error : function(request, errorType, errorMessage){
      console.log(request);
      console.log(errorType);
      console.log(errorMessage);
    },
    beforeSend: function(){
      //alert('Avant la requête AJAX');
      $('#contact-form').after("<i id='ajax-loader' class='fa fa-refresh fa-spin fa-2x ajax-loader'></i>");
    },
    complete:function(){
      $('#ajax-loader').remove();
    }
  });
});
// fin formulaire de contact
