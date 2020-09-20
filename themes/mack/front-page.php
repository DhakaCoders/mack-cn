<?php get_header(); ?>
<?php 
while( have_posts() ): the_post(); 
$standaardbanner = get_field('bannerimage', HOMEID);
if( !empty($standaardbanner) ):
?>
<section class="banner-sec">
  <img src="<?php echo $standaardbanner; ?>">    
</section>
<?php else: ?>
  <div class="banner-sec"></div>
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

<section class="mack-contact-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mack-contact-sec-inr">
          <h1>Contact form css</h1>
          <p>Laat uw gegevens achter voor het maken van een vrijblijvende afspraak.</p>
<form class="form">
<div class="inputFields-row">
<div class="inputField">
<input type="text" name="name" placeholder="Naam">
</div>
</div>
<div class="inputFields-row diveder2 clearfix">
<div class="inputField">
<input type="number" name="number" placeholder="Telefoon nr.">
</div>
<div class="inputField">
<input type="text" name="text" placeholder="Woonplaats">
</div>
</div>
<div class="inputFields-row">
<div class="inputField">
<input type="email" name="email" placeholder="E-mail adres">
</div>
</div>
<div class="inputFields-row">
<div class="inputField">
<textarea placeholder="Eventuele opmerkingen"></textarea>
</div>
</div>
<div class="cnt-btn">
<input type="submit" value="Verstuur bericht">
</div>
</form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>