//Header - footer
$(document).ready(function() {
    // Charger le contenu du header
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});

$( "#menu-toggle" ).on( "click", function() {
    $("#mobile-menu").toggle();
});