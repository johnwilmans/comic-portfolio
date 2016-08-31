jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    $('.findme').click(function(){
    var element = ($(this).attr('id'));
    $('.services').hide("slow");
    $('.' +element).toggle("slow");
    });

    $("#play").click(function(){
        setInterval(function() {
        $("#play").hide();
        setTimeout(function() {
           $("#play, #surprise").show();
        },1000);
    },1000);
    });
    
    
    jQuery(function($){
                     
                     $('.menu-btn').click(function(){
                    $('.responsive-menu').toggleClass('expand')
                    })
                     });
    
    jQuery(document).ready(function($){
        $(".menu-item-has-children").append("<div class='open-menu-link open'>+</div>");
        $(".menu-item-has-children").append("<div class='open-menu-link close'>+</div>");
        
        $('.open').addClass('visible');
        
        $('open-menu-link').click(function(e){
            var childMenu = e.currentTarget.parentNode.children[1];
            if($(childMenu).hasClass('visible')){
                $(childMenu).removeClass("visible");
                
                $(e.currentTarget.parentNode.children[3]).removeClass("visible");
                $(e.currentTarget.parentNode.children[2]).addClass("visible");
            } else {
                $(childMenu).addClass("visible");
                
                $(e.currentTarget.parentNode.children[2]).removeClass("visible");
                $(e.currentTarget.parentNode.children[3]).addClass("visible");
            }
        });
    });
    
    
    
    
    
} );
