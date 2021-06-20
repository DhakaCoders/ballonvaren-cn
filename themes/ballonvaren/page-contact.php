<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$form = $intro['shortcode'];
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="contact-form-sec-wrp">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
     <div class="contact-form-dsc-wrp">
      <div class="page-entry-header">
        <?php 
          if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
          if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
        ?>
      </div>
    </div>
    <div class="contact-form-block clearfix">
      <div class="contact-form-lft">
      	<?php if( !empty($form) ): ?>
        <div class="error-msg">
          <span>
            <i><svg class="error-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
            <use xlink:href="#error-msg-icon-svg"></use> </svg></i>
            Oh snap! Het formulier lijkt niet correct!</span>
        </div>
        <div class="contact-form-wrp clearfix">
          <div class="wpforms-container">
          	<?php echo do_shortcode($form); ?>
          </div>
        </div>
    	<?php endif; ?>
      </div>
	<?php 
          $address = get_field('address', 'options');
		  $gmurl = get_field('url', 'options');
		  $telefoon = get_field('telefoon', 'options');
		  $email = get_field('emailadres', 'options');
		  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
		  $smedias = get_field('social_media', 'options');
          $continfo = get_field('contactinfo', $thisID);
    ?>
      <div class="contact-form-rgt">
        <div class="contact-form-info-cntlr">
          <div class="contact-form-info">
            <?php if( !empty($continfo['titel']) ) printf('<h6 class="fl-h6 contact-form-info-title">%s</h6>', $continfo['titel']); ?>
            <ul class="reset-list clearfix">
				<?php 
	                if( !empty($continfo['adres']) ) {
	                  $contmaplink = !empty($continfo['url'])?$continfo['url']: 'javascript:void()';
	                  printf('<li><a href="%s" target="_blank">%s</a></li>', $contmaplink, $continfo['adres']);
	                }
	                else{
	                  if( !empty($address) ) printf('<li><a href="%s" target="_blank">%s</a></li>', $gmaplink, $address);
	                }
	                if(!empty($continfo['telefoon'])){
	                  printf('<li><span>Tel:<a href="tel:%s">%s</a></span></li>', phone_preg($continfo['telefoon']),  $continfo['telefoon']);
	                }else{
	                  if( !empty($telefoon) ) printf('<li><span>Tel:<a href="tel:%s">%s</a></span></li>', phone_preg($telefoon),  $telefoon);
	                } 
	                if(!empty($continfo['emailadres'])){
	                  printf('<li><span>E-mail:<a href="mailto:%s">%s</a></span></li>', $continfo['emailadres'], $continfo['emailadres']);
	                }else{
	                  if( !empty($email) ) printf('<li><span>E-mail:<a href="mailto:%s">%s</a></span></li>', $email, $email);
	                }
	            ?>
              </ul>
            </div>
            <div class="contact-form-info-socail has-svg-social">
              <ul class="reset-list clearfix">
                  <?php if( !empty($smedias['facebook_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['facebook_url']; ?>">
                      <i><svg class="contact-facebook-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-facebook-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['messenger_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['messenger_url']; ?>">
                      <i><svg class="contact-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-msg-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['twitter_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['twitter_url']; ?>">
                      <i><svg class="contact-twitter-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-twitter-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['linkedin_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['linkedin_url']; ?>">
                       <i><svg class="contact-linkedin-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                     <use xlink:href="#contact-linkedin-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($smedias['instagram_url']) ): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedias['instagram_url']; ?>">
                       <i><svg class="contact-instagram-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-instagram-icon-svg"></use></svg></i>
                    </a>
                  </li>
                <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</section>
<?php  
  $gmap = get_field('gmap', $thisID);
  if($gmap):
?>
<section class="contact-google-map-sec-wrp contact-white-sky-bg-cntlr">
  <div class="contact-white-sky-bg">
    <span class="contact-white-sky-inline-bg hide-sm" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-form-bg.png);"></span>
    <span class="contact-white-sky-inline-bg show-sm" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-form-xs-bg.png);"></span>
  </div>
  <?php if( !empty($gmap['map_embedded']) ): ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-google-map-wrp">
          <div class="contact-parachute-icon">
            <img src="<?php echo THEME_URI; ?>/assets/images/contact-parachute-icon.svg">
          </div>
          <div class="contact-google-map">
            <?php echo $gmap['map_embedded']; ?>
          </div> 
          <div class="contact-google-parachute">
            <img src="<?php echo THEME_URI; ?>/assets/images/contact-google-parachute.svg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
<?php get_footer();?>
