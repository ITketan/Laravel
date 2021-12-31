<h1>Add Member</h1>

<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter your name"><br>
    <input type="email" name="email" placeholder="enter your email"><br>
    <input type="text" name="address" placeholder="enter your address"><br>
    <button type="submit">Add Member</button>
</form>