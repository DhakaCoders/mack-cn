<?php get_header(); ?>
<?php 
while( have_posts() ): the_post(); 
$standaardbanner = get_field('bannerimage', HOMEID);
if( !empty($standaardbanner) ):
?>
<section class="banner-sec">
  <img src="<?php echo $standaardbanner; ?>">    
</section>
<?php endif; ?>
<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php cbv_breadcrumbs(); ?>
      </div>
    </div>
  </div>
</section>


<section class="mack-home-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mack-home-des-sec-inr">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>