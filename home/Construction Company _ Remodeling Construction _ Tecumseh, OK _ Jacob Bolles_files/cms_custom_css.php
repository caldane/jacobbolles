
/*------------------------------------------------------ MAP ------------------------------------------------------*/

#_the_map_wrapper .b2b-location.wide .b2b-location-items ul li.show-details {
    overflow: auto !important;
}

.primary.tsi-address, .b2b-location-canvas { display:none !important; }
.primary.tsi-phone { width:100% !important; }
.b2b-location-get-directions.color_bodylinks, .footer-street-address.footer-address, .b2b-location-get-directions { display:none !important; }
.mobile-multi-locations .tsi-address a { display: none !important; }

.gm-style {display: none!important;}
#wrapper #_the_map_wrapper .b2b-location-canvas {  display: none !important;}
#wrapper #_the_map_wrapper .b2b-location.wide * {text-align: center !important;width: 100% !important;}
.mediaqueries.mobileview#wrapper #_the_map_wrapper .b2b-location.wide * {text-align: center !important;width: 100% !important;height:100%!important;}
/*-------------------------------------------------- GLOBAL BODY --------------------------------------------------*/

body:not(.isMobile) #container {
    padding: 0 !important;
}

.full_width_content {
    background: rgba(255, 255, 255, 0) !important;
    margin: 0 auto !important;
    max-width: 100% !important;
}

html:not(.mobileview) .home #container {
    margin-top: -13.2rem !important;
}



/*---------------------------------------------------- HEADER -----------------------------------------------------*/
/*--- COLORS ---*/
.header_share_wrap.inline-list{
  background: #4a4a4a !important;
}
.header_share_wrap a:not(.phone):hover {
  background: #fff !important;
}

/*--- SOCIAL ICONS INSTEAD OF DROP-DOWN ---*/
.header_share_wrap .share_icons_list {
  display: block !important;
  width: 100% !important;
}
.header_share_wrap.inline-list{
  padding: .5rem 1.4rem !important;
}
.modal_content.share_icons .phone{
  display:none !important;
}
.share_icons_list_wrap.modal_list_wrap .phone{
  display: block !important;
}
.phone{
  display: block !important;
}

@media only screen and (min-width: 801px) {
  html:not(.mobileview) #the_header .share_icons a:hover:not(.phone)::after {
border-radius: 2px !important;
bottom: -30px !important;
content: attr(title) !important;
font-size: 1rem !important;
padding: 0.6rem 1rem !important;
position: absolute !important;
right: 0 !important;
white-space: nowrap !important;
width: auto !important;
z-index: 98 !important;
color: #fff !important;
background-color: transparent !important;
  }
}
@media (max-width: 800px) {
  .phone {
display: none !important;
  }
}

html:not(.mobileview) #the_header #_the_logo {
    width: 100% !important;
}

html:not(.mobileview) #wrapper .menu-wrap {
    width: 100% !important;
}

html:not(.mobileview) .home #the_header #_the_logo {
    display: none !important;
}

#the_header {
    max-width: 100% !important;
    box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.15) !important;
}

html:not(.mobileview) .home #access .menu.align-right {
    text-align: center !important;
}

html:not(.mobileview) .home #the_header #_the_logo {
    color: #fff;
}

html:not(.mobileview) .home .menu-wrap {
    width: 100% !important;
}


html:not(.mobileview) .home #the_header .header_color {
    background: linear-gradient(var(--headBkg), rgba(0,0,0, 0)) repeat scroll 0 0 !important;
}



/*----------------------------------------------------- LOGO ------------------------------------------------------*/

.logo-variation-header .logo-slot img {
max-height: 15rem !important;
-webkit-transition: all .5s ease-in-out !important;
-moz-transition: all .5s ease-in-out !important;
-o-transition: all .5s ease-in-out !important;
transition: all .5s ease-in-out !important;
}
.logo-fade .logo-variation-header .logo-slot img {
max-height: 7rem !important;
}
.mediaqueries.mobileview .logo-slot img {
max-height: 12rem !important;
}

.mediaqueries.mobileview #dllogo {
    display: none !important;
}

/*-------------------------------------------------- NAVIGATION ---------------------------------------------------*/

