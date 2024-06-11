(function ($) {
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
    var initializeBlock = function ($block) {
        const event = new CustomEvent('on_slick_slider_block_initialize', { detail: { block: $block } });
        document.dispatchEvent(event);
    }

    // Initialize each block on page load (front end).
    $(document).ready(function () {

        $('.slider').each(function () {
            initializeBlock($(this));
        });
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=slick-slider-block', initializeBlock);//type=name-of-the-block. https://support.advancedcustomfields.com/forums/topic/acf-slider-not-firing-in-preview-mode/
    }

})(jQuery);


