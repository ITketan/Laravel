<h1>User Login</h1>
<form action="/user" method="POST">
    @csrf 
    <input type="text" name="user" placeholder="enter user name"><br>
    <input type="password" name="pass" placeholder="enter user password"><br>
    <button type="submit">Login</button>

</form>
