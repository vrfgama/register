<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
            <form action="/edit/{{ $user->id }}" method="post">
                {{csrf_field()}}
                @method('put')

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="name" id="" value="{{ $user->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
                    <div class="col-sm-10">       
                        
                        @if( $user->sex == 'Masculino' )
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Masculino" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Feminino">
                            <label class="form-check-label" for="gridRadios2">
                                Feminino
                            </label>
                        </div>    
                        @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Masculino">
                            <label class="form-check-label" for="gridRadios1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Feminino" checked>
                            <label class="form-check-label" for="gridRadios2">
                                Feminino
                            </label>
                        </div>
                        @endif                        

                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" id="" value="{{ $user->email }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" id="" value="{{ $user->password }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Data de nascimento:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" name="birth" id="" value="{{ $user->birth }}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10" >
                       <button class="btn btn-success" type="submit" value="Registrar" >Atualizar</button>

                       <button class="btn btn-secondary" type="reset" value="Limpar" >Limpar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>