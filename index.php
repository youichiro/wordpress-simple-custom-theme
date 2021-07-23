<?php get_header(); ?>

<main id='main'>
  <?php
    if (have_posts()):
      echo '<h2>投稿一覧</h2>';
      while (have_posts()):
        the_post();
        the_title();
        the_content();
      endwhile;
    endif;
  ?>
</main>

<?php get_footer(); ?>
