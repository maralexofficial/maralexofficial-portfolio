<?php

require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language, ENT_QUOTES, 'UTF-8') ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicon/site.webmanifest">

  <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
  <script>eruda.init();</script>

  <title><?= htmlspecialchars(l10n('site.seo.title'), ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="author" content="<?= htmlspecialchars(l10n('site.seo.author'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?= htmlspecialchars(l10n('site.seo.description'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="color-scheme" content="dark">
  <meta name="theme-color" content="#0b0d10">

  <link rel="stylesheet" href="./dist/output.css">
  <script defer src="https://unpkg.com/alpinejs@3.14.9/dist/cdn.min.js"></script>

</head>

<body class="antialiased">
  <header class="fixed inset-x-0 top-0 z-50 border-b border-border bg-background/85 backdrop-blur-xl">
    <nav class="container-site flex h-[70px] items-center justify-between" aria-label="Hauptnavigation">
      <a href="<?= htmlspecialchars(l10n('site.url'), ENT_QUOTES, 'UTF-8') ?>" class="text-xl font-bold">
        <?= htmlspecialchars(l10n('site.name'), ENT_QUOTES, 'UTF-8') ?>
        <span class="text-accent">.</span>
      </a>

      <ul class="flex items-center gap-3 text-sm sm:gap-6">
        <?php foreach (l10n('navigation') as $item): ?>
          <li>
            <a
              class="text-muted transition hover:text-foreground"
              href="<?= htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8') ?>"
            >
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

  <div class="bg-white" x-data="{ message: 'Hello World! Alpine.js läuft 🚀' }" class="p-4">
    <p x-text="message"></p>
  </div>

  <main>
    <section id="home" class="hero-background flex min-h-screen items-center py-32">
      <div class="container-site">
        <div class="max-w-3xl">
          <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">
            <?= htmlspecialchars(l10n('site.hero.badge'), ENT_QUOTES, 'UTF-8') ?>
          </span>

          <h1 class="mb-7 text-5xl font-bold leading-tight tracking-tight sm:text-7xl lg:text-8xl">
            <?= htmlspecialchars(l10n('hero.title.first'), ENT_QUOTES, 'UTF-8') ?><br>
            <span class="text-accent"><?= htmlspecialchars(l10n('hero.title.second'), ENT_QUOTES, 'UTF-8') ?></span>
          </h1>

          <p class="mb-9 max-w-xl text-lg text-muted sm:text-xl">
            <?= htmlspecialchars(l10n('hero.text'), ENT_QUOTES, 'UTF-8') ?>
          </p>

          <div class="flex flex-wrap gap-4">
            <a href="#projects" class="button button-primary">
              <?= htmlspecialchars(l10n('hero.button.projects'), ENT_QUOTES, 'UTF-8') ?> →
            </a>
            <a href="#contact" class="button">
              <?= htmlspecialchars(l10n('hero.button.contact'), ENT_QUOTES, 'UTF-8') ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section-padding">
      <div class="container-site">
        <h2 class="section-heading">
          <?= htmlspecialchars(l10n('about.title.first'), ENT_QUOTES, 'UTF-8') ?>
          <span class="text-accent"><?= htmlspecialchars(l10n('about.title.second'), ENT_QUOTES, 'UTF-8') ?></span>
        </h2>

        <p class="max-w-2xl text-lg leading-relaxed text-muted">
          <?= htmlspecialchars(l10n('about.text'), ENT_QUOTES, 'UTF-8') ?>
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
          <?php foreach (l10n('about.badges') as $item): ?>
            <span class="rounded-lg border border-border bg-surface px-4 py-2">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="projects" class="section-padding">
      <div class="container-site">
        <h2 class="section-heading">
          <?= htmlspecialchars(l10n('projects.title.first'), ENT_QUOTES, 'UTF-8') ?>
          <span class="text-accent">
            <?= htmlspecialchars(l10n('projects.title.second'), ENT_QUOTES, 'UTF-8') ?>
          </span>
        </h2>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
          <article class="project-card">
            <p class="mb-4 text-sm font-semibold text-accent">01 / WEB</p>
            <h3 class="mb-3 text-xl font-semibold">Webentwicklung</h3>
            <p class="mb-6 text-muted">Moderne Websites mit responsivem Design und übersichtlicher Benutzerführung.</p>
            <a href="#contact" class="font-medium text-accent hover:underline">Mehr erfahren →</a>
          </article>

          <article class="project-card">
            <p class="mb-4 text-sm font-semibold text-accent">02 / APP</p>
            <h3 class="mb-3 text-xl font-semibold">Eigene Anwendungen</h3>
            <p class="mb-6 text-muted">Praktische Tools und Anwendungen mit Fokus auf Funktionalität und Performance.</p>
            <a href="#contact" class="font-medium text-accent hover:underline">Mehr erfahren →</a>
          </article>

          <article class="project-card">
            <p class="mb-4 text-sm font-semibold text-accent">03 / LAB</p>
            <h3 class="mb-3 text-xl font-semibold">Technische Projekte</h3>
            <p class="mb-6 text-muted">Experimente, Automatisierungen und neue Ideen rund um moderne Technologien.</p>
            <a href="#contact" class="font-medium text-accent hover:underline">Mehr erfahren →</a>
          </article>
        </div>
      </div>
    </section>

    <section id="contact" class="section-padding">
      <div class="container-site">
        <div class="mx-auto max-w-2xl rounded-2xl border border-border bg-surface p-8 text-center sm:p-12">
          <h2 class="section-heading mb-5">
            Lass uns <span class="text-accent">reden.</span>
          </h2>

          <p class="mb-8 text-muted">
            Du hast eine Idee oder möchtest mit mir zusammenarbeiten? Schreib mir gerne.
          </p>

          <a href="mailto:hallo@example.com" class="button button-primary">
            Nachricht schreiben ↗
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-border py-8">
    <div class="container-site flex flex-col items-center justify-between gap-3 text-center text-sm text-muted sm:flex-row">
      <p>
        © <span id="year"><?= date('Y') ?></span>
        <?= htmlspecialchars(l10n('footer.copyright'), ENT_QUOTES, 'UTF-8') ?>
      </p>
    </div>
  </footer>

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
    class="fixed bottom-6 right-6 z-50 flex size-12 items-center justify-center rounded-full border border-border bg-surface text-foreground shadow-lg transition-colors hover:border-accent hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent"
    aria-label="Back to top"
    title="Back to top"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="size-5"
      aria-hidden="true"
    >
      <path d="m18 15-6-6-6 6" />
    </svg>
  </a>

</body>
</html>