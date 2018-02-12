@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('updateTimes', $times->id) }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Editar Time</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-9">
                                <label class="label-block" for="nome">Nome</label>
                                <input class="form-control" placeholder="Nome" name="nome" id="nome" type="text" value="{{ $times->nome }}">
                            </div>
                            <div class="form-group col-md-9">
                                <label class="label-block" for="jogador">Jogadores</label>
                                <select multiple="multiple" name="jogador[]" id="jogador" data-placeholder="Selecione os jogadores..." class="select">
                                    <option></option>
                                    @foreach ($jogadores as $jogador)
                                        <option value="{{ $jogador->id }}" @if(in_array($jogador->id, $jogSel)) selected @endif>{{ $jogador->nome }}</option>
                                    @endforeach
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