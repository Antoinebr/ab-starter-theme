<?php
// form ajax
add_action( 'wp_ajax_form_newsletter', 'form_newsletter' );
add_action( 'wp_ajax_nopriv_form_newsletter', 'form_newsletter' );

function form_newsletter() {

  //$nom = htmlspecialchars($_POST['nom']);
  //$prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);


  $t = array();

  // if( $prenom == ""){
  //   $t['erreurPrenom'] = "<em class='erreur state-error'>Vous devez rentrer votre prenom</em>";
  //   $erreur = true;
  // }

  // if( $nom == ""){
  //   $t['erreurNom'] = "<em class='erreur state-error'>Vous devez rentrer votre nom</em>";
  //   $erreur = true;
  // }

  if(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
    $t['erreurEmail'] = "<p class='erreur state-error form-error'>Votre adresse e-mail n'est pas valide</p>";
    $erreur = true;
  }

  if(!isset($erreur)){
    $t['erreur'] = false;
    $t['successMessage'] = "<p class='sucess alert-success' >Inscription réussie</p>";
    echo json_encode($t);
    die();
  }elseif($erreur == true){
    $t['erreur'] = true;
    echo json_encode($t);
    die();
  }


  if($t['erreur'] == false){

    // Inject in MC
    include(dirname(dirname(__FILE__)).'/utils/mailchimp/mailchimp.class.php');
    $mailchimp = new MailChimp("57bc6c0badcb979dc627fef312");
    $result = $mailchimp->call('lists/subscribe', array(
      'id'                => 'ca418sf8', // id de la liste
      'email'             => array('email'=>$email),
      //'merge_vars'        => array('FNAME'=>$prenom, 'LNAME'=>$nom),
      'double_optin'      => false,
      'update_existing'   => true,
      'replace_interests' => false,
      'send_welcome'      => false,
    ));

    echo json_encode($result);
    die();
  }



}

?>
