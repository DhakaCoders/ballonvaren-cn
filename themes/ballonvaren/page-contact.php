<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$form = $intro['shortcode'];
?>
<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-cntlr">
          <ul class="reset-list clearfix">
            <li>
              <a href="#">
                <span class="item">Home</span>
              </a>
            </li>
            <li>
              <a href="#"><span>Binnenpagina</span></a>
            </li>
            <li class="active">
              <span>Binnenpagina</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
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
      <div class="contact-form-rgt">
        <div class="contact-form-info-cntlr">
          <div class="contact-form-info">
            <h6 class="fl-h6 contact-form-info-title">Contact</h6>
            <ul class="reset-list clearfix">
              <li>
                <a href="#" target="_blank">Atlantic Ballooning BVBA <br> Palingstraat 87, B-9070 Destelbergen <br> (kantoor)</a>
              </li>
              <li>
                <span>Tel: <a href="tel:09 356 64 84">09 356 64 84</a></span></li>
                <li>
                  <span>E-mail: <a href="mailto:info@ballonvaren.be">info@ballonvaren.be</a></span>
                </li>
              </ul>
            </div>
            <div class="contact-form-info-socail has-svg-social">
              <ul class="reset-list clearfix">
                <li>
                  <a href="#" target="_blank">
                    <i><svg class="contact-facebook-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-facebook-icon-svg"></use></svg></i>
                  </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i><svg class="contact-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-msg-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i><svg class="contact-twitter-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-twitter-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i><svg class="contact-linkedin-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                     <use xlink:href="#contact-linkedin-icon-svg"></use></svg></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i><svg class="contact-instagram-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                    <use xlink:href="#contact-instagram-icon-svg"></use></svg></i>
                    </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="contact-google-map-sec-wrp contact-white-sky-bg-cntlr">
  <div class="contact-white-sky-bg">
    <span class="contact-white-sky-inline-bg hide-sm" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-form-bg.png);"></span>
    <span class="contact-white-sky-inline-bg show-sm" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-form-xs-bg.png);"></span>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-google-map-wrp">
          <div class="contact-parachute-icon">
            <img src="<?php echo THEME_URI; ?>/assets/images/contact-parachute-icon.svg">
          </div>
          <div class="contact-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10006.95422926144!2d2.7672152436070503!3d51.16860917329277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dca4981458e599%3A0x94ae9cf98c6fb394!2s8434%20Westende-Bad%2C%20Belgium!5e0!3m2!1sen!2sbd!4v1616587380465!5m2!1sen!2sbd" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div> 
          <div class="contact-google-parachute">
            <img src="<?php echo THEME_URI; ?>/assets/images/contact-google-parachute.svg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
