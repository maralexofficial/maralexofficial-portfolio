<div
    x-data
    x-cloak
    class="toast-container"
    aria-live="polite"
>
    <template x-for="item in $store.notifications.items" :key="item.id">
        <div
            x-show="item.visible"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-y-3 opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-y-0 opacity-100"
            x-transition:leave-end="translate-y-2 opacity-0"
            class="toast"
            :class="'toast-' + item.type"
            role="status"
        >
            <p class="toast-message" x-text="item.message"></p>

            <button
                type="button"
                class="toast-close"
                aria-label="Benachrichtigung schließen"
                @click="$store.notifications.dismiss(item.id)"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    aria-hidden="true"
                >
                    <path d="M18 6 6 18M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </template>
</div>