<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CREAR POST</title>
</head>
<body>
<H1>Crear post</H1>

<form action="{{route('post.store')}}" method="post">


    <label for="">Titulo</label>
    <input type="text" name="title">

    <label for="">Slug</label>
    <input type="text" name="slug">

    <label for="">Contenido</label>
    <textarea name="content"></textarea>

    <label for="">Descripcion</label>
    <textarea name="description"></textarea>

    <button type="submit">Enviar</button>
    @csrf

</form>






</body>
</html>


