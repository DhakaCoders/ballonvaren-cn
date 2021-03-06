(function($) {


var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
  $('#mobile-nav').slideToggle(300);
});
  
//review popup
if($('.revw-btn').length){
  $('.revw-btn').on('click', function(e) {
    e.preventDefault();
    $( "<span id='show_error_popup' style='display:none'></span><div class='modal-overlay close-toggle' onclick='closePopup()'></div>" ).insertBefore( "#review_form" );
    $( '<button class="modal-close" onclick="closePopup()" href="#">X</button>' ).insertBefore( "#reply-title" );
    $('body').addClass('reviewPopupActive');
    $('#review_form_wrapper').addClass('is-visible');
    $('.revws-buyer').addClass('is-visible');
  });
}
if($('.close-toggle').length){
  $('.close-toggle').on('click', function(e) {
    e.preventDefault();
    console.log('check');
    $('body').addClass('reviewPopupActive');
    $( ".modal-overlay.close-toggle" ).remove();
    $( ".modal-close.close-toggle" ).remove();
    $('#review_form_wrapper').removeClass('is-visible');
    $('.revws-buyer').removeClass('is-visible');
  });
}

//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

if (windowWidth <= 576){
  if( $('.bnProcessGridItemsSlider').length ){
      $('.bnProcessGridItemsSlider').slick({
        dots: true,
        arrows:false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,      
      });
  }
}



if( $('.single-product .hasRelatedProduct').length ){
    $('.single-product .hasRelatedProduct').slick({
      dots: false,
      arrows:false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 3,      
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


$(".type-order-format .woocommerce-input-wrapper span").each(function(){
      $(this).append('<div class="radio-custom"></div>')
});
$(".billing-address-wrap .same-as-shipping-address,.login-info p:first-child,.form-row .woocommerce-form__label-for-checkbox,#billing_personal_recom .woocommerce-input-wrapper,#billing_acttion_insp .woocommerce-input-wrapper").each(function(){
      $(this).append('<div class="checkbox-custom"></div>')
});

// datepicker 
if( $('#additional_datum').length ){
  $( "#additional_datum" ).flatpickr({
    mode: "multiple",
    dateFormat: "d-m-Y",
    locale: "nl"
  });
}

if( $('#gift-card-amount').length ){
  $("#gift-card-amount").selectpicker();
}
if( $('#billing_country_field select').length ){
    $('#billing_country_field select').select2({
        //minimumResultsForSearch: -1,
        //placeholder: 'Select an option'
    });
}

if( $('#pa_locate').length ){
  $("#pa_locate").selectpicker();
}
if( $('#pa_aantal-volwassenen').length ){
  $("#pa_aantal-volwassenen").selectpicker();
}

if( $('#pa_aantal-kinderen').length ){
  $("#pa_aantal-kinderen").selectpicker();
}
if( $('.wpforms-container form select').length ){
    $('.wpforms-container form select').each(function(){
        $(this).selectpicker(); 
    });
}

//products counter
if( $('.qty').length ){
  $('.qty').each(function() {
    var spinner = $(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.plus'),
      btnDown = spinner.find('.minus'),
      min = 1,
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });

}

if( $('.qty1').length ){
  $('.qty1').each(function() {
    var spinner = $(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.plus'),
      btnDown = spinner.find('.minus'),
      min = 1,
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });

}

if( $('.main-img-crtl').length ){
   $('.main-img-crtl').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay:false,
    adaptiveHeight: true,
    asNavFor: '.thumbnails-cntlr .thumbnails',
     prevArrow: $('.fl-singgle-pro-prev'),
    nextArrow: $('.fl-singgle-pro-next'),
  });
}


if( $('.thumbnails-cntlr .thumbnails').length ){
  $('.thumbnails-cntlr .thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-img-crtl',
    dots: false,
    arrows: false,
    infinite:false,
    autoplay:false,
    focusOnSelect: true,
    responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
  });
}

/**
Slick slider
*/


if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field').addClass('wpforms-has-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}


if (windowWidth <= 767) {
    $('.ftr-top-col h6').on('click', function(){
      $(this).toggleClass('active');
      $(this).parent().siblings().find('h6').removeClass('active');
      $(this).parent().find('.ftr-menu-des').slideToggle(300);
      $(this).parent().siblings().find('.ftr-menu-des').slideUp(300);
    });

}

if (windowWidth <= 992){
  if( $('.ftrTpSecSlider').length ){
    $('.ftrTpSecSlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
    });
  }
}

