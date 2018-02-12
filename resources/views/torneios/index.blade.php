@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Torneios Cadastrados</h5></div>
                <div class="col-md-4"><a href="{{ route('newTorneios') }}" class="btn bg-success-800 pull-right">Novo <i class="icon-add position-right"></i></a></div>
            </div>
            <div class="panel-body">

                <table class="table table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Cód. Torneios</th>
                            <th style="width: 50%;">Torneio</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($torneios) == 0)
                        <tr>
                            <td colspan="3">Nenhum torneio cadastrado.</td>
                        </tr>
                    @else
                        @foreach ($torneios as $torneio)
                            <tr>
                                <td>{{ $torneio['id'] }}</td>
                                <td>{{ $torneio['nome'] }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('editTorneios', $torneio['id']) }}">
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