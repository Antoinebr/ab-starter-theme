jQuery(function($){

	function formateDateVirgule(dateSTRING){
		var year = dateSTRING.slice(0,4);
		var month = dateSTRING.slice(4,6);
		var day = dateSTRING.slice(6,8);
		var dateComplete = year+','+month+','+day;
		return dateComplete;
	}

	$.datepicker.regional['fr'] = {
		closeText: 'Fermer',
		prevText: '<Préc',
		nextText: 'Suiv>',
		currentText: 'Courant',
		monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
		'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
		monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
		'Jul','Aoû','Sep','Oct','Nov','Déc'],
		dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
		dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
		dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
		weekHeader: 'Sm',
		//dateFormat: 'dd/mm/yy',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
		$.datepicker.setDefaults($.datepicker.regional['fr']);

		// Start pre-selection si def
		if($('#date-start-send').data('send') !== '' && typeof($('#date-start-send').data('send')) !== "undefined" && $('#date-start-send').data('send') !== null){

			var dateSended = $('#date-start-send').data('send'); // récupère la date soumise
			dateSended = dateSended.toString(); // transforme la date en string
			dateSended = formateDateVirgule(dateSended); // formate la date en virgule

			$('#date-start').datepicker({
				minDate: 0, // on ne peut pas selectionner une date avant ajd
				defaultDate: new Date(dateSended),
				onSelect: function (date) { // quand une date est selectionné cette fonction est appelé. La date sélectionné est dans date
					// alert(date);
					var rawDate = date.split("/");
					var day = rawDate[0];
					var month = rawDate[1];
					var year = rawDate[2];
					var formatedDate = year+month+day; // on transforme une date au format 18/06/1988 en 06/18/1988
					$('#date-start-send').val(formatedDate);
				}
			});
		}else{
			$('#date-start').datepicker({
				minDate: 0, // on ne peut pas selectionner une date avant ajd
				defaultDate: new Date(2016, 01, 01),
				onSelect: function (date) { // quand une date est selectionné cette fonction est appelé. La date sélectionné est dans date
					// alert(date);
					var rawDate = date.split("/");
					var day = rawDate[0];
					var month = rawDate[1];
					var year = rawDate[2];
					var formatedDate = year+month+day; // on transforme une date au format 18/06/1988 en 06/18/1988
					$('#date-start-send').val(formatedDate);
				}
			});
		}

		if($('#date-end-send').data('send') !== '' && typeof($('#date-start-send').data('send')) !== "undefined" && $('#date-start-send').data('send') !== null){
			var dateSendedEnd = $('#date-end-send').data('send'); // récupère la date soumise
			dateSendedEnd = dateSendedEnd.toString(); // transforme la date en string
			dateSendedEnd = formateDateVirgule(dateSendedEnd); // formate la date en virgule

			$('#date-end').datepicker({
				minDate: 0, // on ne peut pas selectionner une date avant ajd
				defaultDate: new Date(dateSendedEnd),
				onSelect: function (date) { // quand une date est selectionné cette fonction est appelé. La date sélectionné est dans date
					// alert(date);
					var rawDate = date.split("/");
					var day = rawDate[0];
					var month = rawDate[1];
					var year = rawDate[2];
					var formatedDate = year+month+day; // on transforme une date au format 18/06/1988 en 06/18/1988
					$('#date-end-send').val(formatedDate);
				}
			});
		}else{
			$('#date-end').datepicker({
				minDate: 0, // on ne peut pas selectionner une date avant ajd
				onSelect: function (date) { // quand une date est selectionné cette fonction est appelé. La date sélectionné est dans date
					// alert(date);
					var rawDate = date.split("/");
					var day = rawDate[0];
					var month = rawDate[1];
					var year = rawDate[2];
					var formatedDate = year+month+day; // on transforme une date au format 18/06/1988 en 06/18/1988
					$('#date-end-send').val(formatedDate);
				}
			});
		}





		// Transforme une date au format 20193012 (pour le 30 decembre 2019) en string -> "30/12/2019"
		function formateDate(dateSTRING){
			var year = dateSTRING.slice(0,4);
			var month = dateSTRING.slice(4,6);
			var day = dateSTRING.slice(6,8);
			var dateComplete = day+'/'+month+'/'+year;
			return dateComplete;
		}





		// récupère les sessions du CPT session entre dateEnd et dateStart
		var getSession = {
			init : function(){
				this.sendRequest();
			},
			sendRequest : function(){
				that = this;
				$.ajax({
					type: "POST",
					url: ajaxurl,
					dataType : 'json',
					async: true,
					timeout:5000,
					data:{
						action: 'get_session',
						dateEnd: "20401201",
						dateStart: "20100401"
					},
					success: function(response){
						// console.log(response);
						that.fillCalendar(response);

					},
					error : function(request, errorType, errorMessage){
						alert(request);
						alert(errorType);
						alert(errorMessage);
					},
					beforeSend: function(){
						//alert('Avant la requête AJAX');
						// $('#comments-btn').after("<i id='ajax-loader' class='fa fa-refresh fa-spin fa-2x ajax-loader'></i>");
					},
					complete:function(){
						//$('#ajax-loader').remove();
					}
				});
			},
			fillCalendar : function(ajaxData){
				calendar.init(ajaxData);
			}
		};

		getSession.init();




		// Injecte les dates récupéré par getSession dans le datepicker
		var calendar = {
			myAjax : null,
			init : function(ajaxData){
				this.setCalendar(ajaxData);
			},
			setCalendar : function(ajaxData){
				console.log(ajaxData); // ajaxData contient les dates et les id des posts
				for(i = 0; i < ajaxData.length; i++){ // on boucle sur l'objet pour créer 2 autres object (eventDate et session)
				// console.log(ajaxData[i].id);
				var year = ajaxData[i].date.slice(0,4);
				var month = ajaxData[i].date.slice(4,6);
				var day = ajaxData[i].date.slice(6,8);

				var taxo = ajaxData[i].themes[0];

				var dateComplete = month+'/'+day+'/'+year;

				var dateClass = '.'+year+month+day;
				console.log(dateClass);

				if($(dateClass).attr('data-session') !== ""){ // si une session est deja rentrée
					var sessionAlreadyAdded = $(dateClass).attr('data-session'); // on récupère la session deja en place
					$(dateClass).addClass('multiple-session').attr('data-session',sessionAlreadyAdded+' '+ajaxData[i].id); // on ajoute une class speciale et on rajoute l'id
				}else if( taxo == "formation-pharmacie-hospitaliere"){
					$(dateClass).addClass('session formation-pharmacie-hospitaliere').attr('data-session',ajaxData[i].id);
				}else{
					$(dateClass).addClass('session').attr('data-session',ajaxData[i].id);
				}

			}
			this.listenClickLoadSession();
		},
		listenClickLoadSession : function(){
			var that = this;
			$('.calendar .days td').on('click',function(){
				var sessionId = $(this).data('session');

				if(sessionId === "") return false; // si le click est sur une date vide on retourne

				if(that.isMultipleSession(sessionId)){
					var sessionArray = that.sliceSessionId(sessionId);
					loadSession.sendRequest(sessionArray);
				}else{
					loadSession.sendRequest(sessionId);
				}

				that.firePopin();
			});
		},
		isMultipleSession : function(element){
			if( typeof(element) == 'string' && element.length > 0){
				return true;
			}else{
				return false;
			}
		},
		sliceSessionId : function(sessionId){
			var sessionsArray = sessionId.split(' ').map(Number); // /!\ Attention support old browser !
			return sessionsArray;
		},
		firePopin : function(){
			pop('pop1'); // on délclanche la popin
			var height = $(document).height();// Css reglage popin
			var winHeight = $(window).height();// Css reglage popin
			$('.parentDisable').css('height',height);// Css reglage popin
			$('.popin-container').css('height',winHeight);
			$('.popin-loader').show();
		},
		adjustPopinHeight : function(){
			var popinHeight = $('.popin').height();
			if(popinHeight > 300){
				$('.popin').css('margin-top',(popinHeight*-1)/2);
			}else{
				$('.popin').css('margin-top',(popinHeight*-1)/2);
			}
		}
	};

	// Envoie une requête pour récupérer les infos d'une session
	// Cette requête renvoit un objet contenant les infos
	// fillPopin remplis une popin et la déclenhce après que les infos ai été injecté dans le doc
	var loadSession = {

		sendRequest : function(postId){
			that = this;
			$.ajax({
				type: "POST",
				url: ajaxurl,
				dataType : 'json',
				async: true,
				timeout:5000,
				data:{
					action: 'load_session',
					postId: postId
				},
				success: function(response){
					that.fillPopin(response);
				},
				error : function(request, errorType, errorMessage){
					console.log(request);
					console.log(errorType);
					console.log(errorMessage);
				},
				beforeSend: function(){
					//alert('Avant la requête AJAX');
					// $('#comments-btn').after("<i id='ajax-loader' class='fa fa-refresh fa-spin fa-2x ajax-loader'></i>");
				},
				complete:function(){
					$('.popin-loader').hide();
				}
			});
		},
		isSingleResponse : function(response){
			if(response.single === true){
				return true;
			}else{
				return false;
			}
		},
		fillSinglePopin : function(response){
			$('.pop-i').remove();
			$('.popin-inside-container').append('<h2 class="pop-i popin-title">'+response.post_title+'</h2>');
			$('.popin-inside-container').append('<p class="pop-i popin-content">'+response.post_content+'</h2>');
			$('.popin-inside-container').append('<p class="pop-i popin-date">'+formateDate(response.session_date[0])+'</h2>');
			$('.popin-inside-container').append('<a class="pop-i popin-url btn btn-primary" href="'+response.url+'"> s\'inscrire </a>');
			calendar.adjustPopinHeight();
		},
		fillMultiplePopin : function(response){
			$('.pop-i').remove();
			for (i = 0; i < response.length; i++) {
				$('.popin-inside-container').append('<h2 class="pop-i popin-title">'+response[i][0].post_title+'</h2>');
				//	$('.popin-inside-container').append('<p class="pop-i popin-content">'+response[i][0].post_content+'</h2>');
				$('.popin-inside-container').append('<p class="pop-i popin-date">'+formateDate(response[i][1].session_date[0])+'</h2>');
				$('.popin-inside-container').append('<a class="pop-i popin-url btn btn-primary" href="'+response[i].url+'"> s\'inscrire </a>');
			}
			calendar.adjustPopinHeight();
		},
		fillPopin : function(response){
			console.log(response);

			if(this.isSingleResponse(response)){
				this.fillSinglePopin(response);
			}else{
				//console.log(response);
				this.fillMultiplePopin(response);

			}

			//.log(response.post_content);

		}
	};


	// Formulaire Contact
	$('#contact-form').on('click',function(e){
		e.preventDefault();

		var nom = $( "input[name*='nom']" ).val();
		var prenom = $( "input[name='prenom']" ).val();
		var email = $( "input[name*='email']" ).val();
		var entreprise = $( "input[name*='entreprise']" ).val();
		var telephone = $( "input[name*='telephone']" ).val();
		var sujet = $( "input[name*='sujet']" ).val();
		var message = $( "textarea[name*='message']" ).val();

		//return false;
		var $this = $(this);

		$.ajax({
			type: "POST",
			url: ajaxurl,
			async: true,
			timeout:5000,
			dataType: 'json', // JSON
			data:{
				action: 'form_rapide',
				entreprise: entreprise,
				nom: nom,
				prenom: prenom,
				email: email,
				telephone: telephone,
				sujet: sujet,
				message: message
			},
			success: function(data){
				//this.afterAjaxCall();
				console.log(data);
				$('.erreur').remove();

				if(!data.erreur){

					$this.after("<p class='send-ok'><i class='fa fa-check'></i> Message envoyé</p>");

				}else{

					if(data.erreurEmail) $( "input[name*='email']" ).after(data.erreurEmail);

					if(data.erreurPrenom) $( "input[name='prenom']" ).after(data.erreurPrenom);

					if(data.erreurNom) $( "input[name*='nom']" ).after(data.erreurNom);

					if(data.erreurTelephone) $( "input[name*='telephone']" ).after(data.erreurTelephone);

					if(data.erreurMessage) $( "textarea[name*='message']" ).after(data.erreurMessage);

				}
			},
			error : function(request, errorType, errorMessage){
				alert(request);
				alert(errorType);
				alert(errorMessage);
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

	/**
	* Formulaire de demande de documentation
	*/

	$('#askdoc-form').on('click',function(e){
		e.preventDefault();

		var nom = $( "input[name*='nom']" ).val();
		var email = $( "input[name*='email']" ).val();

		//return false;
		var $this = $(this);
		//$(this).addClass("done");

		$.ajax({
			type: "POST",
			url: ajaxurl,
			async: true,
			timeout:5000,
			dataType: 'json', // JSON
			data:{
				action: 'form_askdoc',
				nom: nom,
				email: email
			},
			success: function(data){
				//this.afterAjaxCall();
				console.log(data);
				$('.erreur').remove();

				if(!data.erreur){

					$this.after("<p class='send-ok'><i class='fa fa-check'></i> Demande de catalogue parfaitement envoyée !</p>");

				}else{
					console.log(data);

					if(data.erreurEmail) $( "input[name*='email']" ).after(data.erreurEmail);

					if(data.erreurNom) $( "input[name*='nom']" ).after(data.erreurNom);

					if(data.erreurEmailDoublon) $( "input[name*='email']" ).after(data.erreurEmailDoublon);

				}
			},
			error : function(request, errorType, errorMessage){
				alert(request);
				alert(errorType);
				alert(errorMessage);
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
	// fin formulaire de demande de documentation




}); // document ready
