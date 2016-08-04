<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <h4 class="page-title">Form Wizard</h4>
        <ol class="breadcrumb">
            <li>
                <a href="#">Ubold</a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Form Wizard
            </li>
        </ol>

    </div>
</div>
<!-- Page-Title -->

<!-- Basic Form Wizard -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Nova conta</b></h4>
            <p class="text-muted m-b-30 font-13">
                Preencha o formulário abaixo para cadastrar sua nova conta
            </p>

            <form id="basic-form" action="#">
                <div>
                    <h3>Novo Usuário</h3>
                    <section>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="nome">Seu nome</label>
                            <div class="col-lg-10">
                                <input class="form-control required" id="nome" name="nome" type="text">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="email">Seu e-mail</label>
                            <div class="col-lg-10">
                                <input class="form-control required" id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="password">Sua Senha</label>
                            <div class="col-lg-10">
                                <input id="password" name="senha" type="password" class="required form-control">

                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="confirm">Confirme sua Senha</label>
                            <div class="col-lg-10">
                                <input id="confirm" name="confirm" type="password" class="required form-control">
                            </div>
                        </div>

                    </section>
                    <h3>Nova Empresa</h3>
                    <section>
                        <div class="form-group clearfix">

                            <label class="col-lg-2 control-label" for="name"> First name *</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" type="text" class="required form-control">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="surname"> Last name *</label>
                            <div class="col-lg-10">
                                <input id="surname" name="surname" type="text" class="required form-control">

                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="email">Email *</label>
                            <div class="col-lg-10">
                                <input id="email" name="email" type="text" class="required email form-control">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="address">Address *</label>
                            <div class="col-lg-10">
                                <input id="address" name="address" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-12 control-label ">(*) Mandatory</label>
                        </div>

                    </section>
                    <h3>Confirmação</h3>
                    <section>
                        <div class="form-group clearfix">
                            <div class="col-lg-12">
                                <ul class="list-unstyled w-list">
                                    <li><b>First Name :</b> Jonathan </li>
                                    <li><b>Last Name :</b> Smith </li>
                                    <li><b>Emial:</b> jonathan@smith.com</li>
                                    <li><b>Address:</b> 123 Your City, Cityname. </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <h3>Finalização</h3>
                    <section>
                        <div class="form-group clearfix">
                            <div class="col-lg-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-h" type="checkbox">
                                    <label for="checkbox-h">
                                        I agree with the Terms and Conditions.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End row -->