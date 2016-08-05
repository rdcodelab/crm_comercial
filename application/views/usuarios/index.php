<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b><i class="ion-person-stalker"></i> Usuários</b></h4>           

            <p>
                <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="ion ion-person-add"></i></a>
            </p>
            <button class="btn btn-info waves-effect waves-light btn-sm" id="sa-success">Click me</button>
            <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]" data-page-size="5" data-pagination="true" data-show-pagination-switch="true" class="table-bordered">
                <thead>
                    <tr>
                        <th data-field="id" data-switchable="false">Nome</th>
                        <th data-field="name">E-mail</th>
                        <th data-field="date">Perfil</th>                        
                        <th data-field="user-status" class="text-center">Status</th>
                        <th data-field="amount">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($usuarios as $us): 
                            //perfil
                            switch ($us->tipo){
                                case '1':
                                    $perfil = 'Administrador';
                                break;
                                case '2':
                                    $perfil = 'Usuário';
                                break;
                            }
                    ?>
                    <tr>
                        <td><?=$us->nome; ?></td>
                        <td><?=$us->email; ?></td>
                        <td><?=$perfil; ?></td>
                        <td><?=status_cadastros($us->status); ?></td>
                        <td>
                            <?php
                                echo btn_editar(base_url('/usuarios/editar/'.$us->idusuarios))." ";
                                echo btn_excluir(base_url('/usuarios/excluir/'.$us->idusuarios));
                            ?>
                        </td>
                    </tr>            
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Adicionar Usuário</h4>
    <div class="custom-modal-text text-left">
        <div class="msg_retorno"></div>
        <form action="post" id="frmAdd">
            <div class="form-group">
                <label for="nome">Nome*</label>
                <input type="text" name="nome" class="form-control nome_user" />
            </div>
            <div class="form-group">
                <label for="email">E-mail*</label>
                <input type="email" name="email" class="form-control email_user" />
            </div>
            <div class="form-group">
                <label for="senha">Senha*</label>
                <input type="password" name="senha" class="form-control senha_user" />
            </div>
            <div class="form-group">
                <label for="senha2">Confirmação de Senha*</label>
                <input type="password" name="senha" class="form-control senha_user2" />
            </div>
            <div class="form-group">
                <label for="perfil">Perfil*</label>
                <select name="perfil" class="form-control">
                    <option value="2">Usuário</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
            <div class="form-group text-right">
                <small class="text-left">*Campos de preenchimento obrigatório.</small>
                <a href="javascript:void()" title="Adicionar usuário" id="btnAddUsuario" class="btn btn-primary">Cadastrar</a>                
            </div>
        </form>
    </div>
</div>
<script src="<?=base_url('/layout/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url('/layout/assets/js/funcoes/usuarios.js'); ?>"></script>