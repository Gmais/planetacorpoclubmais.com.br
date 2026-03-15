<?php

	$share_html = '<div class="btIconRow">' . boldthemes_get_share_html( $permalink, 'blog', 'btIcoSmallSize', 'btIcoFilledType btIcoNormalColor' ) . '</div>';

	$meta_html = '';
	if ( $blog_author || $blog_date || $show_comments_number ) {
		$meta_html .= '';
		if ( $blog_date && ! $blog_side_info ) $meta_html .= boldthemes_get_post_date(); 
		if ( $blog_author && ! $blog_side_info ) $meta_html .= boldthemes_get_post_author2( BoldThemesFramework::$author_url );
		if ( $show_comments_number ) {
			if ( $meta_html != '' ) {
				$meta_html .= boldthemes_get_post_comments();
			} else {
				$categories_html .= boldthemes_get_post_comments();
			}
		}
	}

	$dash = BoldThemesFramework::$blog_use_dash ? 'bottom' : '';
	
	echo '<article class="' . esc_attr( implode( ' ', get_post_class( $class_array ) ) ) . '">';
		echo '<div class="port">';
			echo '<div class="boldCell">';
				echo '<div class = "boldRow">';
					echo '<div class="rowItem col-sm-12">';
						echo '<div class="rowItemContent">';
							if ( $blog_side_info ) {
									echo '<div class="articleSideGutter btTextRight">';
									$avatar_html = get_avatar( get_the_author_meta( 'ID' ), 144 ); 
										
									if ( $avatar_html != '' ) {
										echo '<div class="asgItem avatar"><a href="' . esc_url_raw( BoldThemesFramework::$author_url ) . '">' . $avatar_html . '</a></div>';
									}
									if ( $blog_author ) {
										echo '<div class="asgItem title"><span>' . boldthemes_get_post_author2( BoldThemesFramework::$author_url ) . '</span></div>';
									}
									if ( $blog_date ) {
										echo '<div class="asgItem date"><small>' . boldthemes_get_post_date( array( 'prefix' => '', 'suffix' => '' ) ) . '</small></div>';
									}	
									
									echo '</div>';
								}
								
								$extra_class = '';
								if ( $post_format == 'link' && $media_html == '' ) {
									$extra_class = ' linkOrQuote';
								}

								echo '<div class="btArticleListBody' . $extra_class . '">';				
									if ( $media_html != '' ) {
										echo ' ' . $media_html;
									}

									echo '<div class="btClear btSeparator bottomSmallSpaced noBorder"><hr></div>';
									echo boldthemes_get_heading_html( $categories_html, '<a href="' . esc_url_raw( $permalink ) . '">' . get_the_title() . '</a>', $meta_html, 'large', $dash, '', '' );
									echo '<div class="btArticleListBodyContent">' . $content_final_html . '</div>';
									echo '<div class="btClear btSeparator bottomSmallSpaced noBorder"><hr></div>';
									echo '<div class="boldRow btArticleFooter">';
										echo '<div class="rowItem col-md-6 col-ms-12 btTextLeft btShareArticle">' . $share_html . '</div>';
										echo '<div class="rowItem col-md-6 col-ms-12 btTextRight btReadArticle">' . boldthemes_get_button_html( '', $permalink, esc_html__( 'CONTINUE READING', 'fitness-club' ), 'btContinueReading btnOutlineStyle btnNormalColor btnSmall btnNormalWidth btnRightPosition btnIco', '', '' ) . '</div>';
									echo '</div><!-- /boldRow -->';
								echo '</div><!-- /btArticleListBody -->' ;
							echo '</div><!-- /rowItemContent -->' ;
						echo '</div><!-- /rowItem -->';
				echo '</div><!-- /boldRow -->';			
			echo '</div><!-- boldCell -->';			
		echo '</div><!-- port -->';
	echo '</article><!-- /articles -->';

?>