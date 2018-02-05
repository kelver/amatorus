@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeUsuarios') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Usuários</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-6">
                                <label class="label-block" for="nome">Nome</label>
                                <input class="form-control" placeholder="Nome do Usuário" name="nome" id="nome" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="label-block" for="username">Apelido</label>
                                <input class="form-control" placeholder="Apelido do Usuário" name="username" id="username" type="text">
                            </div>


                            <div class="form-group col-md-3">
                                <label class="label-block" for="cpf">CPF</label>
                                <input class="form-control" placeholder="CPF" name="cpf" id="cpf" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="rg">RG</label>
                                <input class="form-control" placeholder="RG" name="rg" id="rg" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="telefone">Telefone</label>
                                <input class="form-control" placeholder="Telefone" name="telefone" id="telefone" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="celular">Celular</label>
                                <input class="form-control" placeholder="Celular" name="celular" id="celular" type="text">
                            </div>


                            <div class="form-group col-md-2">
                                <label class="label-block" for="cep">CEP</label>
                                <input class="form-control" placeholder="CEP" name="cep" id="cep" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="estado">Estado</label>
                                <select data-placeholder="Selecione um Estado" class="select" name="estado" id="estado">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="cidade">Cidade</label>
                                <select data-placeholder="Selecione uma Cidade" class="select" name="cidade" id="cidade">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="label-block" for="bairro">Bairro</label>
                                <input class="form-control" placeholder="Bairro" name="bairro" id="bairro" type="text">
                            </div>


                            <div class="form-group col-md-6">
                                <label class="label-block" for="endereco">Endereço</label>
                                <input class="form-control" placeholder="Endereço" name="endereco" id="endereco" type="text">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="numero">Nº</label>
                                <input class="form-control" placeholder="Nº" name="numero" id="numero" type="text">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="label-block" for="email">E-Mail</label>
                                <input class="form-control" placeholder="E-Mail do Usuário" name="email" id="email" type="text">
                            </div>


                            <div class="form-group col-md-4">
                                <label class="label-block" for="empresas">Empresas</label>
                                <select data-placeholder="Selecione uma Empresa" class="select" multiple name="empresas[]" id="empresas">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($empresas as $empresa)
                                            <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="grupos">Grupos</label>
                                <select data-placeholder="Selecione um Grupo" class="select" multiple name="grupos[]" id="grupos">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($grupos as $grupo)
                                            <option value="{{ $grupo->id }}">{{ $grupo->display_name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="password">Senha</label>
                                <input class="form-control" placeholder="Senha do Usuário" name="password" id="password" type="password">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="data_nasc">Data Nasc.</label>
                                <input type="text" class="form-control pickadate-selectors-data-nasc-br" placeholder="Data de nascimento" name="data_nasc" id="data_nasc">
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success pull-right" value="Salvar" name="enviar" id="enviar" type="submit">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /basic layout -->

            </div>
        </div>
        <!-- /vertical form options -->

@include('basic.footer')