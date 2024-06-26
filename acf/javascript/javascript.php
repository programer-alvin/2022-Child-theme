<?php
// https://www.advancedcustomfields.com/resources/javascript-api/#actions-load
// https://www.advancedcustomfields.com/resources/adding-custom-javascript-fields/

function tttc_inline_acf_admin_enqueue_scripts() {

	?>
		<script type="text/javascript">
		(function($) {

			console.log(acf);
			
			// JS here
			//Extend date range.
			//https://api.jqueryui.com/datepicker/

			acf.add_filter('date_picker_args', function( args, $field ){
		
				// do something to args
				
				
				// return
				return args;
						
			});

			function extend_date_range( args, field ){

				// do something to args
				args.yearRange="-500:+500";// Extend date range

				// return
				return args;

			}
			acf.add_filter('date_picker_args', extend_date_range);
			acf.add_filter('date_time_picker_args', extend_date_range);


			//http://trentrichardson.com/examples/timepicker/
			acf.add_filter('time_picker_args', function( args, $field ){
		
				// do something to args
				
				
				// return
				return args;
						
			});

			acf.add_filter('color_picker_args', function( args, $field ){
	
				// do something to args
				args.palettes = ['#5ee8bf',  '#f55e4fca']
				
				
				// return
				return args;
						
			});


			acf.add_action('wysiwyg_tinymce_init', function( ed, id, mceInit, $field ){
	
				// ed (object) tinymce object returned by the init function
				// id (string) identifier for the tinymce instance
				// mceInit (object) args given to the tinymce function
				// $field (jQuery) field element 

				console.log(ed);
				
			});


			acf.add_filter('validation_complete', function( json, $form ){

			   // console.log(json.errors[0].message);
				//json.errors[0].message='Jaza';

				// check errors
				if( json.errors ) {
					// do something
				}

				// return
				return json;        
			});




			acf.add_filter('google_map_args', function( args, field ){

				// do something to args
					console.log('args');

				// return
				return args;

			});

			/*var field = acf.getField('field_616c12495b1da');
			var element = field.$el[0];
			var className = element.className;
			var classList = element.classList;

			console.log(field);
			console.log(className);
			console.log(classList);*/

		})(jQuery);	





		var instance = new acf.Model({
			events: {
				'change': 'onChange',
				'change input[type="text"]': 'onChangeText',
			},
			onChange: function(e, $el){
				e.preventDefault();
				var val = $el.val();
				// do something
			},
			onChangeText: function(e, $el){
				// do something for just text inputs and then call the normal change callback
				//alert($el.val());
			}
		});



		var myCallback = function( field ){

			//alert('Special event');
		
		};

		acf.addAction('append_field', myCallback);
		acf.addAction('hide_field', function( field ){

			console.log('hide_field');

		});  

		</script>
	<?php

}

	add_action( 'acf/input/admin_footer', 'tttc_inline_acf_admin_enqueue_scripts' );



function tttc_acf_admin_enqueue_scripts() {

	wp_enqueue_script( 'tttc-acf-admin-js', get_stylesheet_directory_uri() . '/acf/javascript/example.js', array(), '1.0.0', true );

}

	add_action( 'acf/input/admin_enqueue_scripts', 'tttc_acf_admin_enqueue_scripts' );

function tttc_slick_slider_scripts() {
	wp_enqueue_script( 'slick-slider-block-initialize-event-js', get_stylesheet_directory_uri() . '/acf/javascript/slick-slider-block-initialize-event.js', array( 'jquery' ), '1.0.0', true );
}

function tttc_enqueue_custom_admin_script() {
	// Register the script
	wp_register_script( 'custom-event-auto-block-render-block-preview', get_stylesheet_directory_uri() . '/acf/javascript/custom-event-auto-block-render-block-preview.js', array( 'jquery' ), '1.0', true );

	// Enqueue the script
	wp_enqueue_script( 'custom-event-auto-block-render-block-preview' );
	// slick slider scripts
	tttc_slick_slider_scripts();
}
// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'tttc_enqueue_custom_admin_script' );



function tttc_enqueue_front_end_scripts() {
	// slick slider scripts
	tttc_slick_slider_scripts();
}

add_action( 'wp_enqueue_scripts', 'tttc_enqueue_front_end_scripts' );
