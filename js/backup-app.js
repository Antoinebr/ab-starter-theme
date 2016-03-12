jQuery(function($){


$("#btn-btn").click(function(){ // On déclanche la fonction Ajax au click sur #btn-btn

	$("#loader").removeClass("hidden"); // au click on enleve le display none du loader
   
    // Pour eviter de recharger les memes post
    if (typeof $newoffset === 'undefined'){ // Si $newsoffset n'est pas défini on est alors au début
          var $offset = 3; // La valeur doit être EGALE au nombre de posts en première page (sans rechargement)
          				   // on est au debut alors on charge le premier post
         
    } else{
         $offset = $newoffset; // sinon $offset = $offset incrémenté de 1
         
    }
    var $content = $("#contento"); // on selectionne Ou sera inséré le contenu
    
    var load_posts = function(){
    
    		$maxoffset = $("#contento").attr('data-count'); // on récupère le nombre de posts max existants et on le met dans une var
    		if (typeof $newoffset === 'undefined'){} else { // si $newoffset n'est pas definie on est au premier post
	             
	             if( $maxoffset == $newoffset){ // si on atteint le nombre max alors : 
		             $("#loader").addClass("hidden"); // on enlève le btn de chargement
		             $('#btn-btn').text("Il n'ya plus de posts à charger"); // On remplace le text du btn
	             }
             }

            $.ajax({
                type       : "GET",
                data       : {numPosts : 1, // nombre de post a charger (il faut changer l'incrémentation de $newoffset ligne48
                              offset : $offset             
                }, // Nombre de post tranmis à cible.php via $_POST['numPosts']
                dataType   : "html",
                url        : "http://localhost:8888/blog-louise/wp/wp-content/themes/cryptogrammes/ajax.php",
                beforeSend : function(){
                },
                success    : function(data){
                    $data = $(data);
                  
                    $data.hide();
                    $content.append($data);
                    $data.fadeIn(500, function(){
            
                    $newoffset = $offset+1; // On oncrémente offset de 1
                    console.log('Offset : '+$newoffset);
                    $("#loader").addClass("hidden"); // a la fin de l'opé on rajoute le display none
                    
                    });
                },
                error     : function(jqXHR, textStatus, errorThrown) {
                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }
                
            });
    }

    load_posts(); // On déclanche la fonction
    
   
    });
       
  
});      
