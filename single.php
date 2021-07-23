<?php get_header(); ?>

<main id='main' class="post wrapper">
  <h1 class="post__title">
    <?php the_title(); ?>
  </h1>
  <section>
    <?php the_content(); ?>
  </section>
  <?php previous_post_link(); ?>
  <?php next_post_link(); ?>
</main>

<?php get_footer(); ?>
