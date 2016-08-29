
/* =========================================================
Comment Form
============================================================ */
jQuery(document).ready(function(){
    if(jQuery("#comments-form").length > 0){
	// Validate the contact form
	  jQuery('#comments-form').validate({
	
		// Add requirements to each of the fields
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			title: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		
		// Specify what error messages to display
		// when the user does something horrid
		messages: {
			name: {
				required: "Please enter your name.",
				minlength: jQuery.format("At least {0} characters required.")
			},
		
			email: {
				required: "Please enter your email.",
				email: "Lütfen Geçerli Bir Email Adresi Giriniz."
			},
				title: {
				required: "Please enter your title.",
				minlength: jQuery.format("At least {0} characters required.")
			},
			url: {
				required: "Please enter your url.",
				url: "Please enter a valid url."
			},
			message: {
				required: "Please enter a message.",
				minlength: jQuery.format("At least {0} characters required.")
			}
		},
		
		// Use Ajax to send everything to processForm.php
		submitHandler: function(form) {
			jQuery("#submit-comment").attr("value", "Gönderiliyor...");
			jQuery(form).ajaxSubmit({
				success: function(responseText, statusText, xhr, $form) {
					jQuery("#response").html(responseText).hide().slideDown("fast");
					jQuery("#submit-comment").attr("value", "Comment");
				}
			});
			return false;
		}
	  });
	}
	
	if(jQuery("#contact-form").length > 0){
	// Validate the contact form
	  jQuery('#contact-form').validate({
	
		// Add requirements to each of the fields
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			title: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		
		// Specify what error messages to display
		// when the user does something horrid
		messages: {
			name: {
				required: "Lütfen Adınızı Giriniz.",
				minlength: jQuery.format("En Az {0} Karakter Gereklidir.")
			},
			
			email: {
				required: "Lütfen Email Adresinizi Giriniz.",
				email: "Lütfen Geçerli Bir Email Adresi Giriniz."
			},
			title: {
				required: "Lütfen Başlık Giriniz.",
				minlength: jQuery.format("En Az {0} Karakter Gereklidir.")
			},
			
			url: {
				required: "Lütfen Web Adersinizi Giriniz.",
				url: "Lütfen Geçerli Bir Web Adresi Giriniz."
			},
			message: {
				required: "Lütfen Mesajınızı Giriniz.",
				minlength: jQuery.format("En Az {0} Karakter Gereklidir.")
			}
		},
		
		// Use Ajax to send everything to processForm.php
		submitHandler: function(form) {
			jQuery("#submit-contact").attr("value", "Gönderiliyor...");
			jQuery(form).ajaxSubmit({
				success: function(responseText, statusText, xhr, $form) {
					jQuery("#response").html(responseText).hide().slideDown("fast");
					jQuery("#submit-contact").attr("value", "Gönder");
				}
			});
			return false;
		}
	  });
	}
});

/* =========================================================
Sub menu
==========================================================*/
(function($){ //create closure so we can safely use $ as alias for jQuery

	jQuery(document).ready(function(){

		// initialise plugin
		var example = jQuery('#main-menu').superfish({
			//add options here if required
		});
	});

})(jQuery);

/* =========================================================
Mobile menu
============================================================ */
jQuery(document).ready(function () {
     
    jQuery('#mobile-menu > span').click(function () {
 
        var mobile_menu = jQuery('#toggle-view-menu');
 
        if (mobile_menu.is(':hidden')) {
            mobile_menu.slideDown('300');
            jQuery(this).children('span').html('-');    
        } else {
            mobile_menu.slideUp('300');
            jQuery(this).children('span').html('+');    
        }
		
		jQuery(this).toggleClass('active');
         
    });
	
	jQuery('#toggle-view-menu li').click(function () {
 
        var text = jQuery(this).children('div.menu-panel');
 
        if (text.is(':hidden')) {
            text.slideDown('300');
            jQuery(this).children('span').html('-');    
        } else {
            text.slideUp('300');
            jQuery(this).children('span').html('+');    
        }
         
    });
 
});

