


$(document).ready(function () {
    $(window).scroll(function(){
        if($(window).scrollTop()>300 ){
              $('nav').addClass('top');
             
            }else {
              $('nav').removeClass('top');   
            }        
    })
    
});