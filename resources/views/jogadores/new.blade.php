@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeJogadores') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Jogador</h5>
                        </div>

                        <div class="panel-body">

                            @if ($errors->any())
                                <div class="alert alert-danger col-md-12">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group col-md-3">
                                <label class="label-block" for="nome">Nome</label>
                                <input class="form-control" placeholder="Nome" name="nome" id="nome" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="email">E-Mail</label>
                                <input class="form-control" placeholder="E-Mail" name="email" id="email" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="telefone">Telefone</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Telefone" name="telefone" id="telefone" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="celular">Celular</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Celular" name="celular" id="celular" type="text">
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
                            <div class="form-group col-md-2">
                                <label class="label-block" for="cep">Cep</label>
                                <input class="form-control" data-mask="99999-999" placeholder="Cep" name="cep" id="cep" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="endereco">Endereço</label>
                                <input class="form-control" placeholder="Endereço" name="endereco" id="endereco" type="text">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="numero">Nº</label>
                                <input class="form-control" data-mask="99999" placeholder="Nº" name="numero" id="numero" type="text">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="label-block" for="bairro">Bairro</label>
                                <input class="form-control" placeholder="Bairro" name="bairro" id="bairro" type="text">
                            </div>

                            <div class="form-group col-md-12">
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