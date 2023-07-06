jQuery(document).ready(function($) {
    // Change 'taxonomy' with your actual taxonomy slug
    $('#category-172').on('change', function() {
      var parentTerm = $(this).val();
      
      // Change 'term-meta-box-id' with the ID of your meta box
      $('#term-meta-box-id input[type="checkbox"]').prop('checked', false);
      
      // Change 'term-meta-box-id' with the ID of your meta box
      $('#term-meta-box-id input[type="checkbox"]').each(function() {
        var termName = $(this).closest('label').text().trim();
        var termHierarchy = termName.split(' > ');
        var parentTermName = termHierarchy[0];
        
        if (parentTerm === parentTermName) {
          $(this).prop('checked', true);
        }
      });
    });
  });
  