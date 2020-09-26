<?php


function existe_estilo($estilo_escolhido)
{
    $estilos = listar_estilos();
    $estilos = array_map(function($estilo){
        return $estilo['estilo'];
    }, $estilos);

    if (! in_array($estilo_escolhido, $estilos) && $estilo_escolhido != null) {
        return false;
    }
    return true;

}

function listar_estilos()
{
    $conn = get_connection();
    $query = $conn->query('SELECT * from estilo');

    return $query->fetchAll();

}

// function listar_estilos() 
// {

//     return ['Samba','Pop Rock', 'Pagode'];

// }

?>