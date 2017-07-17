
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    	<div>
			<h4>Communication Virga</h4>
			<h2>SURVEY</h2>
			<button><a href="survey">Take A Survey</a></button>
			<button><a href="login">Log In</a></button>
			<button><a href="register">Create Account</a></button>
            <h1>Hello {{$myname}}</h1>
            <h2>Your age is {{$age}}</h2>
		</div>
    </body>