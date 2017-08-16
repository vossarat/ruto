$(document).ready(function()
	{
		$('#buttonTranslated').hover(
			function()
			{
				$('#buttonTranslated > i').addClass('fa-spin fa-fw');
			},
			function()
			{
				$('#buttonTranslated > i').removeClass('fa-spin fa-fw');
			});
	});