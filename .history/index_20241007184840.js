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
    // Utilisation de jQuery pour sélectionner l'élément <select>
    let googleSelect = $('#google_translate_element select');

    // Vérifiez si googleSelect existe
    if (googleSelect.length) {
        // Change la langue du widget
        googleSelect.val(lang);
        
        // Déclenche l'événement de changement
        googleSelect.trigger('change');
    } else {
        console.error('Le sélecteur Google n\'est pas trouvé.'); // Message d'erreur dans la console
        alert('Le sélecteur Google n\'est pas trouvé.'); // Affiche une alerte
    }
}