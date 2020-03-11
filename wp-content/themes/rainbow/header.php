<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   

      <?php wp_head(); ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      
  </head>
  <body>   
    <div id="header">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= get_template_directory_uri()  ?>/assets/img/logo.png" alt="hải tầu"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
             
              <ul class="nav navbar-nav navbar-right">
                <li><a class="hotline" href="077.486.1688"><i class="fa fa-phone"></i> 077.486.1688</a></li>
              </ul>
              <?php  
                wp_nav_menu( array(
                                    'container'         => 'ul',                
                                    'theme_location'    => 'main-menu',
                                    'menu_id'           => 'main-menu',
                                    'menu_class'        => 'nav navbar-nav navbar-right',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                    
                                ) ); 
              ?>

          </div>
        </div>
      </nav>
    </div>
    

    

      

