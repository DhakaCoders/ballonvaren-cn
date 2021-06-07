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
?>
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
                <ul class="reset-list">
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-001.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-002.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-003.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-004.jpg" alt="">
                    </div>
                  </li>
                </ul>
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
                <div class="ftr-top-col-addr">
                <a target="_blank" href="#">Atlantic Ballooning BVBA<br>
                Palingstraat 87, B-9070 Destelbergen (kantoor)</a>
                </div>
                <div class="ftr-top-col-tel">
                  <span>Tel: <a href="tel:093566484">09 356 64 84</a></span> 
                </div>
                <div class="ftr-top-col-mail">
                  <span>E-mail: <a href="mailto:info@ballonvaren.be">info@ballonvaren.be</a></span> 
                </div>
              </div>
              <div class="ftr-top-col-socials hdr-social-media has-svg">
                <ul class="reset-list">
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#facebook-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="messenger-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#messenger-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#twitter-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="linkedin-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#linkedin-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="instagram-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#instagram-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                    </ul>
              </div>
            </div>
          </div>

          <div class="ftr-btm-cntlr">
            <div class="ftr-top-payment-method show-sm">
                <ul class="reset-list">
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-001.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-002.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-003.jpg" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="payment-method-logo">
                      <img src="<?php echo THEME_URI; ?>/assets/images/payment-method-logo-004.jpg" alt="">
                    </div>
                  </li>
                </ul>
              </div>
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
              <p>Website laten maken door <a target="_blank" href="#">conversal</a></p>
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