<?php get_header();?>
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

<section class="page-grd-sec-wrp">
    <?php if( is_wc_endpoint_url( 'orders' ) ){ ?>
      <div class="back-to-dashboard-btn-cntlr"><a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>">Terug naar dashboard</a></div>
    <?php }elseif( strpos($_SERVER['REQUEST_URI'], "winkelmandje") !== false ){ ?>
      <div class="back-to-dashboard-btn-cntlr"><a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>">Terug naar dashboard</a></div>
    <?php }elseif( is_wc_endpoint_url( 'edit-account' ) ){ ?>
      <div class="back-to-dashboard-btn-cntlr show-sm"><a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>">Terug naar dashboard</a></div>
    <?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-wrap clearfix">
        	<?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/login', 'bottom'); ?>
<?php get_footer();?>