//Header - footer
$(document).ready(function() {
    // Charger le contenu du header
    $("#header").load("header.html");
    $("#footer").load("footer.html");
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
});

$(document).ready(function() {
    $('#services-button').click(function() {
        var $submenu = $('#submenu');
        var $arrow = $('#arrow');

        if ($submenu.height() === 0) {
            // Ouvre le menu
            $submenu.css('height', 'auto'); // Permet de calculer la hauteur
            var height = $submenu.outerHeight(); // Récupère la hauteur
            $submenu.css('height', 0); // Réinitialise à 0 pour l'animation
            $submenu.animate({ height: height }, 500, function() {
                $submenu.css('height', 'full'); // Réinitialise la hauteur pour le futur
                $arrow.addClass('rotate-180'); // Rotation de la flèche
            });
        } else {
            // Ferme le menu
            $submenu.animate({ height: 0 }, 500, function() {
                $arrow.removeClass('rotate-180'); // Réinitialise la flèche
            });
        }
    });
});

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'fr',
        includedLanguages: 'fr,en,es,de,it',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

$(document).ready(function() {
    $('.translate-btn').click(function() {
        var lang = $(this).data('lang');
        var googleTranslateFrame = $('iframe[name="google_translate_frame"]');

        if (googleTranslateFrame.length) {
            googleTranslateFrame.on('load', function() {
                var select = googleTranslateFrame.contents().find('select');
                if (select.length) {
                    select.val(lang).change();
                }
            });
        } else {
            // Si le widget n'est pas encore chargé, le charger
            $('<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>').appendTo('body');
        }
    });
});