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
	$headingFont = "Dosis";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['accentColor1'] ) ) {
	$accentColor1 = $boldthemes_crush_vars['accentColor1'];
} else {
	$accentColor1 = "#5dc2ca";
}
if ( isset( $boldthemes_crush_vars['accentColor2'] ) ) {
	$accentColor2 = $boldthemes_crush_vars['accentColor2'];
} else {
	$accentColor2 = "#a082d2";
}
if ( isset( $boldthemes_crush_vars['accentColor3'] ) ) {
	$accentColor3 = $boldthemes_crush_vars['accentColor3'];
} else {
	$accentColor3 = "#ffba52";
}
if ( isset( $boldthemes_crush_vars['accentColor4'] ) ) {
	$accentColor4 = $boldthemes_crush_vars['accentColor4'];
} else {
	$accentColor4 = "#eb6ea6";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor1." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor1." -25" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor1." -30" );$accentColorOpaque = CssCrush\fn__a_adjust( $accentColor1." -15" );if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "44";
}
$css_override = sanitize_text_field("input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus,
textarea:not([type='checkbox']):not([type='radio']):focus{-webkit-box-shadow: 0 0 4px 0 {$accentColor1};
    box-shadow: 0 0 4px 0 {$accentColor1};}
html a:hover,
.btLightSkin a:hover,
.btDarkSkin .btLightSkin a:hover,
.btLightSkin .btDarkSkin .btLightSkin a:hover,
.btDarkSkin a:hover,
.btLightSkin .btDarkSkin a:hover,
.btDarkSkin.btLightSkin .btDarkSkin a:hover{
    color: {$accentColor1};}
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
    background-color: {$accentColor1};
    font-family: {$headingFont};}
.btAccentColorBackground{background-color: {$accentColor1} !important;}
.btLightSkin .btText a,
.btDarkSkin .btLightSkin .btText a,
.btLightSkin .btDarkSkin .btLightSkin .btText a,
.btDarkSkin .btText a,
.btLightSkin .btDarkSkin .btText a,
.btDarkSkin.btLightSkin .btDarkSkin .btText a{color: {$accentColor1};}
.btAccentDarkHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColorDark};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
.btLightSkin .btLoader,
.btDarkSkin .btLightSkin .btLoader,
.btLightSkin .btDarkSkin .btLightSkin .btLoader{border-top: 5px solid {$accentColor1};}
.btDarkSkin .btLoader,
.btLightSkin .btDarkSkin .btLoader,
.btDarkSkin.btLightSkin .btDarkSkin .btLoader{border-top: 5px solid {$accentColor1};}
.mainHeader{
    font-family: \"{$menuFont}\";}
.btMenuVertical.btAccentDarkHeader .mainHeader{background-color: {$accentColorDark};}
.menuPort{font-family: \"{$menuFont}\";}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btHorizontalMenuTrigger{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 1) > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 1) > a{-webkit-box-shadow: 0 -4px 0 0 {$accentColor1} inset;
    box-shadow: 0 -4px 0 0 {$accentColor1} inset;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 1) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 1) > ul li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 1) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 1) > ul li.current-menu-item > a{color: {$accentColor1} !important;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 2) > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 2) > a{-webkit-box-shadow: 0 -4px 0 0 {$accentColor2} inset;
    box-shadow: 0 -4px 0 0 {$accentColor2} inset;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 2) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 2) > ul li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 2) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 2) > ul li.current-menu-item > a{color: {$accentColor2} !important;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 3) > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 3) > a{-webkit-box-shadow: 0 -4px 0 0 {$accentColor3} inset;
    box-shadow: 0 -4px 0 0 {$accentColor3} inset;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 3) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 3) > ul li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 3) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 3) > ul li.current-menu-item > a{color: {$accentColor3} !important;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 4) > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 4) > a{-webkit-box-shadow: 0 -4px 0 0 {$accentColor4} inset;
    box-shadow: 0 -4px 0 0 {$accentColor4} inset;}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 4) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor:nth-child(4n + 4) > ul li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 4) > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item:nth-child(4n + 4) > ul li.current-menu-item > a{color: {$accentColor4} !important;}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 1):hover > a,
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 1) ul li:hover > a{background-color: {$accentColor1};}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 1) > ul{border-color: {$accentColor1} transparent #e5e5e5;}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 2):hover > a,
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 2) ul li:hover > a{background-color: {$accentColor2};}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 2) > ul{border-color: {$accentColor2} transparent #e5e5e5;}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 3):hover > a,
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 3) ul li:hover > a{background-color: {$accentColor3};}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 3) > ul{border-color: {$accentColor3} transparent #e5e5e5;}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 4):hover > a,
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 4) ul li:hover > a{background-color: {$accentColor4};}
.btMenuHorizontal .menuPort nav > ul > li:nth-child(4n + 4) > ul{border-color: {$accentColor4} transparent #e5e5e5;}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btAccentLightHeader.btMenuHorizontal .btBelowLogoArea:before,
.btAccentLightHeader.btMenuHorizontal .topBar:before{
    background-color: {$accentColorDark};}
.btAccentDarkHeader.btMenuHorizontal .mainHeader{background-color: {$accentColorDark};}
.btAccentDarkHeader.btMenuHorizontal .mainHeader .btBelowLogoArea:before,
.btAccentDarkHeader.btMenuHorizontal .mainHeader .topBar:before{
    background-color: {$accentColorVeryDark};}
.btVerticalMenuTrigger{
    line-height: {$logoHeight}px;}
.btAccentDarkHeader.btMenuVertical > .menuPort .logo{
    background-color: {$accentColorDark};}
.btMenuVertical > .menuPort .btCloseVertical:before:hover{color: {$accentColor1};}
@media (min-width: 1200px){.btMenuVerticalOn .btVerticalMenuTrigger .btIco a:before{color: {$accentColor1} !important;}
}.btSpecialHeaderIcon .btIco .btIcoHolder:before,
.btSpecialHeaderIcon .btIconWidgetTitle,
.btSpecialHeaderIcon .btIconWidgetText{color: {$accentColor1} !important;}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor1};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetIcon .btIco.btIcoAccentColor1 .btIcoHolder:before{color: {$accentColor1};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetIcon .btIco.btIcoAccentColor2 .btIcoHolder:before{color: {$accentColor2};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetIcon .btIco.btIcoAccentColor3 .btIcoHolder:before{color: {$accentColor3};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetIcon .btIco.btIcoAccentColor4 .btIcoHolder:before{color: {$accentColor4};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetTitle{
    font-family: {$headingFont},sans-serif;}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetTitle{
    font-family: {$headingFont};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor1,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor1,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor1,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor1{color: {$accentColor1};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor2,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor2,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor2,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor2{color: {$accentColor2};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor3,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor3,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor3,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor3{color: {$accentColor3};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor4,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor4,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor4,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor4{color: {$accentColor4};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor1.btIcoCircled,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor1.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor1.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor1.btIcoCircled{background-color: {$accentColor1};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor2.btIcoCircled,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor2.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor2.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor2.btIcoCircled{background-color: {$accentColor2};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor3.btIcoCircled,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor3.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor3.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor3.btIcoCircled{background-color: {$accentColor3};}
.btMenuVertical .menuPort .btIconWidget .btIconWidgetIcon .btIco.btIcoAccentColor4.btIcoCircled,
.btMenuVertical .menuPort .btIconWidget .btSearch .btIco.btIcoAccentColor4.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btIconWidgetIcon .btIco.btIcoAccentColor4.btIcoCircled,
.btMenuVertical .menuPort .btTopBox .btSearch .btIco.btIcoAccentColor4.btIcoCircled{background-color: {$accentColor4};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor1} inset;
    box-shadow: 0 0 0 1.5em {$accentColor1} inset;}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 0 {$accentColor1} inset;
    box-shadow: 0 0 0 0 {$accentColor1} inset;
    color: {$accentColor1};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor1} inset;
    box-shadow: 0 0 0 1.5em {$accentColor1} inset;}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor1 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor1 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor1 .btIcoHolder:before{color: {$accentColor1};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor2} inset;
    box-shadow: 0 0 0 1.5em {$accentColor2} inset;}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 0 {$accentColor2} inset;
    box-shadow: 0 0 0 0 {$accentColor2} inset;
    color: {$accentColor2};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor2} inset;
    box-shadow: 0 0 0 1px {$accentColor2} inset;
    color: {$accentColor2};}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor2} inset;
    box-shadow: 0 0 0 1.5em {$accentColor2} inset;}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor2 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor2 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor2 .btIcoHolder:before{color: {$accentColor2};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor3} inset;
    box-shadow: 0 0 0 1.5em {$accentColor3} inset;}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 0 {$accentColor3} inset;
    box-shadow: 0 0 0 0 {$accentColor3} inset;
    color: {$accentColor3};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor3} inset;
    box-shadow: 0 0 0 1px {$accentColor3} inset;
    color: {$accentColor3};}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor3} inset;
    box-shadow: 0 0 0 1.5em {$accentColor3} inset;}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor3 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor3 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor3 .btIcoHolder:before{color: {$accentColor3};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor4} inset;
    box-shadow: 0 0 0 1.5em {$accentColor4} inset;}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:before{-webkit-box-shadow: 0 0 0 0 {$accentColor4} inset;
    box-shadow: 0 0 0 0 {$accentColor4} inset;
    color: {$accentColor4};}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor4} inset;
    box-shadow: 0 0 0 1px {$accentColor4} inset;
    color: {$accentColor4};}