/* =========================================================
Home page slider
============================================================ */
jQuery(function() {
	jQuery('#ei-slider').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 3000,
		titlesFactor		: 0
	});
});

/* =========================================================
Image hover effect
============================================================ */
/*jQuery(document).ready(function(){
	 jQuery(".hover-effect").mouseenter(function(){
        jQuery(this).find('img').fadeTo(500, 0.5);
    }).mouseleave(function(){
         jQuery(this).find('img').fadeTo(300, 1);
    });
});
*/
/* =========================================================
prettyPhoto
============================================================ */
/*jQuery(window).load(function(){
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		overlay_gallery: false,
		"theme": 'light_square',
		keyboard_shortcuts: true,
		social_tools: false
	});
});
*/
jQuery(document).ready(function(){
    init_image_effect();
});

jQuery(window).resize(function(){
    init_image_effect();
});

function init_image_effect(){    

	var view_p_w = jQuery(window).width();
	var pp_w = 500;
	var pp_h = 344;
	
	if(view_p_w <= 479){
		pp_w = '120%';
		pp_h = '100%';
	}
	else if(view_p_w >= 480 && view_p_w <= 599){
		pp_w = '100%';
		pp_h = '170%';
	}
		    
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        show_title: false,
        deeplinking:false,
        social_tools:false,
		default_width: pp_w,
		default_height: pp_h
    });    
}
/* =========================================================
Timeline Filter
============================================================ */
jQuery(document).ready(function () {
     
    jQuery('.kp-filter div').click(function () {
 
        var timeline_filter = jQuery('#ss-links');
 
        if (timeline_filter.is(':hidden')) {
            timeline_filter.slideDown('300');
        } else {
            timeline_filter.slideUp('300');
        }
		
		jQuery(this).toggleClass('active');
         
    });
	
	jQuery('.ss-links li a').click(function () {
 
        jQuery('#ss-links').slideUp('300');
         
    });
 
});

/* =========================================================
Fix css
============================================================ */
jQuery(document).ready(function(){
	jQuery(".list-container-1 ul li:last-child").css("margin-right",0);
	jQuery("#sidebar .widget ul li:last-child").css("margin-bottom",0);
	jQuery(".pagination ul > li:last-child").css("margin-right",0);
	jQuery("#main-col .widget .older-post li:last-child").css("margin-bottom",0);
	jQuery("#sidebar .widget .list-container-2 ul li:last-child").css({"margin-right": 0, "width":100});
	jQuery("#sidebar .widget .tab-content-2 ul li:last-child").css({"border-bottom": "none", "padding-bottom":0});
	jQuery("#bottom-sidebar ul li:last-child").css({"border-bottom": "none", "padding-bottom":0});
	jQuery(".article-list li:last-child").css({"border-bottom": "none", "padding-bottom":0, "margin-bottom":10});
	jQuery(".kp-cat-2 .article-list li:last-child").css("margin-bottom",10);
	jQuery("#main-col .widget-area-5 .widget ul li:last-child").css({"border-bottom": "none", "padding-bottom":0, "margin-bottom":0});
	jQuery(".kp-filter ul.ss-links li:last-child a").css("border-bottom",'none');
	jQuery(".isotop-header #filters li:last-child a").css("border-bottom",'none');
	jQuery(".sidebar .widget ul li:last-child").css({"border-bottom": "none", "padding-bottom":0, "margin-bottom":0});
});


/* ---------------------------------------------------------------------- */
/*	Portfolio Filter
 /* ---------------------------------------------------------------------- */
// modified Isotope methods for gutters in masonry
jQuery.Isotope.prototype._getMasonryGutterColumns = function() {
    var gutter = this.options.masonry && this.options.masonry.gutterWidth || 0;
    containerWidth = this.element.width();

    this.masonry.columnWidth = this.options.masonry && this.options.masonry.columnWidth ||
            // or use the size of the first item
            this.jQueryfilteredAtoms.outerWidth(true) ||
            // if there's no items, use size of container
            containerWidth;

    this.masonry.columnWidth += gutter;

    this.masonry.cols = Math.floor((containerWidth + gutter) / this.masonry.columnWidth);
    this.masonry.cols = Math.max(this.masonry.cols, 1);
};

