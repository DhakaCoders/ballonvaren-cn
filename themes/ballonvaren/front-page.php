<?php get_header();?>

<section class="banner-sec no-effects">
<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
    $bannerposter = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'], 'hmbanner' ): '';
?>
  <div class="bnr-desc-wrap">
    <div class="banner-bg inline-bg" style="background-image: url('<?php echo $bannerposter; ?>');"></div>
    <div class="bnr-desc-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="bnr-desc-inr">
				<?php 
                    if( !empty($hbanner['titel']) ) printf( '<h2 class="bnr-sub-title">%s</h2>', $hbanner['titel'] );
                    if( !empty($hbanner['subtitel_1']) ) printf( '<h1 class="bnr-title">%s</h1>', $hbanner['subtitel_1'] );
                    if( !empty($hbanner['subtitel_2']) ) printf( '<h3 class="fl-h5 bnr-sub-title2">%s</h3>', $hbanner['subtitel_2'] );
                    if( !empty($hbanner['beschrijving']) ) echo wpautop($hbanner['beschrijving']);
                    $hbknop = $hbanner['knop'];
                    if( is_array( $hbknop ) &&  !empty( $hbknop['url'] ) ){
                        printf('<div class="bnr-btn"><a  class="fl-red-btn bnr-find-more-btn" href="%s" target="%s">%s</a></div>', $hbknop['url'], $hbknop['target'], $hbknop['title']); 
                    }
              	?>
              </div>                    
          </div>
        </div>
      </div>
    </div>
    <div class="bnr-ballon">
      <i><img src="<?php echo THEME_URI; ?>/assets/images/bnr-ballon.svg" alt=""></i>
    </div> 
    <div class="cloud-bg">
      <span class="cloud-fixt-img" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/cloud.svg');"></span>

      <img style="--i:1;" src="<?php echo THEME_URI; ?>/assets/images/cloud-png1.png">
      <img style="--i:2;" src="<?php echo THEME_URI; ?>/assets/images/cloud-png1.png">
      <img style="--i:3;" src="<?php echo THEME_URI; ?>/assets/images/cloud-png1.png">
      <img style="--i:4;" src="<?php echo THEME_URI; ?>/assets/images/cloud-png1.png">
      <img style="--i:4;" src="<?php echo THEME_URI; ?>/assets/images/cloud-png1.png">
    </div>    
  </div>
  <?php endif; ?>
  <?php
	$showhideusps = get_field('showhideusps', HOMEID);
	if( $showhideusps ):
	$usps = get_field('usps', HOMEID);
  ?>
  <div class="bn-process-grid">
    <div class="xs-process-ballon">
      <i><img src="<?php echo THEME_URI; ?>/assets/images/res-process-ballon.svg"></i>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if( $usps ): ?>
          <div class="bn-process-grid-items bnProcessGridItemsSlider">
          	<?php $i=1; foreach( $usps as $usp ): ?>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span><?php echo input_zero_befor_number($i); ?></span>
                <?php if( !empty($usp['titel']) ) printf( '<h4 class="fl-h5 bn-process-grid-title">%s</h4>', $usp['titel'] ); ?>
              </div>
              <?php if( !empty($usp['beschrijving']) ) echo wpautop($usp['beschrijving']); ?>
            </div>
        	<?php $i++; endforeach; ?>
          </div>
      	  <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <span class="hdr-color-border"></span>      
