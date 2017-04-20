<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($tareas as $tarea)
        <li><a href="/tareas/{{$tarea->id}}"/>{{$tarea->content}}</li>
    @endforeach

</ul>
</body>
</html>