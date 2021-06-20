<?php 
/*Template Name: kalender*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<!-- when  ".events-grid-sec" section will display none, then add "has-no-events" class to the off-days-events-grid-cntlr for add space in the bottom -->
<!-- like as----<div class="off-days-events-grid-cntlr has-no-events"></div> -->
<div class="off-days-events-grid-cntlr  ">
   <section class="off-days-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bv-kalender-entry-hdr-cntlr">
                <div class="page-entry-header">
                  <?php 
                    if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s%s</h1>', $page_title, $sub_title );
                    if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                  ?>
                </div>
            </div>
            <?php
            $showhide_vrije = get_field('showhide_vrije', HOMEID);
            if($showhide_vrije): 
            $dayoff = get_field('vrijedagen', HOMEID);
            if($dayoff):
            ?>
            <div class="bv-calender-sec-cntlr">
              <div class="bv-calender-inner">
                <div class="bv-calender-dsc">
                  <div class="bv-calender-dsc-inner  hide-sm">
                  <?php 
                    if( !empty($dayoff['titel']) ) printf('<h2 class="fl-h3  off-days-heading">%s</h2>', $dayoff['titel']);
                    if( !empty($dayoff['beschrijving']) ) echo wpautop( $dayoff['beschrijving'] );
                  ?>
                  </div>
                  <div class="bv-calnender">
                    <div class="bv-calender-iner">
                      <div class="calender-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/kalender.PNG');">
                        <span class="bv-clndr-absolute-img-4  show-sm"><img src="<?php echo THEME_URI; ?>/assets/images/bv-clndr-absolute-img-4.svg" alt=""></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bv-calender-img hide-sm">
                  <div class="bv-calender-img-innr">
                    <div class="inline-bg-img  inline-bg" style="background-image: url(<?php if(!empty($dayoff['afbeelding'])) echo cbv_get_image_src($dayoff['afbeelding']); ?>);">
                      <img src="<?php echo THEME_URI; ?>/assets/images/kalender-img.jpg" alt="">
                      <span class="bv-clndr-absolute-img-one"><img src="<?php echo THEME_URI; ?>/assets/images/absolute-ballon-1.svg" alt=""></span>
                      <span class="bv-clndr-absolute-img-two"><img src="<?php echo THEME_URI; ?>/assets/images/absolute-ballon-2.svg" alt=""></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
   </section>
   <section class="events-grid-sec">
      <div class="white-sky-bg">
           <span class="white-sky-inline-bg hide-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/white-sky-bg.png');">
           </span>
           <span class="white-sky-inline-bg show-sm" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/contact-form-xs-bg.png');"></span>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="events-grid-cntlr">
              <div class="events-grid-item-inner">
                <ul class="reset-list">
                  <li>
                    <div class="event-grid-item mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-grid-item mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-grid-item  mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-grid-item  mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-grid-item  mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>
                  <li class="hide-sm">
                    <div class="event-grid-item mHc">
                      <div class="event-grid-item-inr">
                        <h3 class="fl-h5  mHc2  event-grid-heading"><a href="#"> Sit elementum nibh libero ultrices pretium, est.</a></h3>
                        <div class="event-date">
                          <i>
                              <svg class="calender-icon-class" width="18" height="20" viewBox="0 0 18 20" fill="#EE3E15">
                                <use xlink:href="#calender-icon-svg"></use> 
                              </svg>
                          </i>
                          <span>27.04.2021</span>
                        </div>
                        <p>Duis ligula mauris, ultricies eget ligula vitae, porttitor consequat nibh.</p>
                      </div>
                    </div>
                  </li>     
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="pagination-cntlr">
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
          </div>
        </div>
      </div>
   </section>
</div>
<?php get_footer();?>