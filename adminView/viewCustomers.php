
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />

			<form method="post" action="fetch.php" class="search">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="query" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
</form>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"adminView/fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




