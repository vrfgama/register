<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="/update/{{ $user->id }}" method="post">
    {{csrf_field()}}

    <p>Nome:<br>
    <input type="text" name="name" id="" value="{{ $user->name }}">
    </p>

    <p>
    Sexo:<br>
    @if( $user->sex == 'M' )
    <input type="radio" name="sex" value="M" checked>Masculino 
    <input type="radio" name="sex" value="F">Feminino
    @else
    <input type="radio" name="sex" value="M">Masculino 
    <input type="radio" name="sex" value="F" checked>Feminino
    @endif
    </p>

    <p>
    Email:<br>
    <input type="email" name="email" id="" value="{{ $user->email }}">
    </p>

    <p>
    Data de nascimento:<br>
    <input type="date" name="birth" id="" value="{{ $user->birth }}">
    </p>

    <p>
    <input type="submit" value="Atualizar">
    <input type="reset" value="Limpar">
    </p>


    </form>
</body>
</html>