.btDarkSkin.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btDarkSkin.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentDarkHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before,
.btAccentLightHeader.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4.btIcoCircled .btIcoHolder:hover:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor4} inset;
    box-shadow: 0 0 0 1.5em {$accentColor4} inset;}
.btMenuHorizontal .topBarInMenuCell .btIco.btIcoAccentColor4 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsRight .btIco.btIcoAccentColor4 .btIcoHolder:before,
.btMenuHorizontal .btTopToolsLeft .btIco.btIcoAccentColor4 .btIcoHolder:before{color: {$accentColor4};}
.btMenuHorizontal.btDarkSkin .btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before{color: {$accentColor1};}
.btMenuHorizontal.btLightSkin .btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btLightSkin .btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before{color: {$accentColor1};}
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .topBarInMenuCell .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .topBarInMenuCell .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .btTopToolsRight .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .btTopToolsRight .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .btTopToolsLeft .btIconWidget:hover .btIco.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btLightSkin .mainHeader .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentDarkHeader.btDarkSkin .mainHeader .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btLightSkin .mainHeader .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btLightSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader.btDarkSkin .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before,
.btMenuHorizontal.btAccentLightHeader.btDarkSkin .mainHeader .btTopToolsLeft .btIco:hover.btIcoDefaultColor .btIcoHolder:before{color: {$accentColor1};}
.topBar .widget_search button,
.topBarInMenu .widget_search button{
    background: {$accentColor1};}
.topBar .widget_search button:before,
.topBarInMenu .widget_search button:before{
    color: {$accentColor1};}
.topBar .widget_search button:hover,
.topBarInMenu .widget_search button:hover{background: {$accentColorDark};}
.btSearchInner.btFromTopBox .btSearchInnerClose .btIco.btIcoMediumSize .btIcoHolder:before{
    color: {$accentColor1};}
.btSearchInner.btFromTopBox .btSearchInnerClose .btIco.btIcoMediumSize:hover a.btIcoHolder:before{color: {$accentColor2};}
.btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus{border-bottom: 5px solid {$accentColor1};}
.btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus{border-bottom: 5px solid {$accentColor1};}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor1};}
.btMediaBox.btQuote,
.btMediaBox.btLink{
    background-color: {$accentColor1};
    font-family: \"{$menuFont}\",arial,sans-serif;}
.btMediaBox.btQuote cite,
.btMediaBox.btLink cite{
    font-family: {$headingFont};}
.btArticleListItem .headline a:hover{color: {$accentColor1};}
.btArticleListItem.btBlogColumnView .btArticleListBodyAuthor a,
.btPostSingleItemColumns .btArticleListBodyAuthor a{color: {$accentColor1} !important;}
.btCommentsBox .vcard .posted:before{
    background: {$accentColor1};}
.btCommentsBox .commentTxt p.edit-link,
.btCommentsBox .commentTxt p.reply{
    font-family: \"{$headingFont}\";}
.btCommentsBox .commentTxt p.edit-link a:before{background: {$accentColor3};}
.btCommentsBox .commentTxt p.edit-link a:hover:before{background: {$accentColor1};}
.btCommentsBox .commentTxt p.edit-link a:hover a{color: {$accentColor2};}
.btCommentsBox .commentTxt p.reply a:before{background: {$accentColor2};}
.btCommentsBox .commentTxt p.reply a:hover:before{background: {$accentColor1};}
.btCommentsBox .commentTxt p.reply a:hover a{color: {$accentColor3};}
.btCommentsBox .comment-form .form-submit button{
    background: {$accentColor1};
    border: 2px solid {$accentColor1};}
.btCommentsBox .comment-form .form-submit button:hover{
    color: {$accentColor1};}
.post-password-form input[type=\"submit\"]{
    background: {$accentColor1};
    border: 2px solid {$accentColor1};
    font-family: \"{$headingFont}\";}
.post-password-form input[type=\"submit\"]:hover{
    color: {$accentColor1};}
.btPagination .paging a:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor1} inset;
    box-shadow: 0 0 0 2em {$accentColor1} inset;}
.btPagination .paging a:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.btLinkPages ul a{
    -webkit-box-shadow: 0 0 0 1em {$accentColor1} inset;
    box-shadow: 0 0 0 1em {$accentColor1} inset;}
.btLinkPages ul a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.comment-respond .btnOutline button[type=\"submit\"]{font-family: \"{$headingFont}\";}
a#cancel-comment-reply-link:hover{color: {$accentColor1};}
.logged-in-as a{color: {$accentColor1};}
a#cancel-comment-reply-link:hover{color: {$accentColor1};}
span.btHighlight{
    background-color: {$accentColor1};}
.btShareArticle .btIco:nth-child(4n + 1) .btIcoHolder:before,
.socialRow .btIco:nth-child(4n + 1) .btIcoHolder:before,
.btGridShare .btIco:nth-child(4n + 1) .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor1} inset;
    box-shadow: 0 0 0 1.5em {$accentColor1} inset;}
