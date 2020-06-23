<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
</head>
<body>
<a href="#pagetop"></a>
  <?php get_template_part('includes/nav'); ?>
  <a class="top" href="#top">
    <p class="topscroll">↑</p>
</a>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>THEGAKU</h1>
            <span class="subheading">日々の座学を実践に</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php while(have_posts()): the_post(); ?>
        <div class="post">
        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
 <?php the_post_thumbnail(); ?>
   <?php else : ?>
   <img src="<?php echo    get_template_directory_uri();
   ?>/img/no-images.png" alt="no-img" class="image">
   <?php endif; ?>
            <h2 class="post-title">
            <?php
            if (mb_strlen($post->post_title, 'UTF-8') > 40) {
            $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
            echo $title . '…';
            } else {
            echo $post->post_title;
            }
           ?>
            </h2>
            <h3 class="post-subtitle">
              <?php the_excerpt(); ?>
            </h3>
            <div class="read">
              <p>READ MORE</p>
            </div>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php the_author(); ?></a>
            on <?php the_time('Y/m/d') ?></p>
        </div>
      </div>
        <hr>
<?php endwhile; ?>

        
        <!-- Pager -->
        <div class="clearfix">
          <?php echo paginate_links(); ?>
          <!-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
        </div>
      </div>
    </div>
  </div>

  <hr>

           

  <!-- Footer -->
  <?php get_footer(); ?>