html:not(.mobileview) .home #the_header .menu .current-menu-item > a {
    border-bottom: solid #fff;
}

html:not(.mobileview) .home #the_header .menu .menu-item > a:hover {
    border-bottom: solid #fff;
    color: #fff !important;
}

#_the_navigation a,
#menu-holder a {
    font-size: 1.3rem !important;
    font-weight: normal !important;
}

@media print, screen and (min-width: 1024px){
.tsH .shrink #access {
    margin-top: 2rem !important;
}
}
.tsH .menu.align-center {
    text-align: center;
    padding: 0 5rem;
    margin-top: 2em !important;
}
/*---------------------------------------------------- BUTTON -----------------------------------------------------*/

.the_list_item_action a,.gform_button {
    background: #4a4a4a !important;
    color: #fff !important;
    box-shadow: none !important;
    border: none !important;
    font-size: 1.7rem !important;
    text-transform: uppercase !important;
}

.the_list_item_action a:hover ,.gform_button:hover{
    background: #000 !important;
    color: #fff !important;
}

.the_list_item_action {
    background-color: transparent !important;
}

/*------------------------------------------------- FONT STYLING --------------------------------------------------*/

h1,
h2,
h3 {
    font-weight: normal !important;
}

.the_list_item .the_list_item_subheadline {
    text-transform: uppercase !important;
    letter-spacing: .07em !important;
    font-weight: bold !important;
}

.the_list_item .the_list_item_headline {
    letter-spacing: .1em !important;
    text-transform: uppercase !important;
}

/*--------------------------------------------------- CONTENT -----------------------------------------------------*/

.tsidesign_content {
    max-width: 106rem !important;
    margin: 0 auto !important;
}

.home .content {
    padding-top: 3rem !important;
}

.tsidesign_main1 {
    padding-top: 5% !important;
    padding-bottom: 3% !important;
}

.tsidesign_main1 .the_list_wrap {
    max-width: 90rem !important;
    text-align: center !important;
    margin: 0 auto !important;
}

.tsidesign_main1 .the_list_item .the_list_item_headline {
    font-size: 1.4rem !important;
    color: var(--accentBkg) !important;
}

.tsidesign_main1 .the_list_item .the_list_item_subheadline {
    font-size: 3rem !important;
    line-height: 3rem !important;
    margin-top: 2rem !important;
    color: var(--links) !important;
}

.tsidesign_title {
    color: white !important;
    padding-top: 5% !important;
    padding-bottom: 3% !important;
}

.tsidesign_title .the_list_wrap {
    max-width: 90rem !important;
    text-align: center !important;
    margin: 0 auto !important;
}

.tsidesign_title .the_list_item .the_list_item_headline {
    font-size: 1.4rem !important;
    color: #fff !important;
}

.tsidesign_title .the_list_item .the_list_item_subheadline {
    font-size: 3rem !important;
    line-height: 3rem !important;
    margin-top: 2rem !important;
    color: #fff !important;
}


/*----------------------------------------------------- DLS -------------------------------------------------------*/
.dl-logo {
  max-width: 30% !important;
}

.dl-logo {
    padding: .5rem !important;
    background: -webkit-radial-gradient(center, rgba(74, 74, 74, .85), rgba(74, 74, 74, .75));
    /* For Safari 5.1 to 6.0 */
    background: -o-radial-gradient(center, rgba(74, 74, 74, .85), rgba(74, 74, 74, .75));
    /* For Opera 11.1 to 12.0 */
    background: -moz-radial-gradient(center, rgba(74, 74, 74, .85), rgba(74, 74, 74, .75));
    /* For Firefox 3.6 to 15 */
    background: radial-gradient(center, rgba(74, 74, 74, .85), rgba(74, 74, 74, .75));
    /* Standard syntax (must be last) */
}


.tsidesign_dl .the_list_wrap {
    padding: 15% 8% 15% !important;
    text-align: center !important;
    background: rgba(0, 0, 0, 0.35) !important;
    -webkit-transition: all 1s ease-in-out !important;
    -moz-transition: all 1s ease-in-out !important;
    -o-transition: all 1s ease-in-out !important;
    transition: all 1s ease-in-out !important;
}

