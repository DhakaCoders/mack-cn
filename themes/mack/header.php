<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('logo_header', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }


  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $gmapsurl = get_field('google_maps', 'options');
  $email = get_field('emailaddress', 'options');
  $htelephone = get_field('telephone', 'options');
  $show_telefoon = $htelephone['htelephone'];
  $show_fttelefoon = $htelephone['ftelephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $fttelefoon = trim(str_replace($spacialArry, $replaceArray, $show_fttelefoon));
  if( empty($show_telefoon) ){
    $show_telefoon = $show_fttelefoon;
    $telefoon = $fttelefoon;
  }
?> 
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-rgt hide-sm">
              <div class="hdr-contacts-menu">
                <ul class="reset-list">
                  <?php if( !empty( $email ) ): ?>
                  <li>
                    <a class="mail" href="mailto:<?php echo $email; ?>">
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/mail.png">
                      </i>
                      <?php echo $email; ?>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty( $show_telefoon ) ): ?>
                  <li>
                    <a class="tel" href="tel:<?php echo $telefoon; ?>"> 
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/tel.png">
                      </i>
                      <?php echo $show_telefoon; ?>
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </div>
              <nav class="main-nav">
                <?php 
                  $menuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'ulc clearfix',
                      'container' => 'hnav',
                      'container_class' => 'hnav'
                    );
                  wp_nav_menu( $menuOptions ); 
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="show-sm">
          <div class="xs-nav-menu-wrp clearfix">
            <div class="xs-contact-info">
              <?php if( !empty( $show_telefoon ) ): ?>
              <a href="<?php echo $telefoon; ?>">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-tel.png"></i>
              </a>
              <?php endif; ?>
              <?php if( !empty( $email ) ): ?>
              <a href="<?php echo $email; ?>">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-mail.png"></i>
              </a>
            <?php endif; ?>
            <?php if( !empty($gmapsurl) ): ?>
              <a href="<?php echo $gmapsurl; ?>">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-i.png"></i>
              </a>
              <?php endif; ?>
            </div>
            <div class="nav-opener">
              <div class="nav-opener-btn">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <strong><?php _e('MENU', THEME_NAME); ?></strong>
            </div>
            <div class="xs-menu">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'reset-list',
                    'container' => 'mhnav',
                    'container_class' => 'mhnav'
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>