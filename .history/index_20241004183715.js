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

    // Vérifiez l'URL actuelle
    const currentURL = window.location.pathname;

    // Sélectionnez tous les boutons avec la classe nav-button
    const buttons = document.querySelectorAll('.nav-button');

    // Ajoutez ou retirez la classe active en fonction de l'URL
    buttons.forEach(button => {
        const href = button.onclick ? button.onclick.toString().match(/'(.*?)'/)[1] : '';
        if (currentURL.includes(href)) {
            button.classList.add('bg-[#ffffff1f]');
        } else {
            button.classList.remove('bg-[#ffffff1f]');
        }
    });