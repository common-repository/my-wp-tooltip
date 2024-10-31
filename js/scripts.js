
/*-----------------------------------------------------------------------------------*/
/*	DATA REL
/*-----------------------------------------------------------------------------------*/
jQuery('a[data-rel]').each(function () {
    jQuery(this).attr('rel', jQuery(this).data('rel'));
});


/*-----------------------------------------------------------------------------------*/
/*	TOOLTIP
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function () {
    if (jQuery("[rel=tooltip]").length) {
        jQuery("[rel=tooltip]").tooltip();
    }
	
	jQuery("ul.navbar-nav ul.sub-menu").addClass("dropdown-menu");
});