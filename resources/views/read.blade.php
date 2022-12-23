
@foreach($user as $user)
    
    <p>    
    {{ $user->name }} <br>
    {{ $user->birth }} <br>
    {{ $user->email }} <br> 
    {{ $user->sex }} <br>


    <a href='/delete/{{ $user->id }}'>Deletar</a>  
    <a href='/edit/{{ $user->id }}'>Atualizar</a>
    </p>

@endforeach