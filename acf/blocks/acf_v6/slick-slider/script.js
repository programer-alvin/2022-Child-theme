//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#benefits-using-the-metadata-file
//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#script
   

(function($){
    /**
     * initializeBlock
     *
     * Adds custom JavaScript to the block HTML.
     *
     * @date    15/4/19
     * @since   1.0.0
     *
     * @param   object $block The block jQuery element.
     * @param   object attributes The block attributes (only available when editing).
     * @return  void
     */
    var initializeBlock = function( $block ) {
        $block.find('.slides').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            adaptiveHeight: true,
            focusOnSelect: true
        });     
        
    }

    // Initialize each block on page load (front end).
    $(document).ready(function(){
        
        $('.slider').each(function(){
            console.log('test');
            console.log($(this));
            initializeBlock( $(this) );
        });
    });

    // Initialize dynamic block preview (editor).
    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=slick-slider-block', initializeBlock );//type=name-of-the-block. https://support.advancedcustomfields.com/forums/topic/acf-slider-not-firing-in-preview-mode/
    }

})(jQuery);