jQuery.Isotope.prototype._masonryReset = function() {
    // layout-specific props
    this.masonry = {};
    // FIXME shouldn't have to call this again
    this._getMasonryGutterColumns();
    var i = this.masonry.cols;
    this.masonry.colYs = [];
    while (i--) {
        this.masonry.colYs.push(0);
    }
};

jQuery.Isotope.prototype._masonryResizeChanged = function() {
    var prevSegments = this.masonry.cols;
    // update cols/rows
    this._getMasonryGutterColumns();
    // return if updated cols/rows is not equal to previous
    return (this.masonry.cols !== prevSegments);
};

jQuery(function() {
    // cache container
    var kp_columnWidth_4 = get_colunm_width_4();
	var jQuerycontainer = jQuery('.kp-pf-3col #pf-items');
// initialize isotope
    jQuerycontainer.isotope({
        itemSelector: '.element',
		resizable: false,
        masonry: {
            columnWidth: kp_columnWidth_4,
            gutterWidth: 25
        }
    });

});
jQuery(function() {
    // cache container
    var kp_columnWidth_3 = get_colunm_width_3();
	var jQuerycontainer = jQuery('.kp-pf-2col #pf-items');
// initialize isotope
    jQuerycontainer.isotope({
        itemSelector: '.element',
		resizable: false,
        masonry: {
            columnWidth: kp_columnWidth_3,
            gutterWidth: 25
        }
    });

});
jQuery(function() {
    // cache container
	var kp_columnWidth_2 = get_colunm_width_2();
    var jQuerycontainer = jQuery('.kp-pf-1col #pf-items');
// initialize isotope
    jQuerycontainer.isotope({
        itemSelector: '.element',
		resizable: false,
        masonry: {
            columnWidth: kp_columnWidth_2,
            gutterWidth: 25
        }
    });

});

jQuery(window).smartresize(function() {
	var kp_columnWidth_4 = get_colunm_width_4();
	var jQuerycontainer_4 = jQuery('.kp-pf-3col #pf-items');
	jQuerycontainer_4.isotope({
        // update columnWidth to a percentage of container width
        masonry: {columnWidth: kp_columnWidth_4}
    });
});

jQuery(window).smartresize(function() {
	var kp_columnWidth_3 = get_colunm_width_3();
	var jQuerycontainer_3 = jQuery('.kp-pf-2col #pf-items');
	jQuerycontainer_3.isotope({
        // update columnWidth to a percentage of container width
        masonry: {columnWidth: kp_columnWidth_3}
    });
});

jQuery(window).smartresize(function() {
	var kp_columnWidth_2 = get_colunm_width_2();
	var jQuerycontainer_2 = jQuery('.kp-pf-1col #pf-items');
	jQuerycontainer_2.isotope({
        // update columnWidth to a percentage of container width
        masonry: {columnWidth: kp_columnWidth_2}
    });
});

function get_colunm_width_4() {
    var view_port_w;
    var kp_colunm_width_4 = 248;
    if (self.innerWidth !== undefined)
        view_port_w = self.innerWidth;
    else {
        var D = document.documentElement;
        if (D)
            view_port_w = D.clientWidth;
    }

    if (view_port_w >= 1024 && view_port_w <= 1043) {
        kp_colunm_width_4 = 203;
    }
	else if (view_port_w >= 980 && view_port_w < 1023) {
        kp_colunm_width_4 = 190;
    }
	else if (view_port_w >= 768 && view_port_w < 979) {
        kp_colunm_width_4 = 232;
    }
    else if (view_port_w >= 640 && view_port_w < 767) {
        kp_colunm_width_4 = 183;
    }
    else if (view_port_w >= 600 && view_port_w < 639) {
        kp_colunm_width_4 = 267;
    }
    else if (view_port_w >= 480 && view_port_w < 599) {
        kp_colunm_width_4 = 207;
    }
    else if (view_port_w >= 360 && view_port_w < 479) {
        kp_colunm_width_4 = 147;
    }
    else if (view_port_w <= 359) {
        kp_colunm_width_4 = 130;
    }
    return kp_colunm_width_4;
}

