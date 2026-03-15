<?php

	echo '<article class="' . esc_attr( implode( ' ', get_post_class( $class_array ) ) ) . ' btPortfolioSingleItemColumns">';
		echo '<div class="port">';
			echo '<div class="boldCell">';
				echo '<div class="boldRow bottomSmallSpaced">';
					$extra_class = 'col-sm-12';
					if ( $media_html != '' ) {
							$extra_class = 'col-sm-3';
							echo '<div class="rowItem col-sm-9 btTextCenter btGridGap5">' . $media_html . '</div><!-- /rowItem -->';
					}
					echo '<div class="rowItem btTextLeft ' . esc_attr( $extra_class ) . '">';
				
					echo '<div class="btClear btSeparator bottomSmallSpaced noBorder visible-ms visible-xs"><hr></div>';

					if( boldthemes_get_option( 'hide_headline' ) ) {
						echo boldthemes_get_heading_html( '', $full_title . "</em>", boldthemes_get_the_excerpt( get_the_ID() ), 'medium', $dash, 'wArticleMeta', '' ) ;
					}
					
					echo '<div class="boldArticleBody btArticleBody">' . $content_html . '</div>';
					
					
					if ( $categories_html != '' || $long_meta_right_html != '' ) {
						echo '<dl class="btArticleMeta onBottom">';
						if ( $categories_html != '' ) {
							echo '<dt>' . esc_html__( 'Category', 'fitness-club' ) . '</dt>';
							echo '<dd>' . $categories_html . '</dd>';
						}
						echo wp_kses_post( $long_meta_right_html );
						echo '</dl>';
					}

					echo '<div class="btClear btSeparator bottomSmallSpaced noBorder"><hr></div>';
						
					echo '<div class="socialRow">' . boldthemes_get_share_html( $permalink, 'pf', 'btIcoSmallSize', 'btIcoFilledType btIcoNormalColor' ) . '</div>';
										
					wp_link_pages( array( 
						'before'      => '<ul>' . esc_html__( 'Pages:', 'fitness-club' ),
						'separator'   => '<li>',
						'after'       => '</ul>'
					));					

					echo '</div><!-- /rowItem -->';
				echo '</div><!-- /boldRow -->';
			echo '</div><!-- boldCell -->';
		echo '</div><!-- /port -->';
	echo '</article>';

?>