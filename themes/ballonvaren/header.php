<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	

  <svg style="display: none;">
    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use> </svg> -->
      
    <!-- start of Noyon -->
    <symbol id="quotation-icon" width="40" height="38" viewBox="0 0 40 38" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.76605 29.4358C6.60519 29.4358 6.45871 29.3262 6.41832 29.1434V26.3885C10.4048 26.6608 9.56902 21.4771 9.56902 21.4771H5.96785C5.96785 21.4771 5.96777 21.4771 5.96777 21.4771V17.7505H12.6658C12.6658 17.7505 12.6659 17.7505 12.6659 17.7506V21.8383C12.6659 22.0031 12.6567 24.0033 12.6396 24.1719C12.3775 26.7558 10.388 28.8328 7.83269 29.2973C7.44715 29.3674 7.08472 29.4185 6.78558 29.4353C6.77808 29.4357 6.77207 29.4358 6.76605 29.4358Z" fill="#EE3E15"/>
      <path d="M16.0805 29.4358C15.9196 29.4358 15.7732 29.3262 15.7328 29.1434V26.3885C19.7193 26.6608 18.8835 21.4771 18.8835 21.4771H15.2823C15.2823 21.4771 15.2822 21.4771 15.2822 21.4771V17.7505H21.9803C21.9803 17.7505 21.9804 17.7505 21.9804 17.7506V21.8383C21.9804 22.0031 21.9711 24.0033 21.954 24.1719C21.6919 26.7558 19.7025 28.8328 17.1472 29.2973C16.7616 29.3674 16.3992 29.4185 16.1 29.4353C16.0926 29.4357 16.0865 29.4358 16.0805 29.4358Z" fill="#EE3E15"/>
      <path d="M37.01 0.771606H15.0427C13.394 0.771606 12.0527 2.11497 12.0527 3.76629V11.521H2.99C1.34133 11.521 0 12.8643 0 14.5157V31.7521C0 33.4033 1.34133 34.7467 2.99 34.7467H3.46141C4.36641 34.7467 5.18508 35.3188 5.49859 36.1702L5.69984 36.717C5.78383 36.9451 5.96922 37.1212 6.20141 37.1933C6.27734 37.2168 6.35539 37.2284 6.43297 37.2284C6.59289 37.2284 6.75094 37.1793 6.88445 37.0847L9.62344 35.1454C9.99187 34.8846 10.425 34.7467 10.8759 34.7467H24.9572C26.6059 34.7467 27.9473 33.4033 27.9473 31.7521V23.2161H29.1239C29.5749 23.2161 30.008 23.354 30.3764 23.6149L33.1154 25.5541C33.2489 25.6487 33.407 25.6978 33.5669 25.6978C33.6445 25.6978 33.7225 25.6862 33.7984 25.6627C34.0306 25.5906 34.216 25.4145 34.3 25.1864L34.5012 24.6397C34.8147 23.7882 35.6334 23.2161 36.5384 23.2161H37.0098C38.6586 23.2161 39.9998 21.8728 39.9998 20.2214V3.76629C40 2.11497 38.6587 0.771606 37.01 0.771606ZM26.3849 31.7521C26.3849 32.5417 25.7445 33.1842 24.9573 33.1842H10.8761C10.0998 33.1842 9.35453 33.4214 8.7207 33.8702L6.79281 35.2352C6.1632 33.993 4.87367 33.1842 3.46148 33.1842H2.99008C2.20297 33.1842 1.56258 32.5417 1.56258 31.7521V14.5157C1.56258 13.726 2.20297 13.0835 2.99008 13.0835H24.9573C25.7445 13.0835 26.3849 13.726 26.3849 14.5157V31.7521ZM38.4375 20.2214C38.4375 21.0111 37.7971 21.6536 37.01 21.6536H36.5386C35.1265 21.6536 33.8369 22.4624 33.2073 23.7046L31.2795 22.3396C30.6457 21.8909 29.9004 21.6536 29.124 21.6536H27.9473V14.5157C27.9473 13.9972 27.8151 13.5092 27.5827 13.0835H33.0874C33.5188 13.0835 33.8687 12.7336 33.8687 12.3022C33.8687 11.8708 33.5188 11.521 33.0874 11.521H13.6151V3.76629C13.6151 2.97661 14.2555 2.33411 15.0427 2.33411H37.0099C37.7971 2.33411 38.4375 2.97653 38.4375 3.76629V20.2214Z" fill="#2C113E"/>
      <path d="M33.0872 6.5979H18.9648C18.5334 6.5979 18.1836 6.94774 18.1836 7.37915C18.1836 7.81056 18.5334 8.1604 18.9648 8.1604H33.0872C33.5186 8.1604 33.8684 7.81056 33.8684 7.37915C33.8684 6.94774 33.5186 6.5979 33.0872 6.5979Z"/>
    </symbol>


    <!-- start of Sabbir -->
    <symbol id="date-icon" width="13" height="14" viewBox="0 0 13 14" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.4 1.4V0.7C8.4 0.3136 8.7136 0 9.1 0C9.4864 0 9.8 0.3136 9.8 0.7V1.4C11.3463 1.4 12.6 2.6537 12.6 4.2V11.2C12.6 12.7463 11.3463 14 9.8 14C7.798 14 4.8013 14 2.8 14C1.2537 14 0 12.7463 0 11.2V4.2C0 2.6537 1.2537 1.4 2.8 1.4V0.7C2.8 0.3136 3.1136 0 3.5 0C3.8864 0 4.2 0.3136 4.2 0.7V1.4H8.4ZM11.2 7H1.4V11.2C1.4 11.9728 2.0265 12.6 2.8 12.6H9.8C10.5728 12.6 11.2 11.9728 11.2 11.2V7ZM9.8 2.8V3.5C9.8 3.8864 9.4864 4.2 9.1 4.2C8.7136 4.2 8.4 3.8864 8.4 3.5V2.8H4.2V3.5C4.2 3.8864 3.8864 4.2 3.5 4.2C3.1136 4.2 2.8 3.8864 2.8 3.5V2.8C2.0265 2.8 1.4 3.4265 1.4 4.2V5.6H11.2V4.2C11.2 3.4265 10.5728 2.8 9.8 2.8Z" fill="#EE3E15"/>
    </symbol>

    <symbol id="red-right-arrow" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 9.5L5.5 5.25L1 1" stroke="#EE3E15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>


    <!-- start of Niaz -->
    <symbol id="breadcrumb-arrow"width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 9.5L5.5 5.25L1 1" stroke="#EE3E15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>



    <!-- start of Milon -->
    <symbol id="error-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M13.6044 16.909C13.359 16.9319 13.1127 16.8766 12.9007 16.7508C12.7458 16.5918 12.6716 16.3711 12.6989 16.1508C12.7046 15.9675 12.7265 15.7849 12.7644 15.6054C12.801 15.3994 12.8483 15.1955 12.9062 14.9945L13.5498 12.7799C13.6162 12.5613 13.66 12.3365 13.6807 12.109C13.6807 11.8636 13.7134 11.6944 13.7134 11.5963C13.7271 11.1588 13.5403 10.739 13.2062 10.4563C12.7951 10.1407 12.2832 9.9856 11.7662 10.0199C11.3956 10.0255 11.0279 10.0861 10.6752 10.1999C10.2898 10.3199 9.88431 10.4635 9.45888 10.6308L9.27344 11.3508C9.39887 11.3072 9.55164 11.2581 9.72616 11.2036C9.89266 11.1542 10.0653 11.1285 10.2389 11.1272C10.4824 11.1008 10.7276 11.1606 10.9316 11.2963C11.0702 11.4616 11.1352 11.6764 11.1116 11.8908C11.111 12.0743 11.0909 12.2571 11.0516 12.4363C11.0134 12.6272 10.9643 12.829 10.9043 13.0417L10.2552 15.2671C10.2029 15.474 10.1611 15.6833 10.1298 15.8944C10.1043 16.0751 10.0915 16.2574 10.0916 16.4399C10.0889 16.8803 10.2903 17.2973 10.637 17.5689C11.0544 17.8894 11.5736 18.0483 12.0988 18.0162C12.4687 18.0238 12.8373 17.9704 13.1898 17.858C13.4988 17.7526 13.9116 17.6017 14.428 17.4053L14.6025 16.718C14.4626 16.7761 14.3186 16.8234 14.1716 16.8598C13.9857 16.9023 13.7948 16.9188 13.6044 16.909Z"/>
      <path d="M14.2846 6.40922C13.9877 6.1366 13.5966 5.98992 13.1936 6.00014C12.7909 5.99105 12.4002 6.13758 12.1027 6.40922C11.5575 6.87938 11.4966 7.70255 11.9668 8.24785C12.0087 8.29645 12.0541 8.34188 12.1027 8.38378C12.7239 8.93939 13.6634 8.93939 14.2845 8.38378C14.8298 7.90899 14.8869 7.08211 14.4121 6.53686C14.3726 6.49144 14.33 6.44878 14.2846 6.40922Z"/>
      <path d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM12 22.9091C5.97506 22.9091 1.09092 18.0249 1.09092 12C1.09092 5.97506 5.97506 1.09092 12 1.09092C18.0249 1.09092 22.9091 5.97506 22.9091 12C22.9091 18.0249 18.0249 22.9091 12 22.9091Z"/>
      </symbol>

      <symbol id="contact-facebook-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
        <path d="M12 0.000976562C5.38323 0.000976562 0 5.3842 0 12.001C0 18.6173 5.38323 24.001 12 24.001C18.6163 24.001 24 18.6173 24 12.001C24 5.3842 18.6173 0.000976562 12 0.000976562ZM14.9843 12.4234H13.032V19.3819H10.139C10.139 19.3819 10.139 15.5798 10.139 12.4234H8.76388V9.96408H10.139V8.37333C10.139 7.23404 10.6804 5.45381 13.0586 5.45381L15.2023 5.46203V7.84936C15.2023 7.84936 13.8996 7.84936 13.6463 7.84936C13.3931 7.84936 13.0329 7.976 13.0329 8.5193V9.96456H15.2371L14.9843 12.4234Z"/>
        </g>
        <defs>
        <clipPath id="clip0">
        <rect width="24" height="24" transform="translate(0 0.000976562)"/>
        </clipPath>
        </defs>
        </symbol>

        <symbol id="contact-msg-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21509 0.913451 7.4078C0.00519945 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.8071 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2349 1.26428 15.1826 0 12 0V0ZM12 18.39C11.2729 18.3905 10.5491 18.2928 9.84819 18.0995L7.2941 19.5V16.8518C5.59091 15.5795 4.50001 13.6364 4.50001 11.445C4.50001 7.60909 7.85864 4.5 12 4.5C16.1414 4.5 19.5 7.61045 19.5 11.445C19.5 15.2795 16.1414 18.39 12 18.39Z"/>
        <path d="M16.8457 9.50046L12.7453 13.8491L10.8362 11.8146L7.10938 13.8518L11.2098 9.50046L13.1666 11.535L16.8457 9.50046Z"/>
        </symbol>

        <symbol id="contact-twitter-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
        <path d="M12 0.000976562C5.38323 0.000976562 0 5.3842 0 12.001C0 18.6173 5.38323 24.001 12 24.001C18.6163 24.001 24 18.6173 24 12.001C24 5.3842 18.6173 0.000976562 12 0.000976562ZM17.3533 9.2545C17.3586 9.37341 17.3615 9.49328 17.3615 9.61316C17.3615 13.263 14.5841 17.4702 9.50246 17.4702C7.94264 17.4702 6.49061 17.0144 5.26867 16.2304C5.48473 16.256 5.70466 16.2691 5.92749 16.2691C7.22194 16.2691 8.41247 15.8273 9.35793 15.0868C8.14952 15.0645 7.12914 14.266 6.77773 13.1683C6.94594 13.2002 7.11947 13.2181 7.29687 13.2181C7.5487 13.2181 7.79328 13.1852 8.02481 13.1219C6.7613 12.8686 5.80955 11.7525 5.80955 10.4136C5.80955 10.402 5.80955 10.3899 5.81004 10.3788C6.18223 10.5852 6.60807 10.7099 7.0605 10.7239C6.31999 10.2294 5.83227 9.38356 5.83227 8.42553C5.83227 7.91897 5.9681 7.4443 6.20591 7.03634C7.56755 8.70782 9.60348 9.80698 11.8985 9.92299C11.8511 9.72046 11.8274 9.5102 11.8274 9.29317C11.8274 7.76816 13.0639 6.53123 14.5889 6.53123C15.3835 6.53123 16.1004 6.86668 16.605 7.40322C17.2348 7.27947 17.8245 7.05036 18.3596 6.73279C18.1518 7.37808 17.7153 7.91897 17.1435 8.26119C17.7027 8.19448 18.2364 8.04657 18.7299 7.82664C18.3616 8.37961 17.8932 8.86636 17.3533 9.2545Z"/>
        </g>
        <defs>
        <clipPath id="clip0">
        <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)"/>
        </clipPath>
        </defs>
        </symbol>

        <symbol id="contact-linkedin-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M14.1867 10.2947C13.1596 10.2947 12.7009 10.8592 12.4442 11.2556V10.432H10.5098C10.5349 10.9772 10.5098 16.2521 10.5098 16.2521H12.4442V13.0006C12.4442 12.827 12.4553 12.6525 12.5075 12.5283C12.6477 12.1803 12.9657 11.8202 13.5003 11.8202C14.2003 11.8202 14.4801 12.3538 14.4801 13.1369V16.2507H16.4145H16.415V12.9131C16.4141 11.1265 15.4594 10.2947 14.1867 10.2947ZM12.4427 11.2759H12.4307C12.4345 11.2691 12.4403 11.2629 12.4427 11.2561V11.2759Z"/>
      <path d="M7.50391 10.4318H9.43833V16.252H7.50391V10.4318Z"/>
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM18.3635 17.4277C18.3635 17.9381 17.9401 18.3509 17.4166 18.3509H6.50173C5.9797 18.3509 5.55579 17.9381 5.55579 17.4277V6.38572C5.55579 5.87577 5.9797 5.4625 6.50173 5.4625H17.4166C17.9396 5.4625 18.3635 5.87626 18.3635 6.38572V17.4277Z"/>
      <path d="M8.48301 7.62604C7.82177 7.62604 7.38867 8.0601 7.38867 8.63144C7.38867 9.18972 7.80872 9.63683 8.45739 9.63683H8.46996C9.14474 9.63683 9.56478 9.18972 9.56478 8.63144C9.55173 8.06058 9.14522 7.62604 8.48301 7.62604Z"/>
      </symbol>

      <symbol id="contact-instagram-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M11.999 14.4025C13.3229 14.4025 14.4023 13.3251 14.4023 12.0002C14.4023 11.4772 14.2312 10.9943 13.9479 10.5999C13.5115 9.99471 12.8019 9.59787 12.0005 9.59787C11.1986 9.59787 10.4895 9.99423 10.052 10.5994C9.7678 10.9938 9.59814 11.4767 9.59766 11.9997C9.59621 13.3246 10.6746 14.4025 11.999 14.4025Z"/>
      <path d="M17.2455 9.06128V7.04758V6.74789L16.9444 6.74886L14.9316 6.75514L14.9394 9.06901L17.2455 9.06128Z"/>
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM18.8246 10.5997V16.1874C18.8246 17.6428 17.6413 18.8256 16.1869 18.8256H7.8131C6.35817 18.8256 5.17538 17.6428 5.17538 16.1874V10.5997V7.81358C5.17538 6.35866 6.35817 5.17586 7.8131 5.17586H16.1864C17.6413 5.17586 18.8246 6.35866 18.8246 7.81358V10.5997Z"/>
      <path d="M15.7323 11.9999C15.7323 14.0576 14.0579 15.7329 11.9993 15.7329C9.94063 15.7329 8.26674 14.0576 8.26674 11.9999C8.26674 11.5049 8.36534 11.0317 8.54129 10.5996H6.50391V16.1873C6.50391 16.9094 7.09023 17.4943 7.81189 17.4943H16.1852C16.9059 17.4943 17.4932 16.9094 17.4932 16.1873V10.5996H15.4548C15.6322 11.0317 15.7323 11.5049 15.7323 11.9999Z"/>
      </symbol>



    <!-- start of Jahir -->
      <symbol id="calender-icon" width="18" height="20" viewBox="0 0 18 20"  xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2V1C12 0.448 12.448 0 13 0C13.552 0 14 0.448 14 1V2C16.209 2 18 3.791 18 6V16C18 18.209 16.209 20 14 20C11.14 20 6.859 20 4 20C1.791 20 0 18.209 0 16V6C0 3.791 1.791 2 4 2V1C4 0.448 4.448 0 5 0C5.552 0 6 0.448 6 1V2H12ZM16 10H2V16C2 17.104 2.895 18 4 18H14C15.104 18 16 17.104 16 16V10ZM14 4V5C14 5.552 13.552 6 13 6C12.448 6 12 5.552 12 5V4H6V5C6 5.552 5.552 6 5 6C4.448 6 4 5.552 4 5V4C2.895 4 2 4.895 2 6V8H16V6C16 4.895 15.104 4 14 4Z" fill="#EE3E15"/>
      </symbol>

    <!-- start of Momin -->



    <!-- start of Shariful -->

    <symbol id="cart-icon-svg" width="26" height="28" viewBox="0 0 26 28" xmlns="http://www.w3.org/2000/svg">
      <path d="M5.2002 0H1.30005C0.955255 0 0.624582 0.136969 0.380776 0.380776C0.136969 0.624582 0 0.955255 0 1.30005C0 1.64484 0.136969 1.97552 0.380776 2.21932C0.624582 2.46313 0.955255 2.6001 1.30005 2.6001H3.90015V20.8008C3.90015 21.1456 4.03712 21.4763 4.28092 21.7201C4.52473 21.9639 4.8554 22.1008 5.2002 22.1008H20.8008C21.1456 22.1008 21.4763 21.9639 21.7201 21.7201C21.9639 21.4763 22.1008 21.1456 22.1008 20.8008C22.1008 20.456 21.9639 20.1253 21.7201 19.8815C21.4763 19.6377 21.1456 19.5007 20.8008 19.5007H6.50025V16.9006H22.1008C22.3736 16.9004 22.6393 16.8145 22.8605 16.6549C23.0817 16.4953 23.2471 16.2702 23.3333 16.0114L25.9334 8.21111C25.9984 8.01578 26.0162 7.80778 25.9851 7.60425C25.9541 7.40072 25.8751 7.20747 25.7548 7.04042C25.6345 6.87336 25.4762 6.73728 25.2929 6.64337C25.1097 6.54946 24.9068 6.5004 24.7009 6.50025H6.50025V1.30005C6.50025 0.955255 6.36328 0.624582 6.11947 0.380776C5.87566 0.136969 5.54499 0 5.2002 0ZM22.8965 9.10035L21.1635 14.3005H6.50025V9.10035H22.8965Z"/>
      <path d="M5.85046 27.301C6.92746 27.301 7.80054 26.4279 7.80054 25.351C7.80054 24.274 6.92746 23.4009 5.85046 23.4009C4.77347 23.4009 3.90039 24.274 3.90039 25.351C3.90039 26.4279 4.77347 27.301 5.85046 27.301Z"/>
      <path d="M18.8505 27.301C19.9275 27.301 20.8005 26.4279 20.8005 25.351C20.8005 24.274 19.9275 23.4009 18.8505 23.4009C17.7735 23.4009 16.9004 24.274 16.9004 25.351C16.9004 26.4279 17.7735 27.301 18.8505 27.301Z"/>
    </symbol>

    <symbol id="facebook-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M12 0.000976562C5.38323 0.000976562 0 5.3842 0 12.001C0 18.6173 5.38323 24.001 12 24.001C18.6163 24.001 24 18.6173 24 12.001C24 5.3842 18.6173 0.000976562 12 0.000976562ZM14.9843 12.4234H13.032V19.3819H10.139C10.139 19.3819 10.139 15.5798 10.139 12.4234H8.76388V9.96408H10.139V8.37333C10.139 7.23404 10.6804 5.45381 13.0586 5.45381L15.2023 5.46203V7.84936C15.2023 7.84936 13.8996 7.84936 13.6463 7.84936C13.3931 7.84936 13.0329 7.976 13.0329 8.5193V9.96456H15.2371L14.9843 12.4234Z"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)"/>
      </clipPath>
      </defs>
    </symbol>

    <symbol id="messenger-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21509 0.913451 7.4078C0.00519945 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.8071 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2349 1.26428 15.1826 0 12 0V0ZM12 18.39C11.2729 18.3905 10.5491 18.2928 9.84819 18.0995L7.2941 19.5V16.8518C5.59091 15.5795 4.50001 13.6364 4.50001 11.445C4.50001 7.60909 7.85864 4.5 12 4.5C16.1414 4.5 19.5 7.61045 19.5 11.445C19.5 15.2795 16.1414 18.39 12 18.39V18.39Z"/>
      <path d="M16.8448 9.50046L12.7443 13.8491L10.8352 11.8146L7.1084 13.8518L11.2089 9.50046L13.1657 11.535L16.8448 9.50046Z"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="24" height="24" fill="white"/>
      </clipPath>
      </defs>
    </symbol>

    <symbol id="twitter-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M12 0.000976562C5.38323 0.000976562 0 5.3842 0 12.001C0 18.6173 5.38323 24.001 12 24.001C18.6163 24.001 24 18.6173 24 12.001C24 5.3842 18.6173 0.000976562 12 0.000976562ZM17.3533 9.2545C17.3586 9.37341 17.3615 9.49328 17.3615 9.61316C17.3615 13.263 14.5841 17.4702 9.50246 17.4702C7.94264 17.4702 6.49061 17.0144 5.26867 16.2304C5.48473 16.256 5.70466 16.2691 5.92749 16.2691C7.22194 16.2691 8.41247 15.8273 9.35793 15.0868C8.14952 15.0645 7.12914 14.266 6.77773 13.1683C6.94594 13.2002 7.11947 13.2181 7.29687 13.2181C7.5487 13.2181 7.79328 13.1852 8.02481 13.1219C6.7613 12.8686 5.80955 11.7525 5.80955 10.4136C5.80955 10.402 5.80955 10.3899 5.81004 10.3788C6.18223 10.5852 6.60807 10.7099 7.0605 10.7239C6.31999 10.2294 5.83227 9.38356 5.83227 8.42553C5.83227 7.91897 5.9681 7.4443 6.20591 7.03634C7.56755 8.70782 9.60348 9.80699 11.8985 9.92299C11.8511 9.72046 11.8274 9.5102 11.8274 9.29317C11.8274 7.76816 13.0639 6.53123 14.5889 6.53123C15.3835 6.53123 16.1004 6.86668 16.605 7.40322C17.2348 7.27947 17.8245 7.05036 18.3596 6.73279C18.1518 7.37808 17.7153 7.91897 17.1435 8.26119C17.7027 8.19448 18.2364 8.04657 18.7299 7.82664C18.3616 8.37961 17.8932 8.86636 17.3533 9.2545Z"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)"/>
      </clipPath>
      </defs>
    </symbol>


    <symbol id="linkedin-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M14.1867 10.2947C13.1596 10.2947 12.7009 10.8592 12.4442 11.2556V10.432H10.5098C10.5349 10.9772 10.5098 16.2521 10.5098 16.2521H12.4442V13.0006C12.4442 12.827 12.4553 12.6525 12.5075 12.5283C12.6477 12.1803 12.9657 11.8202 13.5003 11.8202C14.2003 11.8202 14.4801 12.3538 14.4801 13.1369V16.2507H16.4145H16.415V12.9131C16.4141 11.1265 15.4594 10.2947 14.1867 10.2947V10.2947ZM12.4427 11.2759H12.4307C12.4345 11.2691 12.4403 11.2629 12.4427 11.2561V11.2759Z"/>
      <path d="M7.50293 10.4318H9.43735V16.252H7.50293V10.4318Z"/>
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM18.3635 17.4277C18.3635 17.9381 17.9401 18.3509 17.4166 18.3509H6.50173C5.9797 18.3509 5.55579 17.9381 5.55579 17.4277V6.38572C5.55579 5.87578 5.9797 5.4625 6.50173 5.4625H17.4166C17.9396 5.4625 18.3635 5.87626 18.3635 6.38572V17.4277Z"/>
      <path d="M8.48399 7.62604C7.82274 7.62604 7.38965 8.0601 7.38965 8.63144C7.38965 9.18972 7.80969 9.63683 8.45837 9.63683H8.47094C9.14571 9.63683 9.56576 9.18972 9.56576 8.63144C9.55271 8.06058 9.1462 7.62604 8.48399 7.62604Z"/>
    </symbol>

    <symbol id="instagram-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 14.4025C13.3239 14.4025 14.4033 13.3251 14.4033 12.0002C14.4033 11.4772 14.2322 10.9943 13.9489 10.5999C13.5124 9.99471 12.8029 9.59787 12.0014 9.59787C11.1995 9.59787 10.4904 9.99423 10.053 10.5994C9.76878 10.9938 9.59912 11.4767 9.59863 11.9997C9.59718 13.3246 10.6756 14.4025 12 14.4025Z"/>
      <path d="M17.2455 9.06128V7.04758V6.74789L16.9444 6.74886L14.9316 6.75514L14.9394 9.06901L17.2455 9.06128Z"/>
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM18.8246 10.5997V16.1874C18.8246 17.6428 17.6413 18.8256 16.1869 18.8256H7.8131C6.35817 18.8256 5.17538 17.6428 5.17538 16.1874V10.5997V7.81358C5.17538 6.35866 6.35817 5.17586 7.8131 5.17586H16.1864C17.6413 5.17586 18.8246 6.35866 18.8246 7.81358V10.5997Z"/>
      <path d="M15.7333 11.9999C15.7333 14.0576 14.0589 15.7329 12.0003 15.7329C9.9416 15.7329 8.26771 14.0576 8.26771 11.9999C8.26771 11.5049 8.36632 11.0317 8.54226 10.5996H6.50488V16.1873C6.50488 16.9094 7.0912 17.4943 7.81287 17.4943H16.1862C16.9069 17.4943 17.4942 16.9094 17.4942 16.1873V10.5996H15.4558C15.6332 11.0317 15.7333 11.5049 15.7333 11.9999V11.9999Z"/>
    </symbol>

  </svg>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
