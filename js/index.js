
jQuery(document).ready(function() {

	jQuery('.div_Header_Menu').hover(function() {
			jQuery(this).css({
				'background-color' : '#333',
				'cursor' : 'pointer'
			});
		},
		function() {
			jQuery(this).css({
				'background-color' : 'crimson'
			});
		});

// Home
	jQuery('#link_Header_Logo').on('click', function() {
		jQuery('.div_Main').fadeOut();
	});
// About
	jQuery('#div_HeaderMenu_About').on('click', function() {
		jQuery('.div_Main').hide();
		jQuery('#div_Main_About').fadeIn(1200);
	});
// Services
	jQuery('#div_HeaderMenu_Services').on('click', function() {
		jQuery('.div_Main').hide();
		jQuery('#div_Main_Services').fadeIn(1200);
	});
// Contact
	jQuery('#div_HeaderMenu_Contact').on('click', function() {
		jQuery('.div_Main').hide();
		jQuery('#div_Main_Contact').fadeIn(600);
	});
	
});