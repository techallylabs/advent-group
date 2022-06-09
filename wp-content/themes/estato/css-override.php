<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Rokkitt";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Catamaran";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Catamaran";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Catamaran";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Catamaran";
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#63b1c3";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -20" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#75c147";
}
$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -20" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -30" );$css_override = sanitize_text_field(".btDarkSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btLightSkin .btDarkSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btLightSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btDarkSkin .btLightSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btDarkSkin textarea.wpcf7-submit,
.btLightSkin .btDarkSkin textarea.wpcf7-submit,
.btLightSkin textarea.wpcf7-submit,
.btDarkSkin .btLightSkin textarea.wpcf7-submit,
.btDarkSkin select.wpcf7-submit,
.btLightSkin .btDarkSkin select.wpcf7-submit,
.btLightSkin select.wpcf7-submit,
.btDarkSkin .btLightSkin select.wpcf7-submit{background-color: {$alternateColor};}
.btDarkSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btLightSkin .btDarkSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btLightSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btDarkSkin .btLightSkin input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btDarkSkin textarea.wpcf7-submit:hover,
.btLightSkin .btDarkSkin textarea.wpcf7-submit:hover,
.btLightSkin textarea.wpcf7-submit:hover,
.btDarkSkin .btLightSkin textarea.wpcf7-submit:hover,
.btDarkSkin select.wpcf7-submit:hover,
.btLightSkin .btDarkSkin select.wpcf7-submit:hover,
.btLightSkin select.wpcf7-submit:hover,
.btDarkSkin .btLightSkin select.wpcf7-submit:hover{background-color: {$alternateColorDark};}
.btDarkSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btLightSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit,
.btDarkSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit,
.btLightSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit,
.btDarkSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit,
.btLightSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit{
    color: {$accentColor};}
.btDarkSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btLightSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover,
.btDarkSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit:hover,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit:hover,
.btLightSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit:hover,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] textarea.wpcf7-submit:hover,
.btDarkSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit:hover,
.btLightSkin .btDarkSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit:hover,
.btLightSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit:hover,
.btDarkSkin .btLightSkin .rowItem[style*=\"background-color\"] select.wpcf7-submit:hover{background-color: {$accentColor};}
input:focus:not([type='checkbox']):not([type='radio']):not([type='submit']),
textarea:focus:not([type='checkbox']):not([type='radio']){-webkit-box-shadow: 0 0 4px 0 {$alternateColor};
    box-shadow: 0 0 4px 0 {$alternateColor};
    border: 1px solid {$alternateColor};}
a{
    color: {$accentColor};}
select,
input{font-family: {$bodyFont};}
body{font-family: \"{$bodyFont}\",Arial,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\";}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentColorBackground{background-color: {$accentColor} !important;}
.btLightSkin .btText a,
.btDarkSkin .btLightSkin .btText a,
.btDarkSkin .btText a,
.btLightSkin .btDarkSkin .btText a{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\";}
.btLogoArea .logo span a:before{
    background-color: {$accentColor};}
.btLogoArea .logo span a:after{
    background-color: {$alternateColor};}
.btVerticalMenuTrigger:before{
    color: {$accentColor};}
.btVerticalMenuTrigger:hover:before{color: {$alternateColor};}
ul ul li .subToggler:before{color: {$accentColor};}
.on > .subToggler:before{color: {$accentColor};}
ul ul li .on > .subToggler:before{color: {$accentColor};}
li[class*=\"current\"] .subToggler:before{color: {$accentColor};}
.btMenuHorizontal .menuPort ul > li.on > a,
.btMenuHorizontal .menuPort ul > li[class*=\"current\"] > a{
    color: {$alternateColor};}
.btMenuHorizontal .menuPort ul ul > li a{
    color: {$accentColor};}
.btMenuHorizontal .menuPort nav{
    background-color: {$accentColor};
    background: {$accentColor} url(gfx/shadow.png) no-repeat 0 0 / auto 100%;}
html:not(.touch) body.btMenuRight.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a,
html:not(.touch) body.btMenuLeft.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a,
html:not(.touch) body.btMenuCenter.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a{
    border-bottom: 1px solid {$accentColor};
    color: {$alternateColor};}
html:not(.touch) body.btMenuRight.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:hover,
html:not(.touch) body.btMenuLeft.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:hover,
html:not(.touch) body.btMenuCenter.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInMenu{
    background-color: {$alternateColor};}
.btMenuVertical > .menuPort .logo span{
    border-top: 3px solid {$accentColor};
    border-bottom: 3px solid {$alternateColor};}
.btMenuVertical > .menuPort .btCloseVertical{
    background-color: {$alternateColor};}
.btMenuVertical > .menuPort .btCloseVertical:hover{background-color: {$accentColor};}
.btMenuVertical > .menuPort .topBarInMenu .btIco.btIcoDefaultType .btIcoHolder:before{
    color: {$accentColor};}
.btMenuVertical > .menuPort .topBarInLogoAreaCell .btIconWidget .btIconWidgetIcon .btIco.btIcoDefaultType .btIcoHolder:before{
    color: {$accentColor};}
.btMenuVertical .menuPort{background-color: {$accentColor};}
a.btIconWidget:hover{color: {$accentColor} !important;}
.btTopToolsInMenuArea.btMenuHorizontal .topTools,
.btTopToolsInMenuArea.btMenuHorizontal .topBarInMenu{
    background-color: {$alternateColor};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuBelowLogo.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetIcon .btIco .btIcoHolder:before{
    background-color: {$alternateColor};}
.btMenuBelowLogo.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetTitle{
    font-family: {$headingFont};
    color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea .btIconWidget .btIco.btIcoDefaultType .btIcoHolder:before{
    background-color: {$alternateColor};}
.btMenuHorizontal .topBar .btSpecialHeaderIcon .btIco.btIcoDefaultType .btIcoHolder:before{
    background-color: {$alternateColor};}
.btMenuHorizontal .topBar .btSpecialHeaderIcon .btIco.btIcoDefaultType .btIcoHolder:hover:before{background-color: {$accentColor};}
.btMenuVertical .btTopToolsLeft .btIco.btIcoDefaultType .btIcoHolder:before{
    background-color: {$alternateColor};}
.topBar .widget_search button,
.topBarInMenu .widget_search button{
    background: {$accentColor};}
.topBar .widget_search button:before,
.topBarInMenu .widget_search button:before{
    color: {$accentColor};}
.topBar .widget_search button:hover,
.topBarInMenu .widget_search button:hover{background: {$accentColorDark};}
.btSearchInner.btFromTopBox{
    background: {$accentColorDark};}
.btSearchInner.btFromTopBox input[type=\"text\"]:focus{
    -webkit-box-shadow: 0 3px 0 0 {$alternateColor};
    box-shadow: 0 3px 0 0 {$alternateColor};}
.btSiteFooter .copyLine{
    font-family: {$bodyFont};}
.btSiteFooterWidgets{
    background-color: {$accentColor};}
.btSiteFooter{
    font-family: {$headingFont};
    background-color: {$accentColor};}
.sticky .headline:before{
    color: {$accentColor};}
.headline a{color: {$accentColor};}
.btPortfolioSingleItemColumns dt{color: {$accentColor};}
.btMediaBox.btQuote p:before,
.btMediaBox.btLink p:before{
    color: {$alternateColor};}
.btMediaBox.btQuote cite,
.btMediaBox.btLink cite{
    border-top: 1px solid {$accentColor};
    font-family: {$headingFont};}
.btArticleListItem .headline a:hover{color: {$accentColor};}
.btArticleListItem.btBlogColumnView .btArticleListBodyAuthor a,
.btPostSingleItemColumns .btArticleListBodyAuthor a{color: {$accentColor} !important;}
.vcard:after{
    background-color: {$accentColor};}
.commentTxt p.edit-link a:hover,
.commentTxt p.reply a:hover{color: {$alternateColor};}
.commentTxt p.edit-link:before,
.commentTxt p.reply:before{
    background-color: {$accentColor};}
.btBox > h4:after,
.btCustomMenu > h4:after{
    background-color: {$accentColor};}
.btBox ul li a:hover,
.btCustomMenu ul li a:hover{color: {$accentColor};}
.btBox .popularPosts .ppTxt .small .btSuperTitle,
.btCustomMenu .popularPosts .ppTxt .small .btSuperTitle{
    font-family: {$bodyFont};}
.btSiteFooterWidgets .btBox .popularPosts .ppTxt h4 a:hover,
.btSiteFooterWidgets .btCustomMenu .popularPosts .ppTxt h4 a:hover{color: {$accentColor};}
.btBox.widget_calendar table caption{background: {$accentColor};
    font-family: \"{$headingFont}\";}
.btBox.widget_archive ul li a:hover,
.btBox.widget_categories ul li a:hover,
.btCustomMenu ul li a:hover,
.btBox.widget_product_categories ul li a:hover{color: {$accentColor};}
.btDarkSkin .btBox.widget_archive ul li a:hover,
.btDarkSkin .btBox.widget_categories ul li a:hover,
.btDarkSkin .btCustomMenu ul li a:hover,
.btDarkSkin .btBox.widget_product_categories ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_archive ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_categories ul li a:hover,
.btLightSkin .btDarkSkin .btCustomMenu ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_product_categories ul li a:hover{color: {$accentColor};}
.btDarkSkin .btBox.widget_archive ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_archive ul li a:hover,
.btDarkSkin .btBox.widget_categories ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_categories ul li a:hover{border-bottom: 1px solid {$accentColor};}
.btDarkSkin .btBox.widget_recent_comments ul li.recentcomments a:hover,
.btLightSkin .btDarkSkin .btBox.widget_recent_comments ul li.recentcomments a:hover{color: {$accentColor};}
.btLightSkin .btBox.widget_recent_comments ul li.recentcomments a:hover,
.btDarkSkin .btLightSkin .btBox.widget_recent_comments ul li.recentcomments a:hover{color: {$accentColor};}
.btBox.widget_recent_comments ul li.recentcomments span.comment-author-link a{color: {$accentColor};}
.btBox.widget_recent_comments ul li.recentcomments span.comment-author-link a:hover{color: {$alternateColor};}
.btBox.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.btBox.widget_rss li cite:before{
    color: {$accentColor};}
.btBox .btSearch button,
.btBox .btSearch input[type=submit],
.btBox .btSearch button[type=submit],
.form.woocommerce-product-search button,
.form.woocommerce-product-search input[type=submit],
.form.woocommerce-product-search button[type=submit],
.woocommerce .btBox .btSearch button,
.woocommerce .btBox .btSearch input[type=submit],
.woocommerce .btBox .btSearch button[type=submit]{
    background: {$accentColor};}
form.wpcf7-form .wpcf7-submit{
    background-color: {$accentColor};}
.fancy-select .trigger.open{color: {$accentColor};}
.fancy-select ul.options > li:hover{color: {$accentColor};}
.widget_shopping_cart .total{border-top: 2px solid {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover:before{background-color: {$accentColor};}
.widget_price_filter .ui-slider .ui-slider-handle{
    background-color: {$accentColor};}
.widget_layered_nav ul li.chosen a:hover:before,
.widget_layered_nav ul li a:hover:before,
.widget_layered_nav_filters ul li.chosen a:hover:before,
.widget_layered_nav_filters ul li a:hover:before{background-color: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    background: {$accentColor};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{background: {$accentColorDark};}
.header .btSubTitle .btArticleCategories a:not(:first-child):before,
.header .btSuperTitle .btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor};}
.btContentHolder blockquote:before{
    color: {$alternateColor};}
.btLightSkin .post-password-form input[type=\"submit\"],
.btDarkSkin .btLightSkin .post-password-form input[type=\"submit\"],
.btDarkSkin .post-password-form input[type=\"submit\"],
.btLightSkin .btDarkSkin .post-password-form input[type=\"submit\"]{
    background-color: {$alternateColor};
    border: 2px solid {$alternateColor};}
.btLightSkin .post-password-form input[type=\"submit\"]:hover,
.btDarkSkin .btLightSkin .post-password-form input[type=\"submit\"]:hover,
.btDarkSkin .post-password-form input[type=\"submit\"]:hover,
.btLightSkin .btDarkSkin .post-password-form input[type=\"submit\"]:hover{
    color: {$alternateColor};}
.btPagination{font-family: \"{$headingFont}\";}
.btPagination .paging a:after{
    background-color: {$alternateColor};
    border: 2px solid {$alternateColor};}
.btPagination .paging a:hover:after{color: {$alternateColor};}
.comment-respond .btnOutline button[type=\"submit\"]{font-family: \"{$headingFont}\";}
a#cancel-comment-reply-link:hover{color: {$accentColor};}
span.btHighlight{
    background-color: {$accentColor};}
a.btContinueReading{
    color: {$accentColor};}
.btShareArticle:before{background-color: {$accentColor};}
.asgItem.title a{color: {$accentColor};}
.btIco .btIcoHolder:before{color: {$accentColor};}
.btIco.btIcoFilledType.btIcoAccentColor .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAccentColor:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor} inset;
    box-shadow: 0 0 0 1em {$accentColor} inset;}
.btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder:before{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;
    color: {$accentColor};}
.btIco.btIcoFilledType.btIcoAlternateColor .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAlternateColor:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$alternateColor} inset;
    box-shadow: 0 0 0 1em {$alternateColor} inset;}
.btIco.btIcoFilledType.btIcoAlternateColor:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAlternateColor .btIcoHolder:before{-webkit-box-shadow: 0 0 0 2px {$alternateColor} inset;
    box-shadow: 0 0 0 2px {$alternateColor} inset;
    color: {$alternateColor};}
.btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color: {$accentColor};}
.btLightSkin .btIco.btIcoDefaultType.btIcoAlternateColor .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAlternateColor .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btIcoAlternateColor .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAlternateColor .btIcoHolder:before{color: {$alternateColor};}
.btIcoAccentColor span{color: {$accentColor};}
.btIcoDefaultColor:hover span{color: {$accentColor};}
.btnFilledStyle.btnAccentColor,
.btnOutlineStyle.btnAccentColor:hover{background-color: {$accentColor};
    border: 2px solid {$accentColor};}
.btnOutlineStyle.btnAccentColor,
.btnFilledStyle.btnAccentColor:hover{
    border: 2px solid {$accentColor};
    color: {$accentColor};}
.btnOutlineStyle.btnAccentColor span,
.btnFilledStyle.btnAccentColor:hover span,
.btnOutlineStyle.btnAccentColor span:before,
.btnFilledStyle.btnAccentColor:hover span:before,
.btnOutlineStyle.btnAccentColor a,
.btnFilledStyle.btnAccentColor:hover a,
.btnOutlineStyle.btnAccentColor .btIco a:before,
.btnFilledStyle.btnAccentColor:hover .btIco a:before,
.btnOutlineStyle.btnAccentColor button,
.btnFilledStyle.btnAccentColor:hover button{color: {$accentColor} !important;}
.btnBorderlessStyle.btnAccentColor span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnAccentColor span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnAccentColor a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnAccentColor .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnAccentColor button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor};}
.btnFilledStyle.btnAlternateColor,
.btnOutlineStyle.btnAlternateColor:hover{background-color: {$alternateColor};
    border: 2px solid {$alternateColor};}
.btnOutlineStyle.btnAlternateColor,
.btnFilledStyle.btnAlternateColor:hover{
    border: 2px solid {$alternateColor};
    color: {$alternateColor};}
.btnOutlineStyle.btnAlternateColor span,
.btnFilledStyle.btnAlternateColor:hover span,
.btnOutlineStyle.btnAlternateColor span:before,
.btnFilledStyle.btnAlternateColor:hover span:before,
.btnOutlineStyle.btnAlternateColor a,
.btnFilledStyle.btnAlternateColor:hover a,
.btnOutlineStyle.btnAlternateColor .btIco a:before,
.btnFilledStyle.btnAlternateColor:hover .btIco a:before,
.btnOutlineStyle.btnAlternateColor button,
.btnFilledStyle.btnAlternateColor:hover button{color: {$alternateColor} !important;}
.btnBorderlessStyle.btnAlternateColor span,
.btnBorderlessStyle.btnAlternateColor span:before,
.btnBorderlessStyle.btnAlternateColor a,
.btnBorderlessStyle.btnAlternateColor .btIco a:before,
.btnBorderlessStyle.btnAlternateColor button{color: {$alternateColor};}
.btCounterHolder{font-family: \"{$headingFont}\";}
.btProgressContent .btProgressAnim{background-color: {$accentColor};}
.btProgressContent .btProgressAnim:before{
    background-color: {$accentColor};}
.btProgressContent .btProgressAnim:after{
    background-color: {$accentColor};}
.bpgPhoto .captionPane{
    background-color: {$alternateColorLight};}
.btPriceTable .btPriceTableHeader{background: {$accentColor};}
.btPriceTable .btPriceTableSticker{
    font-family: \"{$headingFont}\";}
.btPriceTable .btPriceTableSticker > div{background: {$alternateColor};}
.btTextCenter .sTxt .header h1,
.btTextCenter .sTxt .header h2,
.btTextCenter .sTxt .header h3,
.btTextCenter .sTxt .header h4{font-family: {$bodyFont};}
.btAccentHeadlineColor.header h1,
.btAccentHeadlineColor.header h2,
.btAccentHeadlineColor.header h3,
.btAccentHeadlineColor.header h4,
.btAccentHeadlineColor.header h5,
.btAccentHeadlineColor.header h6{color: {$accentColor};}
.btAlternateHeadlineColor.header h1,
.btAlternateHeadlineColor.header h2,
.btAlternateHeadlineColor.header h3,
.btAlternateHeadlineColor.header h4,
.btAlternateHeadlineColor.header h5,
.btAlternateHeadlineColor.header h6{color: {$alternateColor};}
.gridItem .topDash.header h1:after,
.gridItem .topDash.header h1:before,
.gridItem .topDash.header h2:after,
.gridItem .topDash.header h2:before,
.gridItem .topDash.header h3:after,
.gridItem .topDash.header h3:before,
.gridItem .topDash.header h4:after,
.gridItem .topDash.header h4:before,
.gridItem .topDash.header h5:after,
.gridItem .topDash.header h5:before,
.gridItem .topDash.header h6:after,
.gridItem .topDash.header h6:before{background-color: {$accentColor} !important;}
.btAccentHeadlineColor.topDash.header h1:after,
.btAccentHeadlineColor.topDash.header h1:before,
.btAccentHeadlineColor.topDash.header h2:after,
.btAccentHeadlineColor.topDash.header h2:before,
.btAccentHeadlineColor.topDash.header h3:after,
.btAccentHeadlineColor.topDash.header h3:before,
.btAccentHeadlineColor.topDash.header h4:after,
.btAccentHeadlineColor.topDash.header h4:before,
.btAccentHeadlineColor.topDash.header h5:after,
.btAccentHeadlineColor.topDash.header h5:before,
.btAccentHeadlineColor.topDash.header h6:after,
.btAccentHeadlineColor.topDash.header h6:before{background-color: {$accentColor} !important;}
.btAlternateHeadlineColor.topDash.header h1:after,
.btAlternateHeadlineColor.topDash.header h1:before,
.btAlternateHeadlineColor.topDash.header h2:after,
.btAlternateHeadlineColor.topDash.header h2:before,
.btAlternateHeadlineColor.topDash.header h3:after,
.btAlternateHeadlineColor.topDash.header h3:before,
.btAlternateHeadlineColor.topDash.header h4:after,
.btAlternateHeadlineColor.topDash.header h4:before,
.btAlternateHeadlineColor.topDash.header h5:after,
.btAlternateHeadlineColor.topDash.header h5:before,
.btAlternateHeadlineColor.topDash.header h6:after,
.btAlternateHeadlineColor.topDash.header h6:before{background-color: {$alternateColor} !important;}
.header h1 a,
.header h2 a,
.header h3 a,
.header h4 a,
.header h5 a,
.header h6 a{color: {$accentColor};}
.btAccentHeadlineColor.bottomDash.header h1 span.headline:after,
.btAccentHeadlineColor.bottomDash.header h2 span.headline:after,
.btAccentHeadlineColor.bottomDash.header h3 span.headline:after,
.btAccentHeadlineColor.bottomDash.header h4 span.headline:after,
.btAccentHeadlineColor.bottomDash.header h5 span.headline:after,
.btAccentHeadlineColor.bottomDash.header h6 span.headline:after{background-color: {$accentColor} !important;}
.btAlternateHeadlineColor.bottomDash.header h1 span.headline:after,
.btAlternateHeadlineColor.bottomDash.header h2 span.headline:after,
.btAlternateHeadlineColor.bottomDash.header h3 span.headline:after,
.btAlternateHeadlineColor.bottomDash.header h4 span.headline:after,
.btAlternateHeadlineColor.bottomDash.header h5 span.headline:after,
.btAlternateHeadlineColor.bottomDash.header h6 span.headline:after{background-color: {$alternateColor} !important;}
.header .btSuperTitle{font-family: \"{$headingSuperTitleFont}\";}
.header .btSubTitle{font-family: \"{$headingSubTitleFont}\";}
.btGridContainer .btGridContent .btGridShare{
    border-top: 1px solid {$accentColor};}
.btLightSkin .btGridContainer .btGridContent .btArticleCategories a:hover,
.btDarkSkin .btLightSkin .btGridContainer .btGridContent .btArticleCategories a:hover{color: {$accentColor};}
.btDarkSkin .btGridContainer .btGridContent .btArticleCategories a:hover,
.btLightSkin .btDarkSkin .btGridContainer .btGridContent .btArticleCategories a:hover{color: {$accentColor};}
.btGridContent .header .btSuperTitle a:hover{color: {$accentColor};}
.btCatFilter .btCatFilterItem:hover{color: {$accentColor};}
.btCatFilter .btCatFilterItem.active{color: {$accentColor};}
.btCatFilter .btCatFilterItem:before{
    background-color: {$alternateColor};}
h4.nbs a .nbsImage .nbsImgHolder{
    border: 1px solid {$accentColor};}
h4.nbs a .nbsItem .nbsDir{
    color: {$accentColor};
    font-family: \"{$headingSuperTitleFont}\";}
h4.nbs a:before,
h4.nbs a:after{
    background-color: {$alternateColor};
    -webkit-box-shadow: inset 0 0 0 1px {$alternateColor};
    box-shadow: inset 0 0 0 1px {$alternateColor};}
.neighboringArticles h4.nbs a:before,
.neighboringArticles h4.nbs a:after{
    background-color: {$accentColor};
    -webkit-box-shadow: inset 0 0 0 1px {$accentColor};
    box-shadow: inset 0 0 0 1px {$accentColor};}
.neighboringArticles h4.nbs a:after{
    color: {$accentColor};}
.gridItem h4.nbs a{
    background-color: {$accentColor};}
.gridItem h4.nbs a:hover{background-color: {$alternateColor};}
.boldPhotoSlide h4.nbs a{
    background-color: {$alternateColor};}
.boldPhotoSlide h4.nbs a:hover{background-color: {$accentColor};}
.slick-dots li button:hover:before{
    background-color: {$accentColor};}
.slick-dots li.slick-active button:before,
.slick-dots li.slick-active button:hover:before{
    background-color: {$accentColor};}
.slided h4.nbs.nsPrev a:hover:before,
.slided h4.nbs.nsNext a:hover:after,
.slidedVariable h4.nbs.nsPrev a:hover:before,
.slidedVariable h4.nbs.nsNext a:hover:after{
    color: {$accentColor};}
.btInfoBar .btInfoBarMeta p strong{color: {$accentColor};}
.recentTweets small:before{
    color: {$accentColor};}
.tabsHeader li{
    font-family: \"{$headingFont}\";}
.tabsHeader li:hover,
.tabsHeader li.on,
.tabsHeader li.on a,
.tabsHeader li.on a:hover{background: {$accentColor};}
.tabsVertical .tabAccordionTitle{
    font-family: \"{$headingFont}\";}
.tabsVertical .tabAccordionTitle:hover,
.tabsVertical .tabAccordionTitle.on{background: {$accentColor};}
.btLightSkin .btSingleLatestPostContent .header .btSuperTitle a:hover,
.btDarkSkin .btLightSkin .btSingleLatestPostContent .header .btSuperTitle a:hover{color: {$accentColor};}
.btDarkSkin .btSingleLatestPostContent .header .btSuperTitle a:hover,
.btLightSkin .btDarkSkin .btSingleLatestPostContent .header .btSuperTitle a:hover{color: {$accentColor};}
.btGoogleMapsWrapper .btGoogleMapsContent{
    background-color: {$alternateColor};}
ul.btDataList li span.btDataListInnerLink a:before{
    background-color: {$alternateColor};}
.rowItem div.wpcf7-response-output{
    color: {$accentColor};}
.btAnimNav li.btAnimNavDot{
    color: {$accentColor};
    font-family: {$headingFont};}
.btAnimNav li.btAnimNavNext,
.btAnimNav li.btAnimNavPrev{
    background-color: {$accentColor};}
.btAnimNav li.btAnimNavNext:hover,
.btAnimNav li.btAnimNavPrev:hover{
    color: {$accentColor};}
.headline b.animate.animated{color: {$accentColor};}
p.demo_store{
    background-color: {$accentColor};}
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message,
.woocommerce-page .woocommerce-error,
.woocommerce-page .woocommerce-info,
.woocommerce-page .woocommerce-message{
    border-top: 2px solid {$accentColor};}
.woocommerce .woocommerce-info a: not(.button),
.woocommerce .woocommerce-message a: not(.button),
.woocommerce-page .woocommerce-info a: not(.button),
.woocommerce-page .woocommerce-message a: not(.button){color: {$accentColor};}
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message,
.woocommerce-page .woocommerce-info,
.woocommerce-page .woocommerce-message{border-top-color: {$accentColor};}
.woocommerce .woocommerce-message:before,
.woocommerce .woocommerce-info:before,
.woocommerce-page .woocommerce-message:before,
.woocommerce-page .woocommerce-info:before{
    color: {$accentColor};}
.woocommerce a.button,
.woocommerce input[type=\"submit\"],
.woocommerce button[type=\"submit\"],
.woocommerce input.button,
.woocommerce input.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce .button.alt:hover,
.woocommerce button.alt:hover,
.woocommerce-page a.button,
.woocommerce-page input[type=\"submit\"],
.woocommerce-page button[type=\"submit\"],
.woocommerce-page input.button,
.woocommerce-page input.alt:hover,
.woocommerce-page a.button.alt:hover,
.woocommerce-page .button.alt:hover,
.woocommerce-page button.alt:hover{
    border: 2px solid {$accentColor};
    color: {$accentColor};}
.woocommerce a.button:hover,
.woocommerce input[type=\"submit\"]:hover,
.woocommerce .button:hover,
.woocommerce button:hover,
.woocommerce input.alt,
.woocommerce a.button.alt,
.woocommerce .button.alt,
.woocommerce button.alt,
.woocommerce-page a.button:hover,
.woocommerce-page input[type=\"submit\"]:hover,
.woocommerce-page .button:hover,
.woocommerce-page button:hover,
.woocommerce-page input.alt,
.woocommerce-page a.button.alt,
.woocommerce-page .button.alt,
.woocommerce-page button.alt{background-color: {$accentColor};}
.woocommerce p.lost_password:before,
.woocommerce-page p.lost_password:before{
    color: {$accentColor};}
.woocommerce form.login p.lost_password a:hover,
.woocommerce-page form.login p.lost_password a:hover{color: {$accentColor};}
.woocommerce div.product .stock,
.woocommerce-page div.product .stock{color: {$accentColor};}
.woocommerce div.product a.reset_variations:hover,
.woocommerce-page div.product a.reset_variations:hover{color: {$accentColor};}
.woocommerce .product .btPriceTableSticker > div,
.woocommerce-page .product .btPriceTableSticker > div{background: {$accentColor};}
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li a.next,
.woocommerce nav.woocommerce-pagination ul li a.prev,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li a:focus,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.next,
.woocommerce-page nav.woocommerce-pagination ul li a.prev,
.woocommerce-page nav.woocommerce-pagination ul li span.current{background: {$accentColor};}
.woocommerce .star-rating span:before,
.woocommerce-page .star-rating span:before{
    color: {$accentColor};}
.woocommerce p.stars a[class^=\"star-\"].active:after,
.woocommerce p.stars a[class^=\"star-\"]:hover:after,
.woocommerce-page p.stars a[class^=\"star-\"].active:after,
.woocommerce-page p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.woocommerce-page table.cart td.product-remove a.remove{
    color: {$accentColor};
    border: 1px solid {$accentColor};}
.woocommerce-page table.cart td.product-remove a.remove:hover{background-color: {$accentColor};}
.woocommerce-page .cart_totals .discount td{color: {$accentColor};}
.woocommerce-account header.title .edit{
    color: {$accentColor};}
.woocommerce-account header.title .edit:before{
    color: {$accentColor};}
.btLightSkin.woocommerce-page .product .headline a:hover,
.btDarkSkin .btLightSkin.woocommerce-page .product .headline a:hover,
.btDarkSkin.woocommerce-page .product .headline a:hover,
.btLightSkin .btDarkSkin.woocommerce-page .product .headline a:hover{color: {$accentColor};}
.btQuoteBooking .btContactNext{
    border: {$accentColor} 2px solid;
    color: {$accentColor};}
.btQuoteBooking .btContactNext:hover,
.btQuoteBooking .btContactNext:active{background-color: {$accentColor} !important;}
.btQuoteBooking .btQuoteSwitch:hover{-webkit-box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{
    background: {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{
    -webkit-box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);
    box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);}
.btQuoteBooking .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{border: 1px solid {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{border: 1px solid {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:hover,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:focus,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:focus{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor};}
.btQuoteBooking .btContactSubmit{
    background-color: {$accentColor};
    border: 2px solid {$accentColor};}
.btQuoteBooking .btContactSubmit:hover{
    color: {$accentColor};}
.btPayPalButton:hover{-webkit-box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
@media (max-width: 768px){span.btInfoPaneToggler{
    background-color: {$accentColor};}
}#dsidx .dsidx-paging-control{
    font-family: {$headingFont};}
#dsidx .dsidx-sorting-control form select:focus{-webkit-box-shadow: 0 0 4px 0 {$alternateColor};
    box-shadow: 0 0 4px 0 {$alternateColor};
    border: 1px solid {$alternateColor};}
#dsidx #dsidx-listings .dsidx-listing .dsidx-primary-data .dsidx-price,
#dsidx #dsidx-listings .dsidx-listing .dsidx-primary-data .dsidx-price-sold{background: {$accentColor};
    font-family: {$headingFont};}
#dsidx #dsidx-listings .dsidx-listing .dsidx-listing-tag.dsidx-tag-reo,
#dsidx #dsidx-listings .dsidx-listing .dsidx-listing-tag.dsidx-tag-pre-foreclosure{background-color: {$alternateColor};}
#dsidx #dsidx-listings .dsidx-listing .dsidx-primary-data .dsidx-address a{
    font-family: {$headingFont};}
#dsidx #dsidx-listings .dsidx-listing .dsidx-secondary-data{
    font-family: {$bodyFont};}
#dsidx #dsidx-listings .dsidx-listing:hover .dsidx-primary-data .dsidx-address a{
    color: {$accentColor};}
#dsidx #dsidx-listings .dsidx-listing:hover .dsidx-primary-data .dsidx-address a span{color: {$accentColor};}
#dsidx #dsidx-map-control a{background: {$alternateColor};
    border: 2px solid {$alternateColor};}
#dsidx #dsidx-map-control a:hover{color: {$alternateColor};}
#dsidx #dsidx-map-control a:hover:before{color: {$alternateColor};}
#dsidx-map-hover .dsidx-container .dsidx-inner-container{font-family: {$bodyFont};}
#dsidx-map-hover .dsidx-container .dsidx-inner-container .dsidx-text .dsidx-header{
    font-family: {$headingFont};
    color: {$accentColor};}
#dsidx.dsidx-details #dsidx-header table td #dsidx-primary-data #dsidx-price{background: {$accentColor};
    font-family: {$headingFont};}
#dsidx.dsidx-details #dsidx-property-types{font-family: {$headingFont};}
#dsidx.dsidx-details .dsidx-contact-form select.dsidx-contact-form-schedule-date-month,
#dsidx.dsidx-details .dsidx-contact-form select.dsidx-contact-form-schedule-date-day{
    font-family: {$bodyFont};}
#dsidx.dsidx-details .dsidx-contact-form select.dsidx-contact-form-schedule-date-month:focus,
#dsidx.dsidx-details .dsidx-contact-form select.dsidx-contact-form-schedule-date-day:focus{-webkit-box-shadow: 0 0 4px 0 {$alternateColor};
    box-shadow: 0 0 4px 0 {$alternateColor};
    border: 1px solid {$alternateColor};}
.jb-navigation.jb-classifier-detail-area .jbn-left-button,
.jb-navigation.jb-classifier-detail-area .jbn-right-button{background: {$alternateColor} !important;}
.wp-block-button__link:hover{color: {$accentColor} !important;}
", array() );