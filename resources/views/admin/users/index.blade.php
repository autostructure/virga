<h1>Below is a list of our current users</h1>

@foreach($users as $user)
<li>{!! $user ['firstname'] !!}</li>
@endforeach