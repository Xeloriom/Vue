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

    // Fonction pour gérer l'affichage du menu déroulant
    const servicesBtn = document.getElementById('services-btn');
    const servicesMenu = document.getElementById('services-menu');
    const arrow = document.getElementById('arrow');

    servicesBtn.addEventListener('click', () => {
        servicesMenu.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180'); // Rotation de la flèche
    });