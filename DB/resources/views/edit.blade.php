<h1>Edit Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}" ><br>
    <input type="email" name="email" value="{{$data['email']}}" ><br>
    <input type="text" name="address" value="{{$data['address']}}" ><br>
    <button type="submit">Update</button>
</form>