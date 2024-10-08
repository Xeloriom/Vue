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
        $('#submenu').slideToggle(300); // Animation de 300ms
        $('#arrow').toggleClass('rotate-180'); // Rotation de la flèche
    });
});