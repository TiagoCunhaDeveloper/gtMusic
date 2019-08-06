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
    <title>Usuários</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
  background:#000;
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
        function excluirUsuario(n,i){
           document.getElementById("nomeUsu").innerHTML=n;
           document.getElementById("idUsu").value=i;
            
        }
    </script>
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
                <a class="navbar-brand" href="../indexAdm.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

           <div class="right-div">
                   <?php
                     if(isset($_SESSION['login']) && $_SESSION['login']==true && $_SESSION['tipo']==1){
            include "bemVindoAdm.php";
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
        $menu=2;
        include "menuAdm.php";
    ?>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Usuários</h4>
                
                            </div>

        </div>
                <div class="modal fade" id="ModalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir o usuário <b><span id="nomeUsu"></span></b>?</h4></center>
                                           
                                        </div>
                                       
                                        <div class="modal-footer">
                                            <form action="../controller/usuario.php" method="POST">
                                           <input type="hidden" id="idUsu" name="id">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="submit" class="btn btn-primary" name="excluir">Sim</button>
                                            </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
               <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                     
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Data de Cadastro</th>
                                            <th>Ultimo acesso</th>
                                            <th>Playlist's</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $usuarios=$usuario->listarTodos();
                                            foreach($usuarios as $u){
                                                $idUsuario=$u['idUsuario'];
                                                $nome=$u['nome']." ".$u['sobreNome'];
                                                $email=$u['email'];
                                                $dataDeCadastro=date('d/m/Y',strtotime($u['dataDeCadastro']));
                                                $dataUltimoAcesso=date('d/m/Y',strtotime($u['DataUltimoAcesso']));
                                                $qtdProjetos=0;
                                                echo '  <tr class="odd gradeX">
                                            <td>'.$nome.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$dataDeCadastro.'</td>
                                            <td>'.$dataUltimoAcesso.'</td>
                                            <td class="center">'.$qtdProjetos.'</td>
                                            <td class="center"> <span data-toggle="tooltip" data-placement="right" title="Excluir"><a href="" onclick="excluirUsuario(\''.$nome.'\',\''.$idUsuario.'\')" data-toggle="modal" data-target="#ModalExcluir" class="btn btn-default btn-xs" ><i class="far fa-trash-alt"></i></a></span> </td>
                                        </tr>';
                                            }
                                        ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
          <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <script>
          $('#dataTables-example').DataTable( {
    responsive: true
} );
    </script>
    <script src="assets/js/custom.js"></script>
  <script src="js/pace.min.js"></script>
  
</body>
</html>
