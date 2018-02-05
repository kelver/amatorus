<!-- Main sidebar -->
@if(!$menu)
    @php ($menu = '')
@endif
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        {{--<div class="sidebar-user">--}}
            {{--<div class="category-content">--}}
                {{--<div class="media">--}}
                    {{--<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>--}}
                    {{--<div class="media-body">--}}
                        {{--<span class="media-heading text-semibold">Victoria Baker</span>--}}
                        {{--<div class="text-size-mini text-muted">--}}
                            {{--<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header">
                        <span>Menu</span>
                        <i class="icon-menu" title="Menu de Páginas"></i>
                    </li>
                    <li @if($menu == 'index') class="active" @endif>
                        <a href="{{ route('home') }}">
                            <i class="icon-home4"></i>
                            <span>Início</span></a>
                    </li>
                    <li  @if($menu == 'jogadores' or
                    $menu == 'usuarios' or
                    $menu == 'associados' or
                    $menu == 'time')
                             class="active"
                    @endif>
                        <a href="#">
                            <i class="icon-stack2"></i>
                             <span>Cadastros</span>
                        </a>
                        <ul>
                            <li @if($menu == 'jogadores') class="active" @endif>
                                <a href="{{ route('indexJogadores') }}">Jogadores</a>
                            </li>
                            <li @if($menu == 'times') class="active" @endif>
                                <a href="{{ route('indexTimes') }}">Times</a>
                            </li>
                            <li @if($menu == 'torneios') class="active" @endif>
                                <a href="{{ route('indexTorneios') }}">Torneios</a>
                            </li>
                        </ul>
                    </li>
                    <li @if($menu == 'estados' or
                    $menu == 'cidades' or
                    $menu == 'segmentos')
                        class="active"
                    @endif>
                        <a href="#">
                            <i class="icon-cogs"></i>
                             <span>Parametros</span>
                        </a>
                        <ul>
                            <li @if($menu == 'estados') class="active" @endif>
                                <a href="{{ route('indexEstados') }}">Estados</a>
                            </li>
                            <li @if($menu == 'cidades') class="active" @endif>
                                <a href="{{ route('indexCidades') }}">Cidades</a>
                            </li>
                        </ul>
                    </li>
                    <li @if($menu == 'grupos' or $menu == 'permissoes') class="active" @endif>
                        <a href="#">
                            <i class="fas fa-shield-alt"></i>
                             <span>Segurança</span>
                        </a>
                        <ul>
                            <li @if($menu == 'grupos') class="active" @endif>
                                <a href="{{ route('indexGrupos') }}">Grupos</a>
                            </li>
                            <li @if($menu == 'permissoes') class="active" @endif>
                                <a href="{{ route('indexPermissao') }}">Permissões </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->