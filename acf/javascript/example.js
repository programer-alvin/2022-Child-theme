//https://drive.google.com/file/d/1aPlPl3wHZq9ekCoVSMuCJabFiB9Bv7Z5/view?usp=sharing.
//https://webkul.com/blog/jquery-datepicker/
acf.add_filter('date_picker_args', function( args, $field ){
 

    var dates = ["22/07/2022", "23/07/2022", "24/07/2022", "25/07/2022", "30/07/2022","22/09/2022"];
    args.beforeShowDay=function(date) {
        var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
        return [dates.indexOf(string) == -1];
    }
	// return
	return args;
			
});


//https://support.advancedcustomfields.com/forums/topic/target-repeater-sub-field-with-javascript/
// where field_6391cd51b9989 is a sub-field in my repeater
acf.addAction("new_field/key=field_6391cd51b9989", function ($field) {

    $field.on("change", function (e) {
        var value = $field.val();
        console.log(value);
    });
});


