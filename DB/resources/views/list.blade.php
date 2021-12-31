<h1>Member List</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th colspan="2">Operation</th>
    </tr>
    @foreach($members as $items)
    <tr>
        <td>{{$items['id']}}</td>
        <td>{{$items['name']}}</td>
        <td>{{$items['email']}}</td>
        <td>{{$items['address']}}</td>
        <td><a href="{{'delete/'.$items['id']}}">Delete</a></td>
        <td><a href="{{'edit/'.$items['id']}}">Edit</a></td>
    </tr>
    @endforeach
</table>
