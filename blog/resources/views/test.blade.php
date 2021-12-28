<h1>User List</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Status</th>
    </tr>
        @foreach ($collect as $testing)
    <tr>
        <td>{{$testing['id']}}</td>
        <td>{{$testing['name']}}</td>
        <td>{{$testing['email']}}</td>
        <td>{{$testing['gender']}}</td>
        <td>{{$testing['status']}}</td>
    </tr>
        @endforeach
</table>