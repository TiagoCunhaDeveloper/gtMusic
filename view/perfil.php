<?php
include "seguranca.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Meu perfil</title>
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
 .menu-section{
            border-bottom: 5px solid #428bca;
        }
	</style>
	<noscript>
	<meta http-equiv="Refresh" content="0;URL=erros/erroJava.html" />
	</noscript>	
	   <script>
        function verificarNome(nome) {
            var tamanhoNome = nome.length;
            if (tamanhoNome < 3) {
                document.getElementById("nome").className = "form-group has-error";
                document.getElementById("msgNome").innerHTML = '<p class="help-block">Tamanho minimo de 3 caracteres</p>';
                document.getElementById("botao").disabled = true;
            } else {
                document.getElementById("nome").className = "form-group has-success";
                document.getElementById("msgNome").innerHTML = '';
                 document.getElementById("botao").disabled = false;
            }
        }

        function verificarSobrenome(sobrenome) {
            var tamanhoSobrenome = sobrenome.length;
            if (tamanhoSobrenome < 3) {
                document.getElementById("sobrenome").className = "form-group has-error";
                document.getElementById("msgSobrenome").innerHTML = '<p class="help-block">Tamanho minimo de 3 caracteres</p>';
                document.getElementById("botao").disabled = true;
            } else {
                document.getElementById("sobrenome").className = "form-group has-success";
                document.getElementById("msgSobrenome").innerHTML = '';
                 document.getElementById("botao").disabled = false;
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
           setInterval("validaEmail()",0);
        }
           function validaEmail(){
                var msgEmail = document.getElementById("email").className;
           if(msgEmail=='form-group has-success' || msgEmail=='form-group'){
                      document.getElementById("botao").disabled = false;
               }
               else{
                    document.getElementById("botao").disabled = true;
               }
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
                    title: "Perfil alterado com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "",
                    autoHide: true
                });
               
           });
		   
   $('#demo-success1').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Senha alterada com sucesso!",
					 theme: "dark-theme",
					 position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "",
                    autoHide: true
                });
       });
            });
        
	</script>
    <?php
        if(isset($_SESSION['edit']) && $_SESSION['edit']==true){
            unset($_SESSION["edit"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success').trigger('click');});</script>";
        }
        if(isset($_SESSION['editS']) && $_SESSION['editS']==true){
            unset($_SESSION["editS"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success1').trigger('click');});</script>";
        }
    ?>
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
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
                         if($_SESSION['tipo']==1){
                 echo '<script>window.location.href="erros/erro_401.html";</script>';
            }
            else{
            include "bemVindo.php";
                  $usuarios= new Usuario();
$listar=$usuarios->listar($_SESSION['id_usuario']);
            }
           
                       
        }
        else{
             echo '<script>window.location.href="erros/erro_401.html";</script>';
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
                <h4 class="header-line">Perfil</h4>
            </div>

        </div>
          <div class="row">
          
<div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                       
                        <div class="panel-body">
                                 <form role="form" action="../controller/usuario.php" method="POST">       
                                <div class="form-group" id="nome">
                                    <label>Nome*</label>
                                    <input class="form-control" type="text" onchange="verificarNome(this.value)" <?php echo "value='".$listar[0]."'"; ?> name="nome" />
                                    <span id="msgNome"></span>
                                </div>
                                <div class="form-group" id="sobrenome">
                                    <label>Sobrenome*</label>
                                    <input class="form-control" type="text" onchange="verificarSobrenome(this.value)" <?php echo "value='".$listar[1]."'"; ?> name="sobreNome" />
                                    <span id="msgSobrenome"></span>
                                </div>
                                <div class="form-group" id="email">
                                    <label>E-mail*</label>
                                    <input class="form-control" type="email" onchange="verificarEmail(this.value)" <?php echo "value='".$listar[2]."'"; ?> name="email"/>
                                    <span id="msgEmail"></span>
                                </div>
                                <input type="hidden" <?php echo "value='".$listar[3]."'"; ?> name="id"/>
                                <a id="demo-success" style="display:none">Success notification</a>
                               
                                <button type="submit" class="btn btn-primary" name="alterarPerfil" id="botao" >Salvar</button>

                                  </form>  
                            </div>
                        </div>
                            </div>
                </div>
       
        <div class="row">
          
<div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                       <div class="panel-heading">
                           Alterar senha
                        </div>
                        <div class="panel-body">
                                 <form role="form" action="../controller/usuario.php" method="POST">           
                                <div class="form-group" id="senha">
                                    <label>Senha*</label>
                                    <input class="form-control"  type="password" onchange="verificarSenha(this.value)" minlength="6" id="inputSenha" name="senha" />
                                     <span id="msgSenha"></span>
                                </div>
                                <div class="form-group" id="confSenha">
                                    <label>Digite novamente sua senha*</label>
                                    <input class="form-control"  type="password" minlength="6" onchange="verificarConfSenha(this.value)" id="inputConfSenha" />
                                    <span id="msgConfSenha"></span>
                                </div>
                                 <a id="demo-success1" style="display:none">Success notification</a>
                                 <input type="hidden" <?php echo "value='".$listar[3]."'"; ?> name="id"/>
                                <button type="submit" class="btn btn-primary" name="alterarSenha">Salvar</button>

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
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    <script src="js/pace.min.js"></script>
     
</body>
</html>
