<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
</head>
<body>
	<style>
		form{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		input{
			margin: 1.3rem;
			padding: 10px
		}
	</style>
  <h1 style="text-align: center;">TP1 Contact</h1>

	<form action="/thanks" method="POST">
		@csrf
		<input type="text" name="name" placeholder="name" />
		<input type="text" name="email" placeholder="email" />
		<textarea name="message" placeholder="message" ></textarea>
		<input type="submit" value="send"/>
	</form>
</body>
</html>