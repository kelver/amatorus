@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeEstados') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Estado</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="label-block" for="nome">Nome do Estado</label>
                                <input class="form-control" placeholder="Nome do Estado" name="nome" id="nome" type="text">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="sigla">Sigla do Estado</label>
                                <input class="form-control" placeholder="Sigla do Estado" name="sigla" id="sigla" type="text">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="codigo_ibge">Cód. IBGE</label>
                                <input class="form-control" placeholder="Cód. IBGE" name="codigo_ibge" id="codigo_ibge" type="text">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="id_pais">ID do País</label>
                                <input class="form-control" placeholder="ID do País" name="id_pais" id="id_pais" type="text">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="label-block" for="regiao_sigla">Sigla da Região</label>
                                <input class="form-control" placeholder="Sigla da Região" name="regiao_sigla" id="regiao_sigla" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="regiao_nome">Nome da Região</label>
                                <input class="form-control" placeholder="Nome da Região" name="regiao_nome" id="regiao_nome" type="text">
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