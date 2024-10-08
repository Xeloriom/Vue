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
// Déclaration unique de contentOriginal si nécessaire
let contentOriginal = "Texte original"; // Exemple de déclaration

function googleTranslateElementInit() {
    // Initialisation de Google Translate
    new google.translate.TranslateElement({
        pageLanguage: 'fr', // Langue par défaut
        includedLanguages: 'fr,en,es', // Langues disponibles
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');

    // Si vous avez besoin d'utiliser contentOriginal ici, faites-le
    // Par exemple, vous pouvez l'utiliser pour afficher du texte ou effectuer d'autres tâches
    console.log(contentOriginal); // Exemple d'utilisation
}

function changeLanguage(lang) {
    let googleSelect = $('#google_translate_element select');

    if (googleSelect.length) {
        // Désactivez les boutons pour éviter les clics multiples
        $('button').prop('disabled', true);
        googleSelect.val(lang);
        googleSelect.trigger('change');
        
        // Réactivez les boutons après un certain temps
        setTimeout(() => {
            $('button').prop('disabled', false);
        }, 2000); // Par exemple, réactivez après 2 secondes
    } else {
        console.error('Le sélecteur Google n\'est pas trouvé.');
        alert('Le sélecteur Google n\'est pas trouvé.');
    }
}