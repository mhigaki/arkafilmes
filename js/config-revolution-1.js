/* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {

        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({

            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'auto',

            /* basic navigation arrows and bullets */
						dottedOverlay:"none",
						delay:9000,
						navigation: {

							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",

							tabs: {

								style:"hesperiden",
								enable:true,
                width: 250,
                height: 80,
                min_width: 250,
								wrapper_padding: 0,
								wrapper_color:"#ffffff",
								wrapper_opacity:"1",
								tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
								visibleAmount: 10,
								hide_onmobile: false,
								hide_onleave: false,
								hide_delay: 200,
								direction:"horizontal",
								span:false,
								position:"outer-bottom",
								space: 0,
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset: 0

							}
						}
        });
    });
