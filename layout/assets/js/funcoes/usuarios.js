/* 
 * Funções e Ações de registros de usuários
 * Autor: Diego Sampaio - diego.estaleiro@gmail.com 
 */

var dominio = window.location.protocol + "//" + window.location.host;

/**** cadastro de usuários ******/
$('#btnAddUsuario').on('click', function(){
    var dados = $('#frmAdd').serialize();
    
    $.ajax({
        type: 'POST',
        data: dados,
        url: dominio+'/usuarios/add',
        beforeSend: function(){
            //$('.msg_retorno').html('<div class="alert alert-info">Aguarde, cadastrando usuário</div>');
            swal("Cadastro efetuado com sucesso", "", "success")
        },
        success: function(){
            swal("Cadastro efetuado com sucesso", "", "success")
        },
        error: function(){
            //$('.msg_retorno').html('<div class="alert alert-info">Aguarde, cadastrando usuário</div>');
        }
    });
});


