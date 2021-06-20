<?php 
/*Template Name: Boek Je Ballonvluch*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$shortcode = get_field('shortcode', $thisID);
$sidebar = get_field('sidebarsec', $thisID);
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="boek-je-form-sec-wrp">
 <div class="boek-je-form-tp">
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
      
      </div>
     </div>
    </div>
 </div>
  <div class="boek-je-form-bg-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-form-block clearfix">
            <div class="contact-form-lft">
              <?php if( !empty($shortcode) ): ?>
              <div class="error-msg">
                <span>
                  <i><svg class="error-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
                  <use xlink:href="#error-msg-icon-svg"></use> </svg></i>
                  Oh snap! Het formulier lijkt niet correct!</span>
              </div>
              <div class="contact-form-wrp clearfix">
                <div class="wpforms-container">
                    <?php echo do_shortcode($shortcode); ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <?php if($sidebar): ?>
            <div class="contact-form-rgt">
              <div class="contact-form-info-cntlr">
                <div class="boek-parachute-icon">
                  <img class="hide-sm" src="<?php echo THEME_URI; ?>/assets/images/boek-parachute-icon.svg">
                  <img class="show-sm" src="<?php echo THEME_URI; ?>/assets/images/boek-parachute-icon-xs.svg">
                </div>
                <div class="contact-form-info text-center">
                  <?php 
                    if( !empty($sidebar['titel']) ) printf('<h4 class="fl-h4 contact-form-info-title-1">%s</h4>', $sidebar['titel']);
                    if( !empty($sidebar['beschrijving']) ) echo wpautop( $sidebar['beschrijving'] );
                    $sknop = $sidebar['knop'];
                    if( is_array( $sknop ) &&  !empty( $sknop['url'] ) ){
                        printf('<a class="fl-transparent-btn" href="%s" target="%s">%s</a>', $sknop['url'], $sknop['target'], $sknop['title']); 
                    }
                  ?>
                </div>
              </div>
              </div>
            <?php endif; ?>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
