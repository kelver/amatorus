@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeCidades') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Cidade</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="label-block" for="codigo">Cód da Cidade</label>
                                <input class="form-control" placeholder="Cód da Cidade" name="codigo" id="codigo" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="nome">Nome da Cidade</label>
                                <input class="form-control" placeholder="Nome do Estado" name="nome" id="nome" type="text">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="sigla">Sigla da Cidade</label>
                                <input class="form-control" placeholder="Sigla da Cidade" name="sigla" id="sigla" type="text">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="codigo_ibge">Cód. IBGE</label>
                                <input class="form-control" placeholder="Cód. IBGE" name="codigo_ibge" id="codigo_ibge" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="id_estado">Estado</label>
                                <select data-placeholder="Selecione um Estado" class="select" name="id_estado" id="id_estado">
                                    <option></option>
                                    <optgroup label="">
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
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