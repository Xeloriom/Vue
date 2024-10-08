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
        $('#submenu').toggleClass('h-0 h-auto');
        $('#arrow').toggleClass('rotate-180');
        if ($('#submenu').hasClass('h-auto')) {
            $('#submenu').css('height', $('#submenu')[0].scrollHeight + 'px');
        } else {
            $('#submenu').css('height', '0');
        }
    });
});