<?php
  $context = Timber::get_context();
  $post = new TimberPost();

  $context['post'] = $post;
  $context['posts'] = Timber::get_posts();

  $context['customize'] = $wp_customize->get_setting;

  Timber::render('twig/front-page.twig', $context);
?>