.tsidesign_dl .the_list_wrap:hover {
    background: rgba(0, 0, 0, 0.2) !important;
}

.tsidesign_dl,
.tsidesign_dl2 {
    margin-bottom: 0rem !important;
}

.tsidesign_dl .the_list_text,
.tsidesign_dl2 .the_list_text {
    max-width: 85rem !important;
    margin: 0 auto !important;
}

.tsidesign_dl .the_list_item .the_list_item_headline,
.tsidesign_dl .the_list_item .the_list_item_headline a {
    text-transform: uppercase !important;
    font-size: 2.5rem !important;
    letter-spacing: .13em !important;
}

.tsidesign_dl .the_list_item .the_list_item_subheadline {
    font-size: 5rem !important;
    line-height: 5.5rem !important;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.7) !important;
}

.tsidesign_dl2 .the_list_wrap {
    padding: 10% 8% 10% !important;
    text-align: center !important;
    background: rgba(0, 0, 0, 0.4) !important;
    -webkit-transition: all 1s ease-in-out !important;
    -moz-transition: all 1s ease-in-out !important;
    -o-transition: all 1s ease-in-out !important;
    transition: all 1s ease-in-out !important;
}

.tsidesign_dl2 .the_list_wrap:hover {
    background: rgba(0, 0, 0, 0.25) !important;
}


.tsidesign_dl2 .the_list_item .the_list_item_headline {
    background: rgba(0, 0, 0, 0.75) !important;
}

.tsidesign_dl2 .the_list_item .the_list_item_headline,
.tsidesign_dl2 .the_list_item .the_list_item_headline a {
    text-transform: uppercase !important;
    font-size: 2rem !important;
    letter-spacing: .13em !important;
    padding-top: .3em !important;
}

.tsidesign_dl2 .the_list_item .the_list_item_subheadline {
    font-size: 4rem !important;
    line-height: 4rem !important;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.7) !important;
}

/*--------------------------------------------------- FEATURES ----------------------------------------------------*/

.tsidesign_feature2 {
  margin: 0 !important;
  padding:  0 !important;
}
.tsidesign_feature2 .the_list_item {
  margin: 0 !important;
  width: 50% !important;
  clear:  none !important;
}

.tsidesign_feature2 h3.the_list_item_headline.hds_color {
    margin-top: 25% !important;
  font-size:2.75rem !important;
}
.tsidesign_feature2 .the_list_item_heads{
  background: rgba(0, 0, 0, 0.4) !important;
  -webkit-transition: all 0.5s ease-in-out !important;
  -moz-transition: all 0.5s ease-in-out !important;
  -o-transition: all 0.5s ease-in-out !important;
  transition: all 0.5s ease-in-out !important;
}
.tsidesign_feature2 .the_list_item_heads:hover{
  background: rgba(74, 74, 74, 0.75) !important;
}
.tsidesign_feature2 .the_list_item_subheadline{
  text-transform: unset !important;
  border:  none !important;
  font-size: 1.4rem !important;
} 
@media(min-width: 1200px){
.tsidesign_feature2 .the_list_item {
  margin: 0 !important;
  width: 25% !important;
}
}
@media(max-width: 1199px){
.tsidesign_feature2 .the_list_item{
  width: 50% !important;
}
}
@media(max-width: 575px){
.tsidesign_feature2 .the_list_item{
  width: 100% !important;
}
}

/*--------------------------------------------------- SPLIT 1 ----------------------------------------------------*/
.tsidesign_split1 a {
  color: #fff !important;
}

.tsidesign_split1 {
    max-width: 100% !important;
    background: var(--links) !important;
    margin: 0 !important;
    color: white !important;
    padding-top: 3rem !important;
    padding-bottom: 5rem !important;
    -webkit-transition: all .7s ease-in-out !important;
    -moz-transition: all .7s ease-in-out !important;
    -o-transition: all .7s ease-in-out !important;
    transition: all .7s ease-in-out !important;
}

.tsidesign_split1 .item_1 .the_list_wrap {
    max-width: 45rem !Important;
    float: right !Important;
    margin-top: 5% !important;
    text-align: right !important;
}


