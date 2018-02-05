@include('basic.top')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 mt-20">
            <div class="panel panel-default">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                            <h5 class="content-group">Acesse sua conta</h5>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-8 col-md-push-2">
                            <input type="text" class="form-control" placeholder="Usuário" name="email" id="email" value="{{ old('email') }}" required>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-8 col-md-push-2">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Senha">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-12">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary col-md-6 col-md-offset-3">
                                    Entrar
                                </button>

                                <a class="btn btn-link col-md-6 col-md-offset-3" href="{{ route('password.request') }}">
                                    Esqueceu a senha?
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('basic.footer')
