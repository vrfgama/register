
@foreach($user as $user)
    
    <p>    
    {{ $user->name }} <br>
    {{ $user->birth }} <br>
    {{ $user->email }} <br> 
    {{ $user->sex }} <br>


    <a href='{{url("/delete/$user->id")}}'>Deletar</a>  
    <a href="/update">Atualizar</a>
    </p>

@endforeach