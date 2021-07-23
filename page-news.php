<?php get_header(); ?>

<main id='main' class="page wrapper">
  <h1 class="page__title">
    <?php the_title(); ?>
  </h1>
  <section>
    <?php the_content(); ?>
  </section>

  <ul>
    <?php
      $args = array('posts_per_page' => 20, 'offset' => 0, 'category' => 2);
      $myposts = get_posts($args);
      foreach ($myposts as $post):
        setup_postdata($post);
    ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </li>
    <?php
      endforeach;
      wp_reset_postdata();
    ?>
  </ul>
</main>

<?php get_footer(); ?>
