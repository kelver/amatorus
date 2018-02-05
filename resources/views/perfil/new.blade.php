@include('basic.top')
@include('basic.menu')
    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <form action="{{ route('storeEmpresas') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Cadastrar Empresa</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="label-block" for="razao_social">Razão Social</label>
                                <input class="form-control" placeholder="Razão Social" name="razao_social" id="razao_social" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="nome_fantasia">Nome Fantasia</label>
                                <input class="form-control" placeholder="Nome Fantasia" name="nome_fantasia" id="nome_fantasia" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="cnpj">CNPJ</label>
                                <input class="form-control" data-mask="99.999.999/0001-99" placeholder="CNPJ" name="cnpj" id="cnpj" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="ie">I.E.</label>
                                <input class="form-control" placeholder="I.E." name="ie" id="ie" type="text">
                            </div>


                            <div class="form-group col-md-3">
                                <label class="label-block" for="telefone">Telefone</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Telefone" name="telefone" id="telefone" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="celular">Celular</label>
                                <input class="form-control" data-mask="(99) 9 9999-9999" placeholder="Celular" name="celular" id="celular" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="estado">Estado</label>
                                <select data-placeholder="Selecione um Estado" class="select" name="estado" id="estado">
                                    <option></option>
                                    <optgroup label="">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>php
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="cidade">Cidade</label>
                                <select data-placeholder="Selecione uma Cidade" class="select" name="cidade" id="cidade">
                                    <option></option>
                                    <optgroup label="">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>php
                                </select>
                            </div>


                            <div class="form-group col-md-2">
                                <label class="label-block" for="cep">Cep</label>
                                <input class="form-control" data-mask="99999-999" placeholder="Cep" name="cep" id="cep" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="endereco">Endereço</label>
                                <input class="form-control" placeholder="Endereço" name="endereco" id="endereco" type="text">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="label-block" for="numero">Nº</label>
                                <input class="form-control" data-mask="99999" placeholder="Nº" name="numero" id="numero" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="bairro">Bairro</label>
                                <input class="form-control" placeholder="Bairro" name="bairro" id="bairro" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="label-block" for="complemento">Complemento</label>
                                <input class="form-control" placeholder="Complemento" name="complemento" id="complemento" type="text">
                            </div>


                            <div class="form-group col-md-7">
                                <label class="label-block" for="email">E-Mail</label>
                                <input type="email" name="email" class="form-control" id="email" required="required" placeholder="Entre com um endereço de E-Mail válido.">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="label-block" for="segmento">Segmento</label>
                                <select data-placeholder="Selecione um Segmento" class="select" name="segmento" id="segmento">
                                    <option></option>
                                    <optgroup label="">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>php
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