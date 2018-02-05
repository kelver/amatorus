@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeTorneios') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Torneios</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-9">
                                <label class="label-block" for="nome">Torneio</label>
                                <input class="form-control" placeholder="Torneios" name="nome" id="nome" type="text">
                            </div>

                            <div class="form-group col-md-9">
                                <label class="label-block" for="time">Times</label>
                                <select multiple="multiple" name="time[]" id="time" data-placeholder="Selecione os Times..." class="select">
                                    <option></option>
                                    @foreach ($times as $time)
                                        <option value="{{ $time->id }}">{{ $time->nome }}</option>
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