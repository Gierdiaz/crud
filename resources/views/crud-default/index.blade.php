<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
<body>

    <h1 id="h1">Dados do usuário</h1>


    <table>
        <thead>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Endereço</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ getPositionUser( $user->position) }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->email }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>