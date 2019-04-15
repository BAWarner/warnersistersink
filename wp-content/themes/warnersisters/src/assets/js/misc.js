jQuery(document).ready(function($){

    if($('.owl-carousel').length){
        var carouselID = $('.owl-carousel').attr('id');

        if($('.owl-carousel').hasClass('dots')){
            $('#'+carouselID).owlCarousel({
                loop: true,
                dots: true,
                center: true,
                nav: false,
                autoplay: false,
                animateOut: 'fadeOut',
                autoplayTimeout: 6000,
                autoplaySpeed: 3000,
                items: 1
            });
        }else{

            $('#'+carouselID).owlCarousel({
                loop: true,
                dots: false,
                center: true,
                nav: false,
                autoplay: true,
                animateOut: 'fadeOut',
                autoplayTimeout: 12000,
                autoplaySpeed: 6000,
                items: 1
            });
        }

        
    }

});