@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Cidades Cadastradas</h5></div>
                <div class="col-md-4"><a href="{{ route('newCidades') }}" class="btn bg-success-800 pull-right">Novo <i class="icon-add position-right"></i></a></div>
            </div>
            <div class="panel-body">

                <table class="table table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Cód. Cidade</th>
                            <th style="width: 50%;">Cidades</th>
                            <th style="width: 10%;">Estado</th>
                            <th style="width: 10%;">Sigla</th>
                            <th style="width: 10%;">Cod. IBGE</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($cidades) == 0)
                        <tr>
                            <td colspan="5">Nenhuma cidade cadastrada.</td>
                        </tr>
                    @else
                        @foreach ($cidades as $cidade)
                            <tr>
                                <td>{{ $cidade['id'] }}</td>
                                <td>{{ $cidade['nome'] }}</td>
                                <td>{{ $cidade->estados->sigla }}</td>
                                <td>{{ $cidade['sigla'] }}</td>
                                <td>{{ $cidade['codigo_ibge'] }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
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