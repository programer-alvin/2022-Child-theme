//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#benefits-using-the-metadata-file
//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#script

(function ($) {
document.addEventListener('on_slick_slider_block_initialize', function(event) {
    const $block = event.detail.block;
    // Now you can use $block here
    // do something
    console.log('on_slick_slider_block_initialize fired');
    try {
        if($block.length && $block.hasClass('slick-initialized')){
            $block.find('.slides').slick('unslick'); // First, unslick the slider
        }
    } catch (error) {
        console.error("Captured on slick() 1:", error);
    }
    try {
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
    } catch (error) {
        console.error("Captured on slick() 2:", error);
    }
  });
})(jQuery);
