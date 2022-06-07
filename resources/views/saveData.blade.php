<h2>Save Data</h2>

<form action="saveData" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <input type="text" name="address" placeholder="Enter Address"><br><br>
    <button type="submit">Save Data</button>
</form>
<span style="color: green">{{ Session::get('success');
 }}</span>
