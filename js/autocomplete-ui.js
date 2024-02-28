jQuery(document).ready(function() 
{	var container = jQuery("[data-autocomplete='on']");
	container.autocomplete({
	  minLength: 2,
	  source: function(request, response) {
		jQuery.getJSON(container.data("url"), { input: container.val() }, 
				  response);
	  },
	  select: function( event, ui ) {
		container.val( ui.item.value );
		return false;
	  }
	});
});