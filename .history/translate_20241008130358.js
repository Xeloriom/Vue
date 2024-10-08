function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'fr',
        includedLanguages: 'fr,en,es,de,it',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

$(document).ready(function() {
    $('.translate-btn').click(function() {
        var lang = $(this).data('lang');
        var googleTranslateFrame = $('iframe[name="google_translate_frame"]');

        if (googleTranslateFrame.length) {
            googleTranslateFrame.on('load', function() {
                var select = googleTranslateFrame.contents().find('select');
                if (select.length) {
                    select.val(lang).change();
                }
            });
        } else {
            // Si le widget n'est pas encore chargé, le charger
            $('<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>').appendTo('body');
        }
    });
});