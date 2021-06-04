<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<div class="page-title">
	<h1>Jouw account</h1>
</div>
<?php 
if( isset($_GET['action']) && $_GET['action']=='registration'):
	global $woocommerce; global $data_reg;
	$setedtelephone = isset( $_POST["reg_telefoon"])? $_POST["reg_telefoon"]:'';
    $countries_obj   = new WC_Countries();
    //$countries   = $countries_obj->__get('countries');
    $countries = $countries_obj->get_allowed_countries();
?>
<div class="register-nextstep woocommerce-billing-fields" id="form_next">
	<div class="register-top-title">
		<h3>NIEUW BIJ BALLONVAREN?</h3>
		<p>Vul hier je e-mailadres in als je nog niet beschikt over een account. Indien gewenst, kan je in de volgende stap een account aanmaken.</p>
	</div>
	<?php if($data_reg): ?>
	
	<?php endif; ?>
    <div class="register-field-error">
		<div class="contact-er-msg">
          <span>
            <i><svg class="error-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="#ffffff">
            <use xlink:href="#error-icon-svg"></use> </svg></i>
            Oh snap! Het formulier lijkt niet correct!</span>
        </div>
	</div>
	<div class="register-title">
		<h3>Persoonlijke gegevens</h3>
	</div>
	<form id="regiter_action_form" action="" method="post">
		<input type="hidden" name="action" value="ajax_register_save">
		<div class="type-order-format">
			<p class="form-row form-row-wide" id="billing_order_type_field">
				<label for="billing_order_type">Type bestelling</label>
				<span class="woocommerce-input-wrapper">
					<span><input type="radio" checked id="private" name="billing_order_type" value="Particulier">&nbsp;Particulier</span>
					<span><input type="radio" id="for_business" name="billing_order_type" value="Zakelijk">&nbsp;Zakelijk</span>
				</span>
			</p>
			<p class="form-row form-row-wide" id="billing_salutation_field">
				<label for="billing_salutation">Aanhef*</label>
				<span class="woocommerce-input-wrapper">
					<span><input type="radio" name="billing_salutation" value="Mevrouw">&nbsp;Mevrouw</span>
					<span><input type="radio" checked name="billing_salutation" value="De heer">&nbsp;De heer</span>
				</span>
			</p>
		</div>
		<div class="woocommerce-billing-fields__field-wrapper">
			<p class="form-row form-row-first" id="billing_first_name_field">
				<label for="billing_first_name" class="">Naam</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Voornaam" value="<?php echo isset($_POST['billing_first_name'])? $_POST['billing_first_name']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-last" id="billing_last_name_field">
				<label for="billing_first_name" class="">&nbsp;</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Naam" value="<?php echo isset($_POST['billing_last_name'])? $_POST['billing_last_name']:'';?>" required>
				</span>
			</p>
			<div id="extra_fields"></div>
			<?php 
				woocommerce_form_field('billing_country', array(
			    'type'       => 'select',
			    'class'      => array( 'country_to_state country_select' ),
			    'label'      => __('Land'),
			    'placeholder'    => __('Selecteer Land'),
			    'options'    => $countries
			    )
			    );
			?>
			<p class="form-row form-row-first billing_postcode" id="billing_postcode_field">
				<label for="billing_postcode" class="">Postcode</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Bijv. 9300" value="<?php echo isset($_POST['billing_postcode'])? $_POST['billing_postcode']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-last billing_city" id="billing_city_field">
				<label for="billing_city" class="">Gemeente</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Bijv. 9300" value="<?php echo isset($_POST['billing_city'])? $_POST['billing_city']:'';?>" required>
				</span>
			</p>

			<p class="form-row form-row-first billing_address_1" id="billing_address_1_field">
				<label for="billing_address_1" class="">Straatnaam</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Bijv. Stationstraat" value="<?php echo isset($_POST['billing_address_1'])? $_POST['billing_address_1']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-last billing_house" id="billing_house_field">
				<label for="billing_house" class="">Huisnummer en bus</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_house" id="billing_house" placeholder="Bijv. 113-C" value="<?php echo isset($_POST['billing_house'])? $_POST['billing_house']:'';?>" autocomplete="house-number">
				</span>
			</p>
			<p class="form-row form-row-wide billing_address_2" id="billing_address_2_field">
				<label for="billing_address_2" class="">Extra adresregel</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="" value="<?php echo isset($_POST['billing_address_2'])? $_POST['billing_address_2']:'';?>" autocomplete="address-line2">
				</span>
			</p>
			<div class="billing-address-wrap">
				<h3>Factuuradres</h3>
				<p class="same-as-shipping-address">
					<input type="checkbox" name="is_shipping_address" id="is_shipping_address" value="0">&nbsp;Hetzelfde als bezorgadres
				</p>
				<!-- Start Shipping fields -->
				<div class="show_shipping_fields">
					<p class="form-row form-row-first" id="shipping_first_name_field">
						<label for="shipping_first_name" class="">Naam</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="Voornaam" value="<?php echo isset($_POST['shipping_first_name'])? $_POST['shipping_first_name']:'';?>">
						</span>
					</p>
					<p class="form-row form-row-last" id="shipping_last_name_field">
						<label for="shipping_last_name" class="">&nbsp;</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="Naam" value="<?php echo isset($_POST['shipping_last_name'])? $_POST['shipping_last_name']:'';?>">
						</span>
					</p>
					<p class="form-row form-row-first shipping_postcode" id="shipping_postcode_field">
						<label for="shipping_postcode" class="">Postcode</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Bijv. 9300" value="<?php echo isset($_POST['shipping_postcode'])? $_POST['shipping_postcode']:'';?>">
						</span>
					</p>
					<p class="form-row form-row-last shipping_city" id="shipping_city_field">
						<label for="shipping_city" class="">Gemeente</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="Bijv. 9300" value="<?php echo isset($_POST['shipping_city'])? $_POST['shipping_city']:'';?>">
						</span>
					</p>

					<p class="form-row form-row-first shipping_address_1" id="shipping_address_1_field">
						<label for="shipping_address_1" class="">Straatnaam</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Bijv. Stationstraat" value="<?php echo isset($_POST['shipping_address_1'])? $_POST['shipping_address_1']:'';?>">
						</span>
					</p>
					<p class="form-row form-row-last shipping_house" id="shipping_house_field">
						<label for="shipping_house" class="">Huisnummer en bus</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_house" id="shipping_house" placeholder="Bijv. 113-C" value="<?php echo isset($_POST['shipping_house'])? $_POST['shipping_house']:'';?>" autocomplete="house-number">
						</span>
					</p>
					<p class="form-row form-row-wide shipping_address_2" id="shipping_address_2_field">
						<label for="shipping_address_2" class="">Extra adresregel</label>
						<span class="woocommerce-input-wrapper">
							<input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="" value="<?php echo isset($_POST['shipping_address_2'])? $_POST['shipping_address_2']:'';?>" autocomplete="address-line2">
						</span>
					</p>
				</div><!-- End Shipping fields -->
				<p class="form-row form-row-wide" id="billing_email_2_field">
					<label for="billing_email_2" class="">E-mailadres</label>
					<span class="woocommerce-input-wrapper">
						<input type="email" class="input-text " name="billing_email_2" id="billing_email_2" placeholder="" value="<?php echo isset($_POST['billing_email_2'])? $_POST['billing_email_2']:'';?>" placeholder="Bijv. jan@domein.be" required>
					</span>
				</p>
				<p class="form-row form-row-first billing_gsm_number" id="billing_address_1_field">
					<label for="billing_gsm_number" class="">GSM nummer</label>
					<span class="woocommerce-input-wrapper">
						<input type="text" class="input-text " name="billing_gsm_number" id="billing_gsm_number" placeholder="Bijv. 0493 20 36 20" value="<?php echo isset($_POST['billing_gsm_number'])? $_POST['billing_gsm_number']:'';?>" autocomplete="gsm-number">
					</span>
				</p>
				<p class="form-row form-row-last billing_phone" id="billing_phone_field">
					<label for="billing_phone" class="">Telefoon</label>
					<span class="woocommerce-input-wrapper">
						<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Bijv. 09 224 61 11" value="<?php echo isset($_POST['billing_phone'])? $_POST['billing_phone']:$setedtelephone;?>" autocomplete="tel" required>
					</span>
				</p>
			</div>
			<div class="clearfix"></div>
			<div class="login-info">
				<!-- <p><input type="checkbox" name="create_account" value="1" checked>&nbsp;Account aanmaken</p> -->
				<h3>Inloggegevens</h3>
				<p>Het e-mailadres en wachtwoord zijn nodig om toegang te krijgen tot de gegevens. Ook zullen we je via dit e-mailadres op de hoogte houden van de status van bestellingen.</p>
				<p class="form-row form-row-wide" id="billing_email_field">
					<label for="billing_email" class="">E-mailadres</label>
					<span class="woocommerce-input-wrapper">
						<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Bijv. jan@domein.be" value="<?php echo isset($_POST['billing_email'])? $_POST['billing_email']:'';?>" autocomplete="email username" required>
					</span>
					
					<?php if( isset($data_reg) && array_key_exists('exists_email', $data_reg) ){printf('<span class="error-valid error-confirm_password">%s</span>', $data_reg['exists_email'] );}?>
				</p>
				<p class="form-row form-row-first password" id="password_field">
					<label for="re_password" class="">Wachtwoord</label>
					<span class="woocommerce-input-wrapper">
						<input type="password" class="input-text " name="password" id="re_password" placeholder="Minimaal 8 karakters"  autocomplete="password" required>
					</span>
					<span class="error-valid error-rel_password"></span>
				</p>
				<p class="form-row form-row-last confirm_password" id="confirm_password_field">
					<label for="confirm_password" class="">Wachtwoord bevestigen</label>
					<span class="woocommerce-input-wrapper">
						<input type="password" class="input-text " name="confirm_password" id="confirm_password" autocomplete="confirm-password" required>
					</span>
					<span class="error-valid error-confirm_password"></span>
				</p>
			</div>
			<div class="personal-info">
				<h3>Persoonlijke gegevens</h3>
				<div class="form-row form-row-wide" id="billing_personal_recom">
					<span class="woocommerce-input-wrapper">
						<input type="radio" id="personal_recom" name="billing_personal_recom" value="Persoonlijke aanbevelingen">&nbsp;Persoonlijke aanbevelingen
					</span>
					<p>Informatie en aanbevelingen over diensten en artikelen die passen bij jouw eerdere bestellingen. En soms vragen we om je mening over onze producten en diensten.</p>
				</div>
				<div class="form-row form-row-wide" id="billing_acttion_insp">
					<span class="woocommerce-input-wrapper">
						<input type="radio" id="acttion_insp" name="billing_acttion_insp" value="Acties en inspiratie">&nbsp;Acties en inspiratie
					</span>
					<p>Voordeel- en winacties, bergen inspiratie, maar ook verrassende aanbevelingen op basis van wat je bekijkt en koopt. Zo loop je nooit iets mis!</p>
				</div>
			</div>
			<div class="register-btn">
				<div class="reg-btn-crtl">
					<p>
						<button type="submit" name="user-register" id="register_action_btn" value="<?php esc_attr_e( 'Doorgaan', 'woocommerce' ); ?>"><?php esc_html_e( 'Doorgaan', 'woocommerce' ); ?></button>
						<input type="hidden" name="user_register_nonce" value="<?php echo wp_create_nonce('user-register-nonce'); ?>"/>
					</p>
					<p class="form-row html-text">
						<span>Koop veilig & vertrouwd</span>
					</p>
				</div>
			</div>
		</div>
	</form>
	<div class="register-pay-logo-wrap">
		<h3 class="payment-title">Veilig betalen kan bij ons met</h3>
		<div class="payment-logo-crtl">
			<ul class="reset-list">
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-01.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-02.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-03.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-05.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-04.svg"></li>
            </ul>
		</div>
	</div>
