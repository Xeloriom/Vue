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
            // Utilisation de slideToggle pour une animation fluide
            $('#submenu').slideToggle(300, function() {
                // Vérification de l'état après l'animation
                if ($('#submenu').is(':visible')) {
                    $('#arrow').addClass('rotate-180'); // Rotation de la flèche
                } else {
                    $('#arrow').removeClass('rotate-180'); // Réinitialisation de la flèche
                }
            });
        });
    });