<?php get_header(); ?>
<?php while( have_posts() ): the_post(); ?>
<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php cbv_breadcrumbs(); ?>
      </div>
    </div>
  </div>
</section>

<div class="bsp-ctlr page-con-cntlr">
  <section class="page-des-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-des-sec-inr">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>