<?php

	$extra_class = 'col-sm-12';
	if ( $long_meta_right_html != '' ) {
		$extra_class = ' col-sm-9';
	}

	echo '<article class="' . esc_attr( implode( ' ', get_post_class( $class_array ) ) ) . ' btPortfolioSingleItemStandard">';
		echo '<div class="port">';
			echo '<div class="boldCell">';
			
			if ( $media_html != '' ) {
				echo '<div class="boldRow boldRow bottomSmallSpaced">';
					echo '<div class="rowItem col-sm-12 btTextCenter btGridGap5">' . $media_html . '</div><!-- /rowItem -->';
				echo '</div><!-- /boldRow -->';
			}
			
			if ( boldthemes_get_option( 'hide_headline' ) ) {
				echo '<div class="boldRow btArticleHeader">';
					echo '<div class="rowItem">';
						
						echo boldthemes_get_heading_html( $categories_html, $full_title, boldthemes_get_the_excerpt( get_the_ID() ), 'extralarge', $dash, 'wArticleMeta', '' ) ;
						
					echo '</div><!-- /rowItem -->';
				echo '</div><!-- /boldRow -->';
			}
			
			echo '<div class="boldRow">';
				echo '<div class="rowItem ' . esc_attr( $extra_class ) . '">';
					echo '<div class="boldArticleBody btArticleBody">' . $content_html . '</div>';
				echo '</div><!-- /rowItem -->';
				
				if ( $long_meta_right_html != '' ) {
					echo '<div class="rowItem col-sm-3 btTextRight">';
						echo '<dl class="btArticleMeta onBottom">';
							echo wp_kses_post( $long_meta_right_html );
						echo '</dl>';
					echo '</div><!-- /rowItem -->';
				}
			echo '</div><!-- /boldRow -->';
			
			echo '<div class="boldRow bottomSmallSpaced">';
				echo '<div class="rowItem col-sm-12 btTextRight btArticleShare">';
					echo '<div class="socialRow">' . boldthemes_get_share_html( $permalink, 'pf', 'btIcoSmallSize', 'btIcoFilledType btIcoNormalColor' ) . '</div>';
				echo '</div><!-- /rowItem -->';
			echo '</div><!-- /boldRow >';
			
			echo '<div class="boldRow">';
				echo '<div class="rowItem col-sm-12 btLinkPages">';
					
				wp_link_pages( array( 
					'before'      => '<ul>' . esc_html__( 'Pages:', 'fitness-club' ),
					'separator'   => '<li>',
					'after'       => '</ul>'
				));
				
				echo '</div><!-- /rowItem -->';
			echo '</div><!-- /boldRow -->';
		echo '</div><!-- /port -->';
	echo '</article>';

?>