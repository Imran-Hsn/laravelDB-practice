<h2>Upload File</h2>
<form action="uploadManager" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <input type="submit" value="Upload File">
</form>