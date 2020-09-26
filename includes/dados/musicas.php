<?php

/**
 * Lista de músicas filtradas(ou não) por álbum
 * @param integer #album
 * @return array lista de músicas
 */
function listar_musicas($album = null)
{
    $musicas = [
        [
            'titulo' => 'Saudosa Maloca',
            'album' => 2,
            'estrelas' => 4
        ],
        [
            'titulo' => 'Samba do Ernest',
            'album' => 2,
            'estrelas' => 4
        ],
        [
            'titulo' => 'Trem das Onze',
            'album' => 2,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Tiro ao Alvaro',
            'album' => 2,
            'estrelas' => 4
        ],
        [
            'titulo' => 'Moleque Atrevido',
            'album' => 1,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Malandro',
            'album' => 1,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Falsa Consideração',
            'album' => 1,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Coisinha tão bonitinha',
            'album' => 1,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Ser Feliz De Novo',
            'album' => 3,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Resumo de Felicidade',
            'album' => 3,
            'estrelas' => 4
        ],
        [
            'titulo' => 'Um Dia, Um Adeus',
            'album' => 3,
            'estrelas' => 4
        ],
        [
            'titulo' => 'Antes de Dizer Adeus / Farol das Estrelas',
            'album' => 3,
            'estrelas' => 5
        ],
        [
            'titulo' => 'Desafio',
            'album' => 3,
            'estrelas' => 5
        ],
    ];

    if ($album) {
        $musicas = array_filter($musicas, function ($musica) use ($album){
            if ($musica['album'] == $album) {
                return true;                
            }
            return false;
        });
    }

    return $musicas;

}