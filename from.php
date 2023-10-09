<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	Enter name:<input type="text" id="name"><br>
	<!-- <input type="submit" id="submit" value="submit"> -->
	<div id="h1"></div>
	<script type="text/javascript">
		$("document").ready(function(){
		$("#name").keyup(function(){
			  var nme=$("#name").val();
			$.ajax({
				type:"post",
				url:"formaction.php",
				data:{name:nme}

			}).done(function(data){
					$("#h1").html(data);
			});
		});
	});
	</script>
</body>
</html>