.btShareArticle .btIco:nth-child(4n + 1) .btIcoHolder:hover:before,
.socialRow .btIco:nth-child(4n + 1) .btIcoHolder:hover:before,
.btGridShare .btIco:nth-child(4n + 1) .btIcoHolder:hover:before{color: {$accentColor1};
    -webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;}
.btShareArticle .btIco:nth-child(4n + 2) .btIcoHolder:before,
.socialRow .btIco:nth-child(4n + 2) .btIcoHolder:before,
.btGridShare .btIco:nth-child(4n + 2) .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor2} inset;
    box-shadow: 0 0 0 1.5em {$accentColor2} inset;}
.btShareArticle .btIco:nth-child(4n + 2) .btIcoHolder:hover:before,
.socialRow .btIco:nth-child(4n + 2) .btIcoHolder:hover:before,
.btGridShare .btIco:nth-child(4n + 2) .btIcoHolder:hover:before{color: {$accentColor2};
    -webkit-box-shadow: 0 0 0 1px {$accentColor2} inset;
    box-shadow: 0 0 0 1px {$accentColor2} inset;}
.btShareArticle .btIco:nth-child(4n + 3) .btIcoHolder:before,
.socialRow .btIco:nth-child(4n + 3) .btIcoHolder:before,
.btGridShare .btIco:nth-child(4n + 3) .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor3} inset;
    box-shadow: 0 0 0 1.5em {$accentColor3} inset;}
.btShareArticle .btIco:nth-child(4n + 3) .btIcoHolder:hover:before,
.socialRow .btIco:nth-child(4n + 3) .btIcoHolder:hover:before,
.btGridShare .btIco:nth-child(4n + 3) .btIcoHolder:hover:before{color: {$accentColor3};
    -webkit-box-shadow: 0 0 0 1px {$accentColor3} inset;
    box-shadow: 0 0 0 1px {$accentColor3} inset;}
.btShareArticle .btIco:nth-child(4n + 4) .btIcoHolder:before,
.socialRow .btIco:nth-child(4n + 4) .btIcoHolder:before,
.btGridShare .btIco:nth-child(4n + 4) .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor4} inset;
    box-shadow: 0 0 0 1.5em {$accentColor4} inset;}
.btShareArticle .btIco:nth-child(4n + 4) .btIcoHolder:hover:before,
.socialRow .btIco:nth-child(4n + 4) .btIcoHolder:hover:before,
.btGridShare .btIco:nth-child(4n + 4) .btIcoHolder:hover:before{color: {$accentColor4};
    -webkit-box-shadow: 0 0 0 1px {$accentColor4} inset;
    box-shadow: 0 0 0 1px {$accentColor4} inset;}
