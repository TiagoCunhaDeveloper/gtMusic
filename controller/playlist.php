<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['criarAdd'])){
        include "../model/playlist.class.php";
        session_start();
        $idUsuario=$_SESSION['id_usuario'];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $playlist= new Playlist();
        $existe=$playlist->verificarExistencia(ucwords($_POST['nomePlaylist']),$idUsuario);
        $nomePlaylist=ucwords($_POST['nomePlaylist']);
        if($existe>=1 || $nomePlaylist=="Favoritos" ){
            $_SESSION['registrer']=false;
            if(isset($_POST['paginaMusica'])){
                header("Location: ../view/escutarMusica.php?m=".$_POST['paginaMusica']);
            }
            else{
                header("Location: ../index.php");
            }            
        }
        else{
            
                        
                $playlist->setNomePlaylist(ucwords($_POST['nomePlaylist']));
                $playlist->setDataCriacao($date);
                $playlist->setFkUsuario($idUsuario);
                $playlist->setStatus(0);
                $morango=$_FILES['imagemPlaylist'];
                $titulo_img = $morango['name'];
                $tmp        = $morango['tmp_name'];
                $formato    = pathinfo($titulo_img, PATHINFO_EXTENSION);
                $link = uniqid().".".$formato; 
                $upload = move_uploaded_file($tmp,"../view/imagens_sistema/imagens_playlist/".$link);
                $playlist->setImagemPlaylist($link);
                $playlist->inserir();
            $fkPlaylist=$playlist->capturaPlaylist($nomePlaylist,$idUsuario);
                $fkMusica=$_POST['fk_musica'];
                $playlist->addMusicaPlaylist($fkPlaylist,$fkMusica,$date);
                $_SESSION['registrer']=true;
                 if(isset($_POST['paginaMusica'])){
                header("Location: ../view/escutarMusica.php?m=".$_POST['paginaMusica']);
            }
            else{
                if(isset($_POST['paginaAllmusicas'])){
                   header("Location: ../view/musicas.php");  
                }
                else{
                   header("Location: ../index.php"); 
                }                
            }  
                       
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addPlaylist'])){
        include "../model/playlist.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $fkPlaylist=$_POST['playlists'];
        $bodytag = str_replace('{"matchedKey":"email","',"",$fkPlaylist);
        $final = str_replace(',"group":"teams"}',"",$bodytag);
        $final1 = str_replace('"name":"',"",$final);
        $final2 = str_replace('"email":"',"",$final1);
        $final3 = str_replace('id":',"",$final2);
        $final4 = str_replace('"',"",$final3);
        $final5 = str_replace('[',"",$final4);
        $final6 = str_replace(']',"",$final5);
        $teste=explode (",",$final6);
        $result = count($teste)-3;
        $playlist= new Playlist();
        for ($i = 0;$i<=$result;) {
            @$finalMsm=$teste[$i];
            $i=$i+3;
            $jaFoiCadastrada=$playlist->verificarMusicaAdd($finalMsm,$_POST['fk_musica']);
            if($jaFoiCadastrada >=1){
                
            }
            else{
               $playlist->addMusicaPlaylist($finalMsm,$_POST['fk_musica'],$date); 
            }
        }
        $_SESSION['registrers']=true;
        if(isset($_POST['paginaMusica'])){
                header("Location: ../view/escutarMusica.php?m=".$_POST['paginaMusica']);
            }
            else{
                if(isset($_POST['paginaPlaylist'])){
                    header("Location: ../view/minhasplaylists.php?p=".$_POST['p']);
                }
                else{
                    if(isset($_POST['paginaAllmusicas'])){
                         header("Location: ../view/musicas.php");  
                    }
                    else{
                        if(isset($_POST['paginaEscutarPlaylist'])){
                            header("Location: ../view/escutarPlaylist.php?p=".$_POST['p']."&n=".$_POST['n']);
                        }
                        else{
                            header("Location: ../index.php");
                        }                         
                    } 
                }                
            }   
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['criar'])){
        include "../model/playlist.class.php";
        session_start();
        $idUsuario=$_SESSION['id_usuario'];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $playlist= new Playlist();
        $existe=$playlist->verificarExistencia(ucwords($_POST['nomePlaylist']),$idUsuario);
        $nomePlaylist=ucwords($_POST['nomePlaylist']);
        if($existe>=1 || $nomePlaylist=="Favoritos" ){
            $_SESSION['registrer']=false;
            header("Location: ../view/minhasplaylists.php");
        }
        else{
            $playlist->setNomePlaylist(ucwords($_POST['nomePlaylist']));
            $playlist->setDataCriacao($date);
            $playlist->setFkUsuario($idUsuario);
            $playlist->setStatus(0);
            $morango=$_FILES['imagemPlaylist'];
            $titulo_img = $morango['name'];
            $tmp        = $morango['tmp_name'];
            $formato    = pathinfo($titulo_img, PATHINFO_EXTENSION);
            $link = uniqid().".".$formato; 
            $upload = move_uploaded_file($tmp,"../view/imagens_sistema/imagens_playlist/".$link);
            $playlist->setImagemPlaylist($link);
            $playlist->inserir();
            $_SESSION['registrer']=true;
            header("Location: ../view/minhasplaylists.php");
                       
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['renomear'])){
        include "../model/playlist.class.php";
        session_start();
        $playlist= new Playlist();
        $playlist->renomear(ucwords($_POST['nomePlaylist']),$_POST['idPlaylist']);
        $_SESSION['renomear']=true;
        header("Location: ../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir'])){
        include "../model/playlist.class.php";
        session_start();
        $playlist= new Playlist();
        $playlist->excluir($_POST['idPlaylist']);
        $playlist->excluirMusica($_POST['idPlaylist']);
        $_SESSION['excluir']=true;
        header("Location: ../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compartilhar'])){
        include "../model/playlist.class.php";
        session_start();
        $idUsuario=$_SESSION['id_usuario'];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $playlist= new Playlist();
        $usuarios=$_POST['usuarios'];
        $bodytag = str_replace('{"matchedKey":"email","',"",$usuarios);
        $final = str_replace(',"group":"teams"}',"",$bodytag);
        $final1 = str_replace('"name":"',"",$final);
        $final2 = str_replace('"email":"',"",$final1);
        $final3 = str_replace('id":',"",$final2);
        $final4 = str_replace('"',"",$final3);
        $final5 = str_replace('[',"",$final4);
        $final6 = str_replace(']',"",$final5);
        $teste=explode (",",$final6);
        $result = count($teste)-3;
        
        for ($i = 0;$i<=$result;) {
            @$finalMsm=$teste[$i];
            $i=$i+3;
            $foiCompart=$playlist->verificarPlaylistCompart($idUsuario,$finalMsm,$_POST['fkPlaylist']);
            if($foiCompart >= 1){
                
            }
            else{
                $playlist->compartilhar($idUsuario,$finalMsm,$_POST['fkPlaylist'],$date); 
            }
        }
        $_SESSION['compartilhar']=true;
        header("Location: ../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxCompartilhados'])){
        include "../model/playlist.class.php";
        $playlist= new Playlist();
        $compartilhados=$playlist->listarCompartilhados($_POST['ajaxCompartilhados']);
        echo '<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Data de compartilhamento</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
        foreach($compartilhados as $c){
            $nome = $c['nome']." ".$c['sobreNome'];
            $email=$c['email'];
            $dataCompartilhamento=date('d/m/Y',strtotime($c['dataCompartilhamento']));
            echo '
                                        <tr>
                                            <td>'.$nome.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$dataCompartilhamento.'</td>
                                        </tr>
                              ';
        }
        echo '  
                                    </tbody>
                                </table>
                            </div>';
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remover'])){
        include "../model/playlist.class.php";
        session_start();
        $idUsuario=$_SESSION['id_usuario'];
        $playlist= new Playlist();
        $playlist->excluirCompartilhamento($idUsuario,$_POST['idPlaylist']);
        $_SESSION['excluir']=true;
        header("Location: ../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['baixar'])){
        include "../model/playlist.class.php";
    	$nomePlaylist=$_POST['nomePlaylist'];
        $playlist= new Playlist();
        $musicas=$playlist->selecionarMusicasPlaylist($_POST['idPlaylist']);
        $diretorio1 = getcwd().'/musicas/';
        $diretorio=str_replace("controller","view",$diretorio1);
        $zip = new ZipArchive();
        if($zip->open($nomePlaylist.'.zip', ZIPARCHIVE::CREATE) == TRUE){
            foreach($musicas as $m){
                $diretorioM=str_replace("view/musicas/","",$m['diretorio']);
                $nomeMusica=$m['nomeMusica'].".mp3";
                $zip->addFile($diretorio.''.$diretorioM,$nomeMusica);
            }            
        }
        $zip->close();
        $arquivo=$nomePlaylist.".zip";
        header("Content-Type: application/octetstream");
		header("Content-Disposition: attachment; filename=" . basename($arquivo));
		header("Pragma: no-cache");
		header("Expires: 0");
		header("Content-Length: " . filesize($arquivo));

		readfile($arquivo);
		unlink($arquivo);
		header("Location:../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['copiar'])){
        include "../model/playlist.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $fkPlaylist=$_POST['playlists'];
        $bodytag = str_replace('{"matchedKey":"email","',"",$fkPlaylist);
        $final = str_replace(',"group":"teams"}',"",$bodytag);
        $final1 = str_replace('"name":"',"",$final);
        $final2 = str_replace('"email":"',"",$final1);
        $final3 = str_replace('id":',"",$final2);
        $final4 = str_replace('"',"",$final3);
        $final5 = str_replace('[',"",$final4);
        $final6 = str_replace(']',"",$final5);
        $teste=explode (",",$final6);
        $result = count($teste)-3;
        $playlist= new Playlist();
        $musicas=$playlist->selecionarMusicasPlaylist($_POST['idPlaylist']);
        for ($i = 0;$i<=$result;) {
            @$finalMsm=$teste[$i];
            $i=$i+3;
            foreach($musicas as $m){
                $jaFoiCadastrada=$playlist->verificarMusicaAdd($finalMsm,$m['fkMusica']);
                if($jaFoiCadastrada >=1){

                }
                else{
                   $playlist->addMusicaPlaylist($finalMsm,$m['fkMusica'],$date); 
                }
            }            
        }
        $_SESSION['copiar']=true;
        header("Location: ../view/minhasplaylists.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxStatus'])){
        include "../model/playlist.class.php";
        $playlist= new Playlist();
        $publica=$playlist->verificarAjaxStatus($_POST['ajaxStatus']);
        if($publica >=1){
            $playlist->ajaxStatus($_POST['ajaxStatus'],0);
        }
        else{
            $playlist->ajaxStatus($_POST['ajaxStatus'],1);
        }        
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluirMusicaPlaylist'])){
        include "../model/playlist.class.php";
        session_start();
        $playlist= new Playlist();
        $playlist->excluirMusicaPlaylist($_POST['idPlaylist'],$_POST['fkMusica']);
        $_SESSION['excluirMP']=true;
        header("Location: ../view/minhasplaylists.php?p=".$_POST['idPlaylist']);  
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxLink'])){
        include "../model/playlist.class.php";
        $hash=md5(uniqid(rand(), true));
        $playlist= new Playlist();
        $linkJaExiste=$playlist->verificarLink($_POST['ajaxLink'],$_POST['idUsuario']);
        if($linkJaExiste>=1){
            $playlist->atualizarLink($_POST['ajaxLink'],$hash,$_POST['idUsuario']);
        }
        else{
            $playlist->gerarLink($_POST['ajaxLink'],$hash,$_POST['idUsuario'],0,null);
        }        
        echo '<input class="form-control" type="text" value="127.0.0.1:85/Faculdade/Projeto/Gt%20Music/view/escutarMusica.php?m='.$hash.'" readonly>';
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxGosteiPlaylist'])){
        include "../model/playlist.class.php";
        session_start();
        $idUsuario=$_SESSION['id_usuario'];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $playlist= new Playlist();
        $usuario=$_POST['usuario'];
        $foiCompart=$playlist->verificarPlaylistCompart($usuario,$idUsuario,$_POST['fkPlaylist']);
        if($foiCompart >= 1){
                $playlist->excluirCompartilhamento($idUsuario,$_POST['fkPlaylist']);
        }
        else{
                $playlist->compartilhar($usuario,$idUsuario,$_POST['fkPlaylist'],$date); 
        }      
    }
?>