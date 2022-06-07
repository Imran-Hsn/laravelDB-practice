<h1>User Login</h1>
<form action="user_auth" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"> <br> <br>
    <input type="email" name="email" placeholder="Enter your email"> <br> <br>
    <input type="password" name="password" placeholder="Enter password"> <br> <br>
    <button type="submit">Login</button>
</form>