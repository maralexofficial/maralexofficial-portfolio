<?php

/*
 ###############################
 #                             #
 #                             #
 #      Alexander Bergman      #
 #                             #
 #                             #
 ###############################
*/

require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="<?php echo e($language, ENT_QUOTES, 'UTF-8') ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicon/site.webmanifest">

  <title><?php echo e(l10n('site.seo.title'), ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="author" content="<?php echo e(l10n('site.seo.author'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php echo e(l10n('site.seo.description'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="color-scheme" content="dark">
  <meta name="theme-color" content="#0b0d10">

  <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
  <script>eruda.init();</script>

  <link rel="stylesheet" href="/assets/fonts/simpleicons/simple-icons.min.css">
  <link rel="stylesheet" href="/dist/output.css?v=6">
</head>

<body class="antialiased">
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

  <main>
    <section id="home" class="hero-background flex min-h-screen items-center py-32">
      <div class="container-site">
        <div class="max-w-3xl">
          <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">
            <?php echo e(l10n('hero.badge'), ENT_QUOTES, 'UTF-8') ?>
          </span>

          <h1 class="mb-7 text-5xl font-bold leading-tight tracking-tight sm:text-7xl lg:text-8xl">
            <?php echo e(l10n('hero.title.first'), ENT_QUOTES, 'UTF-8') ?><br>
            <span class="text-accent"><?php echo e(l10n('hero.title.second'), ENT_QUOTES, 'UTF-8') ?></span>
          </h1>

          <p class="mb-9 max-w-xl text-lg text-muted sm:text-xl">
            <?php echo e(l10n('hero.text'), ENT_QUOTES, 'UTF-8') ?>
          </p>

          <div class="flex flex-wrap gap-4">
            <a href="#projects" class="button button-primary">
              <?php echo e(l10n('hero.button.projects'), ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="#contact" class="button">
              <?php echo e(l10n('hero.button.contact'), ENT_QUOTES, 'UTF-8') ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section
      id="about"
      x-data="reveal"
      :class="{ 'is-visible': shown }"
      class="section-padding reveal"
    >
      <div class="container-site">
        <h2 class="section-heading">
          <?php echo e(l10n('about.title.first'), ENT_QUOTES, 'UTF-8') ?>
          <span class="text-accent"><?php echo e(l10n('about.title.second'), ENT_QUOTES, 'UTF-8') ?></span>
        </h2>

        <p class="max-w-2xl text-lg leading-relaxed text-muted">
          <?php echo e(l10n('about.text'), ENT_QUOTES, 'UTF-8') ?>
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
          <?php foreach (l10n('about.badges') as $item): ?>
            <span class="rounded-lg border border-border bg-surface px-4 py-2">
              <?php echo e($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section
      id="projects"
      x-data="reveal"
      :class="{ 'is-visible': shown }"
      class="section-padding reveal"
    >
      <div class="container-site">
        <h2 class="section-heading">
          <?php echo e(l10n('projects.title.first'), ENT_QUOTES, 'UTF-8') ?>
          <span class="text-accent">
            <?php echo e(l10n('projects.title.second'), ENT_QUOTES, 'UTF-8') ?>
          </span>
        </h2>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

          <?php foreach (l10n('projects.cards') as $item): ?>
            <article class="project-card">
              <p class="mb-4 text-sm font-semibold text-accent"><?php echo e($item['tag'], ENT_QUOTES, 'UTF-8') ?></p>
              <h3 class="mb-3 text-xl font-semibold">
                <?php echo e($item['title'], ENT_QUOTES, 'UTF-8') ?>
              </h3>
              <p class="mb-6 text-muted">
                <?php echo e($item['text'], ENT_QUOTES, 'UTF-8') ?>
              </p>
              <a href="<?php echo e($item['action']['url'], ENT_QUOTES, 'UTF-8') ?>" class="font-medium text-accent hover:underline">
                <?php echo e($item['action']['label'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section
      id="social"
      x-data="reveal"
      :class="{ 'is-visible': shown }"
      class="section-padding reveal"
    >
      <div class="container-site">
        <h2 class="section-heading">
            <?php echo e(l10n('social.title.first'), ENT_QUOTES, 'UTF-8') ?>
            <span class="text-accent">
              <?php echo e(l10n('social.title.second'), ENT_QUOTES, 'UTF-8') ?>
            </span>
        </h2>
        <p class="max-w-2xl text-lg leading-relaxed text-muted">
          <?php echo e(l10n('social.text'), ENT_QUOTES, 'UTF-8') ?>
        </p>
        <ul class="flex flex-row space-x-4 mt-8">
          <li>
            <i class="si si-github text-5xl"></i>
          </li>
          <li>
            <i class="si si-github text-5xl"></i>
          </li>
        </ul>
      </div>
    </section>

    <section
      id="contact"
      x-data="reveal"
      :class="{ 'is-visible': shown }"
      class="section-padding reveal"
    >
      <div class="container-site">
        <div class="mx-auto max-w-2xl rounded-2xl border border-border bg-surface p-8 text-center sm:p-12">
          <h2 class="section-heading mb-5">
            <?php echo e(l10n('contact.title.first'), ENT_QUOTES, 'UTF-8') ?> <span class="text-accent">
              <?php echo e(l10n('contact.title.second'), ENT_QUOTES, 'UTF-8') ?>
            </span>
          </h2>

          <p class="mb-8 text-muted">
            <?php echo e(l10n('contact.text'), ENT_QUOTES, 'UTF-8') ?>
          </p>

          <a href="<?php echo e(l10n('contact.action.url'), ENT_QUOTES, 'UTF-8') ?>" class="button button-primary">
            <?php echo e(l10n('contact.action.label'), ENT_QUOTES, 'UTF-8') ?>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-border py-8">
    <div class="container-site flex flex-col items-center justify-between gap-3 text-center text-sm text-muted sm:flex-row">
      <p>
        <?php echo e(l10n('footer.copyright', "maralex.xyz", [
          'date' => date('Y')
        ]), ENT_QUOTES, 'UTF-8') ?>
      </p>
      <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">
            Sprache ändern: <a class="hover:text-accent active:text-accent" href="/lang/de">DE</a> | <a class="hover:text-accent active:text-accent" href="/lang/en">EN</a>
      </span>
    </div>
  </footer>

  <script defer src="/assets/js/components/back-to-top.alpine.js?v=4"></script>
  <script defer src="/assets/js/components/reveal.alpine.js?v=1"></script>
  <script defer src="/assets/js/components/language-toast.alpine.js?v=1"></script>
  <script defer src="/assets/js/components/notifications.alpine.js?v=1"></script>
  <script defer src="/assets/js/alpine.min.js?v=2"></script>

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
</body>
</html>