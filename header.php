<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/mystyle.css">
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <!-- 写真＋タイトル -->
      <div class="text-center pt-5">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="カマキリ博士の画像">
        <h1 class="mb-5">カマキリ博士の昆虫教室</h1>
      </div>

      <!-- メニュー -->
      <div class="container text-center">
        <ul class="d-flex justify-content-around align-items-center header">
          <li><a href="<?php echo get_template_directory_uri(); ?>/index">TOP</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/blog">ブログ</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/weekdays">平日教室</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/online">オンライン教室</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/visiting">出張講義</a></li>
          <li><a>幼稚園<br>アフタースクール</a></li>
          <li><a>お問い合わせ</a></li>
        </ul>
      </div>
    </header>