function get_colunm_width_3() {
    var view_port_w;
    var kp_colunm_width_3 = 385;
    if (self.innerWidth !== undefined)
        view_port_w = self.innerWidth;
    else {
        var D = document.documentElement;
        if (D)
            view_port_w = D.clientWidth;
    }

    if (view_port_w >= 1024 && view_port_w <= 1043) {
        kp_colunm_width_3 = 317;
    }
	else if (view_port_w >= 980 && view_port_w < 1023) {
        kp_colunm_width_3 = 297;
    }
	else if (view_port_w >= 768 && view_port_w < 979) {
        kp_colunm_width_3 = 232;
    }
    else if (view_port_w >= 640 && view_port_w < 767) {
        kp_colunm_width_3 = 287;
    }
    else if (view_port_w >= 600 && view_port_w < 639) {
        kp_colunm_width_3 = 267;
    }
    else if (view_port_w >= 480 && view_port_w < 599) {
        kp_colunm_width_3 = 207;
    }
    else if (view_port_w >= 360 && view_port_w < 479) {
        kp_colunm_width_3 = 147;
    }
    else if (view_port_w <= 359) {
        kp_colunm_width_3 = 130;
    }
    return kp_colunm_width_3;
}

function get_colunm_width_2() {
    var view_port_w;
    var kp_colunm_width_2 = 795;
    if (self.innerWidth !== undefined)
        view_port_w = self.innerWidth;
    else {
        var D = document.documentElement;
        if (D)
            view_port_w = D.clientWidth;
    }

    if (view_port_w >= 1024 && view_port_w <= 1043) {
        kp_colunm_width_2 = 660;
    }
	else if (view_port_w >= 980 && view_port_w < 1023) {
        kp_colunm_width_2 = 620;
    }
	else if (view_port_w >= 768 && view_port_w < 979) {
        kp_colunm_width_2 = 490;
    }
    else if (view_port_w >= 640 && view_port_w < 767) {
        kp_colunm_width_2 = 600;
    }
    else if (view_port_w >= 600 && view_port_w < 639) {
        kp_colunm_width_2 = 560;
    }
    else if (view_port_w >= 480 && view_port_w < 599) {
        kp_colunm_width_2 = 440;
    }
    else if (view_port_w >= 360 && view_port_w < 479) {
        kp_colunm_width_2 = 320;
    }
    else if (view_port_w <= 359) {
        kp_colunm_width_2 = 300;
    }
    return kp_colunm_width_2;
}

// filter items when filter link is clicked
var optionSets = jQuery('#options .option-set'),
        optionLinks = optionSets.find('a');
var jQuerycontainer = jQuery('#portfolio-items');
optionLinks.click(function() {
    // don't proceed if already selected
    if (jQuery(this).hasClass('selected')) {
        return false;
    }
    var optionSet = jQuery(this).parents('.option-set');
    optionSet.find('.selected').removeClass('selected');
    jQuery(this).addClass('selected');

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    var options = {},
            key = optionSet.attr('data-option-key'),
            value = jQuery(this).attr('data-option-value');
    // parse 'false' as false boolean
    value = value === 'false' ? false : value;
    options[ key ] = value;
    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
        // changes in layout modes need extra logic
        changeLayoutMode($this, options)
    } else {
        // otherwise, apply new options
        jQuerycontainer.isotope(options);
    }

    return false;
});

var optionSets = jQuery('#pf-options .pf-option-set'),
        optionLinks = optionSets.find('a');
