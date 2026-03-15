		</div><!-- /boldthemes_content -->
<?php

if ( BoldThemesFramework::$has_sidebar ) {
	echo '<aside class="btSidebar">';
		dynamic_sidebar( 'primary_widget_area' );
	echo '</aside>';					
}

?> 
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

<?php

if ( boldthemes_get_option( 'footer_dark_skin' ) ) {
	echo '<div class="footer btDarkSkin">';
} else {
	echo '<div class="footer">';
}

$custom_text_html = '';
$custom_text = boldthemes_get_option( 'custom_text' );
if ( $custom_text != '' ) {
	$custom_text_html = '<p class="copyLine">' . $custom_text . '</p>';
}

$page_slug = boldthemes_get_option( 'footer_page_slug' );
if ( $page_slug != '' ) {
	$page_id = boldthemes_get_id_by_slug( $page_slug );
	if ( ! is_null( $page_id ) ) {
		$page = get_post( $page_id );
		$content = $page->post_content;
		$content = apply_filters( 'the_content', $content );
		$content = preg_replace( '/data-edit_url="(.*?)"/s', 'data-edit_url="' . get_edit_post_link( $page_id, '' ) . '"', $content );
		echo str_replace( ']]>', ']]&gt;', $content );
	}
}

if ( is_active_sidebar( 'footer_widgets' ) ) {
	echo '
	<section class="boldSection btSiteFooterWidgets gutter topSpaced bottomSemiSpaced btDoubleRowPadding">
		<div class="port">
			<div class="boldRow" id="boldSiteFooterWidgetsRow">';
			dynamic_sidebar( 'footer_widgets' );
	echo '	
			</div>
		</div>
	</section>';
}

?>
<?php if ( $custom_text_html != '' || has_nav_menu( 'footer' )) { ?>
	<section class="boldSection gutter btSiteFooter btGutter">
		<div class="port">
			<div class="boldRow">
				<div class="rowItem btFooterCopy col-md-6 col-sm-12 btTextLeft">
					<?php echo wp_kses_post( $custom_text_html ); ?>
				</div><!-- /copy -->
				<div class="rowItem btFooterMenu col-md-6 col-sm-12 btTextRight">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'ul', 'depth' => 1, 'fallback_cb' => false ) ); ?>
				</div>
			</div><!-- /boldRow -->
		</div><!-- /port -->
	</section>
<?php } ?>

</div>

</div><!-- /pageWrap -->

<?php

wp_footer();

?>
</body>
</html>