</section>
<?php
$showhideoverons = get_field('showhideoverons', HOMEID);
$introtext = get_field('intro_text', HOMEID);
$gallery = get_field('gallery', HOMEID);
$page_title = !empty($introtext['titel']) ? $introtext['titel'] : '';
?>
<?php if($showhideoverons): ?>
<section class="overons-msnry-grd-sec-wrp hm-overons-msnry-grd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-msnry-grd-wrp clearfix">
          <div class="overons-msnry-grd-lft clearfix">
            <div class="overons-msnry-grd-cntlr">
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
            <div class="overons-msnry-grd-dsc hm-overons-msnry-grd-dsc">
              <?php 
                if( !empty($page_title) ) printf( '<h2 class="fl-h3">%s</h2>', $page_title );
                if( !empty($introtext['beschrijving']) ) echo wpautop( $introtext['beschrijving'] );
                $hbknop = $introtext['knop'];
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
<?php
$showhidebooking = get_field('showhidebooking', HOMEID);
if($showhidebooking): 
$col1 = get_field('col1', HOMEID);
$col2 = get_field('col2', HOMEID);
?>
<section class="hm-dfp-twogrd-module-sce white-sky-bg-cntlr">
  <div class="white-sky-bg">
    <span class="white-sky-inline-bg hide-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/hm-white-sky-bg-img.png');"></span>
    <span class="white-sky-inline-bg show-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/xs-white-sky-bg.png');"></span>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-dfp-twogrd-module-cntlr">
          <div class="dfp-twogrd-module clearfix">
          	<?php if( $col1 ): ?>
            <div class="dfp-booking-grd-ctlr">
              <div class="dfp-booking-grd">
                <div class="booking-btm-img hide-sm">
                  <img src="<?php echo THEME_URI; ?>/assets/images/booking-btm-img.svg">
                </div>
                <div class="xs-booking-top-rgt-img show-sm">
                  <img src="<?php echo THEME_URI; ?>/assets/images/booking-top-img-xs.svg">
                </div>
				<?php 
	              if( !empty($col1['titel']) ) printf('<h4 class="cta-title fl-h4">%s</h4>', $col1['titel']);
	              if( !empty($col1['beschrijving']) ) echo wpautop( $col1['beschrijving'] );
	              $col1knop = $col1['knop'];
	              if( is_array( $col1knop ) &&  !empty( $col1knop['url'] ) ){
	                printf('<div class="cta-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $col1knop['url'], $col1knop['target'], $col1knop['title']); 
	              }
	            ?>
              </div>
            </div>
        	<?php endif; ?>
        	<?php if( $col2 ): ?>
            <div class="hm-dfp-gift-grd-smpl-img-cntlr show-sm">
              <div class="hm-dfp-gift-grd-smpl-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-dfp-gift-grd-smpl-img.jpg');"></div>
            </div>

            <div class="dfp-gift-grd-ctlr">
              <div class="dfp-gift-grd">
                <div class="booking-top-img hide-sm">
                  <img src="<?php echo THEME_URI; ?>/assets/images/booking-top-img.svg">
                </div>
                <div class="xs-booking-btm-lft-img show-sm">
                  <img src="<?php echo THEME_URI; ?>/assets/images/booking-btm-img.svg">
                </div>
				<?php 
	              if( !empty($col2['titel']) ) printf('<h4 class="cta-title fl-h4">%s</h4>', $col2['titel']);
	              if( !empty($col2['beschrijving']) ) echo wpautop( $col2['beschrijving'] );
	              $col2knop = $col2['knop'];
	              if( is_array( $col2knop ) &&  !empty( $col2knop['url'] ) ){
	                printf('<div class="cta-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $col2knop['url'], $col2knop['target'], $col2knop['title']); 
	              }
	            ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
$showhide_vrije = get_field('showhide_vrije', HOMEID);
if($showhide_vrije): 
$dayoff = get_field('vrijedagen', HOMEID);
if($dayoff):
?>
<section class="off-days-sec hm-bv-calender-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bv-calender-sec-cntlr">
          <div class="bv-calender-inner">
            <div class="bv-calender-dsc">
              <div class="bv-calender-dsc-inner">
                <?php 
	              if( !empty($dayoff['titel']) ) printf('<h2 class="fl-h3  off-days-heading">%s</h2>', $dayoff['titel']);
	              if( !empty($dayoff['beschrijving']) ) echo wpautop( $dayoff['beschrijving'] );
                ?>
              </div>
              <div class="bv-calnender">
                <div class="bv-calender-iner">
                  <div class="calender-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/kalender.PNG');">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="bv-calender-img hide-sm" >
              <div class="bv-calender-img-innr">
                <div class="inline-bg-img  inline-bg" style="background-image: url(<?php if(!empty($dayoff['afbeelding'])) echo cbv_get_image_src($dayoff['afbeelding']); ?>);">
                  <img src="<?php echo THEME_URI; ?>/assets/images/kalender-img.jpg" alt="">
                  <span class="bv-clndr-absolute-img-one"><img src="<?php echo THEME_URI; ?>/assets/images/absolute-ballon-1.svg" alt=""></span>
                  <span class="bv-clndr-absolute-img-two"><img src="<?php echo THEME_URI; ?>/assets/images/absolute-ballon-5.svg" alt=""></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php 
$showhide_nieuws = get_field('showhide_nieuws', HOMEID);
if($showhide_nieuws):
$hnews = get_field('homenieuws', HOMEID);
$newsIDs = $hnews['selecteer_nieuws'];
if( !empty($news_query) ){
	$news_query = new WP_Query(array(
	  'post_type' => 'post',
	  'posts_per_page'=> 3,
	  'post__in' => $newsIDs,
	  'orderby' => 'date',
	  'order'=> 'asc',

	));
    
}else{
	$news_query = new WP_Query(array(
	  'post_type' => 'post',
	  'posts_per_page'=> 6,
	  'orderby' => 'date',
	  'order'=> 'desc',

	));
}
?>
<section class="hm-news-details-sec blog-grds-sec news-details white-sky-bg-cntlr">
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
        <div class="blog-grds-inr">
          <div class="sec-entry-header">
            <?php 
				if( !empty($hnews['titel']) ) printf( '<h3 class="fl-h3">%s</h3>', $hnews['titel'] );
                if( !empty($hnews['beschrijving']) ) echo wpautop( $hnews['beschrijving'] );
            ?>
          </div>
          <?php if($news_query->have_posts()): ?>
          <div class="blog-grds-item-ctlr hm-blog-grds-item-ctlr dfpBlogSlider clearfix">
          <?php 
            while($news_query->have_posts()): $news_query->the_post(); 
            global $post;
            $imgID = get_post_thumbnail_id(get_the_ID());
            $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): ''; 
            $categories = get_the_terms( get_the_ID(), 'category' );
          ?>
            <div class="blog-grds-item spotlight">
              <div class="blog-grid-item">
                <?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){ ?>
                  <div class="blog-grid-tag">
                    <?php 
                      foreach( $categories as $category ) {
                          echo '<span>'.$category->name.'</span>';
                      }
                    ?>  
                  </div>
                 <?php } ?>
                <div class="blog-grid-img">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="bgi-img inline-bg" style="background-image: url('<?php echo $imgsrc; ?>');">                  
                  </div>
                </div>  
                <div class="blog-grid-des mHc">
                  <div class="post-date">
                    <i><svg class="date-icon" width="13" height="14" viewBox="0 0 13 14" fill="#EE3E15">
                      <use xlink:href="#date-icon"></use> </svg></i>
                      <span><?php echo get_the_date('m.d.Y'); ?></span>
                    </div> 
                    <h5 class="fl-h5 bgi-title mHc1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>                      
                    <div class="bgi-des mHc2">
                      <?php the_excerpt(); ?>
                    </div>  
                    <div class="fl-pro-grd-btn">
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
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>
          </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer();?>
