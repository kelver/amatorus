@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Jogadores Cadastrados</h5></div>
                <div class="col-md-4"><a href="{{ route('newJogadores') }}" class="btn bg-success-800 pull-right">Novo <i class="icon-add position-right"></i></a></div>
            </div>
            <div class="panel-body table-responsive">

                <table class="table table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Telefones</th>
                            <th>Endereço</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($jogadores) == 0)
                        <tr>
                            <td colspan="3">Nenhum jogador cadastrado.</td>
                        </tr>
                    @else
                        @foreach ($jogadores as $jogador)
                            <tr>
                                <td><img src="/files/jogadores/{{ $jogador['id'] }}/{{ $jogador['foto'] }}" alt="{{ $jogador['nome'] }}" class="img-circle img-thumbnail" style="height:60px; width:60px; object-fit: cover;"></td>
                                <td>{{ $jogador['nome'] }}</td>
                                <td>{{ $jogador['email'] }}</td>
                                <td>@if($jogador['telefone'] != ''){{ $jogador['telefone'] }} @endif
                                    @if($jogador['telefone'] != '' and $jogador['celular'] != '') - @endif
                                    @if($jogador['celular'] != '') {{ $jogador['celular'] }} @endif</td>
                                <td>{{ $jogador->cidades->nome }} - {{ $jogador['bairro'] }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('editJogadores', $jogador['id']) }}">
                                                <i class="fa fa-edit text-info-800"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-plus text-success-800"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-trash text-danger-800"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
@include('basic.footer')