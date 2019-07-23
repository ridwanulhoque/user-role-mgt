	<table>
		<th>
			<td>User Name</td>
			<td>User Role</td>
		</th>
		@foreach($role_permissions as $role_permission)
			<tr>
				<td>{{ $role_permission->role->name }}</td>
				<td>{{ $role_permission->permission->name }}</td>
			</tr>
		@endforeach
	</table>