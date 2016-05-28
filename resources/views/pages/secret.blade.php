<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

	var urlX='https://api.vimeo.com/videos?query=condition search&access_token=c6c605d	3ebf1dd00d38c742d2bcd03b6';

	$.getJSON(urlX, function(data){
		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
		});
	 	console.log(data.data)
	 	$.post('/secret/insertVideoVimeo', {videos: data.data}, function() {});
	});
			
</script>
</head>

</html>
