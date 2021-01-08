<!DOCTYPE html>
<html>
<head>
	<title>Request | Anonymous</title>
</head>
<body>
	<form id="form">
		<input type="text" name="payload" required="1" placeholder="payload" />
		<input type="url" name="url" id="url" placeholder="url" required="1">
		<select name="method" id="method">
			<option value="get">get</option>
			<option value="post">post</option>
		</select>
		<input type="file" name="file" placeholder="file">
		<button type="submit" name="submit" id="submit" value="1">Go!</button>
	</form>
	<div id="resp"></div>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		const api = 'https://cors-anywhere.herokuapp.com/';
			$("#form").submit(function(event) {
				event.preventDefault();
				const data = new FormData(this), url = $("#url").val(), method = $("#method").val();
				if (method) {
					$.ajax({
			            url: api+url,
			            data: data,
			            method: method,
			            dataType: 'json',
			            cache: false,
			            contentType: false,
			            processData: false,
			            success: function(res){
			            	if (res) {
			            		$("#resp").html(res);
			            	}
			            }
		            });
				}
			});
	</script>
</body>
</html>