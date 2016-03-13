// Formulaire Newsletter
$('#newsletter-form-btn').on('click',function(e){
  e.preventDefault();

  //var nom = $( ".newsletter-form input[name*='nom']" ).val();
  //var prenom = $( ".newsletter-form input[name='prenom']" ).val();
  var email = $( ".newsletter-form input[name*='email']" ).val();

  //return false;
  var $this = $(this);

  $.ajax({
    type: "POST",
    url: ajaxurl,
    async: true,
    timeout:5000,
    dataType: 'json', // JSON
    data:{
      action: 'form_newsletter',
      // nom: nom,
      // prenom: prenom,
      email: email
    },
    success: function(data){
      //this.afterAjaxCall();
      console.log(data);
      $('.erreur').remove();

      if(!data.erreur){

        $this.after("<p class='send-ok'><i class='fa fa-check'></i> Votre inscription a été effectuée ; nous vous en remercions</p>");

        // Evenement GA
        // ga('send', 'event', 'lead', 'inscription-newsletter');
        
      }else{

        if(data.erreurEmail) $( ".newsletter-form" ).after(data.erreurEmail);

        // if(data.erreurNom) $( "input[name='nom']" ).after(data.erreurNom);

        // if(data.erreurPrenom) $( "input[name='prenom']" ).after(data.erreurPrenom);

      }
    },
    error : function(request, errorType, errorMessage){
      console.log(request);
      console.log(errorType);
      console.log(errorMessage);
    },
    beforeSend: function(){
      //alert('Avant la requête AJAX');
      $('#newsletter-form-btn').after("<i id='ajax-loader' class='fa fa-refresh fa-spin fa-2x ajax-loader'></i>");
    },
    complete:function(){
      $('#ajax-loader').remove();
    }
  });
});
// fin formulaire de contact
