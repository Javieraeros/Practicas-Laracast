<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Tareas</title>
    <link rel="icon" href="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS2pkV1u3hTi81WfiPLsaWuDcpK-ocxF97hCnf8wZyUOFpoDTuEz9YlWw">
</head>
<body>
<ul>
    @foreach($tareas as $tarea)
        <li><a href="/tareas/{{$tarea->id}}"/>{{$tarea->content}}</li>
    @endforeach

</ul>
</body>
</html>