.header .btSubTitle .btArticleCategories a:not(:first-child):before,
.header .btSuperTitle .btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor1};}
.btArticleMeta{font-family: \"{$headingFont}\";}
.btArticleListBody .btReadArticle a{background: {$accentColor1};
    border: 2px solid {$accentColor1};}
.btArticleListBody .btReadArticle a:hover{
    color: {$accentColor1};}
.btBox:nth-child(4n + 1) > h4:before,
.btCustomMenu:nth-child(4n + 1) > h4:before,
.btTopBox:nth-child(4n + 1) > h4:before{background-color: {$accentColor1};}
.btBox:nth-child(4n + 2) > h4:before,
.btCustomMenu:nth-child(4n + 2) > h4:before,
.btTopBox:nth-child(4n + 2) > h4:before{background-color: {$accentColor2};}
.btBox:nth-child(4n + 3) > h4:before,
.btCustomMenu:nth-child(4n + 3) > h4:before,
.btTopBox:nth-child(4n + 3) > h4:before{background-color: {$accentColor3};}
.btBox:nth-child(4n + 4) > h4:before,
.btCustomMenu:nth-child(4n + 4) > h4:before,
.btTopBox:nth-child(4n + 4) > h4:before{background-color: {$accentColor4};}
.btBox .ppTxt .header .headline a a:hover,
.btCustomMenu .ppTxt .header .headline a a:hover,
.btTopBox .ppTxt .header .headline a a:hover{color: {$accentColor1};}
.btBox p.posted,
.btBox .quantity,
.btCustomMenu p.posted,
.btCustomMenu .quantity,
.btTopBox p.posted,
.btTopBox .quantity{
    font-family: {$headingFont};}
.widget_calendar table caption{background: {$accentColor1};
    font-family: \"{$headingFont}\";}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.btBox .btSearch button:hover,
form.woocommerce-product-search button:hover{background: {$accentColor1} !important;
    border-color: {$accentColor1} !important;}
.fancy-select .trigger.open{-webkit-box-shadow: 0 0 4px 0 {$accentColor1};
    box-shadow: 0 0 4px 0 {$accentColor1};}
.btLightSkin .fancy-select ul.options li:hover,
.btDarkSkin .btLightSkin .fancy-select ul.options li:hover,
.btLightSkin .btDarkSkin .btLightSkin .fancy-select ul.options li:hover{background: {$accentColor1};}
.btDarkSkin .fancy-select ul.options li:hover,
.btLightSkin .btDarkSkin .fancy-select ul.options li:hover,
.btDarkSkin.btLightSkin .btDarkSkin .fancy-select ul.options li:hover{background: {$accentColor1};}
.widget_shopping_cart .total{
    font-family: {$headingFont};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor1};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:before:hover{background-color: {$accentColor2};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background-color: {$accentColor2};
    font: normal 10px/1 {$headingFont};}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler{
    background-color: {$accentColor1};}
.widget_recent_reviews{font-family: {$headingFont};}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background-color: {$accentColor1};}
.btBox .tagcloud a,
.btTags ul a{
    background: {$accentColor1};
    font-family: \"{$headingSuperTitleFont}\";
    border: 1px solid {$accentColor1};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{
    color: {$accentColor1};}
.boldSection .tribe-events-sub-nav .tribe-this-week-nav-link span:after,
.boldSection .tribe-events-sub-nav .bt-this-week-nav-link span:after,
.boldSection .bt-events-sub-nav .tribe-this-week-nav-link span:after,
.boldSection .bt-events-sub-nav .bt-this-week-nav-link span:after,
.boldSection .tribe-events-sub-nav .tribe-this-week-nav-link span:before,
.boldSection .tribe-events-sub-nav .bt-this-week-nav-link span:before,
.boldSection .bt-events-sub-nav .tribe-this-week-nav-link span:before,
.boldSection .bt-events-sub-nav .bt-this-week-nav-link span:before{
    -webkit-box-shadow: 0 0 0 1em {$accentColor1} inset;
    box-shadow: 0 0 0 1em {$accentColor1} inset;}
.boldSection .tribe-events-sub-nav .tribe-this-week-nav-link a:hover span:after,
.boldSection .tribe-events-sub-nav .bt-this-week-nav-link a:hover span:after,
.boldSection .bt-events-sub-nav .tribe-this-week-nav-link a:hover span:after,
.boldSection .bt-events-sub-nav .bt-this-week-nav-link a:hover span:after,
.boldSection .tribe-events-sub-nav .tribe-this-week-nav-link a:hover span:before,
.boldSection .tribe-events-sub-nav .bt-this-week-nav-link a:hover span:before,
.boldSection .bt-events-sub-nav .tribe-this-week-nav-link a:hover span:before,
.boldSection .bt-events-sub-nav .bt-this-week-nav-link a:hover span:before{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.boldSection .tribe-this-week-widget-header-date,
.boldSection .bt-this-week-widget-header-date{
    font-family: '{$headingFont}',arial,sans-serif;}
.boldSection .tribe-this-week-event:nth-child(4n + 1):after,
.boldSection .bt-this-week-event:nth-child(4n + 1):after{background-color: {$accentColor1};}
.boldSection .tribe-this-week-event:nth-child(4n + 2):after,
.boldSection .bt-this-week-event:nth-child(4n + 2):after{background-color: {$accentColor2};}
.boldSection .tribe-this-week-event:nth-child(4n + 3):after,
.boldSection .bt-this-week-event:nth-child(4n + 3):after{background-color: {$accentColor3};}
.boldSection .tribe-this-week-event:nth-child(4n + 4):after,
.boldSection .bt-this-week-event:nth-child(4n + 4):after{background-color: {$accentColor4};}
.btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-events-viewmore a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-events-viewmore a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-events-viewmore a:hover{color: {$accentColor1};}
.btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a,
.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-this-week-widget-day-wrap .bt-venue a,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .tribe-venue a,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-this-week-widget-day-wrap .bt-venue a{color: {$accentColor1};}
.btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .btLightSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover{color: {$accentColor1};}
.btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-previous a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-previous a:hover,
.btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .tribe-events-sub-nav .bt-this-week-nav-link.nav-next a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .tribe-this-week-nav-link.nav-next a:hover,
.btDarkSkin.btLightSkin .btDarkSkin .boldSection .bt-events-sub-nav .bt-this-week-nav-link.nav-next a:hover{color: {$accentColor1};}
.boldSection .this-week-no-events-msg{
    font-family: {$headingFont};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option span:hover{color: {$accentColor1};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option span[class^=tribe-icon-]:before{
    -webkit-box-shadow: 0 0 0 1.5em {$accentColor1} inset;
    box-shadow: 0 0 0 1.5em {$accentColor1} inset;}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option:hover{color: {$accentColor1};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option:hover span[class^=tribe-icon-]:before{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active{color: {$accentColor2};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active span[class^=tribe-icon-]:before{color: {$accentColor2};
    -webkit-box-shadow: 0 0 0 1px {$accentColor2} inset;
    box-shadow: 0 0 0 1px {$accentColor2} inset;}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active:hover{color: {$accentColor2};}
#tribe-bar-form #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active:hover span[class^=tribe-icon-]:before{-webkit-box-shadow: 0 0 0 1.5em {$accentColor2} inset;
    box-shadow: 0 0 0 1.5em {$accentColor2} inset;}
.btLightSkin #tribe-bar-form input[type=\"text\"]:focus{
    -webkit-box-shadow: 0 0 4px 0 {$accentColor1};
    box-shadow: 0 0 4px 0 {$accentColor1};}
.btDarkSkin #tribe-bar-form input[type=\"text\"]:focus{
    -webkit-box-shadow: 0 0 4px 0 {$accentColor1};
    box-shadow: 0 0 4px 0 {$accentColor1};}
#tribe-bar-form .tribe-bar-submit input[type=submit]{background: {$accentColor1} !important;
    font-family: {$headingFont};
    border: 2px solid {$accentColor1} !important;}
#tribe-bar-form .tribe-bar-submit input[type=submit]:hover{
    color: {$accentColor1};}
.events-list .tribe-events-loop .tribe-events-list-separator-month,
.events-list .tribe-events-loop .tribe-events-day-time-slot h5,
.tribe-events-day .tribe-events-loop .tribe-events-list-separator-month,
.tribe-events-day .tribe-events-loop .tribe-events-day-time-slot h5,
.tribe-events-page-template .tribe-events-loop .tribe-events-list-separator-month,
.tribe-events-page-template .tribe-events-loop .tribe-events-day-time-slot h5{
    font-family: {$headingSuperTitleFont};}
.events-list .tribe-events-loop .tribe-events-read-more,
.tribe-events-day .tribe-events-loop .tribe-events-read-more,
.tribe-events-page-template .tribe-events-loop .tribe-events-read-more{font-family: {$headingFont};
    border: 2px solid {$accentColor1};
    background: {$accentColor1};}
.events-list .tribe-events-loop .tribe-events-read-more:hover,
.tribe-events-day .tribe-events-loop .tribe-events-read-more:hover,
.tribe-events-page-template .tribe-events-loop .tribe-events-read-more:hover{
    color: {$accentColor1} !important;}
#tribe-events-content a:hover,
.tribe-events-event-meta a:hover{color: {$accentColor1};}
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-previous:hover a,
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-next:hover a{color: {$accentColor1};}
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-previous a:after,
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-next a:before{
    -webkit-box-shadow: 0 0 0 1.5em {$accentColor1} inset;
    box-shadow: 0 0 0 1.5em {$accentColor1} inset;}
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-previous:hover a:after,
#tribe-events-content .tribe-events-sub-nav .tribe-events-nav-next:hover a:before{color: {$accentColor1};
    -webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;}
.datepicker.dropdown-menu{font-family: {$bodyFont};}
#tribe-events td.tribe-events-present div[id*=\"tribe-events-daynum-\"],
#tribe-events td.tribe-events-present div[id*=\"tribe-events-daynum-\"] > a{background: {$accentColor1} !important;}
#tribe-events-content .tribe-events-calendar div[id*=tribe-events-event-] h3.tribe-events-month-event-title{font-family: {$bodyFont};}
.tribe-events-button,
#tribe-events .tribe-events-button{
    font-family: {$headingFont};
    border: 2px solid {$accentColor2} !important;
    background: {$accentColor2} !important;}
.tribe-events-button:hover,
#tribe-events .tribe-events-button:hover{
    color: {$accentColor2} !important;}
