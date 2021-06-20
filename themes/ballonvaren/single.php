<?php 
/*Template Name: Ervaringen Overview*/
get_header();
$thisID = get_option('page_for_posts'); 
$intro = get_field('intro', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title($thisID);
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$terms = get_terms( 'category', array(
  'hide_empty' => false,
) );
$share_url = get_permalink();
$share_text = get_the_excerpt();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="innerpage-con-wrap" id="news-details">
  <article class="default-page-con">
    <div class="block-850">
      <div class="dfp-promo-module clearfix">
        <div>
          <strong class="dfp-promo-module-title fl-h1"><?php the_title(); ?></strong>
        </div>
        <div class="post-date">
          <i><svg class="date-icon" width="13" height="14" viewBox="0 0 13 14" fill="#EE3E15">
          <use xlink:href="#date-icon"></use> </svg></i>
          <span><?php echo get_the_date('m.d.Y'); ?></span>
        </div> 
      </div>
    </div>
    <?php if(have_rows('inhoud')){  ?>
    <?php while ( have_rows('inhoud') ) : the_row();  ?>
     <?php if( get_row_layout() == 'galerij' ){ 
      $galleries = get_sub_field('fc_afbeeldingen');
      $full_wide = get_sub_field('fullwidth');
      $inline_image = get_sub_field('show_inline_afbeelding');
      $lightbox = get_sub_field('lightbox');
      $kolom = get_sub_field('kolom'); 
      $hasinline_class = ($inline_image)?'has-inline-bg ':'';
      if($galleries):
    ?>
      <?php if($full_wide): ?>
      <div class="block-1285">
        <div class="top-gallery-module">
          <div class="<?php echo $hasinline_class; ?>gallery-wrap clearfix">
            <div class="gallery gallery-columns-<?php echo $kolom; ?>">
              <?php foreach( $galleries as $image ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                <?php 
                  if( $lightbox ){
                    echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
                    echo cbv_get_image_tag( $image, 'dfpageg1' );
                    echo "</a>";
                  }else{
                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
                    echo cbv_get_image_tag( $image, 'dfpageg1' );
                  }
                ?>
                </div>
              </figure>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="block-850">
        <div class="<?php echo $hasinline_class; ?>gallery-wrap clearfix">
          <div class="gallery gallery-columns-2">
              <?php foreach( $galleries as $image ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                <?php 
                  if( $lightbox ){
                    echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
                    echo cbv_get_image_tag( $image, 'dfpageg1' );
                    echo "</a>";
                  }else{
                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
                    echo cbv_get_image_tag( $image, 'dfpageg1' );
                  }
                ?>
                </div>
              </figure>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endif; ?>
    <?php 
    }elseif( get_row_layout() == 'teksteditor' ){ 
    $beschrijving = get_sub_field('fc_teksteditor');
    ?>
    <div class="block-850">
      <div class="dfp-text-module clearfix">
        <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'poster' ){     
    $poster = get_sub_field('afbeeldingen');
    $video_url = get_sub_field('fc_videourl');
    $postersrc = !empty($poster)? cbv_get_image_src($poster, 'dft_poster'): '';
    ?> 
    <div class="block-1285">
      <div class="fl-fancy-ctlr">
        <div class="fl-fancy-module" >
          <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
          <?php if( $video_url ): ?>
          <a class="overlay-link" data-fancybox href="<?php echo $video_url; ?>"></a>
          <div class="fancy-border"></div>
          <span class="fl-video-play-cntlr">
            <i>
              <svg class="play-icon-svg" width="90" height="90" viewBox="0 0 90 90" fill="#fff">
                <use xlink:href="#play-icon-svg"></use> 
              </svg>
            </i>
          </span>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    <?php } ?>
    <div class="block-850">
      <div class="social-media">
        <div class="social-media-inr">
          <span><?php _e( 'Delen op', 'ballonvaren' ); ?>:</span>
          <ul class="reset-list">
            <li>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>">
                <i>
                  <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                    <use xlink:href="#facebook-svg"></use> 
                  </svg>
                </i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_text; ?>">
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
  </article>
</section>
<?php 
  $terms = get_the_terms(get_the_ID(), 'category');
  $slugs = array();
  if( !empty($terms) ){
    foreach( $terms as $term ){
      $slugs[] = $term->slug;
    }
    $pQuery = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=> 3,
    'orderby' => 'date',
    'order'=> 'asc',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
          'field'    => 'slug',
          'terms'    => $slugs,
      )
    )

  ));
?>
<?php if( $pQuery->have_posts() ): ?>
<section class="blog-grds-sec news-details white-sky-bg-cntlr">
  <div class="white-sky-bg">
      <span class="white-sky-inline-bg hide-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/white-sky-bg.png');"></span>
      <span class="white-sky-inline-bg show-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/xs-white-sky-bg.png');"></span>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-grds-inr">
          <div class="blog-grd-top-img hide-sm">
            <img src="<?php echo THEME_URI; ?>/assets/images/blog-grd-top-img.png">
          </div>
          <div class="xs-blog-grd-top-img show-sm">
            <img src="<?php echo THEME_URI; ?>/assets/images/xs-blog-grd-top-img.svg">
          </div>
          <div class="blog-grd-top-lft-img show-sm">
            <img src="<?php echo THEME_URI; ?>/assets/images/nd-top-lft-img.png">
          </div>
          <div class="sec-entry-header">
            <h3 class="fl-h3"><?php _e( 'Gerelateerde Artikelen', 'ballonvaren' ); ?></h3>
          </div>
          <div class="blog-grds-item-ctlr dfpBlogSlider clearfix">
            <?php 
                while(have_posts()): the_post(); 
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
                  <div class="post-date hide-md">
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
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
<?php endif; wp_reset_postdata(); } ?>
<?php get_footer();?>
