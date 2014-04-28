<!DOCTYPE html>
<html lang="en">
<head></head>
	<body>
		<h1>We been contacted by.... </h1>

		<p>
			First name: {{$data->full_name}}
			Phone number: {{$data->phone_number}}
			Email address: {{$data->email}}
			Company: {{$data->company_name}}
			Message: {{$data->message}}
			Date: {{date("F j, Y, g:i a")}}
		</p>
	</body>
</html>