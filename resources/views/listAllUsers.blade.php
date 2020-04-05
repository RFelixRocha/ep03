<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <table>
        <tr>
            <td style="width: 50px;">ID</td>
            <td style="width: 200px;">Nome:</td>
            <td style="width: 200px;">E-mail</td>
            <td>Ações</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td style="width: 50px;">{{$user->id}}</td>
                <td style="width: 200px;">{{$user->name}}</td>
                <td style="width: 200px;">{{$user->email}}</td>
                <td>
                    <a href="">Ver Usuários</a>
                    <form action="{{route('users.destroy',['user'=>$user->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="user" value="{{$user->id}}">
                        <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
