<?php
try{

    function get_connection()
    {
        $dbh = new PDO('mysql:host=db;dbname=albuns_php;charset=utf8','unicesumar','unicesumar');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }

} catch (PDOException $e) {
echo"Não foi possível conectar ao banco de dados. Motivo do erro: " . $e->getMessage();
}


include __DIR__ . '/estilos.php';
include __DIR__ . '/albuns.php';
include __DIR__ . '/musicas.php';