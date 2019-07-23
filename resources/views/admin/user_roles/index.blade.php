	<table>
		<th>
			<td>User Name</td>
			<td>User Role</td>
		</th>
		@foreach($user_roles as $user_role)
			<tr>
				<td>{{ $user_role->user->name }}</td>
				<td>{{ $user_role->role->name }}</td>
			</tr>
		@endforeach
	</table>