@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Perfil do Usuário</h5></div>
            </div>
            <div class="panel-body">
                <!-- Basic layout-->
                <form action="{{ route('storeEmpresas') }}" method="post">
                    {!! csrf_field() !!}

                    <fieldset>
                        <legend>Dados Cadastrais:</legend>
                        <div class="form-group col-md-6">
                            <label class="label-block" for="razao_social">Nome</label>
                            <input class="form-control" value="{{ $perfil->name }}" placeholder="Nome" name="nome" id="nome" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="label-block" for="nome_fantasia">E-mail</label>
                            <input class="form-control" value="{{ $perfil->email }}" placeholder="E-Mail" name="email" id="email" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="label-block" for="telefone">Telefone</label>
                            <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Telefone" value="{{ $perfil->telefone }}" name="telefone" id="telefone" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <input class="btn btn-success pull-right" value="Salvar" name="enviar" id="enviar" type="submit">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dados Empresa:</legend>
                        <table class="table table-hover datatable-highlight">
                            <thead>
                            <tr>
                                <th style="width: 3%;">Cód.</th>
                                <th>Nome Fantasia</th>
                                <th>Razão Social</th>
                                <th>E-Mail</th>
                                <th>Telefones</th>
                                <th>Endereço</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($perfil->empresas) == 0)
                                <tr>
                                    <td colspan="3">Não associado à nenhuma empresa.</td>
                                </tr>
                            @else
                                @foreach ($perfil->empresas as $empresa)
                                    <tr>
                                        <td>{{ $empresa['id'] }}</td>
                                        <td>{{ $empresa->nome_fantasia }}</td>
                                        <td>{{ $empresa->razao_social }}</td>
                                        <td>{{ $empresa->email }}</td>
                                        <td>@if($empresa->telefone != ''){{ $empresa->telefone }} @endif
                                            @if($empresa->telefone != '' and $empresa->celular != '') - @endif
                                            @if($empresa->celular != '') {{ $empresa->celular }} @endif</td>
                                        <td>{{ $empresa->cidades->nome }} - {{ $empresa->bairro }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </fieldset>
                </form>
                <!-- /basic layout -->
            </div>
        </div>
@include('basic.footer')