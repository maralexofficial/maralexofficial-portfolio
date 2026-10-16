
document.addEventListener('alpine:initialized', () => {
    const params = new URLSearchParams(window.location.search);
    const language = params.get('language_changed');

    if (language !== 'de' && language !== 'en') {
        return;
    }

    notify.success(
        language === 'de'
            ? 'Sprache auf Deutsch geändert.'
            : 'Language changed to English.'
    );

    params.delete('language_changed');

    const query = params.toString();
    const url = window.location.pathname
        + (query ? `?${query}` : '')
        + window.location.hash;

    window.history.replaceState({}, '', url);
});
