//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#benefits-using-the-metadata-file
//https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#script


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

        }

    }

    // Initialize each block on page load (front end).
    $(document).ready(function () {

        $('.slider').each(function () {
            console.log('test');
            console.log($(this));
            initializeBlock($(this));
        });
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=slick-slider-block', initializeBlock);//type=name-of-the-block. https://support.advancedcustomfields.com/forums/topic/acf-slider-not-firing-in-preview-mode/
    }

})(jQuery);


(function ($) {

    var initializeBlock = function ($block) {
        const labels = document.querySelectorAll(".tabs-container__inner label");
        const details = document.querySelectorAll(".tabs-container__inner details");

        let activeDetails = null;

        // Set the first details to open by default
        if (details.length > 0) {
            details[0].setAttribute("open", "open");
            activeDetails = details[0];
        }

        labels.forEach((label) => {
            label.addEventListener("click", function () {
                const targetId = this.getAttribute("for");
                const targetDetails = document.getElementById(targetId);

                if (activeDetails !== targetDetails) {
                    // Close the previously active details, if any
                    if (activeDetails) {
                        activeDetails.open = false;
                    }

                    // Toggle the target details
                    targetDetails.open = !targetDetails.open;
                    activeDetails = targetDetails;
                }
            });
        });
    }

    // Load in editor
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=tabs-container', initializeBlock);


    }

    // Load on front end
    $(document).ready(function () {
        initializeBlock($(this));
    });

})(jQuery);