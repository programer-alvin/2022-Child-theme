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
