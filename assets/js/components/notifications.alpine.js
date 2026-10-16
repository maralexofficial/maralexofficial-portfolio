document.addEventListener('alpine:init', () => {
    Alpine.store('notifications', {
        items: [],
        nextId: 0,

        show({
            message,
            type = 'info',
            duration = 3000
        }) {
            const id = ++this.nextId;

            this.items.push({
                id,
                message,
                type,
                visible: true
            });

            if (duration > 0) {
                setTimeout(() => this.dismiss(id), duration);
            }

            return id;
        },

        dismiss(id) {
            const item = this.items.find(item => item.id === id);

            if (!item || !item.visible) return;

            item.visible = false;

            setTimeout(() => {
                this.items = this.items.filter(item => item.id !== id);
            }, 250);
        }
    });

    window.notify = {
        show: (options) => Alpine.store('notifications').show(options),

        success: (message, duration = 3000) =>
            window.notify.show({ message, type: 'success', duration }),

        error: (message, duration = 4000) =>
            window.notify.show({ message, type: 'error', duration }),

        warning: (message, duration = 3500) =>
            window.notify.show({ message, type: 'warning', duration }),

        info: (message, duration = 3000) =>
            window.notify.show({ message, type: 'info', duration }),

        dismiss: (id) => Alpine.store('notifications').dismiss(id)
    };
});