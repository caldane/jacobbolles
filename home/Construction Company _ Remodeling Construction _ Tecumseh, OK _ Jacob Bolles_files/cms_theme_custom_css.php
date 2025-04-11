/*
 * 
 * THEME FONTS
 *
 */

/*
 * 
 * LOCATION:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_san-antonio/
 */

/*
 * 
 * Theme Fonts:
 * Laravel Theme Design Option fonts for beacon-theme_san-antonio
 */

/*
 * 
 * Font Types:
 * Laravel Theme Design Option fonts_list for beacon-theme_san-antonio
 */


/* FONTS:
body: Array
(
    [label] => Poppins
    [google] => Poppins:400,700,400italic,700italic
    [font-family] => 'Poppins'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
feat: Array
(
    [label] => Poppins
    [google] => Poppins:400,700,400italic,700italic
    [font-family] => 'Poppins'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
hdrs: Array
(
    [label] => Poppins
    [google] => Poppins:400,700,400italic,700italic
    [font-family] => 'Poppins'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
*/


@import url(https://fonts.googleapis.com/css?family=Poppins:400,700,400italic,700italic&display=swap);

    body.beacon{font-family:'Poppins',Helvetica,Arial,sans-serif;font-weight:normal;}
    #wrapper h1,
    #wrapper h2,
    #wrapper h3,
    #wrapper h4,
    #wrapper h5,
    #wrapper h6,
    #wrapper dt,
    #wrapper th,
    #wrapper .gce-list-title,
    .type_list .the_list_item li:before {font-family:'Poppins',Helvetica,Arial,sans-serif;}

    #wrapper .type_gallery .hero .the_list_item_headline,
    #wrapper .type_gallery .no_image .the_list_item_headline,
    #wrapper .type_photo_grid .hero .the_list_item_headline,
    #wrapper .type_photo_grid .no_image .the_list_item_headline{font-family:'Poppins';}
    
/*
 * 
 * THEME COLORS
 *
 */

/*
 * 
 * Theme Colors:
 * Laravel Theme Design Option colors for beacon-theme_san-antonio
 */


/*
 * 
 * Theme CSS Colors:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_san-antonio/css/theme_colors.css
 */


/*
 * 
 * Theme Background:
 * Laravel Theme Design Option backgrounds for beacon-theme_san-antonio
 */

/* main_bg Array
(
    [src] => /wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif
    [repeat] => repeat-x
    [position] => center top
    [attachment] => 
    [size] => 
    [bgcolor] => 
)
*//*Array
(
    [color_1] => #000
    [color_2] => #575757
    [color_3] => #000
    [color_4] => #ffffff
    [color_5] => #ffffff
    [color_6] => #ffffff
    [color_7] => #fff
    [color_8] => #ffffff
    [color_9] => #000000
    [color_12] => #ffffff
    [color_13] => #ededed
    [color_14] => #ffffff
    [color_15] => #4a4a4a
    [color_16] => #4a4a4a
    [color_17] => #4a4a4a
    [color_18] => rgba(255,255,255,1);background-color:#ffffff\9
    [color_19] => #ededed
    [color_20] => #000
    [color_21] => rgba(255,255,255,1);background-color:#ffffff\9
    [color_3a] => #4a4a4a
    [IMAGE_SRC] => /wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif
    [IMAGE_REP] => repeat-x
    [IMAGE_POS] => center top
    [IMAGE_ATT] => 
    [IMAGE_SIZE] => 
)
*/:root {
  --heads       : #000;
  --text        : #575757;
  --links       : #4a4a4a;
  --accentBkg   : #000;
  --accentTxt   : #ffffff;
  --socialTxt   : #ffffff;
  --navLinks    : #ffffff;
  --navTabBkg   : #fff;
  --navTabTxt   : #ffffff;
  --logo        : #000000;
  --footTxt     : #ffffff;
  --footLinks   : #ededed;
  --imgBkg      : rgba(255,255,255,1);background-color:#ffffff\9;
  --mainBkg     : #ffffff;
  --socialBkg   : #4a4a4a;
  --navBkg      : #4a4a4a;
  --headBkg     : #4a4a4a;
  --contentBkg  : rgba(255,255,255,1);background-color:#ffffff\9;
  --itemBkg     : #ededed;
  --footBkg     : #000;
}

/* SAN ANTONIO - GENERAL COLORS*/
body{background-color:#ffffff;background-image:url('/wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif');background-repeat:repeat-x;background-position:center top;background-attachment:;background-size: ;}

/*OVERRIDE BACKGROUND COLOR IF BACKGROUND IMAGE EXISTS WITH COLOR*/
body{;}

/*COLOR_1 / HEADLINES*/
#container h1,
#container h2,
#container h3,
#container h4,
#container h5,
#container h6,
#container dt,
#container th,
#container h1 a,
#container h2 a,
#container h3 a,
#container h4 a,
#container h5 a,
#container h6 a,
#container dt a,
#container th a{color: #000;}
::selection{background:#000;}
::-moz-selection{background:#000;}

/*COLOR_2 / TEXT*/
#container{color: #575757;}

/*COLOR_3a / LINKS*/
#container a{color: #4a4a4a;}
#wrapper .mobile-abovepost a{color:#4a4a4a;}
#wrapper .type_photo_grid .the_list_item.not_hero:not(.no_image) .the_list_item_heads .the_list_item_action a{color:#4a4a4a;}

/*COLOR_19 / CONTENT ITEM BKG*/
#container .type_reviews.well .the_list_item_desc {background-color:#ededed;}
#container .type_reviews.well .the_list_item_heads:after{border-right-color:#ededed;}
#container .type_testimonials.well .the_list_item:not(.hero) .the_list_item_heads:after{border-right-color:#ededed;}
#container .type_testimonials.well .the_list_item:not(.hero) .the_list_item_desc,
#container .section .g_color.well .slidesjs-pagination,
#container .section .well .type-post,
#container .section .type-post blockquote,
#container .well .the_list_wrap,
#container .list_block:not(.g_color).well .the_list .the_list_item:not(.hero){background-color:#ededed;}
#container .type_menu.m3:not(.well) .the_list_item:not(.hero) .the_list_item_headline span,
#container .type_menu.m3:not(.well) .the_list_item:not(.hero) .the_list_item_subheadline {background-color:rgba(255,255,255,1);background-color:#ffffff\9;}
#container .type_menu.m3.well .the_list_item .the_list_item_headline span,
#container .type_menu.m3.well .the_list_item .the_list_item_subheadline {background-color:#ededed;}

/*COLOR_3 & COLOR_4 / HERO COLORS*/
#wrapper #_the_map_wrapper .b2b-location h2,
#wrapper #_the_map_wrapper a,
#wrapper #_the_map_wrapper .b2b-location-see-more{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide ul,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items-container{background: #000;color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-expand-icon{background: #ffffff;color: #000;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover *{color: #000;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items.show-details ul li:hover *{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items ul li:hover .b2b-location-expand-icon{background: #000;color:#ffffff;}

#wrapper #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#000;}
#wrapper #_the_contactfrm_wrapper label{color:#575757;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #ffffff;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color: #000;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover{background-color: #ffffff;color: #000;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover span{color: #000;}

#the_footer #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#ededed;}
#the_footer #_the_contactfrm_wrapper label{color:#ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #000;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color: #ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover{background-color: #000;color: #ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover span{color: #ffffff;}

#container .well .the_list_item .type-post,
#wrapper #container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#container .section .g_color .slidesjs-pagination a.accent_color_bg,
#container .section .g_color:not(.pg_v2) .slick-dots li.slick-active button{background-color: #000;color: #ffffff;}
#wrapper .the_list_item .the_list_item_action{background-color: #000;}
#wrapper .the_list_item .read-more.the_list_item_action span,
#wrapper .the_list_item .the_list_item_action a{color: #ffffff;}

#wrapper .the_list_item .gform_wrapper .gform_page_footer input.button{background-color: #ffffff;color: #000;}
#wrapper .the_list_item.hero .gform_wrapper .gform_page_footer input.button{background-color: #000;color: #ffffff;}

#wrapper .tsI_page-login .tsI_form-button,
#wrapper .the_list_item .gform_wrapper .percentbar_blue,
#wrapper .the_list_item .gform_wrapper .gform_page_footer input[type=submit],
#wrapper .the_list_item .gform_wrapper .gform_footer input.button,
#wrapper .the_list_item .gform_footer input[type=submit]{background-color: #000;color: #ffffff;}

#wrapper .tsI_page-login .tsI_form-button:hover,
#wrapper .the_list_item.hero .gform_wrapper .gf_progressbar_percentage,
#wrapper .the_list_item.hero .gform_wrapper .gform_page_footer input[type=submit],
#wrapper .the_list_item.hero .gform_wrapper .gform_footer input.button,
#wrapper .the_list_item.hero .gform_footer input[type=submit]{background-color: #ffffff;color: #000;}

/*#container .section .list_block.type_article.a3 .the_list_item.not_hero.yes_link .banner_bkg{background-color: #000;}*/
#container .type_article.a3   .the_list_item.no_image .the_list_item_action,
#wrapper   .the_list_item.hero  .the_list_item_action,
#wrapper   .type_photo_grid     .the_list_item .the_list_item_action,
#wrapper   .g_color        .the_list_item.no_image .the_list_item_action{background-color: #ffffff;}
#container .type_article.a3   .the_list_item.no_image .the_list_item_action a,
#wrapper   .the_list_item.hero  .the_list_item_action a,
#wrapper   .type_photo_grid     .the_list_item .the_list_item_action a,
#wrapper   .g_color        .the_list_item.no_image .the_list_item_action a{color: #000;}

#container .type_article.a3 .banner_link a,
#container .the_list_item.hero a{color:#ffffff;}

#container .type_article.a1    .the_list_item.hero .the_list_wrap,
#container .type_article.a2    .the_list_item.hero .the_list_wrap,
#container .type_article.a3    .the_list_item,
#container .type_article.a3.well .the_list_item.not_hero:nth-of-type(1n),
#container .type_menu.m1      .the_list_item.hero .the_list_wrap,
#container .type_menu.m2      .the_list_item.hero,
#container .type_menu.m3      .the_list_item.hero,
#container .type_services.s1  .the_list_item.hero .the_list_wrap,
#container .type_services.s2  .the_list_item.hero,
#container .type_services.s3  .the_list_item.hero .the_list_wrap,
#container .type_testimonials .the_list_item.hero .the_list_item_desc,
#container .g_color      .the_list_item.no_image{background-color:#000;color:#ffffff;}

#container .the_list_item.hero .gform_wrapper h2.gsection_title,
#container .type_article .the_list_item.hero .the_list_item_headline,
#container .type_article .the_list_item.hero .the_list_item_subheadline,
#container .type_article.a3 .the_list_item .the_list_item_headline,
#container .type_article.a3 .the_list_item .the_list_item_subheadline,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline,
#container .list_block tr.the_list_item.hero th,
#container .type_menu .the_list_item.hero .the_list_item_headline,
#container .type_menu .the_list_item.hero .the_list_item_subheadline,
#container .g_color .the_list_item.no_image .the_list_item_headline,
#container .g_color .the_list_item.no_image .the_list_item_subheadline,

#container .type_article .the_list_item.hero .the_list_item_headline a,
#container .type_article .the_list_item.hero .the_list_item_subheadline a,
#container .type_article.a3 .the_list_item .the_list_item_headline a,
#container .type_article.a3 .the_list_item .the_list_item_subheadline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline a,
#container .list_block tr.the_list_item.hero th a,
#container .type_menu .the_list_item.hero .the_list_item_headline a,
#container .type_menu .the_list_item.hero .the_list_item_subheadline a,
#container .g_color .the_list_item.no_image .the_list_item_headline a,
#container .g_color .the_list_item.no_image .the_list_item_subheadline a,

#container .g_color      .the_list_item.no_image .the_list_item_desc *{color:#ffffff;}
#container .type_testimonials .the_list_item.hero .the_list_item_heads:after{border-right-color:#000;}

#container .type_testimonials .the_list_item.not_hero .the_list_item_desc *,
#container .type_testimonials .the_list_item .the_list_item_headline,
#container .type_testimonials .the_list_item .the_list_item_subheadline,
#container .type_testimonials .the_list_item .the_list_item_headline a,
#container .type_testimonials .the_list_item .the_list_item_subheadline a{color: #575757;}

#container .type_services.s2  .the_list_item .the_services_number{background-color:#000;color:#ffffff;}
#container .type_services.s2  .the_list_item.hero .the_services_number{background-color:#ffffff;color:#000;}
#container .type_services.s1  .the_services_number:before{color:#000;}
#container .type_services.s1  .the_services_number:after{text-shadow:2px 1px 0 #000;color:#ffffff;}

#container .list_block_headline{color:#000;}

#container .type_photo_grid      .the_list_item .the_list_item_image:before,
#container .g_color.pg_v2   .the_list_item .caption:before,
#container .g_color .slides .the_list_item .caption:before{background-color:#000;color:#ffffff;}
#container .type_services.s1     .the_list_item_subheadline,
#container .type_services.s3     .the_list_item_subheadline{background-color:#000;color:#ffffff;}
#container .type_photo_grid      .the_list_item_image{background-color:#000;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_headline a,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_headline,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_subheadline a,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_subheadline,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_desc{color:#ffffff;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_desc{background-color:#000;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_image:before,
#container .type_photo_grid      .the_list_item.hero .the_list_text:before{background-color:#ffffff;color:#000;}
#container .type_photo_grid      .the_list_item.no_image .accent_color_bg{background-color: #ffffff;color: #000;}

#container .gce-list li{color:#000;}
#container .calendar-list-event{background-color:#000;color:#ffffff;}

.gce-list li{color:#000;}
#container .calendar-list-event .the_list_item_headline,
#container .calendar-list-event .the_list_item_subheadline,
#container .calendar-list-event a{color:#ffffff;}

#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_headline span{background-color:#000;}
#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_subheadline {background-color:#000;}

/*HEADER //////////////////////*/
#header_logo{border-color:#000000;}
#wrapper #_the_logo,
#wrapper #_the_logo a{color:#000000;}
#wrapper #_the_logo {color:#000000;}

#the_header .header_color{background-color: #4a4a4a;border-color:#ffffff;}

#wrapper .close-menu{background-color:#000;color:#ffffff;}
#wrapper .menu a{color:#ffffff;}
#wrapper .menu a:hover{color:#fff;}
#menu-holder .current-menu-item > a,
#the_header .menu .current-menu-item > a{color:#ffffff;}

#menu-holder li a:hover{color:#fff;}
#menu-holder-topBorder{background-color:#fff;}
#menu-holder{background-color:#4a4a4a;}
#menu-holder .menu-item{background-color:#4a4a4a;}
#menu-holder li a{color:#ffffff;}
#menu-holder{color:#ffffff;}

/*SHARE & CONTACT LIST //////////////////////*/
.header_share_wrap,
.header_share_wrap a,
.header_share_wrap a:before,
.header_share_wrap a:after{color:#ffffff;}
.header_share_wrap a:not(.phone):hover{background: #ffffff;color:#4a4a4a;}
.header_share_wrap a:not(.phone):hover:before,
.header_share_wrap a:not(.phone):hover:after{color:#4a4a4a;}
.header_share_wrap.dropdown-list,
.header_share_wrap.dropdown-list .share_icons{background-color:#4a4a4a;}

#wrapper .trigger{color:#ffffff;background-color:#000;color:#ffffff;}

/*FOOTER //////////////////////*/
#the_footer .footer_brand .share_icons a span{color:#000000;}
#wrapper .footer{color:#ffffff;}
#wrapper .footer a{color:#ededed;}
#wrapper .footer #searchsubmit{background-color:#ededed;}
#wrapper .footer_brand{background-color:#4a4a4a;}
#wrapper .footer{background-color:#000;background-image:none;}
#wrapper .footer #searchsubmit{color:#000;}
#wrapper .footer input,
#wrapper .footer select,
#wrapper .footer option,
#wrapper .footer textarea{color:#333;}
#wrapper .contact_column input,
#wrapper .contact_column select,
#wrapper .contact_column option,
#wrapper .contact_column textarea{color:#333;}

#the_footer .menu a{color:#ffffff;}
#the_footer .menu a:hover{color:#ededed;}
#the_footer .menu .current-menu-item > a{color:#ededed;}
#the_footer .social-media-links a{color:#ffffff;}
#the_footer .social-media-links a:hover{color:#ededed;}

/*COLOR_18 / CONTENT BKG*/
#container .list_block tr.the_list_item{border-bottom:1px solid rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .page_title,
#container .section .well .type-post blockquote,
#wrapper .content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .full_width_content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .mobile-abovepost{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}

/*ITEM COLORS*/
#container .g_color .the_list_item_desc *,
#container .g_color .the_list_item_headline,
#container .g_color .the_list_item_subheadline,
#container .g_color .the_list_item_headline a,
#container .g_color .the_list_item_subheadline a{color:#f7f7f7;}

/*MODAL*/
.modal_wrap .modal_content{background-color:#000;}
.modal_list_wrap{background-color:#ffffff;}
.modal_list .tsi-address a{background-color:#ffffff;}
.modal_list a{color:#000;}
.modal_content .modal_title,
.modal_content .modal_title{background:#000;color:#ffffff;}
#wrapper .modal_content .modal_close{background:#ffffff;color:#000;}
#wrapper .modal_content .modal_close:hover{background:#000;color:#ffffff;}

.type_modal .the_list_item{color:#ffffff;background-color:#000;}
.type_modal .the_list_item .the_list_item_heads *,
.type_modal .the_list_item .gform_title{color:#000;}


/*PHONES /////////////////////// */
#wrapper.share-show .share_list{background:#ffffff;}
#wrapper.share-show .share_list a{color:#000;}
#wrapper.share-show .share_title,
#wrapper.share-show .share_title:hover{background:#4a4a4a;color:#ffffff;}
#wrapper.share-show .share_list a:hover{background:#ffffff;color:#000;}

#wrapper .mobile-abovepost .multi-contacts{background-color:#ffffff;}
#wrapper .mobile-abovepost .multi-contacts .tsi-address a{color:#000;background-color:#ffffff;}
#wrapper .mobile-abovepost .multi-contacts .tsi-phone a{color:#000;}
#wrapper .mobile-abovepost .multi-contacts .contacts-title{background:#4a4a4a;color:#ffffff;}

.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *{color:#575757;}
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action{background-color: #000;}
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a{color: #ffffff;}

/*REVIEWS*/
#container .type_reviews .hero .the_list_item_desc {background-color:#000;color:#ffffff;}
#container .type_reviews .hero .the_list_item_heads:after{border-right-color:#000;}
#container .type_reviews .hero .the_list_item_subheadline .icon-star{color:#ffffff;}

/*DESKTOP SMALL RES //////////////// */
.mobileview #wrapper .mobile-menu{background-color:#4a4a4a;}

/*NEW GALLERIES*/
#container .section .g_color.g2 .the_gallery_item.yes_image .the_list_item_action{color: #4a4a4a;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action{background-color: #ffffff;color: #000;}
#container .section .g_color.g2 .caption:before{background-color: #ffffff;color: #000;}
#container .section .g_color.g2 .slick-nav .the_gallery_item.slick-slide:hover .caption,
#container .section .g_color.g2 .slick-nav .the_gallery_item.slick-current .caption{box-shadow:0 0 0 2px #4a4a4a;}
#container .section .g_color.g2 .slick-arrow{color: #4a4a4a;}
#container .section .g_color.g2 .slick-slides .the_gallery_item.no_image{background-color: #000;}
#container .section .g_color.g2 .slick-nav .the_gallery_item.no_image .the_list_text{background-color: #000;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action{background-color:#ffffff;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action a{color: #000;}

#container .section .type_gallery_2:not(.small) .slick-arrow:before,
#container .section .type_testimonials.t2 .slick-arrow{background-color: #ffffff;color: #000;}
#container .no_set_width_4_3 .the_list_item_image,
#container .no_set_width_1_1 .the_list_item_image{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}

body.mce-content-body div{background-color:#4a4a4a;color:#000000;}

/* SECTION ---------------------------------------------------------- */

/* TABS 1 */
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs {border-color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link {color: #ffffff;border-color: transparent;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link:hover {border-color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link.current {background-color: #ffffff;color: #000;}

/* TABS 2 */
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs {background: #ededed;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link {color: #4a4a4a;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link:hover {color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link.current {background-color: #ffffff;color: #000;}

/* TABS 3 */
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link {color: #4a4a4a;border-color: #ededed;}
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link:hover {background-color: #ffffff;color: #000;}
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link.current {background: #ffffff;color: #000;}

@media only screen and (max-width : 800px){
  #container .section .type_gallery_2 .slick-arrow:before{background-color: #ffffff;color: #000;}
}

@media only screen and (max-width : 568px){
  .mobileview #container .g_color.pg_v2.yResize.widescreen_16_9 .the_list_item:not(.no_image) .caption *,
  .mobileview #container .g_color.pg_v2.yResize.widescreen_2-4_1 .the_list_item:not(.no_image) .caption *,
  .mobileview #container .g_color.pg_v2.yResize.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption *{color: #575757;}

  .mobileview #container .g_color.pg_v2.yResize.widescreen_16_9 .the_list_item:not(.no_image) .the_list_item_action,
  .mobileview #container .g_color.pg_v2.yResize.widescreen_2-4_1 .the_list_item:not(.no_image) .the_list_item_action,
  .mobileview #container .g_color.pg_v2.yResize.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .the_list_item_action{background-color: #000;}

  .mobileview #container .g_color.pg_v2.yResize.widescreen_16_9 .the_list_item:not(.no_image) .the_list_item_action a,
  .mobileview #container .g_color.pg_v2.yResize.widescreen_2-4_1 .the_list_item:not(.no_image) .the_list_item_action a,
  .mobileview #container .g_color.pg_v2.yResize.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .the_list_item_action a{color: #ffffff;}
}/* >>> <<< */