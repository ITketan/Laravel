<h1>User List</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Profile Photo</th>
    </tr>
        @foreach ($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['last_name']}}</td>
        <td><img src="{{$user['avatar']}}" /></td>
    </tr>
        @endforeach
</table>


                           