#tribe-events .tribe-events-grid .type-tribe_events h3.entry-title a{
    font-family: {$bodyFont};}
#tribe-events .tribe-events-grid .tribe-grid-header div.tribe-week-today{background: {$accentColor1} !important;}
.tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column{font-family: {$headingFont};}
.tribe-event-date-start:before,
.tribe-events-event-meta address.tribe-events-address:before{
    color: {$accentColor1};}
.tribe-events-event-meta address.tribe-events-address:before{color: {$accentColor2};}
.tribe-events-list .tribe-events-venue-details:before{
    color: {$accentColor1};
    color: {$accentColor2};}
.tribe-events-back a{
    font-family: {$headingFont};
    border: 2px solid {$accentColor2} !important;
    background: {$accentColor2} !important;}
.tribe-events-back a:hover{
    color: {$accentColor2} !important;}
.tribe-grid-allday .tribe-events-week-allday-single,
.tribe-grid-allday .tribe-events-week-allday-single:hover,
.tribe-grid-body .tribe-events-week-hourly-single,
.tribe-grid-body .tribe-events-week-hourly-single:hover{background-color: {$accentColor1};}
.tribe-events-notices{border-color: {$accentColor3};
    background: {$accentColor3};}
#tribe-events-content .tribe-events-tooltip h4{color: {$accentColor1};}
@media (max-width: 768px){#tribe-mobile-container .type-tribe_events .tribe-events-read-more{font-family: {$headingFont};
    border: 2px solid {$accentColor1};
    background: {$accentColor1};}
#tribe-mobile-container .type-tribe_events .tribe-events-read-more:hover{
    color: {$accentColor1} !important;}
.tribe-events-calendar td.mobile-active,
.tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-],
#tribe-events .tribe-events-calendar td:hover{background: {$accentColor2} !important;}
#tribe-events-content .tribe-events-calendar td.tribe-events-present.mobile-active:hover,
.tribe-events-calendar td.tribe-events-present.mobile-active{background: {$accentColor1} !important;}
}.btIco{
    font-family: \"{$headingFont}\";}
.btIco.btIcoFilledType.btAccent1Icon .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent1Icon:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor1} inset;
    box-shadow: 0 0 0 1em {$accentColor1} inset;}
.btIco.btIcoFilledType.btAccent1Icon:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent1Icon .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.btIco.btIcoFilledType.btAccent2Icon .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent2Icon:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor2} inset;
    box-shadow: 0 0 0 1em {$accentColor2} inset;}
.btIco.btIcoFilledType.btAccent2Icon:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent2Icon .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor2} inset;
    box-shadow: 0 0 0 1px {$accentColor2} inset;
    color: {$accentColor2};}
.btIco.btIcoFilledType.btAccent3Icon .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent3Icon:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor3} inset;
    box-shadow: 0 0 0 1em {$accentColor3} inset;}
.btIco.btIcoFilledType.btAccent3Icon:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent3Icon .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor3} inset;
    box-shadow: 0 0 0 1px {$accentColor3} inset;
    color: {$accentColor3};}
.btIco.btIcoFilledType.btAccent4Icon .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent4Icon:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor4} inset;
    box-shadow: 0 0 0 1em {$accentColor4} inset;}
.btIco.btIcoFilledType.btAccent4Icon:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btAccent4Icon .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor4} inset;
    box-shadow: 0 0 0 1px {$accentColor4} inset;
    color: {$accentColor4};}
.btLightSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent1Icon .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before{color: {$accentColor1};}
.btLightSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent2Icon .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before{color: {$accentColor2};}
.btLightSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent3Icon .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before{color: {$accentColor3};}
.btLightSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btAccent4Icon .btIcoHolder:before,
.btDarkSkin.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btDefaultIcon:hover .btIcoHolder:before{color: {$accentColor4};}
.btIcoAccentColor span{color: {$accentColor1};}
.btIcoAlternateColor span{color: {$accentColor2};}
.btIcoDefaultColor:hover span{color: {$accentColor1};}
.btBtn{
    font-family: \"{$headingFont}\";}
.btnFilledStyle.btnaccent1Color,
.btnOutlineStyle.btnaccent1Color:hover{background-color: {$accentColor1};
    border: 2px solid {$accentColor1};}
.btnOutlineStyle.btnaccent1Color,
.btnFilledStyle.btnaccent1Color:hover{
    border: 2px solid {$accentColor1};
    color: {$accentColor1};}
.btnOutlineStyle.btnaccent1Color span,
.btnFilledStyle.btnaccent1Color:hover span,
.btnOutlineStyle.btnaccent1Color span:before,
.btnFilledStyle.btnaccent1Color:hover span:before,
.btnOutlineStyle.btnaccent1Color a,
.btnFilledStyle.btnaccent1Color:hover a,
.btnOutlineStyle.btnaccent1Color .btIco a:before,
.btnFilledStyle.btnaccent1Color:hover .btIco a:before,
.btnOutlineStyle.btnaccent1Color button,
.btnFilledStyle.btnaccent1Color:hover button{color: {$accentColor1} !important;}
.btnBorderlessStyle.btnaccent1Color span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnaccent1Color span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnaccent1Color a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnaccent1Color .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnaccent1Color button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor1};}
.btnFilledStyle.btnaccent2Color,
.btnOutlineStyle.btnaccent2Color:hover{background-color: {$accentColor2};
    border: 2px solid {$accentColor2};}
.btnOutlineStyle.btnaccent2Color,
.btnFilledStyle.btnaccent2Color:hover{
    border: 2px solid {$accentColor2};
    color: {$accentColor2};}
