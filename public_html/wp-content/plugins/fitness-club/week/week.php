<?php
/*
 *
 * Functions for use in [bt_events_week] shortcode.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/*
 *  Query
 *
 *  @return object
 */
 if ( ! function_exists( 'bt_this_week_query' ) ) {	
	function bt_this_week_query( $this_week_query_vars ) {
		$week_days = array();

		$post_status = array( 'publish' );
		$this_week_args = array(
			'post_type'            => 'tribe_events',
			'eventDisplay'         => 'custom',
			'start_date'           => $this_week_query_vars['start_date'],
			'end_date'             => $this_week_query_vars['end_date'],
			'post_status'          => $post_status,
			'tribeHideRecurrence'  => false,
			'post__not_in'         => null,
			'tribe_render_context' => 'widget',
			'posts_per_page'       => - 1,
		);

		$this_week_args = apply_filters( 'bt_events_this_week_query_args', $this_week_args );
		$events = tribe_get_events( $this_week_args, true );

		$day = $this_week_query_vars[ 'start_date' ];
		$day_range = bt_get_day_range( $this_week_query_vars[ 'start_of_week' ] );
		$timestamp_today = strtotime( current_time( Tribe__Date_Utils::DBDATEFORMAT ) );

		$display_date_format	= $this_week_query_vars['display_date_format'];

		$weekday_array = array(
			'Sunday',
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday',
		);


		foreach ( $day_range as $i => $day_number ) {
			

			if ( $day_number >= $day_range[0] ) {
				$date = date( Tribe__Date_Utils::DBDATEFORMAT, strtotime( $day . "+$i days" ) );
			} else {
				$date = date( Tribe__Date_Utils::DBDATEFORMAT, strtotime( "Next {$weekday_array[$day_number]}", strtotime( $day ) ) );
			}

			

			$this_week_events_sticky = $this_week_events = array();

			if ( $events->have_posts() ) {
				foreach ( $events->posts as $j => $event ) {
					if ( tribe_event_is_on_date( $date, $event ) ) {
						$event->days_between = tribe_get_days_between( $event->EventStartDate, $event->EventEndDate, true );
						
						if ( $event->menu_order == -1 ) {
							$this_week_events_sticky[] = $event;
						} else {
							$this_week_events[] = $event;
						}
					}
				}
			}

			if ( ! empty( $this_week_events_sticky ) && is_array( $this_week_events_sticky ) && is_array( $this_week_events ) ) {
				$this_week_events = array_merge( $this_week_events_sticky, $this_week_events );
			}

			$formatted_date  = date_i18n( $display_date_format, strtotime( $date ) );
			$timestamp_date  = strtotime( $date );

			$week_days[] = array(
				'date'             => $date,
				'day_number'       => $day_number,
				'formatted_date'   => $formatted_date,
				'is_today'         => ( $timestamp_date == $timestamp_today ) ? true : false,
				'is_past'          => ( $timestamp_date < $timestamp_today ) ? true : false,
				'is_future'        => ( $timestamp_date > $timestamp_today ) ? true : false,
				'this_week_events' => $this_week_events,
				'has_events'       => $this_week_events,
				'total_events'     => count( $this_week_events ),
				'events_limit'     => $this_week_query_vars['count'],
				'view_more'        => ( count( $this_week_events ) > $this_week_query_vars['count'] ) ? esc_url_raw( tribe_get_day_link( $date ) ) : false,
			);
		}

		return $week_days;
	}
 }


/**
 * Set class if today or in past for Week Grid
 *
 * @return string
 */
if ( ! function_exists( 'bt_get_this_week_day_class' ) ) {
	function bt_get_this_week_day_class( $day ) {
		if ( $day['is_today'] ) {
			$class = 'this-week-today';
			return $class;
		} elseif ( $day['is_past'] ) {
			$class = 'this-week-past';
			return $class;
		}
		return null;
	}
}


/**
 * Title
 *
 * @param string $start_date
 *
 * @return string
 */
  if ( ! function_exists( 'bt_events_get_this_week_title' ) ) {
	function bt_events_get_this_week_title( $start_date ) {
		$events_label_plural = tribe_get_event_label_plural();
		$date_format = apply_filters( 'bt_events_page_title_date_format', tribe_get_date_format( true ) );

		$this_week_title = sprintf( __( '%s for week of %s', 'bt_plugin' ),
			$events_label_plural,
			date_i18n( $date_format, strtotime( $start_date ) )
		);

		return $this_week_title;
	}
  }


/**
 * Build the previous week link.
 *
 * @param string $text The text to be linked.
 *
 * @return string
 */
 if ( ! function_exists( 'bt_events_this_week_previous_link' ) ) {
	function bt_events_this_week_previous_link( $start_date, $text = '' ) {

		if ( empty( $text ) ) {
			$text = __( '<span>&laquo;</span> <span class="bt-nav-label">Previous</span>', 'bt-events-calendar-pro' );
		}

		$attributes = sprintf( ' data-week="%s" ', date( Tribe__Date_Utils::DBDATEFORMAT, strtotime( $start_date . ' -7 days' ) ) );

		return sprintf( '<a %s href="#" rel="prev">%s</a>', $attributes, $text );

	}
 }

