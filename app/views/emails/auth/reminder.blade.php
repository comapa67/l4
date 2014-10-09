<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			Per resettare la tua password completa il form: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>
