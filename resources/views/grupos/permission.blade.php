@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Vincular Permissões ao Grupo {{ $roles->name }}</h5>
                        </div>

                        <div class="panel-body">
                            <div class="content-group">
                                <div class="page-header page-header-default border-bottom-lg border-bottom-teal" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
                                    <form action="{{ route('grupos.permission.store', $roles->id) }}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="page-header-content">
                                            <div class="page-title">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label class="label-block" for="role">Grupos</label>
                                                        <select data-placeholder="Selecione um Grupo" class="select" name="permission" id="permission">
                                                            <option></option>
                                                            <optgroup label="">
                                                                @foreach ($permissions as $permission)
                                                                    <option value="{{ $permission['id'] }}">{{ $permission['display_name'] }}</option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <input class="btn btn-success pull-right" value="Adicionar" name="adicionar" id="adicionar" type="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table table-hover datatable-highlight">
                                <thead>
                                <tr>
                                    <th style="width: 20%">Permissão</th>
                                    <th>Descrição</th>
                                    <th class="text-center" style="width: 10%;">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($roles->permissions) == 0)
                                    <tr>
                                        <td colspan="5">Nenhuma permissão vinculada.</td>
                                    </tr>
                                @else
                                    @foreach ($roles->permissions as $rolePermission)
                                        <tr>
                                            <td>{{ $rolePermission['display_name'] }}</td>
                                            <td>{{ $rolePermission['description'] }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('grupos.permission.destroy', [$rolePermission->id,$rolePermission->id]) }}" method="post">
                                                    {{ method_field('DELETE') }}
                                                    {!! csrf_field() !!}
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <button type="submit" name="remove" id="remove" class="btn btn-link">
                                                                        <i class="icon-file-pdf"></i>
                                                                        Remover Permissão
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- /basic layout -->

            </div>
        </div>
        <!-- /vertical form options -->

@include('basic.footer')