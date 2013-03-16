var originalheadheight = 77;
var extraheight = 40;

function toggleheader()
{
	var show=false;
	if ( $('header').height() == originalheadheight )
	{
		$('.shorten').removeClass('hidden');
		newheight = originalheadheight + extraheight;
	}
	else
	{
		show=true;
		newheight = originalheadheight;
	}
	$('body').animate({'padding-top':newheight}, {'duration':100});
	$('header').animate({'height':newheight}, {'duration':100}, function () {
		if ( show === true )
		{
			$('.shorten').addClass('hidden');
		}
	});
}

function smallurl(result)
{
	if('shorturl' in result)
	{
		alertify.alert('<input class="urlpopup" type="text" value="'+result.shorturl+'"></input>');
	}
}

$(document).ready(function()
{
	// toggle show hide 
	$('header').on('click', '.shortenlink', function(event) {
		event.preventDefault();
		toggleheader();
	});

	$('.shorten').on('submit', 'form', function(event) {
		event.preventDefault();
		var url=$(this).attr('action');
		var data=$(this).serialize();
		var request = $.ajax({
			type: "POST",
			url: url,
			data: data,
			success: function blarg(result) { smallurl(result); },
			dataType: 'json'
		});
	});
});