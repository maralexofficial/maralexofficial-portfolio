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

  <link rel="stylesheet" href="/assets/fonts/simpleicons/simple-icons.min.css">
  <link rel="stylesheet" href="/dist/output.css?v=8">
</head>

<body class="antialiased">
  <?php include('header.php'); ?>

  <main>
    hbv
  </main>

  <?php include('footer.php'); ?>

  <?php include('sections/backToTop.php'); ?>
  <?php include('sections/toasts.php'); ?>

</body>
</html>