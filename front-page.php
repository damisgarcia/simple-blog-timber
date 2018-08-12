<?php
  $context = Timber::get_context();
  $post = new TimberPost();

  $context['post'] = $post;
  $context['posts'] = Timber::get_posts();

  Timber::render('front-page.twig', $context);
?>