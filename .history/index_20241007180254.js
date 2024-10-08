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

const apiKey = 'VOTRE_CLE_API'; // Remplacez par votre clé API

// Fonction pour traduire le texte
function translateText(text, targetLanguage) {
    return $.ajax({
        url: `https://translation.googleapis.com/language/translate/v2`,
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            q: text,
            target: targetLanguage,
            key: apiKey
        })
    });
}

// Fonction pour changer la langue
function changeLanguage(lang) {
    const headerText = document.getElementById('header-title').textContent;
    const proposalText = document.getElementById('proposal-button').textContent;
    const contentText = document.getElementById('content-text').textContent;

    // Traduire chaque élément de texte
    Promise.all([
        translateText(headerText, lang),
        translateText(proposalText, lang),
        translateText(contentText, lang)
    ])
    .then(responses => {
        document.getElementById('header-title').textContent = responses[0].data.translations[0].translatedText;
        document.getElementById('proposal-button').textContent = responses[1].data.translations[0].translatedText;
        document.getElementById('content-text').textContent = responses[2].data.translations[0].translatedText;
    })
    .catch(error => {
        console.error('Erreur lors de la traduction :', error);
    });
}