.tsidesign_split1 .the_list_item .the_list_item_headline,
.tsidesign_split1 .the_list_item .the_list_item_headline a {
    text-align: right !important;
    font-size: 1.7rem !important;
    text-transform: uppercase !important;
    color: white !important;
}

.tsidesign_split1 .the_list_item .the_list_item_subheadline {
    text-align: right !important;
    font-size: 4rem !important;
    line-height: 4rem !important;
    font-weight: 900 !important;
    text-transform: uppercase !important;
    color: var(--accentBkg) !important;
}

.tsidesign_split1 .item_2 .the_list_wrap {
    max-width: 55rem !important;
    margin-top: 4% !important;
    padding-left: 1rem !important;
}

/*SPLIT 2*/



.tsidesign_split2 {
    background: #fff !important;
    margin: 0 !important;
    padding-top: 3rem !important;
    padding-bottom: 4rem !important;
    -webkit-transition: all .7s ease-in-out !important;
    -moz-transition: all .7s ease-in-out !important;
    -o-transition: all .7s ease-in-out !important;
    transition: all .7s ease-in-out !important;
}

.tsidesign_split2 .item_1 .the_list_wrap {
    max-width: 45rem !Important;
    float: right !Important;
    margin-top: 5% !important;
    text-align: left !important;
}

.tsidesign_split2 .item_2 .the_list_wrap {
    max-width: 55rem !important;
    padding-left: 1rem !important;
}

.tsidesign_split2 .the_list_item .the_list_item_headline,
.tsidesign_split2 .the_list_item .the_list_item_headline a {
    text-align: right !important;
    font-size: 1.7rem !important;
    text-transform: uppercase !important;
    color: var(--accentBkg) !important;
}

.tsidesign_split2 .the_list_item .the_list_item_subheadline {
    text-align: right !important;
    font-size: 4rem !important;
    line-height: 4rem !important;
    text-transform: uppercase !important;
    color: var(--links) !important;
}

.tsidesign_split2 .item_1 .the_list_wrap {
    max-width: 55rem !important;
    margin-top: 2% !important;
    padding-right: 1rem !important;
    float: right !important;
    text-align: right !important;
}

/*--------------------------------------------------- SERVICES ----------------------------------------------------*/

.tsidesign_services {
    max-width: 136rem !important;
    margin: 0 auto !important;
    color: white !Important;
}

.tsidesign_services .the_list_item .the_list_item_subheadline {
    color: white !important;
    font-size: 1.7rem !important;
    font-weight: 400 !important;
}

.tsidesign_services span {
    color: #fff !important;
    float: left !important;
    font-size: 75px !important;
    line-height: 60px !important;
    padding: 4px 8px 2rem 3px !important;
    font-weight: 200 !important;
    font-style: italic !important;
}

.the_list_item .the_list_item_desc p {
    letter-spacing: .01em !important;
}


/*---------------------------------------------------- SUBPAGES -----------------------------------------------------*/

.tsidesign_internal .the_list_item_image img{
    box-shadow: -4px 3px 3px rgba(0,0,0,.23) !important;
  border-radius:3px !important;
}

.tsidesign_internal {
  max-width: 106rem !important;
  margin: 0 auto !important;
}

.tsidesign_banner{
  padding: 2.5% .5% 1% 2.5% !important;
  background: #000 !important;
  margin: 0 !important;
  -moz-transition: all 0.35s ease-in-out !important;
  -webkit-transition: all 0.35s ease-in-out !important;
  -o-transition: all 0.35s ease-in-out !important;
  transition: all 0.35s ease-in-out !important;
}
.tsidesign_banner .the_list_item,
.tsidesign_banner .the_list {
  margin-bottom: 0.5rem !important;
}
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a{
  color: #fff !important;
  letter-spacing: .05em !important;
}
.tsidesign_banner .the_list_item_subheadline{
  color: #fff !important;
  letter-spacing: .05em !important;
  font-weight: 300 !important;
}
.tsidesign_banner .item_1{
  width: 70% !important;
}
.tsidesign_banner .item_2{
  width: 25% !important;
  text-align: right !important;
}
.tsidesign_banner .the_list_item_action{
  background-color: transparent !important;
}
.tsidesign_banner .the_list_item_action a {
  background: transparent !important;
  padding: 1rem 2rem !important;
  border: 2px solid #fff !important;
}
.tsidesign_banner .the_list_item_action a:hover {
  background: #fff !important;
  color: #000 !important;
}
@media(min-width:1000px){
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a {
  font-size: 3.6rem !important;
}
.tsidesign_banner .the_list_item_subheadline{
  font-size: 2rem !important;
}
}

