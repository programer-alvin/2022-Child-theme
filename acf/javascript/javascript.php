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
        </script>
        <?php
                
        }
    
    add_action('acf/input/admin_footer', 'tttc_inline_acf_admin_enqueue_scripts');



    function tttc_acf_admin_enqueue_scripts() {

        wp_enqueue_script( 'tttc-acf-admin-js', get_stylesheet_directory_uri() . '/acf/javascript/example.js', array(), '1.0.0', true );
    
    }
    
    add_action( 'acf/input/admin_enqueue_scripts', 'tttc_acf_admin_enqueue_scripts' );
