jQuery(function() {
	  jQuery('span.bp_pullquote').each(function() {
    var al = jQuery(this).attr('data-align');
		var parentParagraph = jQuery(this).parent('p');
		parentParagraph.css('position', 'relative');
		jQuery(this).clone()
		  .addClass('bp_pulledquote')
      .addClass(al)
		  .prependTo(parentParagraph);
	  });
});