@media (max-width:1000px){
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a{
  font-size: 3rem !important;
}
.tsidesign_banner .the_list_item_subheadline{
  font-size: 1.7rem !important;
}
  .tsidesign_banner .item_1{
  width: 60% !important;
}
.tsidesign_banner .item_2{
  width: 35% !important;
}
}
@media (max-width:569px){
  .tsidesign_banner .the_list_item{
    width: 100% !important;
    text-align: center !important;
  }
}

/*---------------------------------------------------- FOOTER -----------------------------------------------------*/

#the_footer {
    max-width: 100% !important;
}

/*------------------------------------------------- MEDIA QUERIES -------------------------------------------------*/
@media only screen and (max-width: 800px){
.section .type_section.cover_fixed .tsXa{
    background-size: cover !important;
  background-attachment: inherit !important;
    }}

@media (max-width: 815px){
  .dl-logo {
	display: none !important;
  }
}

.mediaqueries.mobileview #container .item_1.the_list_item.center.hero.yes_image.yes_heads.yes_link.yes_desc,
.mediaqueries.mobileview #container .section .list_block.type_article.a3 .the_list_item{
    background-attachment: initial!important;
}

@media(max-width: 800px) {
    .tsidesign_feature2 .the_list_item {
        width: 50% !important;
    }
    .tsidesign_split1 .the_list_item .the_list_item_subheadline,
    .tsidesign_split2 .the_list_item .the_list_item_subheadline {
        font-size: 3rem !important;
        line-height: 3rem !important;
    }
    .tsidesign_split1 .the_list_item .the_list_item_subheadline,
    .tsidesign_split2 .the_list_item .the_list_item_subheadline,
    .tsidesign_title .the_list_item .the_list_item_subheadline,
    .tsidesign_main1 .the_list_item .the_list_item_subheadline {
        font-size: 2.7rem !important;
        line-height: 2.7rem !important;
    }
    .tsidesign_dl .the_list_item .the_list_item_subheadline {
        font-size: 5rem !important;
        line-height: 5rem !important;
    }
    .tsidesign_dl2 .the_list_item .the_list_item_subheadline {
        font-size: 4rem !important;
        line-height: 4rem !important;
    }
    .tsidesign_dl .the_list_item .the_list_item_headline,
    .tsidesign_dl .the_list_item .the_list_item_headline a {
        font-size: 2rem !important;
        line-height: 2rem !important;
    }
}

@media(max-width: 575px) {
    .tsidesign_feature2 .the_list_item {
        width: 100% !important;
    }
    .tsidesign_split1 .the_list_item .the_list_item_subheadline,
    .tsidesign_split2 .the_list_item .the_list_item_subheadline,
    .tsidesign_title .the_list_item .the_list_item_subheadline,
    .tsidesign_main1 .the_list_item .the_list_item_subheadline {
        font-size: 2.5rem !important;
        line-height: 2.5rem !important;
    }
    .tsidesign_dl .the_list_item .the_list_item_subheadline {
        font-size: 4rem !important;
        line-height: 4rem !important;
    }
    .tsidesign_dl2 .the_list_item .the_list_item_subheadline {
        font-size: 2.5rem !important;
        line-height: 3rem !important;
    }
    .tsidesign_dl .the_list_item .the_list_item_headline,
    .tsidesign_dl .the_list_item .the_list_item_headline a,
    .tsidesign_dl2 .the_list_item .the_list_item_headline,
    .tsidesign_dl .the_list_item .the_list_item_headline a,
    .tsidesign_dl2 .the_list_item .the_list_item_headline,
    .tsidesign_dl2 .the_list_item .the_list_item_headline a {
        font-size: 1.7rem !important;
        line-height: 1.7rem !important;
    }
    .tsidesign_services .the_list_item .the_list_item_subheadline {
        font-size: 1.5rem !important;
    }
}
/*----------------------------------------------------- FLEX ------------------------------------------------------*/


