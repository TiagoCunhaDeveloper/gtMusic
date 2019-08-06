<?php
    include_once "conexao.php";

    class Playlist{
        private $idPlaylist;
        private $nomePlaylist;
        private $imagemPlaylist;
        private $dataCriacao;
        private $fkUsuario;
        private $status;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdPlaylist(){
            return $this->idPlaylist;
        }
        public function setIdPlaylist($i){
            $this->idPlaylist = $i;
        }
        
        public function getNomePlaylist(){
            return $this->nomePlaylist;
        }
        public function setNomePlaylist($n){
            $this->nomePlaylist = $n;
        }
        
        public function getImagemPlaylist(){
            return $this->imagemPlaylist;
        }
        public function setImagemPlaylist($i){
            $this->imagemPlaylist = $i;
        }
        
        public function getDataCriacao(){
            return $this->dataCriacao;
        }
        public function setDataCriacao($d){
            $this->dataCriacao = $d;
        }
        
        public function getFkUsuario(){
            return $this->fkUsuario;
        }
        public function setFkUsuario($f){
            $this->fkUsuario = $f;
        }
            
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($s){
            $this->status = $s;
        }
        
        public function inserir(){
            $this->conex->exec("INSERT INTO tb_playlist(nomePlaylist,imagemPlaylist,dataCriacao,fkUsuario,status) VALUES ('$this->nomePlaylist','$this->imagemPlaylist','$this->dataCriacao','$this->fkUsuario','$this->status')");
        } 
        public function compartilhar($fkUsuarioEnviou,$fkUsuarioRecebeu,$fkPlaylist,$dataCompartilhamento){
            $this->conex->exec("INSERT INTO tb_compartilhados(fkUsuarioEnviou,fkUsuarioRecebeu,fkPlaylist,dataCompartilhamento) VALUES ('$fkUsuarioEnviou','$fkUsuarioRecebeu','$fkPlaylist','$dataCompartilhamento')");
        }
        public function addMusicaPlaylist($fkPlaylist,$fkMusica,$dataAddPlaylist){
            $this->conex->exec("INSERT INTO tb_musicas_playlist(fkPlaylist,fkMusica,dataAddPlaylist) VALUES ('$fkPlaylist','$fkMusica','$dataAddPlaylist')");
        }
        public function capturaPlaylist($nomePlaylist,$fkUsuario){
           $result = $this->conex->query("SELECT idPlaylist FROM tb_playlist WHERE fkUsuario = '$fkUsuario' AND nomePlaylist='$nomePlaylist'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $idPlaylist=$ca['idPlaylist'];
            }
            return $idPlaylist;
        }
        public function verificarExistencia($nomePlaylist,$fkUsuario){
            $result = $this->conex->query("SELECT * FROM tb_playlist WHERE nomePlaylist = '$nomePlaylist' AND fkUsuario='$fkUsuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contplaylist = sizeof($chmArray);
            return $contplaylist>0;
        }
        public function verificarMusicaAdd($fkPlaylist,$fkMusica){
            $result = $this->conex->query("SELECT * FROM tb_musicas_playlist WHERE fkPlaylist='$fkPlaylist' AND fkMusica= '$fkMusica'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function verificarPlaylistCompart($fkUsuarioEnviou,$fkUsuarioRecebeu,$fkPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados WHERE fkUsuarioEnviou='$fkUsuarioEnviou' AND fkUsuarioRecebeu= '$fkUsuarioRecebeu' AND fkPlaylist= '$fkPlaylist' ");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function qtdCompartilhada($fkPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados WHERE fkPlaylist= '$fkPlaylist' ");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function verificarPlaylistCompartF($fkUsuarioEnviou,$fkPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados WHERE fkUsuarioEnviou='$fkUsuarioEnviou' AND fkPlaylist= '$fkPlaylist' ");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function verificarPlaylistCompartF1($fkUsuarioEnviou,$fkPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados WHERE fkUsuarioRecebeu='$fkUsuarioEnviou' AND fkPlaylist= '$fkPlaylist' ");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function listarPlaylist($fk_usuario){
            $result = $this->conex->query("SELECT * FROM tb_playlist WHERE fkUsuario='$fk_usuario' AND nomePlaylist !='Favoritos'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarPlaylistF($fk_usuario){
            $result = $this->conex->query("SELECT * FROM tb_playlist WHERE fkUsuario='$fk_usuario' ORDER BY idPlaylist  ASC");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        } 
        public function selecionarPlaylist($idPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_playlist INNER JOIN tb_usuario ON tb_playlist.fkUsuario = tb_usuario.idUsuario WHERE idPlaylist='$idPlaylist'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function selecionarPlaylistPublicas($idPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_playlist INNER JOIN tb_usuario ON tb_playlist.fkUsuario = tb_usuario.idUsuario WHERE idPlaylist='$idPlaylist' AND status = 0");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarPlaylistCompart($fk_usuario){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados INNER JOIN tb_playlist ON tb_compartilhados.fkPlaylist = tb_playlist.idPlaylist
            INNER JOIN tb_usuario ON tb_compartilhados.fkUsuarioEnviou = tb_usuario.idUsuario
            WHERE fkUsuarioRecebeu='$fk_usuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarCompartilhados($fkPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_compartilhados INNER JOIN tb_usuario ON tb_compartilhados.fkUsuarioRecebeu = tb_usuario.idUsuario WHERE fkPlaylist='$fkPlaylist'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarAllPlaylist(){
            $result = $this->conex->query("SELECT * FROM tb_playlist");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function qtdMusicasPlaylist($idPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_musicas_playlist WHERE fkPlaylist=$idPlaylist");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function selecionarMusicasPlaylist($idPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_musicas_playlist INNER JOIN tb_musica ON tb_musicas_playlist.fkMusica = tb_musica.idMusica  WHERE fkPlaylist=$idPlaylist");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function renomear($nomePlaylist,$idPlaylist){
            $this->conex->exec("UPDATE `tb_playlist` SET `nomePlaylist` = '$nomePlaylist' WHERE `tb_playlist`.`idPlaylist` = $idPlaylist");
        }
        public function ajaxStatus($idPlaylist,$status){
            $this->conex->exec("UPDATE `tb_playlist` SET `status` = '$status' WHERE `tb_playlist`.`idPlaylist` = $idPlaylist");
        }
        public function verificarAjaxStatus($idPlaylist){
            $result = $this->conex->query("SELECT * FROM tb_playlist WHERE idPlaylist=$idPlaylist AND status = 1");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function excluir($idPlaylist){
            $this->conex->exec("DELETE FROM `tb_playlist` WHERE `tb_playlist`.`idPlaylist` = $idPlaylist");
        } 
        public function excluirMusica($idPlaylist){
            $this->conex->exec("DELETE FROM `tb_musicas_playlist` WHERE `tb_musicas_playlist`.`fkPlaylist` = $idPlaylist");
        }
        public function excluirCompartilhamento($idUsuario,$idPlaylist){
            $this->conex->exec("DELETE FROM `tb_compartilhados` WHERE `tb_compartilhados`.`fkUsuarioRecebeu` = '$idUsuario' AND `tb_compartilhados`.`fkPlaylist` = '$idPlaylist' ");
        }
        public function excluirMusicaPlaylist($fkPlaylist,$fkMusica){
            $this->conex->exec("DELETE FROM `tb_musicas_playlist` WHERE `tb_musicas_playlist`.`fkPlaylist`='$fkPlaylist' AND `tb_musicas_playlist`.`fkMusica`= '$fkMusica'");
        }
        public function gerarLink($fkMusica,$hash,$fkUsuario,$numeroVisualizacao,$dataUltimaVisualizacao){
            $this->conex->exec("INSERT INTO tb_link_compartilhado(fkMusica,hash,fkUsuario,numeroVisualizacao,dataUltimaVisualizacao) VALUES ('$fkMusica','$hash','$fkUsuario','$numeroVisualizacao','$dataUltimaVisualizacao')");
        }
        public function verificarLink($fkMusica,$fkUsuario){
            $result = $this->conex->query("SELECT * FROM tb_link_compartilhado WHERE fkMusica='$fkMusica' AND fkUsuario= '$fkUsuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function atualizarLink($fkMusica,$hash,$fkUsuario){
            $this->conex->exec("UPDATE `tb_link_compartilhado` SET `hash` = '$hash' WHERE `tb_link_compartilhado`.`fkMusica` = '$fkMusica' AND `tb_link_compartilhado`.`fkUsuario` = '$fkUsuario'");
        }
        public function listarPlaylistPublicas($idUsuario){
            $result = $this->conex->query("SELECT * FROM tb_playlist INNER JOIN tb_usuario ON tb_playlist.fkUsuario = tb_usuario.idUsuario WHERE status='0' AND fkUsuario !='$idUsuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
    }
?>