var jQuerycontainer_pf = jQuery('#pf-items');
optionLinks.click(function() {
    // don't proceed if already selected
    if (jQuery(this).hasClass('selected')) {
        return false;
    }
    var optionSet = jQuery(this).parents('.pf-option-set');
    optionSet.find('.selected').removeClass('selected');
    jQuery(this).addClass('selected');

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    var options = {},
            key = optionSet.attr('data-option-key'),
            value = jQuery(this).attr('data-option-value');
    // parse 'false' as false boolean
    value = value === 'false' ? false : value;
    options[ key ] = value;
    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
        // changes in layout modes need extra logic
        changeLayoutMode($this, options)
    } else {
        // otherwise, apply new options
        jQuerycontainer_pf.isotope(options);
    }

    return false;
});


var optionSets = jQuery('#m-pf-options .m-pf-option-set'),
        optionLinks = optionSets.find('a');
var jQuerycontainer_pf = jQuery('#pf-items');
optionLinks.click(function() {
    // don't proceed if already selected
    if (jQuery(this).hasClass('selected')) {
        return false;
    }
    var optionSet = jQuery(this).parents('.m-pf-option-set');
    optionSet.find('.selected').removeClass('selected');
    jQuery(this).addClass('selected');

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    var options = {},
            key = optionSet.attr('data-option-key'),
            value = jQuery(this).attr('data-option-value');
    // parse 'false' as false boolean
    value = value === 'false' ? false : value;
    options[ key ] = value;
    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
        // changes in layout modes need extra logic
        changeLayoutMode($this, options)
    } else {
        // otherwise, apply new options
        jQuerycontainer_pf.isotope(options);
    }

    return false;
});

