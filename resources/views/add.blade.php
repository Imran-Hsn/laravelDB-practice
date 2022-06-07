<h1>Add Member</h1>
@if(session('username'))
<h4 style="color: green">{{ session('username') }} added successfully</h4>
@endif
<form action="addMember" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter username"> <br><br>
    <input type="email" name="email" placeholder="Enter your E-mail"> <br><br>
    <input type="password" name="password" placeholder="Enter password"> <br><br>
    <button type="submit">Add Member</button>
</form>