.btnOutlineStyle.btnaccent2Color span,
.btnFilledStyle.btnaccent2Color:hover span,
.btnOutlineStyle.btnaccent2Color span:before,
.btnFilledStyle.btnaccent2Color:hover span:before,
.btnOutlineStyle.btnaccent2Color a,
.btnFilledStyle.btnaccent2Color:hover a,
.btnOutlineStyle.btnaccent2Color .btIco a:before,
.btnFilledStyle.btnaccent2Color:hover .btIco a:before,
.btnOutlineStyle.btnaccent2Color button,
.btnFilledStyle.btnaccent2Color:hover button{color: {$accentColor2} !important;}
.btnBorderlessStyle.btnaccent2Color span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnaccent2Color span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnaccent2Color a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnaccent2Color .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnaccent2Color button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor2};}
.btnFilledStyle.btnaccent3Color,
.btnOutlineStyle.btnaccent3Color:hover{background-color: {$accentColor3};
    border: 2px solid {$accentColor3};}
.btnOutlineStyle.btnaccent3Color,
.btnFilledStyle.btnaccent3Color:hover{
    border: 2px solid {$accentColor3};
    color: {$accentColor3};}
.btnOutlineStyle.btnaccent3Color span,
.btnFilledStyle.btnaccent3Color:hover span,
.btnOutlineStyle.btnaccent3Color span:before,
.btnFilledStyle.btnaccent3Color:hover span:before,
.btnOutlineStyle.btnaccent3Color a,
.btnFilledStyle.btnaccent3Color:hover a,
.btnOutlineStyle.btnaccent3Color .btIco a:before,
.btnFilledStyle.btnaccent3Color:hover .btIco a:before,
.btnOutlineStyle.btnaccent3Color button,
.btnFilledStyle.btnaccent3Color:hover button{color: {$accentColor3} !important;}
.btnBorderlessStyle.btnaccent3Color span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnaccent3Color span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnaccent3Color a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnaccent3Color .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnaccent3Color button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor3};}
.btnFilledStyle.btnaccent4Color,
.btnOutlineStyle.btnaccent4Color:hover{background-color: {$accentColor4};
    border: 2px solid {$accentColor4};}
.btnOutlineStyle.btnaccent4Color,
.btnFilledStyle.btnaccent4Color:hover{
    border: 2px solid {$accentColor4};
    color: {$accentColor1};}
