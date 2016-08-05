<?php
/*******************************************************************************
 * Helper de validações
 * Autor: Diego Sampaio - diego.estaleiro@gmail.com  
 ******************************************************************************/
function status_cadastros($sts){
    switch($sts){
        case 0:
            $status = '<label class="label label-warning">Inativo</span>';
        break;
        case 1:
            $status = '<label class="label label-info">Ativo</span>';
        break;
        case 2:
            $status = '<label class="label label-danger">Desativado</span>';
        break;            
        default:
            $status = '<label class="label label-default">N/d</span>';
        break;
    }
    
    return $status;
}


