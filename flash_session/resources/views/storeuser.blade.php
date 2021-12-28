<h1>Add New Member</h1>
@if(session('user'))
<h3>Data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter User Name"><br>
    <input type="password" name="password" placeholder="Enter User Password"><br>
    <input type="email" name="email" placeholder="Enter User email"><br>
    <button type="submit">Add User</button>
</form>