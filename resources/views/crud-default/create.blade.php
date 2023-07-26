<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Nome</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Cargo</label>
            <input type="text" class="form-control">
          </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" >      
        </div>

          <div class="form-check">
            <button class="btn btn-secondary btn-lg" href="{{ route('user.store') }}">Salvar</button>
            <button class="btn btn-primary btn-lg" href="{{ route('user.index') }}">Voltar</button>
          </div>
    </form>
</body>
</html>