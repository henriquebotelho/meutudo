<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <?php include('includes/head.php'); ?>
</head>

<body <?php body_class(); ?>>
<?php
  get_header();
  include('components/hero.php');
  include('components/services.php');
  include('components/purpose.php');
  include('components/banner.php');
  include('components/download.php');
  get_footer(); 
  ?>

</body>

</html>
