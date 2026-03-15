<?php

// add to cart button

if ( ! function_exists( 'boldthemes_wc_get_add_to_cart_button' ) ) {
	function boldthemes_wc_get_add_to_cart_button( $product ) {
		return sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="btBtn btnOutlineStyle btnSmall btnNormal btnNormalColor add_to_cart_button ajax_add_to_cart %s"><span class="btnInnerText">%s</span></a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : '' ),
			esc_html( $product->add_to_cart_text() )
		);
	}
}

if ( ! function_exists( 'boldthemes_search_form' ) ) {
	function boldthemes_search_form( $form ) {
		$form = boldthemes_get_icon_html( 'fa_f002', '#', '', 'btIcoDefaultType btIcoDefaultColor', '' );
		$form .= '
		<div class="btSearchInner" role="search">
			<div class="btSearchInnerContent">
				<form action="' . esc_url_raw( home_url( '/' ) ) . '" method="get"><input type="text" name="s" placeholder="' . esc_attr( esc_html__( 'Looking for...', 'fitness-club' ) ) . '" class="untouched">
				<button type="submit" data-icon="&#xf105;"></button>
				</form>
				<div class="btSearchInnerClose">' . boldthemes_get_icon_html( 'fa_f00d', '#', '', 'btIcoOutlineType btIcoDefaultColor btIcoMediumSize', '' ) . '</div>
			</div>
		</div>';
		return '<div class="btSearch">' . $form . '</div>';
	}
}

/**
 * Change number of related products
 */
if ( ! function_exists( 'boldthemes_change_number_related_products' ) ) {
	function boldthemes_change_number_related_products( $args ) {
		$args['posts_per_page'] = 3; // # of related products
		$args['columns'] = 3; // # of columns per row
		return $args;
	}
}

/**
 * Loop shop per page
 */
if ( ! function_exists( 'boldthemes_loop_shop_per_page' ) ) {
	function boldthemes_loop_shop_per_page( $cols ) {
		return 12;
	}
}

/**
 * Loop columns
 */
if ( ! function_exists( 'boldthemes_loop_shop_columns' ) ) {
	function boldthemes_loop_shop_columns() {
		return 3; // 4 products per row
	}
}

/**
 * Share buttons.
 */
if ( ! function_exists( 'boldthemes_wc_get_share_buttons' ) ) {
	function boldthemes_wc_get_share_buttons( $permalink ) {
		return boldthemes_get_share_html( $permalink, 'shop', 'btIcoSmallSize', 'btIcoFilledType btIcoDefaultColor' );
	}
}