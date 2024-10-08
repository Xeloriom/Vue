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
        if ($('#submenu').is(':visible')) {
            // Ferme le menu avec slideUp
            $('#submenu').slideUp(300, function() {
                $('#arrow').removeClass('rotate-180'); // Réinitialise la flèche
            });
        } else {
            // Ouvre le menu avec slideDown
            $('#submenu').slideDown(300, function() {
                $('#arrow').addClass('rotate-180'); // Fait tourner la flèche
            });
        }
    });
});