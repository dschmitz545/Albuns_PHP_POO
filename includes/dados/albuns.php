<?php

function listar_albuns()
{
    $conn = get_connection();
    $sql = 'SELECT * from album inner join 
            estilo using (cod_estilo)';
    $query = $conn->query($sql);

    return $query->fetchAll();

}

function recuperar_album($codigo)
{
    $codigo = (int) $codigo;
    $conn = get_connection();
    $sql = "Select * from album inner join estilo using (cod_estilo)
            Where cod_album = $codigo";

    $query = $conn->query($sql);

    if($query->rowCount())
    {
        $album = $query->fetchAll();
        return $album[0];
    }

    return false;
}

?>