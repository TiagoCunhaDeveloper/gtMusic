<?php
    include_once "conexao.php";

    class Usuario{
        private $idUsuario;
        private $nome;
        private $sobreNome;
        private $email;
        private $senha;
        private $DataUltimoAcesso;
        private $dataDeCadastro;
        private $perfil;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($i){
            $this->idUsuario = $i;
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        
        public function getSobreNome(){
            return $this->sobreNome;
        }
        public function setSobreNome($s){
            $this->sobreNome = $s;
        }
        
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($se){
            $this->senha = $se;
        }
        
        public function getDataUltimoAcesso(){
            return $this->DataUltimoAcesso;
        }
        public function setDataUltimoAcesso($d){
            $this->DataUltimoAcesso = $d;
        }
        
        public function getDataDeCadastro(){
            return $this->dataDeCadastro;
        }
        public function setDataDeCadastro($dc){
            $this->dataDeCadastro = $dc;
        }
        public function getPerfil(){
            return $this->perfil;
        }
        public function setPerfil($p){
            $this->perfil = $p;
        }
        //Fim getters and setters
        public function verificarExistencia($email){
            //Verifica se o email já foi cadastrado
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contEmail = sizeof($chmArray);
            return $contEmail>0;
        }
        public function login($email,$senha){
            //Login
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contUsu = sizeof($chmArray);
            return $contUsu>0;
        }
        public function capturaID($email,$senha){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $idUsuario=$ca['idUsuario'];
                $perfil=$ca['perfil'];
            }
            $array=array(1);
            $array[0]=$idUsuario;
            $array[1]=$perfil;
            return $array;
        }
        public function capturaNome($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario = '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $nome=$ca['nome'];
                $sobreNome=$ca['sobreNome'];
            }
            $primeiraLetra=substr($nome,0,1);
            $SegundaLetra=substr($sobreNome,0,1);
            $final=strtoupper($primeiraLetra).strtoupper($SegundaLetra);
            return $final;
        }
        public function inserir(){
            //Inserir usuario
            $this->conex->exec("INSERT INTO tb_usuario(nome,sobreNome,email,senha,DataUltimoAcesso,dataDeCadastro,perfil) VALUES ('$this->nome','$this->sobreNome','$this->email','$this->senha','$this->DataUltimoAcesso','$this->dataDeCadastro','$this->perfil')");
        }
        public function inserirPlaylistFavoritos($nomePlaylist,$imagemPlaylist,$dataCriacao,$fkUsuario,$status){
            $this->conex->exec("INSERT INTO tb_playlist(nomePlaylist,imagemPlaylist,dataCriacao,fkUsuario,status) VALUES ('$nomePlaylist','$imagemPlaylist','$dataCriacao','$fkUsuario','$status')");
        } 
        public function capturaPlaylistFavoritos($nomePlaylist,$fkUsuario){
           $result = $this->conex->query("SELECT idPlaylist FROM tb_playlist WHERE fkUsuario = '$fkUsuario' AND nomePlaylist='$nomePlaylist'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $idPlaylist=$ca['idPlaylist'];
            }
            return $idPlaylist;
        }
        public function listar($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario = '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $nome=$ca['nome'];
                $sobreNome=$ca['sobreNome'];
                $email=$ca['email'];
                $idUsuario=$ca['idUsuario'];
            }
            $array=array(3);
            $array[0]=$nome;
            $array[1]=$sobreNome;
            $array[2]=$email;
            $array[3]=$idUsuario;
            return $array;
        }
        public function editar($nome,$sobreNome,$email,$id){
            $this->conex->exec("UPDATE `tb_usuario` SET `nome` = '$nome',`sobreNome`='$sobreNome',`email`='$email' WHERE `tb_usuario`.`idUsuario` = $id");
        }
        public function alterarSenha($senha,$id){
            $this->conex->exec("UPDATE `tb_usuario` SET `senha` = '$senha' WHERE `tb_usuario`.`idUsuario` = $id");
        } 
        public function ultimoAcesso($id,$data){
            $this->conex->exec("UPDATE `tb_usuario` SET `DataUltimoAcesso` = '$data' WHERE `tb_usuario`.`idUsuario` = $id");
        }
        public function excluir($id){
            $this->conex->exec("DELETE FROM `tb_usuario` WHERE `tb_usuario`.`idUsuario` = $id");
        } 
        public function listarTodos(){
            $result = $this->conex->query("SELECT * FROM tb_usuario ORDER BY nome");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
        public function qtdUsers(){
            $result = $this->conex->query("SELECT * FROM tb_usuario");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function listarUsers($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario != '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $chmArray;
        }
    }
?>