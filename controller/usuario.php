<?php
    //Cadastro do usuário
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastrar'])){
        include "../model/usuario.class.php";
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $usuario= new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setSobreNome($_POST['sobreNome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha(hash('sha512',$_POST['senha']));
        $usuario->setDataDeCadastro($date);
        $usuario->setDataUltimoAcesso(null);
        $usuario->setPerfil(0);
        $usuario->inserir();
        $idUsuario=$usuario->capturaID($_POST['email'],hash('sha512',$_POST['senha']));
        $usuario->inserirPlaylistFavoritos("Favoritos","star.svg",$date,$idUsuario[0],1);
        session_start();
        $_SESSION['registrer']=true;
        header("Location: ../view/login.php");
    }
    //Ajax email
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxEmail'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        if($usuario->verificarExistencia($_POST['ajaxEmail'])>=1){
            echo '<script>document.getElementById("email").className = "form-group has-error";</script><p class="help-block">Email já cadastrado</p>';
        }
        else{
             echo '<script>document.getElementById("email").className = "form-group has-success";</script>';
        }
    }
    //Login
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logar'])){
        include "../model/usuario.class.php";
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $usuario= new Usuario();
        if($usuario->login($_POST['email'],hash('sha512',$_POST['senha']))>=1){
            $id=$usuario->capturaID($_POST['email'],hash('sha512',$_POST['senha']));
            $ultimoAcesso=$usuario->ultimoAcesso($id[0],$date);
            $idPlaylist=$usuario->capturaPlaylistFavoritos("Favoritos",$id[0]);
            session_start();
            $_SESSION["sessiontime"] = time() + 3600;
            $_SESSION['login']=true;
            $_SESSION['id_usuario']=$id[0];
            $_SESSION['idPlaylist']=$idPlaylist;
            $_SESSION['tipo']=$id[1];
            $ip=$_SERVER["REMOTE_ADDR"];
            setcookie("IP", $ip, time()+3600);//1 Hora
            if($id[1]==0){
                header("Location: ../index.php");    
            }
            else{
                header("Location: ../indexAdm.php");
            }
        }
        else{
            session_start();
            $_SESSION['login']=false;
            header("Location: ../view/login.php");
        }
    }
    //Alterar perfil 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterarPerfil'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        $usuario->editar($_POST['nome'],$_POST['sobreNome'],$_POST['email'],$_POST['id']);
        session_start();
        $_SESSION['edit']=true;
        header("Location: ../view/perfil.php");
    }
    //Alterar perfil 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterarSenha'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        $usuario->alterarSenha(hash('sha512',$_POST['senha']),$_POST['id']);
        session_start();
        $_SESSION['editS']=true;
        header("Location: ../view/perfil.php");
    }
    //Excluir
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        $usuario->excluir($_POST['id']);
        header("Location:../view/usuarios.php");
    }
?>