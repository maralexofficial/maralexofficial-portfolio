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
          <?php foreach ($config['social']['networks'] as $item): ?>
          <li>
            <a class="text-accent" title="<?php echo e($item['title'], ENT_QUOTES, 'UTF-8') ?>" href="<?php echo e($item['url'], ENT_QUOTES, 'UTF-8') ?>">
              <i class="si <?php echo e($item['icon'], ENT_QUOTES, 'UTF-8') ?> text-5xl"></i>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>