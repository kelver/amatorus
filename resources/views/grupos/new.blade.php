@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeGrupos') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Grupos</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-6">
                                <label class="label-block" for="name">Nome do Grupo <small>(Apenas para regras)</small></label>
                                <input class="form-control" placeholder="Nome do Grupo" name="name" id="name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="label-block" for="display_name">Nome de Exibição do Grupo</label>
                                <input class="form-control" placeholder="Nome de Exibição" name="display_name" id="display_name" type="text">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-block" for="description">Descrição</label>
                                <textarea name="description" id="description" style="width: 100%; resize: none;" placeholder="Descrição do grupo"></textarea>
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