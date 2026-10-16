document.addEventListener('alpine:init', () => {
    Alpine.data('backToTop', () => ({
        visible: false,

        init() {
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