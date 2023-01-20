<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <form action="/register_user" method="post">
                {{csrf_field()}}
                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                </div>
               
                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
                    <div class="col-sm-10">
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Masculino">
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
                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" id="" placeholder="Email">
                    </div>
                </div>            

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" id="" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Data de nascimento:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" name="birth" id="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10" >
                       <button class="btn btn-success" type="submit" value="Registrar" >Registrar</button>

                       <button class="btn btn-secondary" type="reset" value="Limpar" >Limpar</button>
                    </div>
                </div>

            </form>


        </div>
    </div>
</x-app-layout>