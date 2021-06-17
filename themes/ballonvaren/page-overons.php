<?php 
/*Template Name: Overons*/
get_header();
$thisID = get_the_ID(); 
$showhideintro = get_field('showhideintro', $thisID);
$intro = get_field('intro_sec', $thisID);
$gallery = get_field('gallery', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
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
<?php if($showhideintro): ?>
<section class="overons-msnry-grd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-msnry-grd-wrp clearfix">
          <div class="overons-msnry-grd-lft clearfix">
            <div class="overons-msnry-grd-cntlr">
               <?php if( !empty($page_title) ) printf( '<h1 class="fl-h1 show-sm">%s</h1>', $page_title ); ?>
               <?php if( !empty($gallery['afbeelding_1']) ): ?>
              <div class="overons-msnry-grd-item msnrytgi1">
                <div class="overons-msnry-grd-item-cntlr">
                  <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gallery['afbeelding_1']); ?>);"></div>
                </div>
              </div>
              <?php endif; ?>
              <?php if( !empty($gallery['afbeelding_2']) ): ?>
              <div class="overons-msnry-grd-item msnrytgi2">
                <div class="overons-msnry-grd-item-cntlr">
                  <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gallery['afbeelding_2']); ?>);"></div>
                </div>
              </div>
              <?php endif; ?>
              <?php if( !empty($gallery['afbeelding_3']) ): ?>
              <div class="overons-msnry-grd-item msnrytgi3">
                <div class="overons-msnry-grd-item-cntlr">
                  <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gallery['afbeelding_3']); ?>);"></div>
                </div>
              </div>
              <?php endif; ?>
              <?php if( !empty($gallery['afbeelding_4']) ): ?>
              <div class="overons-msnry-grd-item msnrytgi4">
                <div class="overons-msnry-grd-item-cntlr">
                  <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gallery['afbeelding_4']); ?>);"></div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="overons-msnry-grd-rgt">
            <div class="overons-msnry-grd-dsc">
              <?php 
                if( !empty($page_title) ) printf( '<h1 class="fl-h1 hide-sm">%s</h1>', $page_title );
                if( !empty($intro['subtitel']) ) printf( '<h2 class="fl-h2 show-sm">%s</h2>', $intro['subtitel'] );
                if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                $hbknop = $intro['knop'];
                if( is_array( $hbknop ) &&  !empty( $hbknop['url'] ) ){
                    printf('<a class="fl-red-btn" href="%s" target="%s">%s</a>', $hbknop['url'], $hbknop['target'], $hbknop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="overons-team-sec-wrp contact-white-sky-bg-cntlr">
  <div class="contact-white-sky-bg">
    <span class="contact-white-sky-inline-bg hide-xs" style="background: url(<?php echo THEME_URI; ?>/assets/images/overons-angle-bg.png);"></span>
    <span class="contact-white-sky-inline-bg show-xs" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-form-xs-bg.png);"></span>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-team-wrp">
          <div class="overons-team-parachute-tp">
            <img class="hide-sm" src="<?php echo THEME_URI; ?>/assets/images/overons-team-parachute-tp-icon.svg">
            <img class="show-sm" src="<?php echo THEME_URI; ?>/assets/images/overons-team-parachute-tp-xs-icon.svg">
          </div>
          <?php  
            $showhideteam = get_field('showhideteam', $thisID);
            if($showhideteam): 
              $team = get_field('teamsec', $thisID);
              if($team):
          ?>
          <div class="ovs-team-entry-hdr text-center">
            <?php 
              if( !empty($team['titel']) ) printf( '<h3 class="fl-h3">%s</h3>', $team['titel'] );
              if( !empty($team['beschrijving']) ) echo wpautop($team['beschrijving']);
            ?>
          </div>
          <?php if( !empty($team['afbeelding']) ): ?>
          <div class="overons-team-img">
            <?php echo cbv_get_image_tag($team['afbeelding'], 'teamoverons'); ?>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <?php endif; ?>
          <?php  
            $showhidecta = get_field('showhidecta', $thisID);
            if($showhidecta): 
              $cta = get_field('ctasec', $thisID);
              if($cta):
          ?>
          <div class="overons-team-module-cntlr">
            <div class="overons-team-module text-center">
              <?php 
                if( !empty($cta['titel']) ) printf( '<h4 class="fl-h4">%s</h4>', $cta['titel'] );
                if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']);
                $ctaknop = $cta['knop'];
                if( is_array( $ctaknop ) &&  !empty( $ctaknop['url'] ) ){
                    printf('<a class="fl-transparent-btn" href="%s" target="%s">%s</a>', $ctaknop['url'], $ctaknop['target'], $ctaknop['title']); 
                }
              ?>
            </div>
             <div class="overons-team-parachute-btm">
              <img class="hide-sm" src="<?php echo THEME_URI; ?>/assets/images/overons-team-parachute-btm-icon.svg">
              <img class="show-sm" src="<?php echo THEME_URI; ?>/assets/images/overons-team-parachute-btm-xs-icon.svg">
            </div>
          </div>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
