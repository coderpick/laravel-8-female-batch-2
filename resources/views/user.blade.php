<h2>User list</h2>
<table border="1" width="80%" cellpadding="10">
	<tr>
		<th>S/N</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
  @if($users)
	  @foreach($users as $key =>$user)
	  	<tr>
	  		<td>{{ $key+1 }}</td>
	  		<td>{{ $user['name'] }}</td>
	  		<td>{{ $user['email'] }}</td>
	  	</tr>
	  @endforeach
  @endif
</table>