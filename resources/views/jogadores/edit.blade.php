@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('updateJogadores', $jogador->id) }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Editar Jogador</h5>
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
                                <input class="form-control" placeholder="Nome" name="nome" id="nome" type="text" value="{{ $jogador->nome }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="email">E-Mail</label>
                                <input class="form-control" placeholder="E-Mail" name="email" id="email" type="text" value="{{ $jogador->email }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="telefone">Telefone</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Telefone" name="telefone" id="telefone" type="text" value="{{ $jogador->telefone }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="celular">Celular</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Celular" name="celular" id="celular" type="text" value="{{ $jogador->celular }}">
                            </div>

                            <div class="form-group col-md-3">
                                <label class="label-block" for="estado">Estado</label>
                                <select data-placeholder="Selecione um Estado" class="select" name="estado" id="estado">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($jogador->estado == $estado->id) selected @endif>{{ $estado->nome }}</option>
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
                                        <option value="{{ $cidade->id }}" @if($jogador->cidade == $cidade->id) selected @endif>{{ $cidade->nome }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="cep">Cep</label>
                                <input class="form-control" data-mask="99999-999" placeholder="Cep" name="cep" id="cep" type="text" value="{{ $jogador->cep }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="endereco">Endereço</label>
                                <input class="form-control" placeholder="Endereço" name="endereco" id="endereco" type="text" value="{{ $jogador->endereco }}">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="numero">Nº</label>
                                <input class="form-control" data-mask="99999" placeholder="Nº" name="numero" id="numero" type="text" value="{{ $jogador->numero }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label class="label-block" for="bairro">Bairro</label>
                                <input class="form-control" placeholder="Bairro" name="bairro" id="bairro" type="text" value="{{ $jogador->bairro }}">
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group col-md-9">
                                    <label class="col-lg-2 control-label text-semibold">Foto de perfil<br>
                                        <div class="col-lg-3">
                                            <img src="/files/jogadores/{{ $jogador->id }}/{{ $jogador->foto }}" width="100">
                                        </div>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="file" class="file-input" name="foto" id="foto" data-show-upload="false" data-show-preview="false">
                                    </div>
                                </div>
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

        <!-- Theme JS files -->
        <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
        <script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
        <!-- /theme JS files -->

@include('basic.footer')