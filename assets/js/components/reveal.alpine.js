document.addEventListener('alpine:init', () => {
Alpine.data('reveal', () => ({
shown: false,

    init() {
        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    this.shown = true;
                    observer.unobserve(this.$el);
                }
            },
            {
                threshold: 0.12,
            }
        );

        observer.observe(this.$el);
    },
}));

});