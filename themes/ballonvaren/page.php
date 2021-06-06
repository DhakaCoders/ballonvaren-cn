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