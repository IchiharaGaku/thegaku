<?php  
// Template Name: お問い合わせ
?>


<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
</head>

<body>

  <!-- Navigation -->
  <?php get_template_part('includes/nav'); ?>

  <?php while (have_posts()) : the_post(); ?>

  <!-- Page Header -->
  <header id="contact" class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
          <div class="page-heading"
          src="<?php echo get_template_directory_uri(); ?>">
            <h1><?php the_title(); ?></h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <!-- <div class="container">
    <div class="row"> -->
      <!-- <div class="col-lg-8 col-md-10 mx-auto"> -->
      <div class="address">
        <?php the_content(); ?>
    <a href=""><p class="gmail">leshiyuan57@gmail.com</p>
    <p class="twitteraccount"></p>
    </a>
  </div>
      <!-- </div> -->
    <!-- </div>
  </div> -->


  <hr>
<?php endwhile; ?>
  <!-- Footer -->
  <?php get_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/clean-blog.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
