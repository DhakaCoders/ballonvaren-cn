<?php 
/*Template Name: VIP*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$shortcode = get_field('shortcode', $thisID);
$sidebar = get_field('sidebarsec', $thisID);
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
<section class="innerpage-con-wrap" id="vip">
  <?php if(have_rows('inhoud')){  ?>
  <article class="default-page-con">
    <?php while ( have_rows('inhoud') ) : the_row();  ?>
      <?php 
      if( get_row_layout() == 'introductietekst' ){ 
        $title = get_sub_field('titel');
      ?>
      <div class="block-850">
        <div class="dfp-promo-module clearfix">
          <?php 
            if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title fl-h1">%s</strong></div>', $title); 
          ?>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'galerij' ){ 
        $galleries = get_sub_field('fc_afbeeldingen');
        $full_wide = get_sub_field('full_wide');
        $lightbox = get_sub_field('lightbox');
        $kolom = get_sub_field('kolom'); 
      ?>
        <?php if($full_wide): ?>
        <div class="block-1285">
          <div class="top-gallery-module">
            <div class="gallery-wrap has-inline-bg clearfix">
              <div class="gallery gallery-columns-2">
                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <div class="gallery-icon-img inline-bg" style="background: url('assets/images/dfp-img-13.jpg');"></div>
                    <img src="assets/images/dfp-img-13.jpg">
                  </div>
                </figure>

                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <div class="gallery-icon-img inline-bg" style="background: url('assets/images/dfp-img-08.jpg');"></div>
                    <img src="assets/images/dfp-img-08.jpg">
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="block-850">
          <div class="gallery-wrap has-inline-bg clearfix">
            <div class="gallery gallery-columns-2">
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('assets/images/dfp-img-02.jpg');"></div>
                  <img src="assets/images/dfp-img-02.jpg">
                </div>
              </figure>

              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('assets/images/dfp-img-03.jpg');"></div>
                  <img src="assets/images/dfp-img-03.jpg">
                </div>
              </figure>
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php }elseif( get_row_layout() == 'teksteditor' ){ 
        $beschrijving = get_sub_field('fc_teksteditor');
        ?>
        <div class="block-850">
          <div class="dfp-text-module clearfix">
            <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
          </div>
        </div>
      <?php }elseif( get_row_layout() == 'cta' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $fc_knop = get_sub_field('fc_knop');
      ?>
      <div class="block-1285">
        <div class="ballon-rides-module">
          <div class="ballon-rides-lft-top-img">
            <img src="assets/images/ballon-rides-lft-top-img.svg">
          </div>
          <div class="dfp-cta-module orange clearfix">
            <div class="cta-ctlr">
              <?php 
                if( !empty($fc_titel) ) printf('<h4 class="cta-title fl-h4">%s</h4>', $fc_titel);
                if( !empty($fc_tekst) ) echo wpautop( $fc_tekst );

                if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                  printf('<div class="cta-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'afbeelding' ){     
      $poster = get_sub_field('fc_afbeelding');
      $postertag = !empty($poster)? cbv_get_image_src($poster, 'dft_poster'): '';
      ?> 
      <div class="block-850">
        <div class="full-img-module">
          <div class="full-img">
            <?php echo $postertag; ?>
          </div>
        </div>
        
      </div>
      <?php } ?>
    <?php endwhile; ?>



    <div class="block-850">
      <div class="exprns-ovrvw-grid-module">
        <div class="exprns-ovrvw-grid-ctlr clearfix">
          <div class="exprns-ovrvw-item-wrap">
            <div class="exprns-ovrvw-item-cntlr">
              <div class="exprns-ovrvw-item mHc">
                <div class="exprns-ovrvw-item-img-cntlr">
                  <div class="exprns-ovrvw-item-img">
                    <img src="assets/images/exprns-ovrvw-item-img-001.jpg" alt="">
                  </div>
                </div>
                <div class="exprns-ovrvw-item-icon">
                  <i><svg class="quotation-icon" width="40" height="38" viewBox="0 0 40 38" fill="#2C113E">
                    <use xlink:href="#quotation-icon"></use> </svg>
                  </i>
                </div>
                <h6 class="exprns-ovrvw-item-title fl-h6 mHc1"><a href="#">Eveline Vernaeve</a></h6>
                <div class="exprns-ovrvw-item-desc mHc2">
                  <p>Nogmaals dank aan u en uw team voor de ballonvaart. Het was een leuke ervaring voor mijn echtgenoot en kinderen. We waren allemaal aangenaam verrast van de heel professionele aanpak!</p>
                </div>
                <div class="exprns-ovrvw-item-btn">
                  <a class="red-color-arrow-btn" href="#">
                    <span>LEES MEER</span>
                    <i><svg class="red-right-arrow" width="9" height="14" viewBox="0 0 9 14">
                      <use xlink:href="#red-right-arrow"></use> </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="exprns-ovrvw-item-wrap">
            <div class="exprns-ovrvw-item-cntlr">
              <div class="exprns-ovrvw-item mHc">
                <div class="exprns-ovrvw-item-img-cntlr">
                  <div class="exprns-ovrvw-item-img">
                    <img src="assets/images/exprns-ovrvw-item-img-001.jpg" alt="">
                  </div>
                </div>
                <div class="exprns-ovrvw-item-icon">
                  <i><svg class="quotation-icon" width="40" height="38" viewBox="0 0 40 38" fill="#2C113E">
                    <use xlink:href="#quotation-icon"></use> </svg>
                  </i>
                </div>
                <h6 class="exprns-ovrvw-item-title fl-h6 mHc1"><a href="#">Eveline Vernaeve</a></h6>
                <div class="exprns-ovrvw-item-desc mHc2">
                  <p>Nogmaals dank aan u en uw team voor de ballonvaart. Het was een leuke ervaring voor mijn echtgenoot en kinderen. We waren allemaal aangenaam verrast van de heel professionele aanpak!</p>
                </div>
                <div class="exprns-ovrvw-item-btn">
                  <a class="red-color-arrow-btn" href="#">
                    <span>LEES MEER</span>
                    <i><svg class="red-right-arrow" width="9" height="14" viewBox="0 0 9 14">
                      <use xlink:href="#red-right-arrow"></use> </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <?php } ?>
</section>
<?php get_footer();?>
