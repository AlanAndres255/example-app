<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="file" name="archivo" id="file">
        <button type="submit" type="Submit">Submit</button>
    </form>
<br>
    <form action="{{ route('download') }}" method="post">
        @csrf
        <input type="hidden" name="path" value="Imagenes/tkZZLfShFETSr1xptyqFlZTawdrQqS5Jqw3spivH.png">
        <input type="submit" value="Descargar">
    </form>
</body>
</html>