<?php
    include_once "conexao.php";

    class Musica{
        private $idMusica;
        private $nomeMusica;
        private $artista;
        private $album;
        private $anoLancamento;
        private $dataCad;
        private $diretorio;
        private $imgAlbum;
        private $genero;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdMusica(){
            return $this->idMusica;
        }
        public function setIdMusica($i){
            $this->idMusica = $i;
        }
        
        public function getNomeMusica(){
            return $this->nomeMusica;
        }
        public function setNomeMusica($n){
            $this->nomeMusica = $n;
        }
        
        public function getArtista(){
            return $this->artista;
        }
        public function setArtista($ar){
            $this->artista = $ar;
        }
        
        public function getAlbum(){
            return $this->album;
        }
        public function setAlbum($al){
            $this->album = $al;
        }
        
        public function getAnoLancamento(){
            return $this->anoLancamento;
        }
        public function setAnoLancamento($ano){
            $this->anoLancamento = $ano;
        }
            
        public function getDataCad(){
            return $this->dataCad;
        }
        public function setDataCad($dc){
            $this->dataCad = $dc;
        }
        
        public function getDiretorio(){
            return $this->diretorio;
        }
        public function setDiretorio($di){
            $this->diretorio = $di;
        }
        
        public function getImgAlbum(){
            return $this->imgAlbum;
        }
        public function setImgAlbum($ia){
            $this->imgAlbum = $ia;
        }
        
        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($g){
            $this->genero = $g;
        }
       
        public function inserir(){
            //Inserir musica
            $this->conex->exec("INSERT INTO tb_musica(nomeMusica,artista,album,anoLancamento,dataCad,diretorio,imgAlbum,genero) VALUES ('$this->nomeMusica','$this->artista','$this->album','$this->anoLancamento','$this->dataCad','$this->diretorio','$this->imgAlbum','$this->genero')");
        }
        public function listarTodos(){
            $result = $this->conex->query("SELECT * FROM tb_musica ORDER BY nomeMusica");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarRecomendados($idMusica){
            $result = $this->conex->query("SELECT * FROM tb_musica WHERE idMusica != '$idMusica' ORDER BY dataCad DESC LIMIT 4");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function listarUltimasCadastradas($dataI,$dataf){
            $result = $this->conex->query("SELECT * FROM tb_musica WHERE dataCad BETWEEN '$dataf' AND '$dataI' GROUP BY dataCad");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function qtdMusicasData($dataCad){
            $result = $this->conex->query("SELECT * FROM tb_musica WHERE dataCad='$dataCad'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function qtdMusicas(){
            $result = $this->conex->query("SELECT * FROM tb_musica");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function excluir($id){
            $this->conex->exec("DELETE FROM `tb_musica` WHERE `tb_musica`.`idMusica` = $id");
        }
        public function editar($nomeMusica,$artista,$anoLancamento,$genero,$id){
            $this->conex->exec("UPDATE `tb_musica` SET `nomeMusica` = '$nomeMusica',`artista`='$artista',`anoLancamento`='$anoLancamento',`genero`='$genero' WHERE `tb_musica`.`idMusica` = $id");
        }
        public function gostei($fkPlaylist,$fkMusica,$dataAddPlaylist){
            //Inserir musica
            $this->conex->exec("INSERT INTO tb_musicas_playlist(fkPlaylist,fkMusica,dataAddPlaylist) VALUES ('$fkPlaylist','$fkMusica','$dataAddPlaylist')");
        }
        public function naoGostei($fkPlaylist,$fkMusica){
            $this->conex->exec("DELETE FROM `tb_musicas_playlist` WHERE `tb_musicas_playlist`.`fkPlaylist`='$fkPlaylist' AND `tb_musicas_playlist`.`fkMusica`= '$fkMusica'");
        }
        public function gosteiUpData($fkPlaylist,$fkMusica,$dataAddPlaylist){
            $this->conex->exec("UPDATE `tb_musicas_playlist` SET `dataAddPlaylist` = '$dataAddPlaylist' WHERE fkPlaylist='$fkPlaylist' AND fkMusica= '$fkMusica'");
        }
        public function verificarGostei($fkPlaylist,$fkMusica){
            $result = $this->conex->query("SELECT * FROM tb_musicas_playlist WHERE fkPlaylist='$fkPlaylist' AND fkMusica= '$fkMusica'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function listarMusica($hash){
            $result = $this->conex->query("SELECT * FROM tb_link_compartilhado INNER JOIN tb_musica ON tb_link_compartilhado.fkMusica = tb_musica.idMusica WHERE hash = '$hash'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function verificarHash($hash){
            $result = $this->conex->query("SELECT * FROM tb_link_compartilhado INNER JOIN tb_musica ON tb_link_compartilhado.fkMusica = tb_musica.idMusica WHERE hash = '$hash'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function upLink($hash,$data){
            $this->conex->exec("UPDATE `tb_link_compartilhado` SET `numeroVisualizacao` = numeroVisualizacao + 1,`dataUltimaVisualizacao` = '$data' WHERE hash='$hash'");
        }
        public function procurarMusica($musica){
            $result = $this->conex->query("SELECT * FROM tb_musica WHERE nomeMusica LIKE '$musica%' ");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
    }
?>