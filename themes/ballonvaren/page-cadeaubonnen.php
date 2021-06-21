<?php 
/*Template Name: Cadeaubonnen*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="cadeaubonnen-overzicht-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cadeaubonnen-overzicht-page-entry-hdr">
          <div class="contact-form-dsc-wrp">
            <div class="page-entry-header">
              <?php 
                if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
                if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
              ?>
            </div>
          </div>
        </div>   
          <?php 
            $query = new WP_Query(array(
              'post_type' => 'product',
              'posts_per_page'=> -1,
              'orderby' => 'date',
              'order'=> 'desc',
              'tax_query' => array(
                  array(
                      'taxonomy' => 'product_cat',
                      'field' => 'slug',
                      'terms' => 'cadeaubonnen'
                      
                  ),
              ),

            ));
          if( $query->have_posts() ):
          ?>                         
        <div class="fl-products-cntlr cadeaubonnen-overzicht-cntrl">
          <ul class="reset-list clearfix products">
            <?php 
                while($query->have_posts()): $query->the_post(); 
                global $post, $product;
                $imgID = get_post_thumbnail_id($product->get_id());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): '';
                $package_type = get_field('_package_type', $product->get_id());
                $typeClass = '';
                if( !empty($package_type) ){
                  $typeClass = ' class="'.$package_type.'"';
                }
            ?>
            <li<?php echo $typeClass; ?>>
              <div class="fl-product-grd mHc">
                <div class="fl-product-grd-inr">
                  <div class="fl-pro-gift-cntlr inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/pro-grd-trans-img-01.png');">
                    <i><svg class="gift-icon" width="49" height="37" viewBox="0 0 49 37">
                      <use xlink:href="#gift-icon"></use> </svg>
                    </i>
                    <div class="fl-gift-price">
                      <?php 
                      $min_gift_price = $product->get_variation_regular_price( 'min');
                      echo wc_price($min_gift_price);
                      ?>
                    </div>
                    <span><?php _e( 'CADEAUBONNEN', 'woocommerce' ); ?></span>
                  </div>
                  <div class="fl-pro-grd-des mHc1">
                    <h4 class="fl-h5 fl-pro-grd-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="fl-pro-grd-price">
                      <?php echo $product->get_price_html(); ?>
                    </div>
                    <?php the_excerpt(); ?>
                    <div>
                    <a class="fl-cyan-btn fl-gift-btn" href="<?php the_permalink(); ?>"><?php _e( 'koop nu', 'woocommerce' ); ?></a>
                  </div>
                  </div>                      
                </div>
              </div>
            </li>
            <?php endwhile; ?> 
          </ul>  
        </div>  
        <?php endif; wp_reset_postdata(); ?>          
      </div>
    </div>
  </div>   
</section>
<?php get_footer();?>