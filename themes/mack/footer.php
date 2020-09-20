<?php 
  $logoObj = get_field('logo_footer', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $fttelephone = get_field('telephone', 'options');
  $show_telefoon = $fttelephone['ftelephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-inr clearfix">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <div class="ftr-main-menu hide-sm">
                <?php 
                $ftmenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'ulc clearfix',
                    'container' => 'copynav',
                    'container_class' => 'copynav'
                  );
                wp_nav_menu( $ftmenuOptions ); 
              ?>
            </div>
            <div class="xs-ftr-contact-info show-sm">
              <div class="xs-ftr-tel">
                <strong><?php _e('telefoon', THEME_NAME); ?>: </strong>
                <?php if( !empty( $show_telefoon ) ) printf('<a href="tel:%s">%s</a><br>', $telefoon, $show_telefoon);  ?>
              </div>
              <div class="xs-ftr-mail">
                <strong><?php _e('e-mail', THEME_NAME); ?>:</strong>
                <?php if( !empty( $e_mailadres ) ) printf('<a href="mailto:%s">%s</a>', $e_mailadres, $e_mailadres);  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-copywrite">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-copywrite-inr">
            <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>