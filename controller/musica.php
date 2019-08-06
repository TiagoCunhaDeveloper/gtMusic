<?php
    //Cadastro da música
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastrar'])){
        include "../model/musica.class.php";
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $musica= new Musica();
        $musica->setArtista($_POST['artista']);
        $musica->setAlbum($_POST['album']);
        $musica->setAnoLancamento($_POST['anoLancamento']);
        $musica->setDataCad($date);
        $album=ucwords($_POST['album']);
        $morango=$_FILES['imgp'];
        $titulo_img = $morango['name'];
        $tmp        = $morango['tmp_name'];
        $nova_pasta=mkdir(__DIR__.'/../view/musicas/'.$album.'', 0777, true);
        $upload = move_uploaded_file($tmp,"../view/imagens_sistema/imagens_albuns/".$titulo_img);
        $morango2=$_FILES['arquivoMusica'];
        $tituloMusica = $morango2['name'];
        $tmpMusica        = $morango2['tmp_name'];
        $diretorio='view/musicas/'.$album.'/'.$tituloMusica;
        $upload2 = move_uploaded_file($tmpMusica,"../view/musicas/".$album."/".$tituloMusica);
        $musica->setNomeMusica($_POST['nomeMusica']);
        $musica->setDiretorio($diretorio);
        $musica->setImgAlbum($titulo_img);
        $musica->setGenero($_POST['genero']);
        $musica->inserir();
        session_start();
        $_SESSION['registrer']=true;
        header("Location: ../view/cadmusicas.php");
    }
    //Alterar perfil 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editar'])){
        include "../model/musica.class.php";
        $musica= new Musica();
        $musica->editar($_POST['nomeMusica'],$_POST['artista'],$_POST['anoLancamento'],$_POST['genero'],$_POST['id']);
        session_start();
        $_SESSION['edit']=true;
        header("Location: ../view/cadmusicas.php");
    }
    //Excluir
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir'])){
        include "../model/musica.class.php";
        $musica= new Musica();
        $musica->excluir($_POST['id']);
        header("Location:../view/cadmusicas.php");
    }
    //Ajax Gostei
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxGostei'])){
        include "../model/musica.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $idPlaylist=$_SESSION['idPlaylist'];
        $musica= new Musica();
        $musicaJa=$musica->verificarGostei($idPlaylist,$_POST['ajaxGostei']);
        if($musicaJa>=1){           
            $musica->gosteiUpData($idPlaylist,$_POST['ajaxGostei'],$date);
        }
        else{
            $musica->gostei($idPlaylist,$_POST['ajaxGostei'],$date);
        }
        
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxNaoGostei'])){
        include "../model/musica.class.php";
        session_start();
        $idPlaylist=$_SESSION['idPlaylist'];
        $musica= new Musica();
        $musica->naoGostei($idPlaylist,$_POST['ajaxNaoGostei']);
    }
?>