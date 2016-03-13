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
    $t['successMessage'] = "<p class='sucess'>Inscription réussie</p>";
    echo json_encode($t);
    die();

  }elseif($erreur == true){

    $t['erreur'] = true;
    echo json_encode($t);
    die();

  }


  if($t['erreur'] == false){

    $destinataire = "formations@arcphar.com";
    $mailSujet = 'Nouvelle demande  depuis le formulaire de contact';
    $message = "
    <strong>NOM : </strong>".$nom."<br/><br/>
    <strong>PRENOM : </strong>".$prenom."<br/><br/>
    <strong>FONCTION : </strong>".$fonction."<br/><br/>
    <strong>TELEPHONE : </strong>".$telephone."<br/><br/>
    <strong>EMAIL : </strong>".$email."<br/><br/>
    <strong>MESSAGE : </strong> ".$message."<br/><br/>
    ";

    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = "From: A.R.C. Pharma Formations <noreply@arcphar.com>";

    wp_mail($destinataire, $mailSujet, $message, $headers);

    // Email internaute
    $baseUrl = get_bloginfo('url');
    $internauteEmailSujet = "A.R.C. Pharma Formations - Votre demande de renseignement";

    $internauteEmailBody = "
    A.R.C. Pharma Formations <br/>
    41 rue de Villiers<br/>
    92523 Neuilly-sur-Seine Cedex<br/>
    <br/>
    <br/>
    Madame, Monsieur,<br/>
    <br/>
    Nous vous remercions de l’intérêt que vous portez à nos programmes de formations.
    <br/>    <br/>
    Votre demande a bien été prise en compte ; vous recevrez une réponse dans les meilleurs délais.
    <br/>    <br/>
    Pour accéder rapidement à l’ensemble de nos formations programmées, <a href='$baseUrl/sessions/'>rendez-vous sur notre site</a>.
    <br/>    <br/>
    Par ailleurs, si vous souhaitez vous inscrire directement à une formation, vous pouvez :
      <ul>
      <li>Par internet : rendez-vous sur notre site, dans la rubrique <a href='$baseUrl/infos-pratiques/'>INFOS PRATIQUES</a> pour télécharger le bulletin d’inscription ou procédez à l’inscription en ligne directement à partir du programme de formation qui vous intéresse</li>
      <li>Par téléphone : 01.47.59.87.95</li>
      <li>Par e-mail : envoyez votre bulletin dûment rempli, signé et portant le cachet de l’entreprise à <a href='mailto:formations@arcphar.com'>formations@arcphar.com</a></li>
      <li>Par fax : renvoyez votre bulletin d’inscription, signé et portant le cachet de l’entreprise au 01.47.59.87.88</li>
      <li>Par courrier : vous pouvez renvoyer votre bulletin d’inscription signé et portant le cachet de l’entreprise à A.R.C. Pharma Formations 41 rue de Villiers, 92523 Neuilly-sur-Seine Cedex.</li>
      </ul>
      <br/>    <br/>
      Cordialement,
      <br/>
      <br/>
      <br/>
      -- <br/>
      L’équipe A.R.C. Pharma Formations<br/>
      Tel : 01.47.59.87.95<br/>
      <a href='mailto:formations@arcphar.com'>formations@arcphar.com</a> <br/>
      <a href='www.arcphar-formations.com'>www.arcphar-formations.com</a>
      ";

      wp_mail($email, $internauteEmailSujet,$internauteEmailBody,$headers);

    }



  }

  ?>
