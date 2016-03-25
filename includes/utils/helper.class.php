<?php

/**
* Helpers pour WordPress
*/
class Helpers
{

  /**
  * Découpe une date (chaine) au format 20151201 en 01/12/2015
  */
  public static function formatDate($date){
    $date = strval($date);
    $year = $date[0].$date[1].$date[2].$date[3];  // retourne "f"
    $month = $date[4].$date[5];
    $day = $date[6].$date[7];
    return $day.'/'.$month.'/'.$year;
  }

  public static function formatDateString($date,$onlyMonth = false){
    $date = DateTime::createFromFormat('d/m/Y', self::formatDate($date));
    // voir http://stackoverflow.com/questions/7309960/change-month-name-to-french
    setlocale(LC_TIME, "fr_FR");

    $raw = utf8_encode(strftime("%d %B %Y",strtotime($date->format('d M Y'))));
    if($onlyMonth == true){
      echo substr($raw,2);
    }else{
      echo $raw;
    }

  }


  /**
  * Récupère la taxo de la formation parente du cpt session et assigne ces même taxo au post
  */
  public static function setParentTaxonomiesToChild(){
    add_action('save_post','save_post_callback');
    function save_post_callback($post_id){
      global $post;
      if (!empty($post) && $post->post_type == 'sessions'){
        $terms = get_the_terms( get_field('formation_parent'), 'themes');
        if( !empty($terms)) :
          $taxosArray = array();
          foreach($terms as $term){
            $taxosArray[] = $term->term_id;
          }
          wp_set_object_terms( $post_id,$taxosArray, 'themes' );
        endif;
      }
    }
  }

  public static function getAllSessions(){
    // args
    $args = array(
      'posts_per_page' => 99999,
      'numberposts'	=> -1,
      'post_type'		=> 'sessions',
      'order' => 'ASC',
      'orderby' => 'meta_value',
      'meta_key' => 'session_date',
      'meta_query'	=> array(
        'relation'		=> 'AND',
        array(
          'key' => 'session_date',
          'value' => array(date("Ymd"),9999999999999999999),
          'type' => 'numeric',
          'compare' => 'BETWEEN'
        ),
        array(
          'key'	  	=> 'session_full',
          'value'	  	=> '0',
          'compare' 	=> '=',
        )
      )
    );

    $query = new WP_Query( $args );
    return $query;
  }


  /**
  *  permet de retourner selected pour une serie d'option
  *  En fonciton de la date du jour. Si on selectionne Janvier en démbre c'est janvier N+1
  */
  public static function displayYear($month){
    $date = intval(date('Y').$month."00");
    if($date < date("Ymd")){
      // Si c'est le mois en cours on selectionne le mois de l'année courante
      if($month == date("m")){
        $year = date('Y');
        // Si c'est le mois précédent on sélectionne l'anné N+1
        // Ex : nous sommes en février 2016 on selectionne Janvier c'est donc Janvier 2017 qui est sélectionné
      }else{
        $year = date('Y')+1;
      }

      return intval($year.$month.'00');
    }else{
      return $date;
    }
  }


  /**
  * Retourne "selected" pour le mois selectionné apres une query
  *
  */
  public static function checkSelectedMonth($month){
    if(!isset($_GET['dateStart']) || $_GET['dateStart'] =="") return;
    $monthSelected = $_GET['dateStart'][4].$_GET['dateStart'][5];
    if($monthSelected  == $month){
      return "selected";
    }
  }

  /**
  *
  *  Récupère la couleur attaché à la Taxo du post
  *
  */
  public static function checkTaxoColor($id = null){
    if($id == null){
      $id = get_the_ID();
    }
    $terms = wp_get_post_terms( $id, 'themes');
    if(!empty($terms)){
      the_field( 'theme_forme', 'themes_'.$terms[0]->term_taxonomy_id);
      echo ' ';
      the_field( 'theme_color', 'themes_'.$terms[0]->term_taxonomy_id);
    }else{
      echo "purple";
    }
  }

  /**
  *
  *  Récupère les terms de la taxo
  *
  */
  public static function theTaxo(){
    $terms = wp_get_post_terms( get_the_ID(), 'themes');
    if(!empty($terms)){
      foreach ($terms as $term) {
        echo $term->name;
      }
    }
  }



  public static function bgAlternate($i,$odd,$even){
    if ($i % 2 == 0)
    echo $odd;
    else
    echo $even;
  }

  public static function nextPageUrl(){
    $npl=explode('"',get_next_posts_link());
    echo $npl_url=$npl[1];
  }

  public static function previousPageUrl(){
    $npl=explode('"',get_previous_posts_link());
    echo $npl_url=$npl[1];
  }

  public static function GetCurentPaginationNumber(){
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $num = explode('/page/',$actual_link );
    if(!empty($num[1])){
      return str_replace('/','',$num[1]);
    }else{
      return 1;
    }
  }

  public static function replacePointComa($prix){
    return str_replace(".", ",", $prix);
  }

  public static function customContent($longueur){
    $excerpt = get_the_content();
    if (strlen($excerpt) > $longueur) {
      $excerpt = strip_tags($excerpt);
      $excerpt = strip_shortcodes($excerpt);
      $excerpt = str_replace("&nbsp;", "", $excerpt);
      $excerpt_short = mb_substr($excerpt,0,$longueur,'UTF-8').'...';
      echo $excerpt_short;
    }else{
      $extrait = get_the_excerpt($excerpt);
      echo $extrait;
    }
  }


  /**
  *
  * Retourne  une partie du title
  *
  */
  public static function customTitle($longueur){
    $excerpt = get_the_title();
    if (strlen($excerpt) > $longueur) {
      $excerpt = strip_tags($excerpt);
      $excerpt = strip_shortcodes($excerpt);
      $excerpt = str_replace("&nbsp;", "", $excerpt);
      $excerpt_short = mb_substr($excerpt,0,$longueur,'UTF-8').'...';
      echo $excerpt_short;
    }else{
      echo get_the_title();
    }
  }



  /**
  *
  * Retourne TRUE si il y'a plus que une 1 page dans la loop
  *
  */
  public static function others_page_exists(){
      global $wp_query;
      return ($wp_query->max_num_pages > 1);
  }

}
