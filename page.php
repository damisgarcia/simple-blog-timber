<?php
  $context = Timber::get_context();
  $post = new Timber\Post();

  $context['post'] = $post;  

  Timber::render('twig/single.twig', $context);
?>