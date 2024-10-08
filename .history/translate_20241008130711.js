function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'fr',
        includedLanguages: 'fr,en,es,de,it',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.translate-btn');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const lang = this.getAttribute('data-lang');
            const googleTranslateFrame = document.querySelector('iframe[name="google_translate_frame"]');

            if (googleTranslateFrame) {
                googleTranslateFrame.onload = function() {
                    const select = googleTranslateFrame.contentDocument.querySelector('select');
                    if (select) {
                        select.value = lang;
                        select.dispatchEvent(new Event('change'));
                    }
                };
            } else {
                const script = document.createElement('script');
                script.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
                script.onerror = function() {
                    console.error("Erreur de chargement du script Google Translate.");
                };
                document.body.appendChild(script);
            }
        });
    });
});