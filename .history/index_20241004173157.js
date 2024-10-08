$(document).ready(function() {
    // Charger le contenu du header
    $("#header").load("header.html", function() {
        // Ceci s'exécute après que le header est chargé
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) { // Vérifiez si les éléments existent
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });

    // Charger le footer
    $("#footer").load("footer.html");
});
