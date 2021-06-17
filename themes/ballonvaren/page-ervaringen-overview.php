<?php 
/*Template Name: Ervaringen Overview*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('intro', $thisID);
$showhidegalerij = get_field('showhidegalerij', $thisID);
$galerij = get_field('galerij', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
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


<section class="experience-overview-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="experience-overview-cntlr">
          <?php if($intro): ?>
          <div class="page-entry-header">
            <?php 
              if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
              if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
            ?>
          </div>
          <?php endif; ?>
          <?php 
          $query = new WP_Query(array(
            'post_type' => 'ervaring',
            'posts_per_page'=> -1,
            'orderby' => 'date',
            'order'=> 'desc',

          ));
          if( $query->have_posts() ):
          ?>
          <div class="exprns-ovrvw-grid-cntlr">
            <?php 
                while($query->have_posts()): $query->the_post(); 
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
            <?php endwhile; ?>
          </div>
          <div class="fl-pagi-cntlr">
            <ul class="page-numbers">
              <li><a class="prev page-numbers" href="#">←</a></li>
              <li><span aria-current="page" class="page-numbers current">1</span></li>
              <li><a class="page-numbers" href="#">2</a></li>
              <li><a class="page-numbers" href="#">3</a></li>
              <li><a class="page-numbers" href="#">4</a></li>
              <li><span class="page-numbers dots">…</span></li>
              <li><a class="page-numbers" href="#">15</a></li>
              <li><a class="next page-numbers" href="#">→</a></li>
            </ul>
          </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
