<?php 
/*Template Name: Boek Je Ballonvluch*/
get_header();
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
$sub_title = !empty($intro['subtitel']) ? '<span>'.$intro['subtitel'].'</span>' : '';
$shortcode = get_field('shortcode', $thisID);
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

<section class="boek-je-form-sec-wrp">
 <div class="boek-je-form-tp">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="contact-form-dsc-wrp">
        <div class="page-entry-header">
          <h1 class="fl-h1">Contacteer ons voor meer info<span>Consectetur sit velit neque.</span></h1>
          <p>Ornare pretium volutpat faucibus nibh suscipit dictum. Integer ut urna lacus etiam est.</p>
          <ul class="clearfix">
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Suspendisse faucibus.</li>
            <li>Tortor orci turpis nunc.</li>
          </ul>
          <p>Eleifend pellentesque tincidunt neque, dolor. Imperdiet malesuada est feugiat quis posuere vulputate.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eleifend pellentesque tincidunt neque, dolor. Imperdiet <br> malesuada est feugiat quis posuere vulputate sed aenean sed. </p>
        </div>
      </div>
      
      </div>
     </div>
    </div>
 </div>
  <div class="boek-je-form-bg-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-form-block clearfix">
            <div class="contact-form-lft">
              <div class="error-msg">
                <span>
                  <i><svg class="error-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
                  <use xlink:href="#error-msg-icon-svg"></use> </svg></i>
                  Oh snap! Het formulier lijkt niet correct!</span>
              </div>
              <div class="contact-form-wrp clearfix">
                <div class="wpforms-container">
                  <form class="wpforms-form needs-validation" novalidate>
                    
                    <div class="wpforms-field-container">
                      
                      <div class="wpforms-field XsNameField">
                        <label class="wpforms-field-label">Naam</label>
                        <input type="text" name="name" placeholder="Voornaam" required>
                      </div>
                      <div class="wpforms-field NameField">
                        <input type="text" name="name" placeholder="Naam" required>
                      </div>

                      <div class="wpforms-field  FullWidthField">
                        <label class="wpforms-field-label">telefoonnummer</label>
                        <input type="text" name="text" placeholder="Bijv. 0493 20 36 20" required>
                      </div>

                      <div class="wpforms-field FullWidthField">
                        <label class="wpforms-field-label">E-mailadres</label>
                        <input type="email" name="email" class="form-control" required>
                        <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                      </div>

                      <div class="wpforms-field wpforms-field-select">
                        <label class="wpforms-field-label" for="select1">Locatie</label>
                        <select class="selectpicker" id="select1" name="select1">
                          <option value="Locatie">Locatie</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>

                      <div class="wpforms-field wpforms-field-select-calendar">
                        <label class="wpforms-field-label" for="select1">DATUM</label>
                        <input type="date" name="date" placeholder="Datum">
                      </div>

                      <div class="wpforms-field wpforms-field-select">
                        <label class="wpforms-field-label" for="select1">Aantal volwassenen</label>
                        <select id="select1" class="selectpicker" name="select1">
                          <option value="Aantal volwassenen">Aantal volwassenen</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>

                      <div class="wpforms-field wpforms-field-select">
                        <label class="wpforms-field-label" for="select1">Aantal kinderen</label>
                        <select class="selectpicker" id="select1" name="select1">
                          <option value="Aantal kinderen">Aantal kinderen</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>

                      <div class="wpforms-field wpforms-field-textarea">
                        <label class="wpforms-field-label">extra info</label>
                        <textarea name="message" placeholder="Extra info"></textarea>
                        <div class="wpforms-field-description">
                          <p>Wij respecteren jouw <a href="#"> privacy.</a> Jouw gegevens worden altijd vertrouwelijk behandeld.</p>
                        </div>
                      </div>
                    </div><!-- end of .wpforms-field-container-->

                    <div class="wpforms-submit-container">
                      <button type="submit" name="submit" class="wpforms-submit">Boek je vlucht</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="contact-form-rgt">
              <div class="contact-form-info-cntlr">
                  <div class="boek-parachute-icon">
                    <img class="hide-sm" src="assets/images/boek-parachute-icon.svg">
                    <img class="show-sm" src="assets/images/boek-parachute-icon-xs.svg">
                  </div>
                  <div class="contact-form-info text-center">
                    <h4 class="fl-h4 contact-form-info-title-1">Ballonvaarten</h4>
                    <p>Ut purus ipsum, interdum quis libero et, tincidunt tincidunt ante.</p>
                    <a href="#" class="fl-transparent-btn">Ballonvaarten</a>
                  </div>
                </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
