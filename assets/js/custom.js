$(document).ready(function() {

	$(".fancybox").fancybox({				
		padding : 0,
		autoResize: true,
		beforeShow: function () {
			this.title = '<h4>' + $(this.element).attr('title') + '</h4>';
			//this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
		},
		helpers : {
			title : { type: 'inside' },
		}
	});
});
