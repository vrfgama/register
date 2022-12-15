<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="/register" method="POST">
    
        {{csrf_field()}}
        
        Nome:<br>
        <input type="text" name="name">
        <br><br>

        Sexo:<br>
        <input type="radio" name="sex" value="M">Masculino
        <input type="radio" name="sex" value="F">Feminino
        <br><br>

        Email:<br>
        <input type="email" name="email" id="">
        <br><br>

        Data de nascimento:<br>
        <input type="date" name="birth" id="">
        <br><br>

        <br>
        <input type="submit" value="Registrar">
        <input type="reset" value="Reset">
        <br>

    </form>
</body>
</html>