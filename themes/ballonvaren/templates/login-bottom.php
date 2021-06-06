<?php if( !is_user_logged_in() && is_account_page() && !isset($_GET['action']) ){ ?>
<section class="login-btm-section">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="login-info-crtl">
				<div class="login-info-inr loginInfoSlider">
					<div class="loginInfoSlideItem">
						<div class="loginInfoItem">
							<div class="loginInfoHdr mHc">
								<span>01</span>
								<h5 class="fl-h5">Vragen?</h5>
							</div>
							<p>We maken tijd om voor uw reservatie op àl uw vragen te antwoorden</p>
						</div>
					</div>
					<div class="loginInfoSlideItem">
						<div class="loginInfoItem">
							<div class="loginInfoHdr mHc">
								<span>02</span>
								<h5 class="fl-h5">Briefing</h5>
							</div>
							<p>We geven voor het opstijgen een uitgebreide briefing</p>
						</div>
					</div>
					<div class="loginInfoSlideItem">
						<div class="loginInfoItem">
							<div class="loginInfoHdr mHc">
								<span>03</span>
								<h5 class="fl-h5">Hoog comfort</h5>
							</div>
							<p>U vaart mee in ruime comfortabele manden</p>
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