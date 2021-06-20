<?php get_header();?>
<?php if( !is_breadcrumbs() ): get_template_part('templates/breadcrumbs'); endif; ?>
  <?php if(have_rows('inhoud')){ 
    get_template_part('templates/innerpage');
  }else{ ?>
<?php if( !is_wc_page() ): ?>
<section class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bn-page-entry-hdr-cntlr">
          <h1 class="fl-h1"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="page-grd-sec-wrp">
    <?php if( is_wc_endpoint_url( 'orders' ) || is_wc_endpoint_url( 'edit-account' ) || (strpos($_SERVER['REQUEST_URI'], "winkelmandje") !== false) ){ ?>
      <div class="back-to-dashboard-btn-cntlr">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>"><?php _e( 'Terug naar dashboard', 'ballonvaren' ); ?></a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php if( is_checkout() ){ get_template_part('templates/checkout', 'top'); } ?>
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-wrap clearfix">
        	<?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</section>
<?php get_template_part('templates/login', 'bottom'); ?>
<?php get_footer();?>