/* end Portfolio Filter */


 
/* =========================================================
Tabs
============================================================ */
jQuery(document).ready(function() {    
    if( jQuery(".tab-content-1").length > 0){   
        //Default Action Product Tab
        jQuery(".tab-content-1").hide(); //Hide all content
        jQuery("ul.tabs-1 li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content-1:first").show(); //Show first tab content
        //On Click Event Product Tab
        jQuery("ul.tabs-1 li").click(function() {
            jQuery("ul.tabs-1 li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".tab-content-1").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(); //Fade in the active content
			if (!jQuery(activeTab).hasClass('isotope-finish')&&jQuery(activeTab).hasClass('portfolio-content')){
			
					function get_colunm_width_1() {
						var view_port_w;
						var kp_colunm_width_1 = 255;
						if (self.innerWidth !== undefined)
							view_port_w = self.innerWidth;
						else {
							var D = document.documentElement;
							if (D)
								view_port_w = D.clientWidth;
						}
					
						if (view_port_w >= 1024 && view_port_w <= 1043) {
							kp_colunm_width_1 = 210;
						}
						else if (view_port_w >= 980 && view_port_w < 1023) {
							kp_colunm_width_1 = 196;
						}
						else if (view_port_w >= 768 && view_port_w < 979) {
							kp_colunm_width_1 = 237;
						}
						else if (view_port_w >= 640 && view_port_w < 767) {
							kp_colunm_width_1 = 189;
						}
						else if (view_port_w >= 600 && view_port_w < 639) {
							kp_colunm_width_1 = 271;
						}
						else if (view_port_w >= 480 && view_port_w < 599) {
							kp_colunm_width_1 = 212;
						}
						else if (view_port_w >= 360 && view_port_w < 479) {
							kp_colunm_width_1 = 152;
						}
						else if (view_port_w <= 359) {
							kp_colunm_width_1 = 142;
						}
						return kp_colunm_width_1;
					}
				
				// cache container
					var kp_columnWidth_1 = get_colunm_width_1();
					var jQuerycontainer_1 = jQuery('#portfolio-items');
				// initialize isotope
					jQuerycontainer_1.isotope({
						itemSelector: '.element',
						resizable: false,
						masonry: {
							columnWidth: kp_columnWidth_1,
							gutterWidth: 15
						}
					});
					
					jQuery(window).smartresize(function() {
						var kp_columnWidth_1 = get_colunm_width_1();
						var jQuerycontainer_1 = jQuery('#portfolio-items');
						jQuerycontainer_1.isotope({
							// update columnWidth to a percentage of container width
							masonry: {columnWidth: kp_columnWidth_1}
						});
					});
					
					
					
					jQuery(activeTab).addClass('isotope-finish');
				}
            return false;
		
        });
    }
	
	if( jQuery(".tab-content-2").length > 0){   
        //Default Action Product Tab
        jQuery(".tab-content-2").hide(); //Hide all content
        jQuery("ul.tabs-2 li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content-2:first").show(); //Show first tab content
        //On Click Event Product Tab
        jQuery("ul.tabs-2 li").click(function() {
            jQuery("ul.tabs-2 li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".tab-content-2").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
		
        });
    }
	
	if( jQuery(".tab-content-3").length > 0){   
        //Default Action Product Tab
        jQuery(".tab-content-3").hide(); //Hide all content
        jQuery("ul.tabs-3 li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content-3:first").show(); //Show first tab content
        //On Click Event Product Tab
        jQuery("ul.tabs-3 li").click(function() {
            jQuery("ul.tabs-3 li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".tab-content-3").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
		
        });
    }
	
	if( jQuery(".about-tab-content").length > 0){   
        //Default Action Product Tab
        jQuery(".about-tab-content").hide(); //Hide all content
        jQuery("ul.about-tabs li:first").addClass("active").show(); //Activate first tab
        jQuery(".about-tab-content:first").show(); //Show first tab content
        //On Click Event Product Tab
        jQuery("ul.about-tabs li").click(function() {
            jQuery("ul.about-tabs li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".about-tab-content").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
		
        });
    }
});

/* =========================================================
Portfolio Filter
============================================================ */
jQuery(document).ready(function () {
     
    jQuery('.isotop-header').click(function () {
 
        var portfolio_filter = jQuery('#filters');
 
        if (portfolio_filter.is(':hidden')) {
            portfolio_filter.slideDown('300');
        } else {
            portfolio_filter.slideUp('300');
        }
		
		jQuery(this).toggleClass('active');
         
    });
	
	jQuery('#filters li a').click(function () {
 
    	jQuery('#filters').slideUp('300');
		
		jQuery('.isotop-header span').text(jQuery(this).text());
	
	});
 
});

jQuery(document).ready(function () {
     
    jQuery('.m-isotop-header').click(function () {
 
        var m_portfolio_filter = jQuery('#m-pf-filters');
 
        if (m_portfolio_filter.is(':hidden')) {
            m_portfolio_filter.slideDown('300');
        } else {
            m_portfolio_filter.slideUp('300');
        }
		
		jQuery(this).toggleClass('active');
         
    });
	
	jQuery('#m-pf-filters li a').click(function () {
 
    	jQuery('#m-pf-filters').slideUp('300');
		
		jQuery('.m-isotop-header span').text(jQuery(this).text());
	
	});
 
});

/* =========================================================
Toggle Boxes
============================================================ */
jQuery(document).ready(function () {
     
    jQuery('#toggle-view li').click(function (event) {
 		
        var text = jQuery(this).children('div.panel');
 
        if (text.is(':hidden')) {
			jQuery(this).addClass('active');
            text.slideDown('300');
            jQuery(this).children('span').html('-');			     
        } else {
			jQuery(this).removeClass('active');
            text.slideUp('300');
            jQuery(this).children('span').html('+');			   
        }
         
    });
 
});

/* =========================================================
Twitter
============================================================ */
/*jQuery(document).ready(function() {
    var twitter_update_list = jQuery('.twitter_outer');
    if(twitter_update_list.length > 0){
        jQuery.each(twitter_update_list, function(){            
            jQuery(this).find('.twitter_inner').first().tweet({
                join_text: "auto",
                username: jQuery(this).find('.tweet_id').first().val(),
                avatar_size: 36,
                count: jQuery(this).find('.tweet_count').first().val(),
                auto_join_text_default: "",
                auto_join_text_ed: "",
                auto_join_text_ing: "",
                auto_join_text_reply: "",
                auto_join_text_url: "",
                loading_text: "<center>loading tweets...</center><br/>",
                template: "{avatar} {time} {join} {text}"
            });            
        });
    }	
});

jQuery(window).load(function() {
    jQuery(".tweet_list li:last-child").css({
        "border-bottom": "none", 
        "padding-bottom":0, 
        "margin":0
    });
});*/

/* =========================================================
Flickr Feed
============================================================ */
jQuery(document).ready(function(){ 
	jQuery('#flickr-feed-1').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '78715597@N07'
		},
		itemTemplate:
			'<li class="flickr-badge-image">' +
			'<a rel="prettyPhoto[kopa-flickr]" href="{{image}}" title="{{title}}">' +
			'<img src="{{image_s}}" alt="{{title}}" width="72px" height="72px" />' +
			'</a>' +
			'</li>'
	}, function(data) {
			jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			show_title: false,
			deeplinking:false
		}).mouseenter(function(){
			//jQuery(this).find('img').fadeTo(500, 0.6);
		}).mouseleave(function(){
			//jQuery(this).find('img').fadeTo(400, 1);
		});
	});
});

