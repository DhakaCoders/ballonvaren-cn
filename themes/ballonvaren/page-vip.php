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
  <article class="default-page-con">
    <div class="block-850">
      <div class="dfp-promo-module clearfix">
        <div>
          <strong class="dfp-promo-module-title fl-h1">VIP-Arrangement</strong>
        </div>
      </div>
    </div>
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

        <div class="gallery-wrap clearfix">
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
    <div class="block-850">
      <div class="dfp-text-module clearfix">
        <p>Uiteraard kennen wij naast een standaard arrangement, nóg exclusievere arrangementen:</p>
      </div>
    </div>
    <div class="block-850">
      <div class="dfp-text-module clearfix">
        <h2 class="fl-h2">Privé-vaart</h2>
        <p>Vanaf 2 personen. (Informeer naar voorwaarden en prijzen) Omdat wij verschillende formaten ballonnen hebben zijn wij zeer flexibel.</p>
        <p>Of u nu met 2 of met 40 passagiers bent, wij zorgen ervoor dat u als groep gevaren wordt. Het is dan ook mogelijk om bij in de buurt op te stijgen, uiteraard afhankelijk van de windrichting enz. Zeer leuk en origineel om eens met uw vrienden of familie te doen!</p>
      </div>
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

      <div class="gallery-wrap clearfix">
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
    <div class="block-850">
      <div class="dfp-text-module clearfix">
        <h2>Varen in een special-shape</h2>
        <p>We hebben een aantal speciale ballonnen. Ook hierin kunt u meevaren. Hieronder het aantal plaatsen per ‘Special Shape’ :</p>
        <p>Smurf ballon: 2 personen <br>Garfield ballon: 8 personen</p>
        <p>Mocht u geïnteresseerd zijn, neemt u dan vooral contact met ons op zodat we u meer kunnen vertellen over mogelijkheden en prijzen.</p>
        <h2>Love is in the air!</h2>
        <p>Vraag je vriend of vriendin op een originele manier ten huwelijk, of vier jouw huwelijksjubileum in de lucht! We zullen er een romantische vaart van maken.</p>
      </div>
      <div class="full-img-module">
        <div class="full-img">
          <img src="assets/images/single-img.jpg">
        </div>
      </div>
      
    </div>
    <div class="block-1285">
      <div class="ballon-rides-module">
        <div class="ballon-rides-lft-top-img">
          <img src="assets/images/ballon-rides-lft-top-img.svg">
        </div>
        <div class="dfp-cta-module orange clearfix">
          <div class="cta-ctlr">
            <h4 class="cta-title fl-h4">Ballonvaarten</h4>
            <p>Etiam vitae ultrices purus. Praesent sodales nisl vel mauris cursus viverra urna id.</p>
            <div class="cta-btn">
              <a class="fl-transparent-btn" href="#">Ballonvaarten</a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
</section>
<?php get_footer();?>
