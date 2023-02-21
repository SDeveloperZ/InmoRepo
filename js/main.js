$(document).ready(function(){
    // Cambio de header
    $(window).on('scroll', function(){
        let posicion = $('#inicio-texto').offset()
        if ($(Window).scrollTop() >= posicion.top){
            $('header').removeClass('transparente');
        } else {
            $('header').addClass('transparente');
        }
        
    })

    
    // Accionamiento del menu lateral
    $('#burger').click(function() {
        $('#burger').toggleClass('abierto');
        $('.menu').toggleClass('abierto');
       })

    // Smooth scroll (efecto lento al usar flecha down)
    $('a').on('click', function(){
        if (this.hash !== ''){
            let hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800)
        }

    })
})