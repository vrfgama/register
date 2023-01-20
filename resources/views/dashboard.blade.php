<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <!--
                <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
                -->

                <div class="p-6 bg-white border-b border-gray-200">
            
                    @foreach($users as $user)


                    <div class="group row">
                        <label for="inputEmail3" class="col-sm-2">Nome:</label>
                        <div class="col-sm-10">
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Data de nascimento:</label>
                        <div class="col-sm-10">
                            {{ $user->birth }}
                        </div>
                    </div>

                    <div class="group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-10">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sexo:</label>
                        <div class="col-sm-10">
                            {{ $user->sex }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10" >

                            <a class="btn btn-danger" href='/delete/{{ $user->id }}'>Deletar</a>  
                            <a class="btn btn-success" href='/edit/{{ $user->id }}'>Atualizar</a>

                        </div>
                    </div>

                
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
