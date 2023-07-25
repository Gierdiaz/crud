<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="Assunto" name="subject" value="{{ $user->name ?? old('name') }}">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Descrição">{{ $user->email ?? old('email') }}</textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>