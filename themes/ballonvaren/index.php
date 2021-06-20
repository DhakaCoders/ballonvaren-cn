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
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="blog-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="news-overview-page-entry-hdr">
          <div class="contact-form-dsc-wrp">
	          <?php if($intro): ?>
	          <div class="page-entry-header">
	            <?php 
	              if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
	              if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
	            ?>
	          </div>
	          <?php endif; ?>
          </div>
        </div>  
        <?php 
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        ?>
        <div class="blog-grid-category">
          <ul class="clearfix reset-list">
            <li class="active"><a href="<?php echo get_permalink($thisID); ?>"><?php _e( 'alle', 'ballonvaren' ); ?></a></li>
            <?php 
	            $i = 1; foreach ( $terms as $term ) { 
	            if($term->slug !='uncategorized'):
	        ?>
            <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
            <?php endif; $i++; } ?>
          </ul>
        </div>  
        <?php } ?>   
        <div class="blog-grids-cntrl">
          <?php if(have_posts()): ?>
          <div class="blog-grid-items">
            <ul class="clearfix reset-list">
            <?php 
                while(have_posts()): the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): '';
                $categories = get_the_terms( get_the_ID(), 'category' );
            ?>
              <li class="spotlight">                
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
                        <i><svg class="red-right-arrow" width="7" height="11" viewBox="0 0 7 11">
                        <use xlink:href="#red-right-arrow"></use> </svg>
                        </i>
                      </a>
                    </div>
                  </div>  
                </div>  
              </li>
              <?php endwhile; ?>
            </ul>    
          </div>
          <?php 
          global $wp_query;
          if( $wp_query->max_num_pages > 1 ): 
          ?>
          <div class="fl-pagi-blog-cntrl">
            <div class="fl-pagination-ctlr">
            <?php
              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __('←'),
                'next_text' => __('→'),
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query->max_num_pages
              ) );
            ?>
            </div>
          </div>  
          <?php endif; ?>
          <?php else: ?>
            <div class="notfound"><?php _e( 'Geen resultaat', 'ballonvaren' ); ?>.</div>
          <?php endif; ?>
        </div>
      </div>  
    </div>
  </div>
</section>
<?php get_footer();?>
