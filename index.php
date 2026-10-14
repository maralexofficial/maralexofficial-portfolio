<?php 

require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?php echo htmlspecialchars(config('site.meta.title'), ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="author" content="<?php echo htmlspecialchars(config('site.meta.author'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php echo htmlspecialchars(config('site.meta.description'), ENT_QUOTES, 'UTF-8') ?>">
  <meta name="color-scheme" content="dark">
  <meta name="theme-color" content="#0b0d10">
  
  <link rel="stylesheet" href="./dist/output.css">
</head>
<body class="antialiased">
  <header class="fixed inset-x-0 top-0 z-50 border-b border-border bg-background/85 backdrop-blur-xl">
    <nav class="container-site flex h-[70px] items-center justify-between" aria-label="Hauptnavigation">
      <a href="#home" class="text-xl font-bold">Max<span class="text-accent">.</span></a>
      <ul class="flex items-center gap-3 text-sm sm:gap-6">
          <?php foreach (config('navigation') as $item): ?>
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
  <main>
    <section id="home" class="hero-background flex min-h-screen items-center py-32">
      <div class="container-site">
        <div class="max-w-3xl">
          <span class="mb-6 inline-block rounded-full border border-border px-4 py-2 text-sm text-muted">✦ Willkommen auf meiner Website</span>
          <h1 class="mb-7 text-5xl font-bold leading-tight tracking-tight sm:text-7xl lg:text-8xl">
            <?php echo htmlspecialchars(config('hero.title.first'), ENT_QUOTES, 'UTF-8') ?><br>
            <span class="text-accent"><?php echo htmlspecialchars(config('hero.title.second'), ENT_QUOTES, 'UTF-8') ?></span>
          </h1>
          <p class="mb-9 max-w-xl text-lg text-muted sm:text-xl">
            <?php echo htmlspecialchars(config('hero.text'), ENT_QUOTES, 'UTF-8') ?>
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#projects" class="button button-primary"><?php echo htmlspecialchars(config('hero.button.projects'), ENT_QUOTES, 'UTF-8') ?> →</a>
            <a href="#contact" class="button"><?php echo htmlspecialchars(config('hero.button.contact'), ENT_QUOTES, 'UTF-8') ?></a>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section-padding">
      <div class="container-site">
        <h2 class="section-heading">Über <span class="text-accent">mich</span></h2>
        <p class="max-w-2xl text-lg leading-relaxed text-muted">
          Ich beschäftige mich mit Webentwicklung, Design und modernen Technologien. Mein Ziel sind digitale Produkte, die gut aussehen und einfach zu benutzen sind.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">

    <?php foreach (config('about.badges') as $item): ?>
      <span class="rounded-lg border border-border bg-surface px-4 py-2">
        <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
      </span>
    <?php endforeach; ?>
          
        </div>
      </div>
    </section>
    <section id="projects" class="section-padding">
      <div class="container-site">
        <h2 class="section-heading">Meine <span class="text-accent">Projekte</span></h2>
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
          <h2 class="section-heading mb-5">Lass uns <span class="text-accent">reden.</span></h2>
          <p class="mb-8 text-muted">
            Du hast eine Idee oder möchtest mit mir zusammenarbeiten? Schreib mir gerne.
          </p>
          <a href="mailto:hallo@example.com" class="button button-primary">Nachricht schreiben ↗</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="border-t border-border py-8">
    <div class="container-site flex flex-col items-center justify-between gap-3 text-center text-sm text-muted sm:flex-row">
      <p>© <span id="year">2026</span> Max Mustermann</p>
      <a href="#home" class="transition hover:text-foreground">Zurück nach oben ↑</a>
    </div>
  </footer>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>