#container .tsidesign_flex, #container .tsD_flex {
    margin: 0 auto !important;

    display: -webkit-box !important;
    display: -moz-box !important;
    display: box !important;
    display: -webkit-flex !important;
    display: -moz-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;

    -webkit-box-align: stretch;
    -moz-box-align: stretch;
    box-align: stretch;
    -webkit-align-items: stretch;
    -moz-align-items: stretch;
    -ms-align-items: stretch;
    -o-align-items: stretch;
    align-items: stretch;
    -ms-flex-align: stretch;

    -webkit-box-orient: horizontal;
    -moz-box-orient: horizontal;
    box-orient: horizontal;
    -webkit-box-direction: normal;
    -moz-box-direction: normal;
    box-direction: normal;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    flex-direction: row;
    -ms-flex-direction: row;

    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    -ms-justify-content: space-between;
    -o-justify-content: space-between;
    justify-content: space-between;
    -ms-flex-pack: justify;

    -webkit-box-lines: multiple;
    -moz-box-lines: multiple;
    box-lines: multiple;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
#container .tsidesign_flex .the_list_item, #container .tsD_flex .the_list_item {
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

/*KILLS RIGHT MARGIN ON THE LAST ITEM IF ODD NUMBER OF FEATURES SO EDGES ARE FLUSH WHEN SCALED - RK QA*/
#container .tsidesign_flex .the_list_item:last-of-type, #container .tsD_flex .the_list_item:last-of-type {margin-right: 0rem !important;}
/*END*/

.flexboxlegacy #container .tsidesign_flex .the_list_item, .flexboxlegacy #container .tsD_flex .the_list_item{
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    flex-direction: row;
    -ms-flex-direction: row;
    -webkit-flex: 1 1 auto;
    flex: 1 1 auto;
}

.no-flexboxlegacy #container .tsidesign_flex .the_list_item, .no-flexboxlegacy #container .tsD_flex .the_list_item{
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    box-orient: vertical;
    -webkit-box-direction: normal;
    -moz-box-direction: normal;
    box-direction: normal;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    flex-direction: column;
    -ms-flex-direction: column;
}
#container .tsidesign_flex .the_list_item,
.flexboxlegacy #container .tsidesign_flex .the_list_item .the_list_wrap, #container .tsD_flex .the_list_item,
.flexboxlegacy #container .tsD_flex .the_list_item .the_list_wrap  {
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    box-flex: 1;
    -webkit-flex: 1 1 auto;
    -moz-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    display: -webkit-box;
    display: -moz-box;
    display: box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-self: stretch;
    -moz-align-self: stretch;
    align-self: stretch;
    -ms-flex-item-align: stretch;
}

#container .tsidesign_flex .the_list_item .the_list_wrap, #container .tsD_flex .the_list_item .the_list_wrap {
    /*height: 100% !important;*/
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    box-orient: vertical;
    -webkit-box-direction: normal;
    -moz-box-direction: normal;
    box-direction: normal;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    flex-direction: column;
    -ms-flex-direction: column;

}

.flexboxlegacy #container .tsidesign_flex .the_list_item .the_list_wrap, .flexboxlegacy #container .tsD_flex .the_list_item .the_list_wrap {
    height: auto;
}

#container .tsidesign_flex .the_list_item .the_list_item_action, #container .tsD_flex .the_list_item .the_list_item_action {
    margin-top: auto !important;
    display: block;
    width: 100%;
}

#container .tsidesign_flex, #container .tsD_flex {
    justify-content: space-around;
}
#container .tsidesign_flex .the_list_item, #container .tsD_flex .the_list_item {
    justify-content: space-between;
}

@media (max-width:815px) and (min-width:575px) {
.tsidesign_flex .the_list_item, .tsD_flex .the_list_item {
    width: 44.988% !important;
}
}

/*---Google G---*/
.custom-social-1 a::before {content: "g" !important;}
/*---Link Color---*/
.tsD_link a {color: #c1bdbd !important;}