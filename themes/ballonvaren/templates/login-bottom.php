<?php if( !is_user_logged_in() && is_account_page() && !isset($_GET['action']) ){ ?>
<section class="login-btm-section">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="login-info-crtl">
				<div class="login-info-inr">
					<div class="bn-process-grid-items bnProcessGridItemsSlider">
			            <div class="bn-process-grid-item mHc">
			              <div class="bn-process-item-hdr mHc1">
			                <span>01</span>
			                <h4 class="fl-h5 bn-process-grid-title">Vragen?</h4>
			              </div>
			              <p>We maken tijd om voor uw reservatie op àl uw<br> vragen te antwoorden</p>
			            </div>
			            <div class="bn-process-grid-item mHc">
			              <div class="bn-process-item-hdr mHc1">
			                <span>02</span>
			                <h4 class="fl-h5 bn-process-grid-title">Briefing</h4>
			              </div>  
			              <p>We geven voor het opstijgen een uitgebreide<br> briefing</p>
			            </div>
			            <div class="bn-process-grid-item mHc">
			              <div class="bn-process-item-hdr mHc1">
			                <span>03</span>
			                <h4 class="fl-h5 bn-process-grid-title">Hoog comfort</h4>
			              </div>  
			              <p>U vaart mee in ruime comfortabele<br> manden</p>
			            </div>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="white-sky-bg">
	<span class="white-sky-inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/white-sky-bg.png');"></span>
</div>
</section>



<?php } ?>