if (windowWidth <= 640){
  if( $('.exprnsSlider').length ){
    $('.exprnsSlider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
}


if( $('.humbergar').length ){
  $('.humbergar').click(function(){
    $('body').toggleClass('allWork');
    $('.xs-mobile-menu-cntlr').slideToggle(300);
  });
}
if (windowWidth <= 992){
    if( $('li.menu-item-has-children > a').length ){
      $('li.menu-item-has-children > a').click(function(e){
       e.preventDefault();
       $(this).next().slideToggle(300);
       $(this).parent().toggleClass('sub-menu-arrow');
     });
    }
}
if (windowWidth <= 992){
  if($('.xs-lang-icon').length){
    $('.xs-lang-icon').click(function(){
      $(this).parent().toggleClass('xs-lang');
    });
  }
}

if(windowWidth <= 768){
  if( $('.dfpBlogSlider').length ){
    $('.dfpBlogSlider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  }
}

$("#register_next").prop("disabled",true);
$("#reg_telefoonnummer").bind('blur keyup change click', function(){
  if(isValidNumber($(this).val())){
    $(this).css({"border": "0px solid red", "color": "#000"});
    $("#register_next").prop("disabled",false);
  }else{
    $(this).css({"border": "1px solid red", "color": "red"});
    $("#register_next").prop("disabled",true);
  }
});

$("#for_business").on('change', function(){
var html = '<p class="form-row form-row-wide" id="billing_company_field">' +
        '<label for="billing_company" class="">Bedrijfsnaam</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Bedrijfsnaam">' +
        '</span>' +
      '</p>' +
      '<p class="form-row form-row-wide" id="billing_btw_nummer_field">' +
        '<label for="billing_btw_nummer" class="">BTW-nummer</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_btw_nummer" id="billing_btw_nummer" placeholder="BTW-nummer" required>' +
        '</span>' +
      '</p>'+
      '<p class="form-row form-row-wide" id="billing_btw_nummer_field">' +
        '<label for="billing_reference" class="">Referentie</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_reference" id="billing_reference" placeholder="Referentie" required>' +
        '</span>' +
      '</p>';

  $("#extra_fields").html(html);
});

$("#private").on('change', function(){
  var html = '';
  $("#extra_fields").empty(html);
});


// shipping field show/hide

//$(".hide-account-title .show_shipping_fields input.input-text").prop('required', true);
$("#is_shipping_address").on('change',function(){
   var ischecked= $(this).is(':checked');
    if(ischecked){
      //$(".hide-account-title .show_shipping_fields input.input-text").prop('required', false);
     $(".hide-account-title .show_shipping_fields").hide();
    }else{
      $(".hide-account-title .show_shipping_fields").show();
      //$(".hide-account-title .show_shipping_fields input.input-text").prop('required', true);
    }
 }); 

// Registration form validation
$("#re_password").bind('blur keyup change', function(){
  $("#register_action_btn").attr('disabled','disabled');
  var pass = $('#re_password').val();
  //check the strings
  if(pass.length >= 8){
    $('.error-rel_password').text('');
    $(this).css({"border": "2px solid #F3F3F3", "color": "#9EA5AB"});
  }else{
    $('.error-rel_password').text('Wachtwoord zou moeten minimaal 8 karakters');
    $(this).css({"border": "2px solid #D17181", "color": "#D17181"});
    $("#register_action_btn").attr('disabled','disabled');
  }
});


$("#confirm_password").bind('blur keyup change click', function(){
  $("#register_action_btn").prop("disabled",false);
    var pass = $('#re_password').val();
    var confpass = $(this).val();
    //check the strings
    if(pass == confpass){
    //if both are same remove the error and allow to submit
    $('.error-confirm_password').text('');
    $(this).css({"border": "2px solid #F3F3F3", "color": "#9EA5AB"});
    $("#register_action_btn").prop("disabled",false);
    }else{
    //if not matching show error and not allow to submit
    $('.error-confirm_password').text('Wachtwoord komt niet overeen');
    $(this).css({"border": "2px solid #D17181", "color": "#D17181"});
    $("#register_action_btn").prop("disabled",true);
    }
});

/* Checkout field show/hide */
if ($("#billing_order_type_Zakelijk").is(":checked")) {
    $('#billing_company_field').addClass('show-company');
    $('#vat_number_field').addClass('show-vat_number');
    $('#billing_reference_field').addClass('show-reference');
}
$("#billing_order_type_Zakelijk").on('change', function(){
    if ($(this).is(":checked")) {
        $('#billing_company_field').addClass('show-company');
        $('#vat_number_field').addClass('show-vat_number');
        $('#billing_reference_field').addClass('show-reference');
    }
});
$("#billing_order_type_Particulier").on('change', function(){
    if ($(this).is(":checked")) {
        $('#billing_company_field').removeClass('show-company');
        $('#vat_number_field').removeClass('show-vat_number');
        $('#billing_reference_field').removeClass('show-reference');
    }
});


// Coupon code triger
$("#apply_coupon_code").click(function(){
    var couponCode = $('#coupon_code_enter').val();
    $("body .checkout_coupon.woocommerce-form-coupon input#coupon_code").val(couponCode)
    $(".checkout_coupon button").submit();

});

//Masonry
$(window).load(function(){
    if( $('.bn-masonry-gallery-grid').length ){
      $('.bn-masonry-gallery-grid').masonry({
        // options
        itemSelector: '.bn-masonry-gallery-grid-item',
      }).masonry('layout');
    };
    if( $('.faq-accordion-wrp.cbvmyaccount ul').length ){
      $('.faq-accordion-wrp.cbvmyaccount > ul').masonry({
        // options
        itemSelector: '.faq-accordion-wrp.cbvmyaccount > ul > li',
      }).masonry('layout');
    };
});

$('body').on('click', '.pgajax li a', function(e){
    e.preventDefault();
    var page = $(this).attr('data-page');
    var t = this;
    $('.bn-masonry-gallery-cntlr').addClass('loading-images');
    setTimeout(function(){ 
        $('.bn-masonry-gallery-cntlr ul').hide();
        $('.bn-masonry-gallery-cntlr ul[data-page="'+page+'"]').show();
        
        $('.fl-pagination-ctlr ul li').removeClass('currentItem');
        $('.fl-pagination-ctlr ul li a').removeClass('current');
        $(t).addClass('current');
        $(t).parent().addClass('currentItem');
          $('.bn-masonry-gallery-grid').masonry({
            // options
            itemSelector: '.bn-masonry-gallery-grid-item',
          }).masonry('layout');
        $('.bn-masonry-gallery-cntlr').removeClass('loading-images'); 

        $('html, body').animate({
            scrollTop: $("#bn-masonry-gallery-cntlr").offset().top - 50
        }, 0);

    }, 1000);
    
//review popup
/*if($('#modal_comment').length){
  $('#modal_comment').on('click', function(e) {
    e.preventDefault();
    console.log('d');
    $( "<span id='show_error_popup'></span><div class='modal-overlay close-toggle' onclick='closePopup()'></div>" ).insertBefore( "#review_form" );
    $( '<button class="modal-close" onclick="closePopup()" href="#">X</button>' ).insertBefore( "#reply-title" );
    $('#review_form_wrapper').addClass('is-visible');
  });
}*/

/*  $(this).parents('.eena-pagination-wrp').removeClass('initLoad').addClass('npageLoad');
  $('.pgajax li').removeClass("prev1 prev2 prev3 next1 next2 next3");
      
  $(this).parent().prev().addClass('prev1');
  $(this).parent().prev().prev().addClass('prev2');
  $(this).parent().prev().prev().prev().addClass('prev3');

  $(this).parent().next().addClass('next1');
  $(this).parent().next().next().addClass('next2');
  $(this).parent().next().next().next().addClass('next3');
  
  $('.pgajax li a.current').parent().slice(2).addClass("pitem-active");*/
  //$(this).parent().slice(2).addClass("pitem-active");
});

jQuery('body').on('wc_cart_emptied', function(){
  location.reload();
  //console.log('wc_cart_emptied triggered');
});

var txt1 = $('.register-nextstep form').find('span.error-valid').text();
var txt2 = $('.woocommerce-edit-account-crtl form').find('span.error-valid').text();
//$('.register-nextstep form').find('span.error-valid').parents('p.form-row').addClass('hasError');
//$('.woocommerce-edit-account-crtl form').find('span.error-valid').parents('p.form-row').addClass('hasError');

$('.register-nextstep form span.error-valid').each(function(){
    if ($(this).is(':empty')){
        $(this).parents('p.form-row').removeClass('hasError');
    }else{
        $(this).parents('p.form-row').addClass('hasError');
    }
});
$('.woocommerce-edit-account-crtl form span.error-valid').each(function(){
    if ($(this).is(':empty')){
        $(this).parents('p.form-row').removeClass('hasError');
    }else{
        $(this).parents('p.form-row').addClass('hasError');
    }
});


$('.register-nextstep form input#is_shipping_address').trigger('click');
$('.register-nextstep form p.form-row.required-field input,.woocommerce-edit-account-crtl form p.form-row.required-field input').blur(function(){
    if( $(this).val().length === 0 ) {
        $(this).parents('p.form-row').addClass('hasError');
    }else{
        $(this).parents('p.form-row').removeClass('hasError');
    }
});

$(".single-product .product.type-product .onsale").prependTo(".single-product .product.type-product .woocommerce-product-gallery");

// Product review pagination
var num = $("ol.commentlist").find("li").length;
if (num > 1) {
    var num_cols = 0;
    num_cols = num/3;
    
    //var num_cols = (num/3),
    var container = $('ol.commentlist'),
    listItem = 'li',
    listClass = 'sub-list';
    container.each(function() {
        var items_per_col = new Array(),
        items = $(this).find(listItem),
        min_items_per_col = Math.floor(items.length / num_cols),
        difference = items.length - (min_items_per_col * num_cols);
        for (var i = 0; i < num_cols; i++) {
            if (i < difference) {
                items_per_col[i] = min_items_per_col + 1;
            } else {
                items_per_col[i] = min_items_per_col;
            }
        }
        for (var i = 0; i < num_cols; i++) {
            var dataPage = i+1;
            if( i == 0 ){
                $(this).append($('</ul ><ul data-page="'+dataPage+'">').addClass(listClass));
            }else{
                $(this).append($('</ul ><ul data-page="'+dataPage+'" style="display:none">').addClass(listClass));
            }
            
            for (var j = 0; j < items_per_col[i]; j++) {
                var pointer = 0;
                for (var k = 0; k < i; k++) {
                    pointer += items_per_col[k];
                }
                $(this).find('.' + listClass).last().append(items[j + pointer]);
            }
        }
    });
    
    if(num_cols % 1 === 0){
      // int
    } else{
      // float
      num_cols = Math.floor(num_cols)
      num_cols = (num_cols + 1);
    }
    var output= '';
    output +='<ul class="page-numbers previewajax" data-total="'+num_cols+'">';
    for (var i = 1; i <= num_cols; i++) {
        if( i == 1 ){
            output +='<li class="currentItem LitemNo-'+i+'" data-page="'+i+'"><a href="#" class="page-numbers current LaitemNo-'+i+'" data-page="'+i+'">'+i+'</a></li>';  
        }else{
            output +='<li class="LitemNo-'+i+'" data-page="'+i+'"><a href="#" class="page-numbers LaitemNo-'+i+'" data-page="'+i+'">'+i+'</a></li>';
        }
        
    }
    output +='<ul>';
    $('<div class="fl-pagination-ctlr">'+output+'</div>').insertAfter('.commentlist');
        
    $('body').on('click', '.previewajax li a', function(e){
        e.preventDefault();
        var rpage = $(this).attr('data-page');
        var tt = this;
        setTimeout(function(){ 
            $('ol.commentlist ul').hide();
            $('ol.commentlist ul[data-page="'+rpage+'"]').show();
            
            $('.fl-pagination-ctlr ul li').removeClass('currentItem');
            $('.fl-pagination-ctlr ul li a').removeClass('current');
            $(tt).addClass('current');
            $(tt).parent().addClass('currentItem');
    
            $('html, body').animate({
                scrollTop: $("ol.commentlist").offset().top - 50
            }, 0);
    
        }, 1000);
    });
}
})(jQuery);

jQuery( function($){
     /*global wc_single_product_params*/
    if ( typeof wc_add_to_cart_variation_params === 'undefined' ) {
    return false;
  }
  
  // Variation selection error message
    $('#show_error').hide();
    $('.single_add_to_cart_button').on('click',function(e){
      if ( $( this ).is('.disabled') ) {
        e.preventDefault();
        if ( $( this ).is('.wc-variation-is-unavailable') ) {
      $('#show_error').show();
            $('#show_error').html(msgHtmlFormat(wc_add_to_cart_variation_params.i18n_unavailable_text));
            $('html, body').animate({
              scrollTop: $('.header-inr').offset().top
            }, 500);
    }else if ( $( this ).is('.wc-variation-selection-needed') ) {
            $('#show_error').show();
            $('#show_error').html(msgHtmlFormat(wc_add_to_cart_variation_params.i18n_make_a_selection_text));
            $('html, body').animate({
              scrollTop: $('.header-inr').offset().top
            }, 500);
          /*setTimeout(function () {
            $('#show_error').hide();
          }, 3000);*/
        }
    return false;
      }
    });
    
    // Revew popup error message
    $('#show_error_popup').hide();
  $( 'body.single-product #respond #submit' ).on( 'click', function() {
    var $rating = $( this ).closest( '#respond' ).find( '#rating' ),
        $textare = $( this ).closest( '#respond' ).find( '#comment' ),
        $author = $( this ).closest( '#respond' ).find( '#author' ),
        $email = $( this ).closest( '#respond' ).find( '#email' ),
      rating  = $rating.val(),
      textare  = $textare.val(),
      author  = $author.val(),
      email  = $email.val(),
      reviewPopup = false;
        
    if ( $rating.length > 0 && ! rating && wc_single_product_params.review_rating_required === 'yes' ) {
            reviewPopup = true;
    }
    if ( $textare.length > 0 && ! textare ) {
            reviewPopup = true;
    }
    if ( $author.length > 0 && ! author ) {
            reviewPopup = true;
    }
    if ( $email.length > 0 && ! email ) {
            reviewPopup = true;
    }
    if( reviewPopup ){
            $('#show_error_popup').show();
            $( '#show_error_popup' ).html(msgHtmlFormat(wc_single_product_params.i18n_required_rating_text));
      return false;
    }
  } );

 });
 function msgHtmlFormat(text){
    var htmlText = '<div class="register-field-error"><div class="error-msg"><span><i>'+
            '<svg class="error-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">'+
            '<use xlink:href="#error-msg-icon-svg"></use> </svg></i>'+text+'</span></div></div>';
    return htmlText;
 }

function closePopup(){
  jQuery( ".modal-overlay.close-toggle" ).remove( );
  jQuery( ".modal-close.close-toggle" ).remove( );
  jQuery('#review_form_wrapper').removeClass('is-visible');
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
function isValidNumber(number) {
    var pattern = new RegExp(/^\s*[+-]?(\d+|\.\d+|\d+\.\d+|\d+\.)(e[+-]?\d+)?\s*$/);
    return pattern.test(number);
}