/**
 * Build the next week link
 *
 * @param string $text the text to be linked
 * @param string $start_date the date for start of the week
 *
 * @return string
 */
 if ( ! function_exists( 'bt_events_this_week_next_link' ) ) {
	function bt_events_this_week_next_link( $start_date, $text = '' ) {
		if ( empty( $text ) ) {
			$text = __( '<span class="bt-nav-label">Next</span> <span>&raquo;</span>', 'bt-events-calendar-pro' );
		}
		//$attributes = sprintf( ' data-week="%s" ', $start_date );
		$attributes = sprintf( ' data-week="%s" ', date( Tribe__Date_Utils::DBDATEFORMAT, strtotime( $start_date ) ) );

		return sprintf( '<a %s href="#" rel="next">%s</a>', $attributes, $text );
	}
 }

/**
 * Get the first day of current week with provided date or current week
 *
 * @param null|mixed $date  given date or week # (week # assumes current year)
 * @param null $week_offset # offset from current week the start date for this widget
 *
 * @return DateTime
 */
 if ( ! function_exists( 'bt_get_this_week_first_week_day' ) ) {
		function bt_get_this_week_first_week_day( $date = null, $start_of_week = '0' ) {
			//Start of Week in Shortcode Settings - 0 = Sunday, 1 = Monday, etc
			$offset = 7 - $start_of_week;
			try {
				$date = new DateTime( $date );
			} catch ( exception $e ) {
				$date = new DateTime();
			}
			// Clone to avoid altering the original date
			$r = clone $date;
			//Use Offset to get Start of Week for Widget
			$r->modify( - ( ( $date->format( 'w' ) + $offset ) % 7 ) . 'days' );

			return $r->format( Tribe__Date_Utils::DBDATEFORMAT );
		}
 }

/**
 * Get the last day of the week from a provided date
 *
 * @param string|int $date a given date of the week
 *
 * @return DateTime
 */
  if ( ! function_exists( 'bt_get_this_week_last_week_day' ) ) {
		function bt_get_this_week_last_week_day( $date ) {
			return date( Tribe__Date_Utils::DBDATEFORMAT, strtotime( bt_get_this_week_first_week_day( $date ) . ' +8 days' ) );
		}
  }

/**
 * Data Attributes for Ajax
 *
 *
 */
  if ( ! function_exists( 'bt_this_week_template_vars' ) ) {
		 function bt_this_week_template_vars( $this_week_query_vars ) {

			$this_week_template_vars['layout']                = $this_week_query_vars['layout'];
			$this_week_template_vars['start_date']            = $this_week_query_vars['start_date'];
			$this_week_template_vars['end_date']              = $this_week_query_vars['end_date'];
			$this_week_template_vars['count']                 = $this_week_query_vars['count'];
			$this_week_template_vars['events_label_singular'] = tribe_get_event_label_singular();
			$this_week_template_vars['events_label_plural']   = tribe_get_event_label_plural();
			$this_week_template_vars['start_of_week']		  = $this_week_query_vars['start_of_week'];
			$this_week_template_vars['display_date_format']	  = $this_week_query_vars['display_date_format'];
			$this_week_template_vars['loading_gif']			  = $this_week_query_vars['loading_gif'];

			return $this_week_template_vars;
		}
  }


/**
 * Data Attributes for Ajax
 *
 */
   if ( ! function_exists( 'bt_this_week_data_attr' ) ) {
		function bt_this_week_data_attr( $this_week_query_vars ) {

			$attrs = '';
			$attrs .= ' data-prev-date="' . esc_attr( date( 'Y-m-d', strtotime( $this_week_query_vars['start_date'] . ' -7 days' ) ) ) . '"';
			$attrs .= ' data-next-date="' . esc_attr( $this_week_query_vars['end_date'] ) . '"';
			$attrs .= ' data-count="' . esc_attr( $this_week_query_vars['count'] ) . '"';
			$attrs .= ' data-layout="' . esc_attr( $this_week_query_vars['layout'] ) . '"';
			$attrs .= ' data-nonce="' . wp_create_nonce( 'this-week-ajax' ) . '"';
			$attrs .= ' data-start-of-week="' . esc_attr( $this_week_query_vars['start_of_week'] ) . '"';
			$attrs .= ' data-display-date-format="' . esc_attr( $this_week_query_vars['display_date_format'] ) . '"';
			
			return $attrs;
		}
   }


/**
* Get the array of days we're showing on this week 
* Takes into account the first day of the week in WP general settings
*
* @return array
*
*/
if ( ! function_exists( 'bt_get_day_range' ) ) {
	function bt_get_day_range( $start_of_week = 1 ) {
		$days    = range( $start_of_week, $start_of_week + 6 );
		foreach ( $days as $i => $day ) {
			if ( $day > 6 ) {
				$days[ $i ] -= 7;
			}
		}
		$days = array_values( $days );

		return $days;
	}
}

