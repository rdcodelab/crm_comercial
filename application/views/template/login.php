<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="RDCode Studio Software">

        <link rel="shortcut icon" href="<?=base_url('layout/assets/images/favicon_1.ico'); ?>">

        <title>RDCRM - Gerenciamento de Clientes, Propostas e Contratos</title>

        <link href="<?=base_url('layout/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('layout/assets/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('layout/assets/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('layout/assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('layout/assets/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('layout/assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url('layout/assets/js/modernizr.min.js'); ?>"></script>
        
    </head>
    <body>

        <div class="animationload">
            <div class="loader"></div>
        </div>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Acesso ao <strong class="text-custom">CRM</strong> </h3>
            </div> 


            <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?=base_url('account/login'); ?>" method="post">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="usuario" placeholder="Usuário">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Senha" name="senha">
                    </div>
                </div>               
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Acessar</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="#" class="text-dark"><i class="fa fa-lock m-r-5"></i> Esqueceu sua senha?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
                <div class="row">
            	<div class="col-sm-12 text-center">
            		<p>Desenvolvido por <a href="http://rdcode.com.br" class="text-primary m-l-5"><b>RDCode Studio Software</b></a></p>
                        
                    </div>
            </div>
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url('layout/assets/js/jquery.min.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/detect.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/fastclick.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/waves.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/wow.min.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/jquery.nicescroll.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/jquery.scrollTo.min.js'); ?>"></script>


        <script src="<?=base_url('layout/assets/js/jquery.core.js'); ?>"></script>
        <script src="<?=base_url('layout/assets/js/jquery.app.js'); ?>"></script>
	
	</body>
</html>