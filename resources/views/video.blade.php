<!DOCTYPE html>
<html>
<body>



<form action="{{url('uploadfile')}}"  method="post" enctype="multipart/form-data">

    @csrf
    <label for="product">File name:</label>
    <br>
    <input type="text" id="product" name="product">
    <br>
    <label for="file">File:</label>
    <br>
    <input type="file" id="file" name="file"><br>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
