<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $gmurl = get_field('url', 'options');
  $telefoon = get_field('telefoon', 'options');
  $email = get_field('emailadres', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
  $smedias = get_field('social_media', 'options');
  $ftgalerij = get_field('ft_galerij', 'options');
  $copyright_text = get_field('copyright_text', 'options');
  $usps = get_field('usps', 'options');
?>

<?php if( $usps ): ?>
<section class="footer-top-sec">
  <span class="hdr-color-border"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-sec-cntlr ftrTpSecSlider">
          <?php foreach( $usps as $usp ): ?>
          <div class="ftr-top-sec-item-wrap">
            <div class="ftr-top-sec-item-cntlr">
              <div class="ftr-top-sec-item">
                <h6 class="fl-h6 ftr-top-sec-item-title">
                  <?php if( !empty($usp['titel']) ) printf('<span>%s</span>', $usp['titel']); ?>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/ftr-top-sec-item-img.svg" alt=""></i>
                </h6>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-cntlr">
          <div class="ftr-top-cntlr clearfix">
            <div class="ftr-top-col ftr-top-col1">
              <div class="ftr-top-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <div class="ftr-top-payment-method hide-sm">
                <?php if( $ftgalerij ): ?>
                <ul class="reset-list">
                  <?php foreach( $ftgalerij as $ftgalID ): ?>
                  <li>
                    <div class="payment-method-logo">
                      <?php echo cbv_get_image_tag($ftgalID); ?>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
            <div class="ftr-top-col ftr-top-col2">
              <h6 class="fl-h6 ftr-top-col-title"><?php _e( 'Navigatie', 'ballonvaren' ); ?></h6>
              <div class="ftr-top-col-menu ftr-menu-des">
              <?php 
                $fmenuOptions1 = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions1 );
                $fmenuOptions2 = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions2 );
              ?> 
              </div>
            </div>
            <div class="ftr-top-col ftr-top-col3">
              <h6 class="fl-h6 ftr-top-col-title"><?php _e( 'Contact', 'ballonvaren' ); ?></h6>
              <div class="ftr-top-col-details ftr-menu-des">
              <?php 
                if( !empty($address) ) printf('<div class="ftr-top-col-addr"><a href="%s" target="_blank">%s</a></div>', $gmaplink, $address);
                if( !empty($telefoon) ) printf('<div class="ftr-top-col-tel"><span>Tel: <a href="tel:%s">%s</a></span></div>', phone_preg($telefoon),  $telefoon); 
                if( !empty($email) ) printf('<div class="ftr-top-col-mail"><span>E-mail: <a href="mailto:%s">%s</a></span></div> ', $email, $email);  
              ?>

              </div>
              <div class="ftr-top-col-socials hdr-social-media has-svg">
                <ul class="reset-list">
                  <?php if( !empty($smedias['facebook_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['facebook_url']; ?>">
                      <i>
                        <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                          <use xlink:href="#facebook-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['messenger_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['messenger_url']; ?>">
                      <i>
                        <svg class="messenger-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                          <use xlink:href="#messenger-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['twitter_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['twitter_url']; ?>">
                      <i>
                        <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                          <use xlink:href="#twitter-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['linkedin_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['linkedin_url']; ?>">
                      <i>
                        <svg class="linkedin-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                          <use xlink:href="#linkedin-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['instagram_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['instagram_url']; ?>">
                      <i>
                        <svg class="instagram-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                          <use xlink:href="#instagram-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </li>
                <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>

          <div class="ftr-btm-cntlr">
            <?php if( $ftgalerij ): ?>
              <div class="ftr-top-payment-method show-sm">
                <ul class="reset-list">
                  <?php foreach( $ftgalerij as $ftgalID ): ?>
                  <li>
                    <div class="payment-method-logo">
                      <?php echo cbv_get_image_tag($ftgalID); ?>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?> 
            </div>
            <div class="ftr-btm-menu">
              <?php 
                $copyrightmenu = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $copyrightmenu );
              ?> 
            </div>
            <div class="ftr-developed-by">
              <p>Website laten maken door <a target="_blank" href="https://www.conversal.be/">conversal</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>