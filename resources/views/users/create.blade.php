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
        <div class="col-md-4 mt-5">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="names">Nombres</label>
                    <input type="text" name="names"  id="names" class="form-control">
                </div>

                <div class="form-group">
                    <label for="lastnames">Apellidos</label>
                    <input type="text" name="lastnames" id="lastnames" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Correo electronico</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR USUARIO</button>
                <a href="{{ route('user.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
