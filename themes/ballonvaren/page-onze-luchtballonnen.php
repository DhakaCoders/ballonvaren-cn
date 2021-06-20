<?php 
/*Template Name: Onze Luchtballonnen*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('intro', $thisID);
$showhidegalerij = get_field('showhidegalerij', $thisID);
$galerij = get_field('galerij', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
?>
<?php get_template_part('templates/breadcrumbs'); ?>

<section class="bn-masonry-gallery-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if($intro): ?>
       <div class="bn-masonry-gallery-dsc-wrp">
          <div class="page-entry-header">
          <?php 
            if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
            if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
          ?>
          </div>
        </div> 
        <?php endif; ?>
        <?php if( $showhidegalerij ): ?>
        <div class="bn-masonry-gallery-cntlr">
          <?php if( $galerij ): ?>
          <ul class="ulc reset-list bn-masonry-gallery-grid">
            <?php foreach( $galerij as $glId ): ?>
            <li class="bn-masonry-gallery-grid-item">
              <div class="bn-gallery-grid-item-innr">
                <a data-fancybox="gallery" href="<?php echo cbv_get_image_src($glId); ?>">
                  <?php echo cbv_get_image_tag($glId, 'onzegallery'); ?>
                </a>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php if( $showhidegalerij ): ?>
      <div class="col-md-12">
        <div class="fl-pagination-ctlr">
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
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer();?>
