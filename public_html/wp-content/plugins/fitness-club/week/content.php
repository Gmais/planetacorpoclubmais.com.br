<?php
/**
 * Week View Shortcode [bt_events_week] Content
 * The content template for the week view. This template is also used for
 * the response that is returned on week view ajax requests.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$start_date = $bt_week_template_vars['start_date'];
$end_date	= $bt_week_template_vars['end_date'];

$week_days	= bt_this_week_query($bt_week_template_vars);
?>


<div class="bt-this-week-widget-wrapper bt-this-week-widget-<?php echo esc_attr( $bt_week_template_vars['layout'] ); ?>" <?php echo apply_filters( 'bt_events_this_week_header_attributes', $bt_week_data_attrs ); ?> >
			
			<h2 class="bt-events-page-title"><?php echo esc_html( bt_events_get_this_week_title( $start_date ) ); ?></h2>	

			<h3 class="bt-events-visuallyhidden"><?php esc_html_e( 'Week Navigation', 'bt_plugin' ); ?></h3>			
			<ul class="bt-events-sub-nav">				
				<li class="bt-this-week-nav-link nav-previous">
					<?php echo bt_events_this_week_previous_link( $start_date ); ?>
				</li>				
				<li class="bt-this-week-nav-link nav-next">
					<?php echo bt_events_this_week_next_link( $end_date ); ?>
				</li>
			</ul>

			<span class="bt-events-ajax-loading">
				<img alt="Loading Events" src="<?php echo esc_url( $bt_week_template_vars['loading_gif']  ); ?>" class="bt-events-spinner-medium">
			</span>

	<!-- This Week Grid -->
	<div class="bt-this-week-widget-weekday-wrapper " >

		<?php foreach ( $week_days as $day ) : ?>

			<div class="bt-this-week-widget-day bt-this-week-widget-day-<?php echo esc_attr( $day['day_number'] ) ?> <?php echo esc_attr( bt_get_this_week_day_class( $day ) ); ?>">
				<div class="bt-this-week-widget-header-date">
					<span class="date"><?php echo esc_html( $day['formatted_date'] ); ?></span>
				</div>

					<div class="bt-this-week-widget-day-wrap">
						<?php if ( $day['has_events'] ) : ?>

							<?php $i = 0; ?>

							<?php foreach ( $day['this_week_events'] as $event ) : ?>

								<?php if ( $i++ >= $day['events_limit'] ) break; ?>

								<!-- This Week Event -->
								<div id="bt-events-event-<?php echo esc_attr( $event->ID ); ?>" class="<?php tribe_events_event_classes( $event->ID ) ?> bt-this-week-event" >
									<h2 class="entry-title summary">
										<a href="<?php echo esc_url( tribe_get_event_link( $event->ID ) ); ?>" rel="bookmark"><?php echo esc_html( $event->post_title ); ?></a>
									</h2>

									<div class="duration">
										<?php echo tribe_events_event_schedule_details( $event->ID ) ?>
									</div>

									<div class="fn org bt-venue">
										<?php echo tribe_get_venue_link( $event->ID ); ?>
									</div>
								</div>

							<?php endforeach; ?>

							<!-- This Week Day View More -->
							<?php if ( $day['view_more'] ) : ?>
								<div class="bt-events-viewmore">
									<?php

									$label_text = $bt_week_template_vars['events_label_singular'];
									if ( 1 !== $day['total_events'] ) {
										$label_text = $bt_week_template_vars['events_label_plural'];
									}

									$view_all_label = sprintf(
									  _n(
										'View %1$s %2$s',
										'View All %1$s %2$s',
										$day['total_events'],
										'bt-events-calendar-pro'
									  ),
									  $day['total_events'],
									  $label_text
									);

									?>
									<a href="<?php echo esc_url( $day['view_more'] ); ?>"><?php echo esc_html( $view_all_label ); ?> &raquo;</a>
								</div>
							<?php endif ?>

						<?php else : ?>

							<div class="this-week-no-events-msg"><?php esc_html_e( 'No Events Today', 'bt_plugin' ); ?></div>

						<?php endif; ?>

					</div>
				</div>
			 <?php endforeach; ?>
		</div>
	</div>


