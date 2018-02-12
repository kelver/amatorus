@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading" style="padding: 20px 15px; margin: 0px 0px 40px 0px;">
                <div class="col-md-8"><h5 class="panel-title">Times Cadastrados</h5></div>
                <div class="col-md-4"><a href="{{ route('newTimes') }}" class="btn bg-success-800 pull-right">Novo <i class="icon-add position-right"></i></a></div>
            </div>
            <div class="panel-body">

                <table class="table table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Cód. Time</th>
                            <th style="width: 50%;">Time</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($times) == 0)
                        <tr>
                            <td colspan="3">Nenhum time cadastrado.</td>
                        </tr>
                    @else
                        @foreach ($times as $time)
                            <tr>
                                <td>{{ $time['id'] }}</td>
                                <td>{{ $time['nome'] }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('editTimes', $time['id']) }}">
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