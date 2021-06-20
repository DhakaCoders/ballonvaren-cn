<?php 
get_header();
$thisID = get_the_ID(); 
$share_url = get_permalink();
$share_text = get_the_excerpt();
$pageID = get_id_by_page_template( 'page-ervaringen-overview.php' );
$pagetitle = get_title_by_page_template( 'page-ervaringen-overview.php' );
$intro = get_field('intro', $pageID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : $pagetitle;
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<div class="relatate-product-hide-cntlr">
  <section class="eveline-vernaeve-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="eveline-vernaeve-sec-cntlr">
            <?php if($intro): ?>
            <div class="page-entry-header">
            <?php 
              if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
              if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
            ?>
            </div>
            <?php endif; ?>
            <div class="share-on-module">
              <span><?php _e( 'Delen op', 'ballonvaren' ); ?>:</span>
              <ul class="reset-list">
                <li>
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>">
                    <i>
                      <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                        <use xlink:href="#facebook-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </li>
                <li>
                  <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_text; ?>">
                    <i>
                      <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                        <use xlink:href="#twitter-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </li>
              </ul>
            </div>
            <?php 
            $showhideintro = get_field('showhideintro', $thisID);
            $intro = get_field('intro_sec', $thisID);
            $gallery = get_field('gallery', $thisID);
            if($showhideintro):
            ?>
            <div class="eveline-vernaeve-cntlr">
              <div class="overons-msnry-grd-wrp clearfix">
                <div class="overons-msnry-grd-lft clearfix">
                  <div class="overons-msnry-grd-cntlr">
                   <h1 class="fl-h1 show-sm">OVER ONS</h1>
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
                    <div class="overons-msnry-grd-dsc-mdul ovms-grd-dsc-mdul-text-lg">
                      <div class="exprns-ovrvw-item-icon">
                        <i><svg class="quotation-icon" width="40" height="38" viewBox="0 0 40 38" fill="#2C113E">
                          <use xlink:href="#quotation-icon"></use> </svg>
                        </i>
                      </div>
                      <h2 class="overons-msnry-grd-dsc-title fl-h5"><?php the_title(); ?></h2>
                      <?php the_excerpt(); ?>
                    </div>
                    <div class="overons-msnry-grd-dsc-mdul">
                      <?php if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] ); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php 
            $showhidevideo = get_field('showhidevideo', $thisID);
            if($showhidevideo):
            $video = get_field('videosec', $thisID);
            ?>
            <div class="fl-fancy-module">
              <?php if( !empty($video['afbeelding']) ): ?>
              <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo cbv_get_image_src($video['afbeelding']); ?>);"></div>
              <?php endif; ?>
              <?php if( !empty($video['video_url']) ): ?>
              <a class="overlay-link" data-fancybox="" href="<?php echo $video['video_url']; ?>"></a>
              <div class="fancy-border"></div>
              <span class="fl-video-play-cntlr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/play-icon.svg" alt=""></i>
              </span>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="share-on-module">
              <span><?php _e( 'Delen op', 'ballonvaren' ); ?>:</span>
              <ul class="reset-list">
                <li>
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>">
                    <i>
                      <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                        <use xlink:href="#facebook-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </li>
                <li>
                  <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_text; ?>">
                    <i>
                      <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                        <use xlink:href="#twitter-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 
$showhideervaring = get_field('showhidevideo', $thisID);
if($showhideervaring):
$ervaring = get_field('select ervaring', $thisID);
if(empty($ervaring)){
    $ervaring = get_posts( array(
      'post_type' => 'ervaring',
      'posts_per_page'=> 6,
      'post__not_in' => array($thisID),
      'orderby' => 'date',
      'order'=> 'desc',

    ) );
}
if($ervaring):
?>

  <section class="experience-overview-sec ervaring-details-sec white-sky-bg-cntlr">
    <div class="white-sky-bg">
      <span class="white-sky-inline-bg hide-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/white-sky-bg.png');"></span>
      <span class="white-sky-inline-bg show-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/xs-white-sky-bg.png');"></span>
    </div>
    <span class="ervng-dtls-onverted-icon">
      <img src="<?php echo THEME_URI; ?>/assets/images/ervng-dtls-onverted-icon.svg" alt="">
    </span>
    <span class="ervng-dtls-onverted-green-icon">
      <img src="<?php echo THEME_URI; ?>/assets/images/ervng-dtls-onverted-green-icon.svg" alt="">
    </span>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="experience-overview-cntlr ervaring-details-grid-cntlr">
            <h3 class="experience-overview-title fl-h3"><?php _e( 'Gerelateerde Ervaring', 'ballonvaren' ); ?></h3>
            <div class="exprns-ovrvw-grid-cntlr exprnsSlider">
              <?php 
                foreach( $ervaring as $ervar ) : setup_postdata($ervar);
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): ''; 
              ?>
              <div class="exprns-ovrvw-item-wrap">
                <div class="exprns-ovrvw-item-cntlr">
                  <div class="exprns-ovrvw-item mHc">
                    <div class="exprns-ovrvw-item-img-cntlr">
                      <div class="exprns-ovrvw-item-img">
                        <?php echo $imgtag; ?>
                      </div>
                    </div>
                    <div class="exprns-ovrvw-item-icon">
                      <i><svg class="quotation-icon" width="40" height="38" viewBox="0 0 40 38" fill="#2C113E">
                        <use xlink:href="#quotation-icon"></use> </svg>
                      </i>
                    </div>
                    <h6 class="exprns-ovrvw-item-title fl-h6 mHc1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <div class="exprns-ovrvw-item-desc mHc2">
                      <?php the_excerpt(); ?>
                    </div>
                    <div class="exprns-ovrvw-item-btn">
                      <a class="red-color-arrow-btn" href="<?php the_permalink(); ?>">
                        <span><?php _e( 'LEES MEER', 'ballonvaren' ); ?></span>
                        <i><svg class="red-right-arrow" width="9" height="14" viewBox="0 0 9 14">
                          <use xlink:href="#red-right-arrow"></use> </svg>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
               <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
</div>
<?php get_footer();?>