/* =========================================================
ToolTip
============================================================ */
jQuery(window).load(function(){
	jQuery('.kp-tooltip').tooltip('hide');
});

/* =========================================================
Timeline filter
============================================================ */
jQuery(function() {

	var $sidescroll	= (function() {
			
			// the row elements
		var $rows			= jQuery('.time-to-filter'),
			// we will cache the inviewport rows and the outside viewport rows
			$rowsViewport, $rowsOutViewport,
			// navigation menu links
			$links			= jQuery('#ss-links li a'),
			// the window element
			$win			= jQuery(window),
			// we will store the window sizes here
			winSize			= {},
			// used in the scroll setTimeout function
			anim			= false,
			// page scroll speed
			scollPageSpeed	= 2000 ,
			// page scroll easing
			scollPageEasing = 'easeInOutExpo',
			// perspective?
			hasPerspective	= false,
			
			perspective		= hasPerspective && Modernizr.csstransforms3d,
			// initialize function
			init			= function() {
				
				// get window sizes
				getWinSize();
				// initialize events
				initEvents();
				// define the inviewport selector
				defineViewport();
				// gets the elements that match the previous selector
				setViewportRows();
				// if perspective add css
				if( perspective ) {
					$rows.css({
						'-webkit-perspective'			: 600,
						'-webkit-perspective-origin'	: '50% 0%'
					});
				}
				
			},
			// defines a selector that gathers the row elems that are initially visible.
			// the element is visible if its top is less than the window's height.
			// these elements will not be affected when scrolling the page.
			defineViewport	= function() {
			
				jQuery.extend( jQuery.expr[':'], {
				
					inviewport	: function ( el ) {
						if ( jQuery(el).offset().top < winSize.height ) {
							return true;
						}
						return false;
					}
				
				});
			
			},
			// checks which rows are initially visible 
			setViewportRows	= function() {
				
				$rowsViewport 		= $rows.filter(':inviewport');
				$rowsOutViewport	= $rows.not( $rowsViewport )
				
			},
			// get window sizes
			getWinSize		= function() {
			
				winSize.width	= $win.width();
				winSize.height	= $win.height();
			
			},
			// initialize some events
			initEvents		= function() {
				
				// navigation menu links.
				// scroll to the respective section.
				$links.on( 'click.Scrolling', function( event ) {
					
					// scroll to the element that has id = menu's href
					jQuery('html, body').stop().animate({
						scrollTop: $( $(this).attr('href') ).offset().top
					}, scollPageSpeed, scollPageEasing );
					
					return false;
				
				});
			
			};
		
		return { init : init };
	
	})();
	
	$sidescroll.init();
	
});
		
