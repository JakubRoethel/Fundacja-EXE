<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <!-- DOCUMENT SETTINGS -->
  <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' );?>" charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- PAGE META -->
  <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <!-- RESPONSIVE UTILITIES -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <script src="https://apis.google.com/js/api.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> 
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <?php get_template_part('views/common', 'header'); ?>
