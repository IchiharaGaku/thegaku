<?php get_header(); ?>
<div class="page-name">
      <p>検索結果</p>
    </div>

    <div class="container flex">
      <div class="flex-child main-container">
      <?php if(have_posts()) : ?>
        <h2 class="page-name__title"><?php if(isset($_GET['s']) && empty($_GET['s'])) {
          echo '検索キーワード未入力'; //検索キーワード未入力の場合のテキストを指定
        } else {
          echo '"'.$_GET['s'] .'"の検索結果：'.$wp_query->found_posts.'件'; //検索キーワードと該当件数を表示
        } ?></h2>
        <div class="flex">
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="article-cat">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>
            /img/no-images.png" alt="no-img" />
          <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <?php if(!is_category() && has_category()): ?>
            <p class="category-tag"><?php 
                $postcat = get_the_category();
                echo $postcat[0]->name;
              ?></p>
              <?php endif; ?>
              <?php 
                $posttags = get_the_tags(); if($posttags) {foreach ($posttags as $tag) {
                  echo '<span class="tag">'.$tag->name.'</span>';
                }}
              ?>
            <p class="date-tag"><?php get_the_date('Y-m-d'); ?></p>
          </a>
              <?php endwhile; ?>
              <?php else: ?>
                <p>投稿が見つかりません。</p>
              <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>