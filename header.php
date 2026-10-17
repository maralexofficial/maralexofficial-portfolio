<header class="fixed inset-x-0 top-0 z-50 border-b border-border bg-background/85 backdrop-blur-xl">
    <nav class="container-site flex h-[70px] items-center justify-between" aria-label="Hauptnavigation">
      <a href="#home" class="text-xl font-bold">
        <?php echo e(l10n('site.name'), ENT_QUOTES, 'UTF-8') ?>
        <span class="text-accent">.</span>
      </a>

      <ul class="flex items-center gap-3 text-sm sm:gap-6">
        <?php foreach (l10n('navigation') as $item): ?>
          <li>
            <a
              class="text-muted transition hover:text-foreground"
              href="<?php echo e($item['url'], ENT_QUOTES, 'UTF-8') ?>"
            >
              <?php echo e($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>