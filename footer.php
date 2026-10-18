<footer class="border-t border-border py-8">
    <div class="container-site flex flex-col items-center justify-between gap-3 text-center text-sm text-muted sm:flex-row">

      <p>
        <?php echo e(l10n('footer.copyright', "maralex.xyz", [
          'date' => date('Y')
        ]), ENT_QUOTES, 'UTF-8') ?>
      </p>

      <a
        href="https://cdn.maralexno.de/pages/imprint.html"
      >
        Impressum
      </a>

      <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">
        Sprache ändern:
        <a class="hover:text-accent active:text-accent" href="/lang/de">DE</a>
        |
        <a class="hover:text-accent active:text-accent" href="/lang/en">EN</a>
      </span>

    </div>
  </footer>

<script defer src="/assets/js/components/back-to-top.alpine.js?v=4"></script>
<script defer src="/assets/js/components/reveal.alpine.js?v=1"></script>
<script defer src="/assets/js/components/language-toast.alpine.js?v=1"></script>
<script defer src="/assets/js/components/notifications.alpine.js?v=1"></script>
<script defer src="/assets/js/alpine.min.js?v=2"></script>