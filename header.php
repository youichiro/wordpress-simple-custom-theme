<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Sample Cafe</title>
    <meta name="description" content="最高のカフェだよ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ress.css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="page-wrapper">
      <div class="page-container <?php if (is_front_page()): echo 'top-big-bg'; endif; ?>">
        <header class="page-header wrapper">
          <h1>
            <a href="/">
              <img class="page-header__logo" src=<?php echo get_template_directory_uri() . '/images/logo.svg'; ?> alt="ロゴ">
            </a>
          </h1>
          <nav>
            <ul class="page-header__nav-ul <?php if (is_front_page()): echo 'is_top'; endif; ?>">
              <li><a href="/news">お知らせ</a></li>
              <li><a href="/menu">メニュー</a></li>
              <li><a href="/contact">お問い合わせ</a></li>
            </ul>
          </nav>
        </header>
