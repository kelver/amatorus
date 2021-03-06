@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Usuários Cadastrados</h5></div>
                <div class="col-md-4"><a href="{{ route('newUsuarios') }}" class="btn bg-success-800 pull-right">Novo <i class="icon-add position-right"></i></a></div>
            </div>
            <div class="panel-body">

                <table class="table table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Cód. usuário</th>
                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Telefone</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($usuarios) == 0)
                        <tr>
                            <td colspan="5">Nenhum usuário cadastrado.</td>
                        </tr>
                    @else
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario['id'] }}</td>
                                <td>{{ $usuario['name'] }}</td>
                                <td>{{ $usuario['email'] }}</td>
                                <td>{{ $usuario['telefone'] }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="{{ route('usuario.role', $usuario['id']) }}">
                                                        <i class="icon-file-pdf"></i>
                                                        Vincular Grupo
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-file-excel"></i>
                                                        Export to .csv
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-file-word"></i>
                                                        Export to .doc
                                                    </a>
                                                </li>
                                            </ul>
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