

$(function(){

  	$('#login_bt').on('click',function(event){
   		
   		event.preventDefault();
   		login($('form'));

  	});

 });

function login(form){
	
	var count_empty = 0;
	

    form.find('input').each(function(){
	    var input = $(this);
	    if (!validateField(input)){
	      	count_empty++;
	    }
    });

   	if (count_empty <= 0) {

   		$('.container h1').addClass('form-success')
                        .fadeOut(300, function(){ 
                                                 $(this).text("Cargando").show() 
                                                });

  		$('form').fadeOut(500,function() {
      		
      	 	$('.container-sk-cube').show(500);
         callWebService()
   	 	});

   	}       	           

}//Fin function login

function callWebService(){

   var $form = $('form');
   var dataJson = getFormData($form);
   var $login;
   $.wait( function(){  timeAjax(dataJson)  }, 2);

}


function timeAjax(dataJson ){

   $login = $.ajax({
                      type: "POST",
                      url: 'http://localhost:8888/global_system/controllers/login.php',
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

   }); $login.done(function(response) {

        switch(response.rc) {
          case 200:
              //window.location.href = "http://localhost:8888/global_system/";
              break;
          case -200:
              errorResponse();
              title_alerts = "Notificación";
              alertaResponse(title_alerts, icon_danger, alerClassDanger, response.mensaje, directionShowCenter,3000);
              break;
          default:
              alert("sin respuesta");
        }
      
    });

    $login.fail(function() {
      //alert( "No se pudo obtener la consulta en este momento" );
    });

    $login.always(function(data) {
       // console.log( "completado"  + data);
    });

}

function errorResponse(){

   $('.container h1').removeClass('form-success')
                     .fadeIn(300, function(){ 
                                             $(this).text("Iniciar Sesión").show() 
                                            });

      $('form').fadeIn(500,function() {
          
          $('.container-sk-cube').hide(400);

      });
}


$.wait = function( callback, seconds){
   return window.setTimeout( callback, seconds * 1000 );
}


function getFormData($form){
    var unindexed_array = $form.serializeArray();

    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return JSON.stringify(indexed_array);
}

//Función para comprobar los campos de texto
function validateField(input) {
	
	var _empty 		 = (input.val().length <= 0) ? true : false;
	var _specialChar = /[\s+\W+]/g.test(input.val()) ? true : false;
	var _space 		 = /[\s]/g.test(input.val());
	var valid 		 = true;

	if (input.attr('id') == "user_name" && ( _empty || _specialChar))
	{
		input.addClass('input-error');
		valid = false;
	}
	else if( input.attr('id') == "password" && (_empty || _space) ) 
	{
		input.addClass('input-error');
		valid = false;
    }else
    {
    	input.removeClass('input-error'); 
		return valid;
    }

}

function blokSpace(e, campo) 
{
    ///key es una variable que recoge el valor ASCII de la tecla pulsada.
    key = e.keyCode ? e.keyCode : e.which
        /// Validamos la tecla backspace
    if (key == 32) return false

}

	