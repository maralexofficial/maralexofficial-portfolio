<div x-data="{ impressumOpen: false }" @keydown.escape.window="impressumOpen = false">

  <footer class="border-t border-border py-8">
    <div class="container-site flex flex-col items-center justify-between gap-3 text-center text-sm text-muted sm:flex-row">

      <p>
        <?php echo e(l10n('footer.copyright', "maralex.xyz", [
          'date' => date('Y')
        ]), ENT_QUOTES, 'UTF-8') ?>
      </p>

      <button
        type="button"
        @click="impressumOpen = true"
        class="transition-colors hover:text-accent"
        aria-haspopup="dialog"
        :aria-expanded="impressumOpen.toString()"
      >
        Impressum
      </button>

      <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">
        Sprache ändern:
        <a class="hover:text-accent active:text-accent" href="/lang/de">DE</a>
        |
        <a class="hover:text-accent active:text-accent" href="/lang/en">EN</a>
      </span>

    </div>
  </footer>

  <!-- Impressum Modal -->
  <div
    x-cloak
    x-show="impressumOpen"
    x-transition.opacity.duration.200ms
    class="fixed inset-0 z-[100] flex items-center justify-center bg-black/75 p-4 backdrop-blur-sm"
    @click.self="impressumOpen = false"
    @keydown.escape.window="impressumOpen = false"
    role="presentation"
  >
    <section
      x-show="impressumOpen"
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="translate-y-4 scale-95 opacity-0"
      x-transition:enter-end="translate-y-0 scale-100 opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="translate-y-0 scale-100 opacity-100"
      x-transition:leave-end="translate-y-2 scale-95 opacity-0"
      @click.stop
      class="relative w-full max-w-xl max-h-[85vh] overflow-y-auto rounded-2xl border border-border bg-surface p-6 shadow-2xl sm:p-8"
      role="dialog"
      aria-modal="true"
      aria-labelledby="impressum-title"
    >

      <div class="mb-6 flex items-center justify-between gap-4">
        <h2 id="impressum-title" class="text-2xl font-bold">
          Impressum<span class="text-accent">.</span>
        </h2>

        <button
          type="button"
          @click="impressumOpen = false"
          class="flex size-10 shrink-0 items-center justify-center rounded-lg border border-border text-muted transition hover:bg-background hover:text-foreground"
          aria-label="Impressum schließen"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <path d="M18 6 6 18M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <div class="space-y-6 text-sm leading-relaxed text-muted">

        <section>
          <h3 class="mb-2 font-semibold text-foreground">
            Angaben gemäß § 5 DDG
          </h3>

          <address class="not-italic">
            Alexander Bergmann<br>
            Burgweg 36<br>
            63796 Kahl am Main<br>
            Deutschland
          </address>
        </section>

        <section>
          <h3 class="mb-2 font-semibold text-foreground">
            Kontakt
          </h3>

          <p>
            E-Mail:
            <a
              href="mailto:alexander.bergmann@maralex.xyz"
              class="text-accent underline underline-offset-4 hover:text-foreground"
            >
              alexander.bergmann@maralex.xyz
            </a>
          </p>
        </section>

      </div>

      <div class="mt-8 border-t border-border pt-5">
        <button
          type="button"
          @click="impressumOpen = false"
          class="button button-primary w-full"
        >
          Schließen
        </button>
      </div>

    </section>
  </div>

</div>

<script defer src="/assets/js/components/back-to-top.alpine.js?v=4"></script>
<script defer src="/assets/js/components/reveal.alpine.js?v=1"></script>
<script defer src="/assets/js/components/language-toast.alpine.js?v=1"></script>
<script defer src="/assets/js/components/notifications.alpine.js?v=1"></script>
<script defer src="/assets/js/alpine.min.js?v=2"></script>