$logoObj = get_field('hdlogo', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}

$smedias = get_field('social_media', 'options');


?> 
<header class="header">
  <span class="hdr-color-border"></span>
  <div class="container-xlg">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-rgt">
              <div class="hdr-topbar hide-md">
                <div class="hdr-topbar-inr">
                  <div class="hdr-top-menu">
                    <?php 
                      $tmenuOptions = array( 
                          'theme_location' => 'cbv_top_menu', 
                          'menu_class' => 'reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $tmenuOptions ); 
                    ?>
                  </div>
                  <div class="hdr-language">
                    <div class="fl-lang reset-slect">
                      <div class="fl-lang-cntlr">
                        <ul class="reset-list hide-sm">
                          <li  class="lang-active"><a href="#">NL</a></li>
                          <li><a href="#">FR</a></li>
                          <li><a href="#">EN</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="hdr-social-media has-svg">
                    <ul class="reset-list">
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#facebook-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="messenger-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#messenger-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#twitter-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="linkedin-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#linkedin-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="#">
                          <i>
                            <svg class="instagram-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                              <use xlink:href="#instagram-svg"></use> 
                            </svg>
                          </i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div> 
              </div>
              <div class="hdr-menu">
                <div class="hdr-main-menu hide-md">
                  <nav class="main-nav">
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>
                  </nav>
                </div>
                <div class="hdr-contact-menu hide-md">
                  <ul class="reset-list">
                    <li class="hdr-cart">
                      <a href="#">
                        <i>
                          <svg class="cart-icon-svg" width="26" height="28" viewBox="0 0 26 28" fill="#EE3E15">
                            <use xlink:href="#cart-icon-svg"></use> 
                          </svg>
                        </i>
                      </a>
                    </li>
                    <li class="hdr-contact-btn">
                      <a class="fl-navyblue-btn" href="#">contact</a>
                    </li>
                  </ul>
                </div>
                <div class="hambergar-cntlr show-md">
                  <div class="humbergar">
                    <div class="hambergar-icon">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/humbergar-icon.svg"></i>
                      <span>menu</span>
                    </div>
                    <div class="close-icon">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-close-icon.svg"></i>
                      <span>SLUIT</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="xs-mobile-menu-cntlr">
    <div class="xs-mobile-menu">
      <div class="xs-menu-cntlr">
        <div class="xs-menu">
          <nav class="main-nav">
            <?php 
              $menuOptions = array( 
                  'theme_location' => 'cbv_main_menu', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $menuOptions ); 
            ?>
          </nav>
        </div>
        <div class="xs-social-menu">
          <div class="hdr-social-media has-svg">
            <ul class="reset-list">
              <li>
                <a target="_blank" href="#">
                  <i>
                    <svg class="facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                      <use xlink:href="#facebook-svg"></use> 
                    </svg>
                  </i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i>
                    <svg class="messenger-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                      <use xlink:href="#messenger-svg"></use> 
                    </svg>
                  </i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i>
                    <svg class="twitter-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                      <use xlink:href="#twitter-svg"></use> 
                    </svg>
                  </i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i>
                    <svg class="linkedin-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                      <use xlink:href="#linkedin-svg"></use> 
                    </svg>
                  </i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i>
                    <svg class="instagram-svg" width="24" height="24" viewBox="0 0 24 24" fill="#909BA5">
                      <use xlink:href="#instagram-svg"></use> 
                    </svg>
                  </i>
                </a>
              </li>
            </ul>
          </div>
          <div class="hdr-language">
            <div class="fl-lang reset-slect">
              <div class="fl-lang-cntlr">
                <ul class="reset-list">
                  <li  class="lang-active"><a href="#">NL</a></li>
                  <li><a href="#">FR</a></li>
                  <li><a href="#">EN</a></li>
                </ul>
                <span class="xs-lang-icon"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="xs-contact-menu">
          <ul class="reset-list">
            <li class="xs-cart">
              <a class="fl-red-btn" href="#">Winkelmandje</a>
            </li>
            <li class="xs-contact-btn">
              <a class="fl-navyblue-btn" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

