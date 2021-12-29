<h1>Memeber list</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['address']}}</td>
        </tr>
    @endforeach
</table>

<div>
    {{$users->links()}}
</div>

<style>
    .w-5{
        display:none;
    }
    </style>