/* =========================================================
Scroll to top
============================================================ */
jQuery(document).ready(function(){

	// hide #back-top first
	jQuery("#back-top").hide();
	
	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('#back-top').fadeIn();
			} else {
				jQuery('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

/* =========================================================
Accordion
========================================================= */
jQuery(document).ready(function() {
    (function() {
        var acc_wrapper=jQuery('.acc-wrapper');
        if (acc_wrapper.length >0) 
        {
            jQuery('.acc-wrapper .accordion-container').hide();
            jQuery.each(acc_wrapper, function(index, item){
                jQuery(this).find(jQuery('.accordion-title')).first().addClass('active').next().show();
				
            });
            jQuery('.accordion-title').on('click', function(e) {
                if( jQuery(this).next().is(':hidden') ) {
                    jQuery(this).parent().find(jQuery('.active')).removeClass('active').next().slideUp(300);
                    jQuery(this).toggleClass('active').next().slideDown(300);
                }
                e.preventDefault();
            });
        }
    })();
});

/* =========================================================
Carousel
============================================================ */
jQuery(window).load(function() {
	
    if( jQuery("#related-widget").length > 0){
		jQuery('#related-widget').carouFredSel({
			responsive: true,
			prev: '#prev-1',
			next: '#next-1',
			width: '100%',
			scroll: 1,
			auto: false,
			items: {
				width: 245,
				height: 'auto',
				visible: {				
					min: 1,
					max: 3
				}
			}
		});
	}
	
	if( jQuery("#featured-widget").length > 0){
		jQuery('#featured-widget').carouFredSel({
			responsive: true,
			prev: '#prev-2',
			next: '#next-2',
			pagination  : "#foo2_pag",
			width: '100%',
			scroll: 1,
			auto: false,
			items: {
				width: 250,
				height: 'auto',
				visible: {				
					min: 1,
					max: 3
				}
			}
		});
	}
	
	if( jQuery(".our-work-widget").length > 0){
		jQuery('.our-work-widget').carouFredSel({
			responsive: true,
			prev: '#prev-3',
			next: '#next-3',
			width: '100%',
			scroll: 1,
			auto: false,
			items: {
				width: 260,
				height: 'auto',
				visible: {				
					min: 1,
					max: 4
				}
			}
		});
	}
	
	if( jQuery(".testimonial-slider").length > 0){
		jQuery('.testimonial-slider').carouFredSel({
			responsive: true,
			prev: '#prev-4',
			next: '#next-4',
			width: '100%',
			scroll: 1,
			auto: false,
			items: {
				width: 355,
				height: 'auto',
				visible: {				
					min: 1,
					max: 3
				}
			}
		});
	}

});

/* =========================================================
Flex slider
============================================================ */
jQuery(window).load(function(){
  
  jQuery('.pf-detail-slider').flexslider({
	animation: "slide",
	start: function(slider){
	  jQuery('.flexslider').removeClass('loading');
	}
  });
  
  jQuery('.blogpost-slider').flexslider({
	animation: "slide",
	start: function(slider){
	  jQuery('.flexslider').removeClass('loading');
	}
  });
  
  jQuery('.kp-single-carousel').flexslider({
	animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	itemWidth: 195,
	itemMargin: 5,
	asNavFor: '.kp-single-slider'
  });
  
  jQuery('.kp-single-slider').flexslider({
	animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	sync: ".kp-single-carousel",
	start: function(slider){
	  jQuery('body').removeClass('loading');
	}
  });
});

/* =========================================================
Load more gallery
============================================================ */
jQuery(document).ready(function(){
	jQuery(".load-more-gallery").click(function() {
		jQuery(this).toggleClass('arrow-up');
		jQuery("#more-gallery-img").toggle(300);
	});

})

/* =========================================================
Portfolio hover effect
============================================================ */
jQuery(window).load(function(){
    jQuery('.bwWrapper').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // for the images with a fluid width and height 
        responsive:true,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
            fadeIn: 200, // 200ms for fadeIn animations
            fadeOut: 800 // 800ms for fadeOut animations
        }
    });
});