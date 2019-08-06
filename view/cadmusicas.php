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
    <title>Músicas</title>
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
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	   <script>
    	$(document).ready(function(){
			    $('#file-input').on('change', function(){ //on file input change
			        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			        {
			            $('#thumb-output').html(''); //clear html of output element
                        var nomeImg=document.getElementById("file-input").value;
                        document.getElementById("selectImg").innerHTML=nomeImg.replace("C:\\fakepath\\","");
			            var data = $(this)[0].files; //this file data
			            
			            $.each(data, function(index, file){ //loop though each file
			                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
			                    var fRead = new FileReader(); //new filereader
			                    fRead.onload = (function(file){ //trigger function on successful read
			                    return function(e) {
			                        var img = $('<img width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer" />').addClass('thumb').attr('src', e.target.result); //create image element 
			                        $('#thumb-output').append(img); //append image to output element
			                    };
			                    })(file);
			                    fRead.readAsDataURL(file); //URL representing the file's data.
			                }
			            });
			            
			        }else{
			           // alert("Seu navegador não suporta a API!"); //if File API is absent
			        }
			    });
			});
    </script>
    <script>
        function escolherImagem(){
            $('#file-input').trigger('click');
        }
    </script>
    <script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
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
                    message: "",
                    autoHide: true
                });
               
           });
            $('#demo-error').on('click', function(){
               notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Alterado com sucesso!",
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
        if(isset($_SESSION['registrer']) && $_SESSION['registrer']==true){
            unset($_SESSION["registrer"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success').trigger('click');});</script>";
        }
        if(isset($_SESSION['edit']) && $_SESSION['edit']==true){
            unset($_SESSION["edit"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error').trigger('click');});</script>";
        }
    ?>
    <script>
        function excluirUsuario(n,i){
           document.getElementById("nomeUsu").innerHTML=n;
           document.getElementById("idUsu").value=i;
            
        }
        function editarMusica(n,i,a,an,g){
           document.getElementById("nomeM").value= n;
           document.getElementById("nomeM2").innerHTML= n;
           document.getElementById("artistaM").value= a;
           document.getElementById("anoM").value=an ;
           document.getElementById("idM").value=i ;
        
           document.getElementById("genM").value=g ;
        
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
        $menu=3;
        include "menuAdm.php";
    ?>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Músicas</h4><a href="" data-toggle="modal" data-target="#ModalNovaMusica" class="btn btn-primary" style="float:right">Adicionar Música</a>
                
                            </div>

        </div>
              <div class="modal fade" id="ModalNovaMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Nova música</h4>
                            </div>
                            <form role="form" action="../controller/musica.php" method="POST" enctype='multipart/form-data'>
                            <div class="modal-body">
                                <div class="form-group">
                                <label>Imagem Album*</label>
                                <center><div id="thumb-output" name="imgAlbum"><img src="imagens_sistema/no-image.jpg" width="250px" height="250px" onclick="escolherImagem()" style="cursor:pointer"></div><br><span id="selectImg">Selecione uma imagem</span></center>
                                <input class="form-control" id="file-input" name="imgp" type="file" required style="display:none">
                                </div>
                               <div class="form-group">
                                <label>Nome da música*</label>
                                <input class="form-control" type="text" name="nomeMusica" required>

                                </div>
                                <div class="form-group">
                                <label>Música*</label>
                                <input class="form-control" type="file" name="arquivoMusica" required >

                                </div>
                                <div class="form-group">
                                <label>Artista</label>
                                <input class="form-control" type="text" name="artista" required>

                                </div>
                                <div class="form-group">
                                <label>Album*</label>
                                <input class="form-control" type="text" name="album" required>

                                </div>
                                 <div class="form-group">
                                <label>Ano de lançamento*</label>
                                <input class="form-control" type="text" maxlength="4" name="anoLancamento" onkeypress='return SomenteNumero(event)' required>

                                </div>
                                <div class="form-group">
                                <label>Genero*</label>
                                <select class="form-control" name="genero" required>
                                    <option disabled selected>Selecione o genero...</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Power Metal">Power Metal</option>
                                    <option value="Eletronica">Eletronica</option>
                                    <option value="Heavy Metal">Heavy Metal</option>
                                    <option value="Jazz">Jazz</option>
                                </select>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary" name="cadastrar">Salvar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                   <div class="modal fade" id="ModalEditarMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Editar música <b><span id="nomeM2"></span></b></h4>
                            </div>
                            <form role="form" action="../controller/musica.php" method="POST" enctype='multipart/form-data'>
                            <div class="modal-body">
                              
                               <div class="form-group">
                                <label>Nome da música*</label>
                                <input class="form-control" type="text" name="nomeMusica" required id="nomeM">

                                </div>
                                
                                <div class="form-group">
                                <label>Artista</label>
                                <input class="form-control" type="text" name="artista" required id="artistaM">

                                </div>
                                
                                 <div class="form-group">
                                <label>Ano de lançamento*</label>
                                <input class="form-control" type="text" maxlength="4" name="anoLancamento" onkeypress='return SomenteNumero(event)' required id="anoM">

                                </div>
                                <input type="hidden" name="id" id="idM">
                                <div class="form-group">
                                <label>Genero*</label>
                                <select class="form-control" name="genero" required id="genM">
                                    <option disabled selected>Selecione o genero...</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Power Metal">Power Metal</option>
                                    <option value="Eletronica">Eletronica</option>
                                    <option value="Heavy Metal">Heavy Metal</option>
                                    <option value="Jazz">Jazz</option>
                                </select>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary" name="editar">Salvar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                   <div class="modal fade" id="ModalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir a música <b><span id="nomeUsu"></span></b>?</h4></center>
                                           
                                        </div>
                                       
                                        <div class="modal-footer">
                                            <form action="../controller/musica.php" method="POST">
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
                                            <th>Imagem Album</th> 
                                            <th>Nome</th>
                                            <th>Artista</th>
                                            <th>Album</th>
                                            <th>Ano de lançamento</th>
                                            <th>Data de cadastro</th>
                                            <th>Genero</th>
                                            <th>Qtd favoritos</th>
                                            <th>Qtd playlist</th>
                                            <th>Qtd acessos externos(link)</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <a id="demo-success"  style="display:none">Success notification</a>
                                    <a id="demo-error" style="display:none">Error notification</a>
                                    <tbody>
                                        <?php
                                            include "../model/musica.class.php";
                                            $musica= new Musica();
                                            $musicas=$musica->listarTodos();
                                            foreach($musicas as $m){
                                                $idMusica=$m['idMusica'];
                                                $nomeMusica=$m['nomeMusica'];
                                                $artista=$m['artista'];
                                                $album=$m['album'];
                                                $anoLancamento=$m['anoLancamento'];
                                                $dataCad=date('d/m/Y',strtotime($m['dataCad']));
                                                $diretorio=$m['diretorio'];
                                                $imgAlbum=$m['imgAlbum'];
                                                $genero=$m['genero'];
                                                $qtdFavoritos=0;
                                                $qtdPlaylist=0;
                                                $qtdAcessos=0;
                                                
                                                echo '  <tr class="odd gradeX">
                                            <td><img src="imagens_sistema/imagens_albuns/'.$imgAlbum.'" width="80px"></td>
                                            <td>'.$nomeMusica.'</td>
                                            <td>'.$artista.'</td>
                                            <td class="center">'.$album.'</td>
                                            <td class="center">'.$anoLancamento.'</td>
                                            <td class="center">'.$dataCad.'</td>
                                            <td class="center">'.$genero.'</td>
                                            <td class="center">'.$qtdFavoritos.'</td>
                                            <td class="center">'.$qtdPlaylist.'</td>
                                            <td class="center">'.$qtdAcessos.'</td>
                                            <td class="center"><span data-toggle="tooltip" data-placement="right" title="Editar"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalEditarMusica" onclick="editarMusica(\''.$nomeMusica.'\',\''.$idMusica.'\',\''.$artista.'\',\''.$anoLancamento.'\',\''.$genero.'\')"><i class="far fa-edit"></i></a></span> <span data-toggle="tooltip" data-placement="right" title="Excluir"><a href="#" class="btn btn-default btn-xs" onclick="excluirUsuario(\''.$nomeMusica.'\',\''.$idMusica.'\')" data-toggle="modal" data-target="#ModalExcluir"><i class="far fa-trash-alt"></i></a></span> </td>
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

     
         
    <script src="assets/js/bootstrap.js"></script>
          <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  <script src="js/pace.min.js"></script>
  
</body>
</html>
