<?php 
global $product; 
$intro = get_field('introsec', $product->get_id());
$cta = get_field('ctasec', $product->get_id());
$gal = get_field('galerij', $product->get_id());
?>
<section class="review-sec">
  <div class="review-position-bg">
    <img src="<?php echo THEME_URI; ?>/assets/images/review-sec-cloud.png" alt="">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="eveline-vernaeve-cntlr">
            <div class="overons-msnry-grd-wrp clearfix">
              <div class="overons-msnry-grd-lft clearfix">
                <div class="overons-msnry-grd-cntlr">
                  <div class="review-hdr-top show-sm">
                    <div class="review-hdr">
                      <?php 
                        if( !empty($intro['titel']) ) printf('<h2 class="fl-h2 revw-hdr-title">%s</h2>', $intro['titel']); 
                        if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']); 
                      ?>
                    </div>
                  </div>
                  <?php if( $gal ): ?>
                  <?php if( !empty($gal['afbeelding_1']) ): ?>
                  <div class="overons-msnry-grd-item msnrytgi1">
                    <div class="overons-msnry-grd-item-cntlr">
                      <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gal['afbeelding_1']); ?>);"></div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($gal['afbeelding_2']) ): ?>
                  <div class="overons-msnry-grd-item msnrytgi2">
                    <div class="overons-msnry-grd-item-cntlr">
                      <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gal['afbeelding_2']); ?>);"></div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($gal['afbeelding_3']) ): ?>
                  <div class="overons-msnry-grd-item msnrytgi3">
                    <div class="overons-msnry-grd-item-cntlr">
                      <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gal['afbeelding_3']); ?>);"></div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($gal['afbeelding_4']) ): ?>
                  <div class="overons-msnry-grd-item msnrytgi4">
                    <div class="overons-msnry-grd-item-cntlr">
                      <div class="overons-msnry-grd-item-img inline-bg" style="background:url(<?php echo cbv_get_image_src($gal['afbeelding_4']); ?>);"></div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="overons-msnry-grd-rgt">
                <div class="review-hdr hide-sm">
                  <?php 
                    if( !empty($intro['titel']) ) printf('<h2 class="fl-h2 revw-hdr-title">%s</h2>', $intro['titel']); 
                    if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']); 
                  ?>
                </div>
                <div class="revws-buyer">
                  <?php 
                    comments_template( 'woocommerce/single-product/reviews' );
                  ?>
                </div>
                <div class="review-btn">
                  <a href="#" class="fl-cyan-btn revw-btn modal-toggle"><?php _e( 'Laat een beoordeling achter', 'ballonvaren' ); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php if( !empty($cta) && $cta['titel']): ?>
<section class="cadeaubonnen-page-link">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cadeaubonnen-page-link-bg">
          <div class="cadeaubonnen-pg-lnk-cntrl">
            <?php 
              if( !empty($cta['titel']) ) printf('<h4 class="fl-h4 cad-pg-lnk-title">%s</h4>', $cta['titel']);
              if( !empty($cta['beschrijving']) ) echo wpautop( $cta['beschrijving'] );
              $knop = $cta['knop'];
              if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                printf('<a class="fl-transparent-btn cad-pg-lnk-btn" href="%s" target="%s">%s</a>', $knop['url'], $knop['target'], $knop['title']); 
              }
            ?>
          </div>
            <i><img src="<?php echo THEME_URI; ?>/assets/images/absolute-ballon-3.svg" alt=""></i>
        </div> 
      </div>
    </div>
  </div>
</section>
<?php endif; ?>