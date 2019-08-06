<?php
session_start();
?>
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Login/Cadastro</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="shortcut icon" href="assets/img/icon.png">
    <style>
        /* This is a compiled file, you should be editing the file in the templates directory */

        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;

            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .pace-inactive {
            display: none;
        }

        .pace .pace-progress {
            background: #000;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 2px;
        }

        .menu-section {
            border-bottom: 5px solid #428bca;
        }
    </style>
    <noscript>
	<meta http-equiv="Refresh" content="0;URL=erros/erroJava.html" />
	</noscript>
   <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script>
        function verificarNome(nome) {
            var tamanhoNome = nome.length;
            if (tamanhoNome < 3) {
                document.getElementById("nome").className = "form-group has-error";
                document.getElementById("msgNome").innerHTML = '<p class="help-block">Tamanho minimo de 3 caracteres</p>';
            } else {
                document.getElementById("nome").className = "form-group has-success";
                document.getElementById("msgNome").innerHTML = '';
            }
        }

        function verificarSobrenome(sobrenome) {
            var tamanhoSobrenome = sobrenome.length;
            if (tamanhoSobrenome < 3) {
                document.getElementById("sobrenome").className = "form-group has-error";
                document.getElementById("msgSobrenome").innerHTML = '<p class="help-block">Tamanho minimo de 3 caracteres</p>';
            } else {
                document.getElementById("sobrenome").className = "form-group has-success";
                document.getElementById("msgSobrenome").innerHTML = '';
            }
        }

        function verificarEmail(email) {
            $.ajax
         ({
         type:'POST',
         url:'../controller/usuario.php',
         data:'ajaxEmail='+email,
         success:function(html)
         {
         
         $('#msgEmail').html(html);
         
         }
		  });
        }

        function verificarSenha(senha) {
            var tamanhoSenha = senha.length;
            var inputConfSenha = document.getElementById("inputConfSenha");
            if (inputConfSenha != "") {
                var senha_digitada = document.getElementById("inputSenha").value;
                if (senha_digitada != senha) {
                    document.getElementById("confSenha").className = "form-group has-error";
                    document.getElementById("msgConfSenha").innerHTML = '<p class="help-block">As senhas não conferem</p>';
                    document.getElementById("inputSenha").focus();
                } else {
                    document.getElementById("confSenha").className = "form-group has-success";
                    document.getElementById("msgConfSenha").innerHTML = '';
                }
            }
            if (tamanhoSenha < 6) {
                document.getElementById("senha").className = "form-group has-error";
                document.getElementById("msgSenha").innerHTML = '<p class="help-block">Tamanho minimo de 6 caracteres</p>';
            } else {
                document.getElementById("senha").className = "form-group has-success";
                document.getElementById("msgSenha").innerHTML = '';
            }
        }

        function verificarConfSenha(senha) {
            var senha_digitada = document.getElementById("inputSenha").value;
            if (senha_digitada != senha) {
                document.getElementById("confSenha").className = "form-group has-error";
                document.getElementById("msgConfSenha").innerHTML = '<p class="help-block">As senhas não conferem</p>';
                document.getElementById("inputSenha").focus();
            } else {
                document.getElementById("confSenha").className = "form-group has-success";
                document.getElementById("msgConfSenha").innerHTML = '';
            }
             var nome = document.getElementById("nome").className;
            var sobrenome = document.getElementById("sobrenome").className;
            var email = document.getElementById("email").className;
            var senha = document.getElementById("senha").className;
            var confSenha = document.getElementById("confSenha").className;
            if (nome == "form-group has-success" && sobrenome == "form-group has-success" && email == "form-group has-success" && senha == "form-group has-success" && confSenha == "form-group has-success") {
                document.getElementById("botao").disabled = false;
            } else {
                document.getElementById("botao").disabled = true;
            }
        }

        function verificaFormulario() {
            var nome = document.getElementById("nome").className;
            var sobrenome = document.getElementById("sobrenome").className;
            var email = document.getElementById("email").className;
            var senha = document.getElementById("senha").className;
            var confSenha = document.getElementById("confSenha").className;
            if (nome == "form-group has-success" && sobrenome == "form-group has-success" && email == "form-group has-success" && senha == "form-group has-success" && confSenha == "form-group has-success") {
                document.getElementById("botao").disabled = false;
            } else {
                document.getElementById("botao").disabled = true;
            }
        }
    </script>
        <link href="css/jquery.notify.css" type="text/css" rel="stylesheet" />
    
    <!--jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.notify.min.js"></script>
    <script>
	   $(document).ready(function(e) {

		   $('#demo-success').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Cadastro realizado com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "Para acessar o sistema, efetue login.",
                    autoHide: true
                });
               
           });
		   
   $('#demo-error').on('click', function(){
                notify({
                    type: "error", //alert | success | error | warning | info
                    title: "Login incorreto",
					 theme: "dark-theme",
					 position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/error.png" />',
                    message: "E-mail e/ou senha incorreto(os)!",
                    autoHide: true
                });
       });
            });
	</script>
    <?php
        if(isset($_SESSION['registrer']) && $_SESSION['registrer']==true){
            unset($_SESSION["registrer"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success').trigger('click');});</script>";
        }
       if(isset($_SESSION['login']) && $_SESSION['login']==false){
            unset($_SESSION["login"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error').trigger('click');});</script>";
        }
    ?>
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                 <?php
                     if(isset($_SESSION['login']) && $_SESSION['login']==true){
            echo "<script> window.location.href = '../index.php';</script>";
        }
        else{
            echo '<a href="login.php" class="btn btn-primary pull-right">Login/Cadastro</a>';
        }
                ?>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <?php
        $menu=0;
        include "menu.php";
    ?>
        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">

                <!-- FORM AQUI -->

                    <div class="row pad-botm">
                        <div class="col-md-12">
                            <h4 class="header-line">Login/Cadastro</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Login
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="../controller/usuario.php" method="POST">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="email" autofocus required name="email" />
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input class="form-control" type="password" required name="senha" />
                                        </div>
                                        <button type="submit" class="btn btn-info" name="logar">Entrar</button>

                                    </form>
                                </div>

                                <a id="demo-success" style="display:none">Success notification</a>
                                <a id="demo-error" style="display:none">Error notification</a>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Cadastro
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="../controller/usuario.php" method="POST">
                                        <div class="form-group" id="nome" onmouseover="verificaFormulario()" required>
                                            <label>Nome*</label>
                                            <input class="form-control" type="text" onchange="verificarNome(this.value)" required name="nome"/>
                                            <span id="msgNome"></span>
                                        </div>
                                        <div class="form-group" id="sobrenome" onmouseover="verificaFormulario()">
                                            <label>Sobrenome*</label>
                                            <input class="form-control" type="text" onchange="verificarSobrenome(this.value)" required name="sobreNome"/>
                                            <span id="msgSobrenome"></span>
                                        </div>
                                        <div class="form-group" id="email" onmouseover="verificaFormulario()">
                                            <label>E-mail*</label>
                                            <input class="form-control" type="email" onchange="verificarEmail(this.value)" required name="email"/>
                                            <span id="msgEmail"></span>
                                        </div>
                                        <div class="form-group" id="senha" onmouseover="verificaFormulario()">
                                            <label>Senha*</label>
                                            <input class="form-control" type="password" onchange="verificarSenha(this.value)" minlength="6" id="inputSenha" required name="senha" />
                                            <span id="msgSenha" ></span>
                                        </div>
                                        <div class="form-group" id="confSenha" onmouseover="verificaFormulario()">
                                            <label>Digite novamente sua senha*</label>
                                            <input class="form-control" type="password" minlength="6" onchange="verificarConfSenha(this.value)" id="inputConfSenha" required />
                                            <span id="msgConfSenha"></span>
                                        </div>

                                        <button type="submit" class="btn btn-primary" id="botao" onmouseover="verificaFormulario()" name="cadastrar">Cadastrar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
        <!-- CONTENT-WRAPPER SECTION END-->
        <?php
            include "footer.php";
        ?>
        <!-- FOOTER SECTION END-->
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script>$.noConflict();</script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS  -->
        <script src="assets/js/custom.js"></script>
        <script src="js/pace.min.js"></script>
</body>

</html>