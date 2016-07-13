<?php
// form ajax
add_action( 'wp_ajax_form_contact', 'form_contact' );
add_action( 'wp_ajax_nopriv_form_contact', 'form_contact' );

function form_contact() {

  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);


  $email = htmlspecialchars($_POST['email']);
  //$telephone = htmlspecialchars($_POST['telephone']);

  $sujet = htmlspecialchars($_POST['sujet']);


  $message = htmlspecialchars($_POST['message']);


  $t = array();
  //$t['erreur'] = "<p class='erreur'>Formulaire inscorrect</p>";

  if( $nom == ""){
    $t['erreurNom'] = "<em class='erreur state-error'>Vous devez rentrer votre nom</em>";
    $erreur = true;
  }

  if( $prenom == ""){
    $t['erreurPrenom'] = "<em class='erreur state-error'>Vous devez rentrer votre prénom</em>";
    $erreur = true;
  }

  if( $sujet == ""){
    $t['erreurSujet'] = "<em class='erreur state-error'>Vous devez rentrer un sujet</em>";
    $erreur = true;
  }

  if(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
    $t['erreurEmail'] = "<em class='erreur state-error'>Votre addresse e-mail n'est pas valide</em>";
    $erreur = true;
  }

  // if(!preg_match("#^0[1-78]([-. ]?[0-9]{2}){4}$#", $telephone)){
  //   $t['erreurTelephone'] = "<em class='erreur state-error'>Votre numéro de téléphone n'est pas valide</em>";
  //   $erreur = true;
  // }

  if( $message == "" ){
    $t['erreurMessage'] = "<em class='erreur state-error'>Vous devez rentrer un message</em>";
    $erreur = true;
  }



  if(!isset($erreur)){

    $t['erreur'] = false;

    $t['erreur'] = false;


    $destinataire = get_option('admin_email');
    $mailSujet = 'Nouvelle demande  depuis le formulaire de contact';
    $message = "

    <strong>PRENOM : </strong>".$prenom."<br/><br/>
    <strong>NOM : </strong>".$nom."<br/><br/>
    <strong>EMAIL : </strong>".$email."<br/><br/>
    <strong>TELEPHONE : </strong>".$telephone."<br/><br/>
    <strong>PROFESSION : </strong>".$profession."<br/><br/>
    <strong>ANCIENETE : </strong>".$ancienete."<br/><br/>
    <strong>MESSAGE : </strong> ".$message."<br/><br/>

    ";

    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "From: Franc Muller Site <noreply@nomDuSite.com>";

    wp_mail($destinataire, $mailSujet, $message, $headers);

    $t['successMessage'] = "<p class='sucess u-txtCenter'>Message envoyé</p>";

    echo json_encode($t);

    die();


  }elseif($erreur == true){

    $t['erreur'] = true;
    echo json_encode($t);
    die();

  }


}

?>
