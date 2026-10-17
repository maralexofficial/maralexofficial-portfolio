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
  <link rel="stylesheet" href="/dist/output.css?v=8">
</head>

<body class="antialiased">
  <?php include('header.php'); ?>

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
            <?php echo $config['social.enabled']; ?>
            <a class="text-accent" href="#">
              <i class="si si-github text-5xl"></i>
            </a>
          </li>
          <li>
            <a class="text-accent" href="#">
              <i class="si si-steam text-5xl"></i>
            </a>
          </li>
          <li>
            <a class="text-accent" href="#">
              <i class="si si-discord text-5xl"></i>
            </a>
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

  <?php include('footer.php'); ?>

  <?php include('sections/backToTop.php'); ?>
  <?php include('sections/toasts.php'); ?>

</body>
</html>