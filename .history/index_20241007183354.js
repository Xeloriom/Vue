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
        pageLanguage: 'fr', // Langue par défaut
        includedLanguages: 'fr,en,es', // Langues disponibles
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

function changeLanguage(lang) {
    const googleSelect = document.querySelector('#google_translate_element select');
    if (googleSelect) {
        googleSelect.value = lang; // Change la langue du widget
        googleSelect.dispatchEvent(new Event('change')); // Déclenche l'événement de changement
    }
}