.btnOutlineStyle.btnaccent4Color span,
.btnFilledStyle.btnaccent4Color:hover span,
.btnOutlineStyle.btnaccent4Color span:before,
.btnFilledStyle.btnaccent4Color:hover span:before,
.btnOutlineStyle.btnaccent4Color a,
.btnFilledStyle.btnaccent4Color:hover a,
.btnOutlineStyle.btnaccent4Color .btIco a:before,
.btnFilledStyle.btnaccent4Color:hover .btIco a:before,
.btnOutlineStyle.btnaccent4Color button,
.btnFilledStyle.btnaccent4Color:hover button{color: {$accentColor4} !important;}
.btnBorderlessStyle.btnaccent4Color span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnaccent4Color span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnaccent4Color a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnaccent4Color .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnaccent4Color button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor4};}
.btCounterHolder{font-family: \"{$headingFont}\";}
.btCounterHolder .btCountdownHolder .days_text,
.btCounterHolder .btCountdownHolder .hours_text,
.btCounterHolder .btCountdownHolder .minutes_text,
.btCounterHolder .btCountdownHolder .seconds_text{
    font-family: {$headingFont};
    color: {$accentColor1};}
.btProgressContent{font-family: \"{$headingFont}\";}
.btProgressContent .btProgressAnim{
    background-color: {$accentColor1};}
.bpgPhoto .captionPane{
    background-color: {$accentColorOpaque} !important;}
.btShowTitle .header.small h4 span.headline{
    -webkit-box-shadow: 0 -4px 0 0 {$accentColor1} inset;
    box-shadow: 0 -4px 0 0 {$accentColor1} inset;}
.btPriceTable .btPriceTableHeader{background: {$accentColor1};}
.btPriceTableSticker{
    background: {$accentColor2};
    font-family: \"{$headingFont}\";}
.btPriceTableSticker > div > div{
    font-family: {$bodyFont};}
.btPriceTableSticker:after,
.btPriceTableSticker:before{
    border-color: {$accentColor2} transparent transparent transparent;}
.servicesItem.btServicesAccent1 .btDash.bottomDash .dash:after{border-color: {$accentColor1};}
.servicesItem.btServicesAccent2 .btDash.bottomDash .dash:after{border-color: {$accentColor2};}
.servicesItem.btServicesAccent3 .btDash.bottomDash .dash:after{border-color: {$accentColor3};}
.servicesItem.btServicesAccent4 .btDash.bottomDash .dash:after{border-color: {$accentColor4};}
.header .btSuperTitle{font-family: \"{$headingSuperTitleFont}\";}
.header .btSubTitle{font-family: \"{$headingSubTitleFont}\";}
.header.btHeaderAccent1 h1,
.header.btHeaderAccent1 h2,
.header.btHeaderAccent1 h3,
.header.btHeaderAccent1 h4,
.header.btHeaderAccent1 h5{color: {$accentColor1};}
.header.btHeaderAccent1.btDash.bottomDash .dash:after{border-color: {$accentColor1};}
.header.btHeaderAccent2 h1,
.header.btHeaderAccent2 h2,
.header.btHeaderAccent2 h3,
.header.btHeaderAccent2 h4,
.header.btHeaderAccent2 h5{color: {$accentColor2};}
.header.btHeaderAccent2.btDash.bottomDash .dash:after{border-color: {$accentColor2};}
.header.btHeaderAccent3 h1,
.header.btHeaderAccent3 h2,
.header.btHeaderAccent3 h3,
.header.btHeaderAccent3 h4,
.header.btHeaderAccent3 h5{color: {$accentColor3};}
.header.btHeaderAccent3.btDash.bottomDash .dash:after{border-color: {$accentColor3};}
.header.btHeaderAccent4 h1,
.header.btHeaderAccent4 h2,
.header.btHeaderAccent4 h3,
.header.btHeaderAccent4 h4,
.header.btHeaderAccent4 h5{color: {$accentColor4};}
.header.btHeaderAccent4.btDash.bottomDash .dash:after{border-color: {$accentColor4};}
.btNoMore{
    font-family: {$headingFont};}
.btGridContent .header .btSuperTitle a:hover{color: {$accentColor1};}
.btCatFilter{font-family: \"{$bodyFont}\",arial,sans-serif;}
.btCatFilter > span:nth-child(4n + 1){color: {$accentColor1};}
.btCatFilter > span:nth-child(4n + 1):after{background-color: {$accentColor1};}
.btCatFilter > span:nth-child(4n + 2){color: {$accentColor2};}
.btCatFilter > span:nth-child(4n + 2):after{background-color: {$accentColor2};}
.btCatFilter > span:nth-child(4n + 3){color: {$accentColor3};}
.btCatFilter > span:nth-child(4n + 3):after{background-color: {$accentColor3};}
.btCatFilter > span:nth-child(4n + 4){color: {$accentColor4};}
.btCatFilter > span:nth-child(4n + 4):after{background-color: {$accentColor4};}
h4.nbs a .nbsItem .nbsDir{
    font-family: \"{$headingSuperTitleFont}\";}
.btInfoBar .btInfoBarMeta p strong{color: {$accentColor1};}
.recentTweets small:before{
    color: {$accentColor1};}
.tabsHeader{font-family: \"{$bodyFont}\",arial,sans-serif;}
.tabsVertical .tabAccordionTitle{
    font-family: \"{$headingFont}\";}
.tabsVertical .tabAccordionTitle:before{
    -webkit-box-shadow: 0 0 0 1em {$accentColor1} inset;
    box-shadow: 0 0 0 1em {$accentColor1} inset;}
.tabsVertical .tabAccordionTitle:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;
    color: {$accentColor1};}
.tabsVertical .tabAccordionTitle.on:before{-webkit-box-shadow: 0 0 0 1em {$accentColor2} inset;
    box-shadow: 0 0 0 1em {$accentColor2} inset;}
.tabsVertical .tabAccordionTitle.on:hover:before{-webkit-box-shadow: 0 0 0 1px {$accentColor2} inset;
    box-shadow: 0 0 0 1px {$accentColor2} inset;
    color: {$accentColor2};}
.btVisualizer{font-family: {$headingFont};}
form.wpcf7-form .wpcf7-submit{
    background-color: {$accentColor1};
    font-family: {$headingFont};}
.btLightSkin form.wpcf7-form span.wpcf7-not-valid-tip,
.btDarkSkin .btLightSkin form.wpcf7-form span.wpcf7-not-valid-tip,
.btLightSkin .btDarkSkin .btLightSkin form.wpcf7-form span.wpcf7-not-valid-tip,
.btLightSkin form.wpcf7-form div.wpcf7-validation-errors,
.btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-validation-errors,
.btLightSkin .btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-validation-errors{color: {$accentColor2};}
.btLightSkin form.wpcf7-form div.wpcf7-mail-sent-ok,
.btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-mail-sent-ok,
.btLightSkin .btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-mail-sent-ok{color: {$accentColor1};}
.btAnimNav li.btAnimNavDot{
    font-family: {$headingFont};}
.btAnimNav li.btAnimNavNext:hover,
.btAnimNav li.btAnimNavPrev:hover{border-color: {$accentColor1};
    color: {$accentColor1};}
.headline b.animate.animated{
    color: {$accentColor1};}
.headline em.animate{
    font-family: {$bodyFont};}
p.demo_store{
    background-color: {$accentColor1};}
.woocommerce .woocommerce-info a: not(.button),
.woocommerce-page .woocommerce-info a: not(.button),
.woocommerce .woocommerce-message a: not(.button),
.woocommerce-page .woocommerce-message a: not(.button){color: {$accentColor1};}
.woocommerce .woocommerce-message:before,
.woocommerce-page .woocommerce-message:before,
.woocommerce .woocommerce-info:before,
.woocommerce-page .woocommerce-info:before{
    color: {$accentColor1};}
.woocommerce a.button,
.woocommerce-page a.button,
.woocommerce input[type=\"submit\"],
.woocommerce-page input[type=\"submit\"],
.woocommerce button[type=\"submit\"],
.woocommerce-page button[type=\"submit\"],
.woocommerce input.button,
.woocommerce-page input.button,
.woocommerce input.alt:hover,
.woocommerce-page input.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce-page a.button.alt:hover,
.woocommerce .button.alt:hover,
.woocommerce-page .button.alt:hover,
.woocommerce button.alt:hover,
.woocommerce-page button.alt:hover{
    border: 2px solid {$accentColor1};
    color: {$accentColor1};
    font-family: {$headingFont};}
.woocommerce a.button.submit,
.woocommerce-page a.button.submit,
.woocommerce input[type=\"submit\"].submit,
.woocommerce-page input[type=\"submit\"].submit,
.woocommerce button[type=\"submit\"].submit,
.woocommerce-page button[type=\"submit\"].submit,
.woocommerce input.button.submit,
.woocommerce-page input.button.submit,
.woocommerce input.alt:hover.submit,
.woocommerce-page input.alt:hover.submit,
.woocommerce a.button.alt:hover.submit,
.woocommerce-page a.button.alt:hover.submit,
.woocommerce .button.alt:hover.submit,
.woocommerce-page .button.alt:hover.submit,
.woocommerce button.alt:hover.submit,
.woocommerce-page button.alt:hover.submit{
    background: {$accentColor1};
    border: 2px solid {$accentColor1};}
.woocommerce a.button:hover,
.woocommerce-page a.button:hover,
.woocommerce input[type=\"submit\"]:hover,
.woocommerce-page input[type=\"submit\"]:hover,
.woocommerce .button:hover,
.woocommerce-page .button:hover,
.woocommerce button:hover,
.woocommerce-page button:hover,
.woocommerce input.alt,
.woocommerce-page input.alt,
.woocommerce a.button.alt,
.woocommerce-page a.button.alt,
.woocommerce .button.alt,
.woocommerce-page .button.alt,
.woocommerce button.alt,
.woocommerce-page button.alt{background-color: {$accentColor1};
    font-family: \"{$headingFont}\";}
.woocommerce a.button:hover.submit:hover,
.woocommerce-page a.button:hover.submit:hover,
.woocommerce input[type=\"submit\"]:hover.submit:hover,
.woocommerce-page input[type=\"submit\"]:hover.submit:hover,
.woocommerce .button:hover.submit:hover,
.woocommerce-page .button:hover.submit:hover,
.woocommerce button:hover.submit:hover,
.woocommerce-page button:hover.submit:hover,
.woocommerce input.alt.submit:hover,
.woocommerce-page input.alt.submit:hover,
.woocommerce a.button.alt.submit:hover,
.woocommerce-page a.button.alt.submit:hover,
.woocommerce .button.alt.submit:hover,
.woocommerce-page .button.alt.submit:hover,
.woocommerce button.alt.submit:hover,
.woocommerce-page button.alt.submit:hover{
    color: {$accentColor1};}
.woocommerce p.lost_password:before,
.woocommerce-page p.lost_password:before{
    color: {$accentColor1};}
.woocommerce form.login p.lost_password a:hover,
.woocommerce-page form.login p.lost_password a:hover{color: {$accentColor1};}
.woocommerce .added:after,
.woocommerce-page .added:after,
.woocommerce .loading:after,
.woocommerce-page .loading:after{
    background-color: {$accentColor1};}
.woocommerce div.product .btPriceTableSticker:after,
.woocommerce-page div.product .btPriceTableSticker:after,
.woocommerce div.product .btPriceTableSticker:before,
.woocommerce-page div.product .btPriceTableSticker:before{
    border-color: transparent {$accentColor2} transparent transparent;}
.woocommerce div.product p.price,
.woocommerce-page div.product p.price,
.woocommerce div.product span.price,
.woocommerce-page div.product span.price{
    font-family: \"{$headingFont}\";}
.woocommerce div.product .stock,
.woocommerce-page div.product .stock{color: {$accentColor1};}
.woocommerce div.product div.images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a:before,
.woocommerce-page div.product div.images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a:before{
    background: {$accentColor1};}
.woocommerce div.product a.reset_variations:hover,
.woocommerce-page div.product a.reset_variations:hover{color: {$accentColor1};}
.woocommerce .added_to_cart,
.woocommerce-page .added_to_cart{
    font-family: {$headingFont};}
.woocommerce nav.woocommerce-pagination,
.woocommerce-page nav.woocommerce-pagination{
    font-family: \"{$headingFont}\";}
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce-page nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li span.current{background: {$accentColor1};}
.woocommerce .star-rating span:before,
.woocommerce-page .star-rating span:before{
    color: {$accentColor1};}
.woocommerce p.stars a[class^=\"star-\"].active:after,
.woocommerce-page p.stars a[class^=\"star-\"].active:after,
.woocommerce p.stars a[class^=\"star-\"]:hover:after,
.woocommerce-page p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor1} !important;}
.woocommerce-cart table.cart td.product-remove a.remove{
    color: {$accentColor2};
    border: 1px solid {$accentColor2};}
.woocommerce-cart table.cart td.product-remove a.remove:hover{background-color: {$accentColor2};}
.woocommerce-cart .cart_totals .discount td{color: {$accentColor1};}
.woocommerce-account header.title .edit{
    color: {$accentColor1};}
.woocommerce-account header.title .edit:before{
    color: {$accentColor1};}
.woocommerce-checkout #payment ul.payment_methods{border-bottom: 4px solid {$accentColor2};}
.products ul li .header.extrasmall .btSuperTitle,
ul.products li .header.extrasmall .btSuperTitle{
    font-family: \"{$bodyFont}\",airal,sans-serif;}
.products ul li .header.extrasmall .dash h4 .headline a:hover,
ul.products li .header.extrasmall .dash h4 .headline a:hover{color: {$accentColor1};}
.products ul li .header.extrasmall .dash h4 .headline:after,
ul.products li .header.extrasmall .dash h4 .headline:after{
    background-color: {$accentColor1};}
.products ul li span.price,
ul.products li span.price{
    font-family: '{$headingFont}',arial,sans-serif;}
.products ul li:nth-child(4n + 1) span.price,
ul.products li:nth-child(4n + 1) span.price{background-color: {$accentColor1};}
.products ul li:nth-child(4n + 2) span.price,
ul.products li:nth-child(4n + 2) span.price{background-color: {$accentColor2};}
.products ul li:nth-child(4n + 3) span.price,
ul.products li:nth-child(4n + 3) span.price{background-color: {$accentColor3};}
.products ul li:nth-child(4n + 4) span.price,
ul.products li:nth-child(4n + 4) span.price{background-color: {$accentColor4};}
.products ul li .btPriceTableSticker:after,
.products ul li .btPriceTableSticker:before,
ul.products li .btPriceTableSticker:after,
ul.products li .btPriceTableSticker:before{
    border-color: transparent {$accentColor2} transparent transparent;}
.woocommerce-page .products ul li a.btBtn,
.woocommerce-page ul.products li a.btBtn{
    background: {$accentColor1};
    border: 2px solid {$accentColor1};}
.woocommerce-page .products ul li a.btBtn:hover,
.woocommerce-page ul.products li a.btBtn:hover{
    color: {$accentColor1};}
.btQuoteBooking .btContactNext{font-family: {$headingFont};
    border: {$accentColor1} 2px solid;
    color: {$accentColor1};}
.btQuoteBooking .btContactNext:hover,
.btQuoteBooking .btContactNext:active{background-color: {$accentColor1} !important;}
.btQuoteBooking .btQuoteSwitch:hover{-webkit-box-shadow: 0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
.btLightSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btDarkSkin .btLightSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btDarkSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btLightSkin .btDarkSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{
    background: {$accentColor1};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{
    -webkit-box-shadow: 0 0 4px 0 {$accentColor1};
    box-shadow: 0 0 4px 0 {$accentColor1};}
.btQuoteBooking .ui-slider .ui-slider-handle{
    background: {$accentColor1};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor1};
    font-family: {$headingFont};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{border: 1px solid {$accentColor1};
    -webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{border: 1px solid {$accentColor1};
    -webkit-box-shadow: 0 0 0 1px {$accentColor1} inset;
    box-shadow: 0 0 0 1px {$accentColor1} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:hover,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset,0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor1} inset,0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset,0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor1} inset,0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:focus,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:focus{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset,5px 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor1} inset,5px 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor1} inset,5px 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 1px {$accentColor1} inset,5px 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btSubmitMessage{color: {$accentColor1};}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor1};}
.btQuoteBooking .ddChild ul li:hover,
.btQuoteBooking .ddChild ul li.selected:hover{
    background: {$accentColor1};}
.btQuoteBooking .btContactSubmit{
    background-color: {$accentColor1};
    font-family: {$headingFont};
    border: 2px solid {$accentColor1};}
.btQuoteBooking .btContactSubmit:hover{
    color: {$accentColor1};}
.btPayPalButton:hover{-webkit-box-shadow: 0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor1} inset,0 1px 5px rgba(0,0,0,.2);}
@media (max-width:620px){.btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btLightSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus{border-bottom: 3px solid {$accentColor1};}
.btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btSearchInner.btFromTopBox input[type=\"text\"]:focus{border-bottom: 3px solid {$accentColor1};}
}#btSettingsPanel #btSettingsPanelToggler:before{
    color: {$accentColor1};}
#btSettingsPanel h4{
    background-color: {$accentColor1};}
#btSettingsPanel .btSettingsPanelRow.btAccentColor1Row .trigger,
#btSettingsPanel .btSettingsPanelRow.btAccentColor1Row select{border-color: {$accentColor1};}
#btSettingsPanel .btSettingsPanelRow.btAccentColor2Row .trigger,
#btSettingsPanel .btSettingsPanelRow.btAccentColor2Row select{border-color: {$accentColor2};}
#btSettingsPanel .btSettingsPanelRow.btAccentColor3Row .trigger,
#btSettingsPanel .btSettingsPanelRow.btAccentColor3Row select{border-color: {$accentColor3};}
#btSettingsPanel .btSettingsPanelRow.btAccentColor4Row .trigger,
#btSettingsPanel .btSettingsPanelRow.btAccentColor4Row select{border-color: {$accentColor4};}
", array() );