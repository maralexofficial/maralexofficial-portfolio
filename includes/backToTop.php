<a
    href="#home"
    x-data="backToTop"
    x-cloak
    x-show="visible"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed bottom-6 right-6 z-50 flex size-12 items-center justify-center button button-primary"
    aria-label="<?php echo e(l10n('common.backToTop.ariaLabel'), ENT_QUOTES, 'UTF-8') ?>"
    title="<?php echo e(l10n('common.backToTop.ariaLabel'), ENT_QUOTES, 'UTF-8') ?>"
  >
    <?php echo e(l10n('common.backToTop.label'), ENT_QUOTES, 'UTF-8') ?>
  </a>