
@foreach($user as $user)
    
    <p>    
    {{ $user->name }} <br>
    {{ $user->birth }} <br>
    {{ $user->email }} <br> 
    {{ $user->sex }} <br>

    <a href="">Deletar</a>
    <a href="">Atualizar</a>
    </p>

@endforeach