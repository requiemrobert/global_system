$(function(){

    $('.button-shop').on('click', function(){

        var idImage = $(this).attr('idimage');
        var status = $(this).attr('status');
        var url_image= $(this).attr('url_image');
        var cantidad_disponible = $(this).attr('cant_dispo');
        if (status == 1) {
            buyItem(idImage,status, url_image, cantidad_disponible);   
        }

    });

    var  buyItem = function(idImage,status, url_image, cantidad_disponible){
        var buy ={

             /*"id" : idImage,*/
             "status":status,
             "cantidad_disponible":cantidad_disponible,
             "url_image":"media/images/shop_graphics_cards/"+url_image
        }    

        var jsonBuy = JSON.stringify(buy);
        
        $.ajax({

                url : 'http://localhost/buyApi/buy',
                data : jsonBuy,
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    console.log(json);
                   /* $('<h1/>').text(json.title).appendTo('body');
                    $('<div class="content"/>').html(json.html).appendTo('body');*/
                },
                error : function(xhr, status) {
                    /*alert('Disculpe, existió un problema');*/
                    console.log("tipo error "+xhr +" " + status);
                },
                complete : function(xhr, status) {
                    alert('Petición realizada');
                }
          });
    }

         


});//end main function