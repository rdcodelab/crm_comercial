<?php
/* 
 * Helper de criação de botões
 * Autor: Diego Sampaio - diego.estaleiro@gmail.com 
 */
function btn_editar($ancora){
    return anchor($ancora, '<i class="ion ion-edit"></i>', 'class="btn btn-info btn-sm"');
}

function btn_excluir($ancora){
    return anchor($ancora, '<i class="ion ion-trash-b"></i>', 'class="btn btn-danger btn-sm"');
}

