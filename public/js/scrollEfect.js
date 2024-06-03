var isScrolling;

// Configura el evento scrollStop
$(window).scroll(function() {
    // Borra el temporizador existente
    window.clearTimeout(isScrolling);

    // Configura un nuevo temporizador
    isScrolling = setTimeout(function() {
        // Cuando el temporizador llega a cero, el usuario ha dejado de desplazarse
        isScrolling = false;
    }, 100);
});

$(window).on('wheel', function(event) {
    if (!isScrolling) {
        var welcomeOffset = $('#welcome').offset();
        var bodyOffset = $('#about').offset();

        // Si el usuario ha comenzado a desplazarse hacia abajo y aún no hemos desplazado automáticamente
        if (event.originalEvent.deltaY > 0 && $(window).scrollTop() < (bodyOffset ? bodyOffset.top : 0)) {
            // Desplázate al elemento con el id '2'
            $('html, body').animate({
                scrollTop: (bodyOffset ? bodyOffset.top : 0)
            }, 1000);
        }
        // Si el usuario ha comenzado a desplazarse hacia arriba y aún no hemos desplazado automáticamente
        else if (event.originalEvent.deltaY < 0 && $(window).scrollTop() <= (bodyOffset ? bodyOffset.top : 0)) {
            // Desplázate al elemento con el id '1'
            $('html, body').animate({
                scrollTop: (welcomeOffset ? welcomeOffset.top : 0)
            }, 1000);
        }
    }
});

