<?php get_header();?>

<section class="banner-sec">
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
  <div class="bn-process-grid">
    <div class="xs-process-ballon">
      <i><img src="<?php echo THEME_URI; ?>/assets/images/res-process-ballon.svg"></i>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bn-process-grid-items bnProcessGridItemsSlider">
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>01</span>
                <h4 class="fl-h5 bn-process-grid-title">Vragen?</h4>
              </div>
              <p>We maken tijd om voor uw reservatie op àl uw<br> vragen te antwoorden</p>
            </div>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>02</span>
                <h4 class="fl-h5 bn-process-grid-title">Briefing</h4>
              </div>  
              <p>We geven voor het opstijgen een uitgebreide<br> briefing</p>
            </div>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>03</span>
                <h4 class="fl-h5 bn-process-grid-title">Hoog comfort</h4>
              </div>  
              <p>U vaart mee in ruime comfortabele<br> manden</p>
            </div>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>04</span>
                <h4 class="fl-h5 bn-process-grid-title">Ballonvaart</h4>
              </div>  
              <p>We garanderen een prachtige en veilige ballonvaart<br> van minimaal één uur</p>
            </div>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>05</span>
                <h4 class="fl-h5 bn-process-grid-title">Après-ballooning</h4>
              </div>  
              <p>Na de vaart nodigen we u uit voor een lekker <br>glaasje met versnaperingen</p>
            </div>
            <div class="bn-process-grid-item">
              <div class="bn-process-item-hdr mHc1">
                <span>06</span>
                <h4 class="fl-h5 bn-process-grid-title">Souvenir</h4>
              </div>  
              <p>U krijgt een leuk geschenkje mee</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
$showhide_nieuws = get_field('showhide_nieuws', HOMEID);
if($showhide_nieuws):
$hnews = get_field('homenieuws', HOMEID);
$news_query = $hnews['selecteer_nieuws'];
if(empty($news_query)){
    $news_query = get_posts( array(
      'post_type' => 'post',
      'posts_per_page'=> 6,
      'orderby' => 'date',
      'order'=> 'desc',

    ) );
}
?>
<section class="hm-news-details-sec blog-grds-sec news-details white-sky-bg-cntlr">
  <div class="white-sky-bg">
    <span class="white-sky-inline-bg hide-sm" style="background-image: url('assets/images/white-sky-bg.png');"></span>
    <span class="white-sky-inline-bg show-sm" style="background-image: url('assets/images/xs-white-sky-bg.png');"></span>
  </div>
  <span class="ervng-dtls-onverted-icon">
    <img src="assets/images/ervng-dtls-onverted-icon.svg" alt="">
  </span>
  <span class="ervng-dtls-onverted-green-icon">
    <img src="assets/images/ervng-dtls-onverted-green-icon.svg" alt="">
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
          <?php if($news_query): ?>
          <div class="blog-grds-item-ctlr hm-blog-grds-item-ctlr dfpBlogSlider clearfix">
          <?php 
            foreach( $news_query as $newss ) : setup_postdata($newss);
            global $post;
            $imgID = get_post_thumbnail_id($post->ID);
            $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): ''; 
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
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>
          </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer();?>
