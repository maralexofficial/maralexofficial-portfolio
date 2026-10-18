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
          
          <a href="mailto:<?php echo $config['admin_mail'] ?>" class="button button-primary">
            <?php echo e(l10n('contact.action.label'), ENT_QUOTES, 'UTF-8') ?>
          </a>
        </div>
      </div>
    </section>