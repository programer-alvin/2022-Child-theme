<?php

add_action('acf/input/admin_footer', 'tttc_date_picker_input');//https://www.advancedcustomfields.com/resources/acf-input-admin_footer/
function tttc_date_picker_input() {
	?>
	<script type="text/javascript">
	function extend_date_range( args, field ){
	
	// do something to args
	args.yearRange="-300:+300";// Extend date range
	
	// return
	return args;
	
	}
	acf.add_filter('date_picker_args', extend_date_range);//https://www.advancedcustomfields.com/resources/javascript-api/#filters-date_picker_args
	acf.add_filter('date_time_picker_args', extend_date_range);//https://www.advancedcustomfields.com/resources/javascript-api/#filters-date_time_picker_args
	</script>
	<?php
}
