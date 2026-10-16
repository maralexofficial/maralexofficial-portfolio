document.addEventListener('alpine:init', () => {
    console.log('Alpine wurde initialisiert – BackToTop wird registriert.');

    Alpine.data('backToTop', () => ({
        visible: false,

        init() {
            console.log('BackToTop-Komponente gestartet.');

            const updateVisibility = () => {
                this.visible = window.scrollY > 200;
            };

            updateVisibility();

            window.addEventListener('scroll', updateVisibility, {
                passive: true,
            });
        },
    }));
});