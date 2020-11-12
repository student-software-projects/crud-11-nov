<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
             <table class="table">
                 <tr>
                   <th>NOMBRES</th>
                   <td>{{ $user->names }}</td>
                 </tr>
                 <tr>
                     <th>APELLIDOS</th>
                     <td>{{   $user->lastnames }}</td>
                 </tr>
                 <tr>
                     <th>CORREO</th>
                     <td>{{  $user->email }}</td>
                 </tr>
             </table>
            <a href="{{ route('user.index') }}" class="btn btn-default">Volver</a>
            <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>

</body>
</html>
