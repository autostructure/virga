<h1>Welcome to the create users page</h1>

<form method="POST" action="/users">
	{{ csrf_field() }}
	<label>Name:</label><input type="text" name="name" placeholder="enter your first name">
	<label>Email: </label><input type="text" name="email" placeholder="enter your last name">
	<label>Password: </label><input type="password" name="password" placeholder="enter your password">
	<input type="submit" value="create" name="">
</form>