</div>
<?php else: ?>
<div class="login-register-wrap" id="login_register">
	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	<div class="u-columns col2-set" id="customer_login">

		<div class="u-column1 col-1">

	<?php endif; $losturl = wp_lostpassword_url();?>

			<h4><?php esc_html_e( 'Inloggen', 'woocommerce' ); ?></h4>
			<div><p>Welkom terug!</p></div>
			<form class="woocommerce-form woocommerce-form-login login" method="post">

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="username"><?php esc_html_e( 'E-mailadres', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="Bijv. jan@domein.be"/><?php // @codingStandardsIgnoreLine ?>
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="password"><?php esc_html_e( 'Wachtwoord', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" placeholder="Wachtwoord" />
				</p>
                <p class="woocommerce-LostPassword lost_password">
					<a href="#" id="lostpassword" data-link="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Wachtwoord vergeten?', 'woocommerce' ); ?></a>
				</p>
				<?php do_action( 'woocommerce_login_form' ); ?>
				
				<p class="form-row">
					<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
					</label>
					<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'DOORGAN', 'woocommerce' ); ?>"><?php esc_html_e( 'DOORGAN', 'woocommerce' ); ?></button>
				</p>
			
				<?php do_action( 'woocommerce_login_form_end' ); ?>

			</form>

	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

		</div>

		<div class="u-column2 col-2">

			<h4><?php esc_html_e( 'Nieuw bij Matheco?', 'woocommerce' ); ?></h4>
			<div class="signup-notification">
				<p>Vul hier je e-mailadres in als je nog niet beschikt over een account. Indien gewenst, kan je in de volgende stap een account aanmaken.</p>
			</div>
			<form method="post" action="?action=registration" class="woocommerce-form woocommerce-form-register register" id="mail_checker">
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email"><?php esc_html_e( 'telefoonnummer', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_telefoon" id="reg_telefoonnummer" autocomplete="telefoonnummer" placeholder="Bijv. 0493 20 36 20" required/>
				</p>
				<p class="woocommerce-form-row form-row">
					<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" id="register_next" name="register" value="<?php esc_attr_e( 'DOORGAN', 'woocommerce' ); ?>"><?php esc_html_e( 'DOORGAN', 'woocommerce' ); ?></button>
				</p>
			</form>

		</div>

	</div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
