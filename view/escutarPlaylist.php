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
    <title>Escutar playlist</title>
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
       <link href="css/imghover.css" rel="stylesheet" />
     <link href="dist/css/file-tree.min.css" rel="stylesheet">
     <style>/* MODIFICAÇÕES MINHAS */
.file-tree ol.tree li {
    position: relative;
    padding: 0;
    margin: 0;
    border-left: 1px solid ;
	
}

</style>
    <style>
  .switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 21px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 19px;
  width: 19px;
  left: 2px;
  bottom: 1px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
         #scrollnum::-webkit-scrollbar-track {
    background-color: #F4F4F4;
}
#scrollnum::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
#scrollnum::-webkit-scrollbar-thumb {
    background: #dad7d7;
}
        #selectable-tree-output::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
#selectable-tree-output::-webkit-scrollbar-thumb {
    background: #dad7d7;
}
  </style>
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
<script>
    function marcacaopos () {
        document.getElementById("scrollnum").scrollTop = document.getElementById("selectable-tree-output").scrollTop
    }
    function salvarDigitar(){
        document.getElementById("botaoSalvar").disabled=false;
    }
     function salvar(){
        document.getElementById("botaoSalvar").disabled=true;
    }
</script>
<link rel="stylesheet" href="js/jquery.typeahead.css">

    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.typeahead.js"></script>
    <noscript>
	<meta http-equiv="Refresh" content="0;URL=erros/erroJava.html" />
	</noscript>	 
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
    <script>
      function  nomePlaylist(){
          document.getElementById("thumb-output").innerHTML='<img src="imagens_sistema/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer">';
        
          var control = $("#file-input"),
    clearBn = $("#clear");
          clearBn.on("click", function(){
    control.replaceWith( control.val('').clone( true ) );
});
$('#clear').trigger('click');
$('.typeahead__cancel-button').trigger('click');
          document.getElementById("nomePlaylist").value='';
          document.getElementById("selectImg").innerHTML="Selecione uma imagem";
       }
    </script>
    <script>
        function mostarImg(i){
            document.getElementById(i).style.display="block";   
        }
        function ocultaImg(i){
            document.getElementById(i).style.display="none";   
        }
    </script>
    	<style>

wave::-webkit-scrollbar {
    height: 8px;
    background: #F4F4F4;
}
wave::-webkit-scrollbar-thumb {
    background: #dad7d7;
}
            #barraStatusMusica{-webkit-appearance:none;margin:12px 0;width:100%}#barraStatusMusica:focus{outline:0}#barraStatusMusica:focus::-webkit-slider-runnable-track{background:#fbfbfc}#barraStatusMusica:focus::-ms-fill-lower{background:#eceff1}#barraStatusMusica:focus::-ms-fill-upper{background:#fbfbfc}#barraStatusMusica::-webkit-slider-runnable-track{cursor:pointer;height:8px;transition:all .2s ease;width:100%;box-shadow:1px 1px 1px rgba(0,0,0,0.2),0 0 1px rgba(13,13,13,0.2);background:#eceff1;border:2px solid #cfd8dc;border-radius:5px}#barraStatusMusica::-webkit-slider-thumb{box-shadow:4px 4px 4px rgba(0,0,0,0.2),0 0 4px rgba(13,13,13,0.2);background:#607d8b;border:2px solid #eceff1;border-radius:12px;cursor:pointer;height:24px;width:24px;-webkit-appearance:none;margin-top:-10px}#barraStatusMusica::-moz-range-track{cursor:pointer;height:8px;transition:all .2s ease;width:100%;box-shadow:1px 1px 1px rgba(0,0,0,0.2),0 0 1px rgba(13,13,13,0.2);background:#eceff1;border:2px solid #cfd8dc;border-radius:5px}#barraStatusMusica::-moz-range-thumb{box-shadow:4px 4px 4px rgba(0,0,0,0.2),0 0 4px rgba(13,13,13,0.2);background:#607d8b;border:2px solid #eceff1;border-radius:12px;cursor:pointer;height:24px;width:24px}#barraStatusMusica::-ms-track{cursor:pointer;height:8px;transition:all .2s ease;width:100%;background:transparent;border-color:transparent;border-width:12px 0;color:transparent}#barraStatusMusica::-ms-fill-lower{box-shadow:1px 1px 1px rgba(0,0,0,0.2),0 0 1px rgba(13,13,13,0.2);background:#dde3e6;border:2px solid #cfd8dc;border-radius:10px}#barraStatusMusica::-ms-fill-upper{box-shadow:1px 1px 1px rgba(0,0,0,0.2),0 0 1px rgba(13,13,13,0.2);background:#eceff1;border:2px solid #cfd8dc;border-radius:10px}#barraStatusMusica::-ms-thumb{box-shadow:4px 4px 4px rgba(0,0,0,0.2),0 0 4px rgba(13,13,13,0.2);background:#607d8b;border:2px solid #eceff1;border-radius:12px;cursor:pointer;height:24px;width:24px;margin-top:0}

    </style>
  <script>
        function mudarNomePlaylist(m,i){
            document.getElementById("namePlaylist").value=m;
            document.getElementById("idPlaylist").value=i;
           
        } 
        function mudarNomePlaylist1(m,i){
            document.getElementById("namePlaylist1").innerHTML=m;
             document.getElementById("idPlaylist1").value=i;
        } 
        function mudarNomePlaylist2(m){
            document.getElementById("namePlaylist2").innerHTML=m;
        } 
        function mudarNomePlaylist4(m,idm){
            document.getElementById("nomeM2").innerHTML=m;
            document.getElementById("fk_musica1").value=idm;
        }
        function mudarNomePlaylist5(m,p,mu){
            document.getElementById("nomeM1").innerHTML=m;
            document.getElementById("idPlaylistE").value=p;
            document.getElementById("fkMusica").value=mu;
        }
        function mudarNomePlaylist6(m,i){
            document.getElementById("nomeM").innerHTML=m;
            document.getElementById("down").href=i;
        }
        function fecharModal1(){
            $('#n1').trigger('click');
        }
        function gerarLink(m,u){
                  $.ajax
         ({
         type:'POST',
         url:'../controller/playlist.php',
         data:'ajaxLink='+m+"&idUsuario="+u,
         success:function(html)
         {
         
         $('#link').html(html);
         
         }
		  });
        }
    </script>
    <style>
        #volumeInput {
  
  -webkit-appearance: none;
  
  width: 100%;
}
#volumeInput:focus {
  outline: none;
}
#volumeInput::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #000;
  border-radius: 0px;
  border: 1px solid #000000;
}
#volumeInput::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 20px;
  width: 20px;
  border-radius: 50px;
  background: #FFFFFF;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8.5px;
}
#volumeInput:focus::-webkit-slider-runnable-track {
  background: #000;
}
#volumeInput::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #000;
  border-radius: 0px;
  border: 1px solid #000000;
}
#volumeInput::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 20px;
  width: 20px;
  border-radius: 50px;
  background: #FFFFFF;
  cursor: pointer;
}
#volumeInput::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
#volumeInput::-ms-fill-lower {
  background: #000;
  border: 1px solid #000000;
  border-radius: 0px;
  box-shadow: 1px 1px 1px #000000;
}
#volumeInput::-ms-fill-upper {
  background: #000;
  border: 1px solid #000000;
  border-radius: 0px;
  box-shadow: 1px 1px 1px #000000;
}
#volumeInput::-ms-thumb {
  margin-top: 1px;
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 20px;
  width: 20px;
  border-radius: 50px;
  background: #FFFFFF;
  cursor: pointer;
}
#volumeInput:focus::-ms-fill-lower {
  background: #000;
}
#volumeInput:focus::-ms-fill-upper {
  background: #000;
}
    </style>
        <script>
        function removerPlaylist(n,i){
            document.getElementById("namePlaylistR").innerHTML=n;
            document.getElementById("idPlaylistR").value=i;
        }
        function baixarMusica(n,i){
            document.getElementById("namePlaylist2").innerHTML=n;
            document.getElementById("namePlaylistInput").value=n;
            document.getElementById("inputBaixar").value=i;
        }
        function fecharModal(){
            $(function () { $('#n').trigger('click');});
        }
        function copiarPlaylist(i){
             document.getElementById("idPlaylistC").value=i;
        }
        function mudarStatus(i){
                    $.ajax
         ({
         type:'POST',
         url:'../controller/playlist.php',
         data:'ajaxStatus='+i,
         success:function(html)
         {
         
         
         
         }
		  });
        }
        function submitAddPlaylist(){
            $('#botaoSubmitAddPlaylist').trigger('click');            
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
            }
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
        $menu=2;
        include "menu.php";
      ?>  
         <!-- MENU SECTION END-->
    <div class="content-wrapper" style="min-height: 0; 
    padding-bottom:0px;">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"><a href="musicas.php">Músicas ></a> <?php echo $_GET['n'];?></h4>
                 
       
        
                            </div>

        </div>
             
                
           
            <a id="demo-success"  style="display:none">Success notification</a>
                              <a id="demo-success1"  style="display:none">Success notification</a>
                              <a id="demo-success2"  style="display:none">Success notification</a>
                              <a id="demo-success3"  style="display:none">Success notification</a>
                              <a id="demo-success4"  style="display:none">Success notification</a>
                                <a id="demo-error" style="display:none">Error notification</a>
                                <a id="demo-error1" style="display:none">Error notification</a>
<div class="modal fade" id="ModalNovoProjeto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Nova playlist</h4>
                                        </div>
                                        <div class="modal-body">
                                             <div class="form-group">
                                            <label style="font-weight: normal">Imagem da playlist</label>
                                          
                                            	<center><div id="thumb-output" name="imgp"><img src="imagens_sistema/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer"></div><br><span id="selectImg">Selecione uma imagem</span></center>
								<input class="form-control" id="file-input" name="imgp" type="file" required style="display:none">
                                          <a href="#" id="clear" style="display:none">Clear</a>
                                        </div>
                                                <div class="form-group">
                                            <label style="font-weight: normal">Nome da playlist*</label>
                                             <input class="form-control" type="text" id="nomePlaylist">
                                          
                                        </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Criar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal fade" id="ModalNovaPasta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Nova música</h4>
                                        </div>
                                        <div class="modal-body">
                                           <div class="form-group">
                                            <label>Nome da pasta*</label>
                                            <input class="form-control" type="text" required>
                                           
                                            </div>
                                             <div class="form-group">
                                            <label>Arquivos</label>
                                            <input class="form-control" name="arquivos[]" type=file multiple>
                                            <p class="help-block">Para criar uma pasta com arquivos, basta selecionar os mesmos.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="modal fade" id="ModalNovoArquivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Novo arquivo</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Arquivos*</label>
                                            <input class="form-control" id="filesNovoArquivo" required name="arquivos[]" type=file multiple>
                                            
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                      
                               <div class="modal fade" id="ModalRenomear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Renomear playlist</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nome playlist*</label>
                                                <input class="form-control" type="text" id="namePlaylist">
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="modal fade" id="ModalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir a playlist <b><span id="namePlaylist1"></span></b></h4></center>
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="button" class="btn btn-primary">Sim</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 <div class="modal fade" id="ModalBaixar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja baixar a playlist <b><span id="namePlaylist2"></span></b></h4></center>
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="button" class="btn btn-primary">Sim</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="modal fade" id="ModalBaixar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja baixar a playlist <b><span id="namePlaylist2"></span></b></h4></center>
                                           
                                        </div>
                                       
                                        <div class="modal-footer">
                                          <form action="../controller/playlist.php" method="POST">
                                           <input type="hidden" id="inputBaixar" name="idPlaylist"/>
                                           <input type="hidden" id="namePlaylistInput" name="nomePlaylist"/>
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="n">Não</button>
                                            <button type="submit" class="btn btn-primary" name="baixar" onclick="fecharModal()">Sim</button>
                                            </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="modal fade" id="ModalExcluirMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir a música <b><span id="nomeM1"></span></b> da playlist?</h4></center>
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="button" class="btn btn-primary">Sim</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                  
                                 <div class="modal fade" id="ModalBaixarMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja baixar a música <b><span id="nomeM"></span></b>?</h4></center>
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="n1">Não</button>
                                            <a href="" class="btn btn-primary" download id="down" onclick="fecharModal1()">Sim</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="modal fade" id="ModalCompartilharMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" >Compartilhar música </h4>
                                        </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                            <label>Link compartilhavel</label>
                                            <span id="link"></span>
                                     
                                        </div>
                                           </div>
                                        <div class="modal-footer">
                                           
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                          
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                                       <div class="modal fade" id="ModalAddMusicPlaylist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Adcionar a música <b><span id="nomeM2"></span></b> a uma playlist</h4>
                                        </div>
                                         <form action="../controller/playlist.php" method="POST" enctype='multipart/form-data' >
                                        <div class="modal-body">
                                       
                                       <div class="form-group">
                                               
                                                <label style="font-weight: normal">Playlist's*</label>
                                               <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="form-control" id="js-typeahead3"
                       name="q"
                       type="search"
                       autofocus
                       autocomplete="off" style="font-size:15px">
            </span>
			
            </div>
        </div>
                                               <script>

          var data = [
            <?php
              include_once "../model/playlist.class.php";
            $idUsuario=$_SESSION['id_usuario'];
               $playlists=new Playlist();
             $allPlaylistUser=$playlists->listarPlaylist($idUsuario);
            foreach($allPlaylistUser as $pu){
                $idPlaylist=$pu['idPlaylist'];
                $nomePlaylist=$pu['nomePlaylist'];
                $imagemPlaylist=$pu['imagemPlaylist'];
                $qtdMusicas=$playlists->qtdMusicasPlaylist($idPlaylist);
                 if($qtdMusicas==1){
                                    $msgMusicas="Música";
                                }
                                else{
                                     $msgMusicas="Músicas";
                                }
                echo '{
            "id": "'.$idPlaylist.'",
            "name": "'.$nomePlaylist.'",
            "email": "<img src=\'imagens_sistema/imagens_playlist/'.$imagemPlaylist.'\' height=\'50px\' width=\'50px\'><b> '.$nomePlaylist.'</b> '.$qtdMusicas.' '.$msgMusicas.'"
        },';
            }
            ?>
           ];

        typeof $.typeahead === 'function' && $.typeahead({
            input: "#js-typeahead3",
            minLength: 1,
            maxItem: 8,
            maxItemPerGroup: 6,
            order: "asc",
            hint: true,
            searchOnFocus: true,
            multiselect: {
//                limit: 2,
//                limitTemplate: 'You can\'t select more than 2 teams',
                matchOn: ["id", "email"],
                cancelOnBackspace: true,
//                href: '/{{name}}.html',
//                data: [{
//                    "matchedKey": "name",
//                    "name": "Canadiens",
//                    "img": "canadiens",
//                    "city": "Montreal",
//                    "id": "MTL",
//                    "conference": "Eastern",
//                    "division": "Northeast",
//                    "group": "teams"
//                }],
               
                callback: {
                    onClick: function (node, item, event) {
                        event.preventDefault();
                        console.log(item);
                        alert('Playlist: '+item.name);
                    },
                    onCancel: function (node, item, event) {
                        console.log(item)
                    }
                }
            },
            templateValue: "{{name}}",
            display: ["email"],
            emptyTemplate: 'nemhum resultado para {{query}}',
            source: {
                teams: {
                    data: data
                }
            },
            callback: {
                onSubmit: function (node, form, item, event) {
                    event.preventDefault();
					var resultado =JSON.stringify(item) ;
					
					document.getElementById("resultado").value=resultado;
					form.submit();
                }
            },
            debug: false
        });

    </script>
                                               
                                            </div>
                                           
                                        </div>
                                        
                                          <input type="hidden" name="addPlaylist"/>
                                          <input type="hidden" name="paginaEscutarPlaylist"/>
                                          <input type="hidden" name="p" value="<?php echo $_GET['p']; ?>"/>
                                          <input type="hidden" name="n" value="<?php echo $_GET['n']; ?>"/>
                                           
                                            <input type="hidden" name="playlists" id="resultado"/>
                                            <button type="submit" class="btn btn-primary" style="display:none" id="botaoSubmitAddPlaylist">Adcionar</button>
                                            <input class="form-control" type="hidden" id="fk_musica1" name="fk_musica" >
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                           <button type="submit" class="btn btn-primary" onclick="submitAddPlaylist()">Adcionar</button>
                                        </div>
                                         </form>
                                    </div>
                                    
                                </div>
                            </div>
                             <div class="modal fade" id="ModalCompartilhar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Compartilhar playlist</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Pessoas*</label>
                                               <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="form-control" id="js-typeahead"
                       name="q"
                       type="search"
                       autofocus
                       autocomplete="off" style="font-size:15px">
            </span>
			
            </div>
        </div>
                                               <script>

        var data = [{
            "id": "1",
            "name": "Tiago",
            "email": "tiagocunha419@gmail.com"
        }, {
              "id": "2",
            "name": "Gustavo",
            "email": "gustavo@gmail.com"
        }, {
              "id": "3",
            "name": "Roberval",
            "email": "rober@gmail.com"
        }, {
         "id": "4",
            "name": "Jose",
            "email": "jose@gmail.com"
        }];

        typeof $.typeahead === 'function' && $.typeahead({
            input: "#js-typeahead",
            minLength: 1,
            maxItem: 8,
            maxItemPerGroup: 6,
            order: "asc",
            hint: true,
            searchOnFocus: true,
            multiselect: {
//                limit: 2,
//                limitTemplate: 'You can\'t select more than 2 teams',
                matchOn: ["id", "email"],
                cancelOnBackspace: true,
//                href: '/{{name}}.html',
//                data: [{
//                    "matchedKey": "name",
//                    "name": "Canadiens",
//                    "img": "canadiens",
//                    "city": "Montreal",
//                    "id": "MTL",
//                    "conference": "Eastern",
//                    "division": "Northeast",
//                    "group": "teams"
//                }],
               
                callback: {
                    onClick: function (node, item, event) {
                        event.preventDefault();
                        console.log(item);
                        alert('Email: '+item.email);
                    },
                    onCancel: function (node, item, event) {
                        console.log(item)
                    }
                }
            },
            templateValue: "{{name}}",
            display: ["email"],
            emptyTemplate: 'nemhum resultado para {{query}}',
            source: {
                teams: {
                    data: data
                }
            },
            callback: {
                onSubmit: function (node, form, item, event) {
                    event.preventDefault();
					var resultado =JSON.stringify(item) ;
					
					document.getElementById("resultado").value=resultado;
					form.submit();
                }
            },
            debug: true
        });

    </script>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Compartilhar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="modal fade" id="ModalCopiar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Copiar músicas para outras playlist's</h4>
                                        </div>
                                        <div class="modal-body">
                                       <div class="form-group">
                                                <label style="font-weight: normal">Playlist's*</label>
                                               <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="form-control" id="js-typeahead2"
                       name="q"
                       type="search"
                       autofocus
                       autocomplete="off" style="font-size:15px">
            </span>
			
            </div>
        </div>
                                               <script>

        var data = [{
            "id": "1",
            "name": "Rock",
            "email": "<img src='imagens_sistema/imagens_albuns/exemplo.jpg' height='50px' width='50px'><b> Rock</b> 23 Músicas"
        }, {
              "id": "2",
            "name": "Trap music",
            "email": "<img src='imagens_sistema/imagens_albuns/trap.jpg' height='50px' width='50px'><b> Trap music</b> 12 Músicas"
        }];

        typeof $.typeahead === 'function' && $.typeahead({
            input: "#js-typeahead2",
            minLength: 1,
            maxItem: 8,
            maxItemPerGroup: 6,
            order: "asc",
            hint: true,
            searchOnFocus: true,
            multiselect: {
//                limit: 2,
//                limitTemplate: 'You can\'t select more than 2 teams',
                matchOn: ["id", "email"],
                cancelOnBackspace: true,
//                href: '/{{name}}.html',
//                data: [{
//                    "matchedKey": "name",
//                    "name": "Canadiens",
//                    "img": "canadiens",
//                    "city": "Montreal",
//                    "id": "MTL",
//                    "conference": "Eastern",
//                    "division": "Northeast",
//                    "group": "teams"
//                }],
               
                callback: {
                    onClick: function (node, item, event) {
                        event.preventDefault();
                        console.log(item);
                        alert('Playlist: '+item.name);
                    },
                    onCancel: function (node, item, event) {
                        console.log(item)
                    }
                }
            },
            templateValue: "{{name}}",
            display: ["email"],
            emptyTemplate: 'nemhum resultado para {{query}}',
            source: {
                teams: {
                    data: data
                }
            },
            callback: {
                onSubmit: function (node, form, item, event) {
                    event.preventDefault();
					var resultado =JSON.stringify(item) ;
					
					document.getElementById("resultado").value=resultado;
					form.submit();
                }
            },
            debug: false
        });

    </script>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Copiar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    

             <div class="row">
              
                  <div class="col-md-12 col-sm-8 col-xs-12" >
                      <div class="panel panel-default" >
                    
                       
                        <div class="panel-body" style="padding:0px">
                        
                        <div class="col-md-9" style="margin-left:;margin-top:10px;">
                            <?php 
                              include_once "../model/playlist.class.php";
          
                                $playlists=new Playlist();
                                    $selecionada=$_GET['p'];   
                                
                              
                                    $idUsuario=$_SESSION['id_usuario'];
                                    $foiCompart=$playlists->verificarPlaylistCompartF1($idUsuario,$selecionada);
                                    $escutarPlaylist=$playlists->selecionarPlaylistPublicas($selecionada);
                                    $publica=$playlists->verificarAjaxStatus($selecionada);
                                    if($publica>=1){
                                        $botaoStatus='<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Se ativo, qualquer pessoa pode ver essa playlist" ><i class="fas fa-eye"></i> Público  <label class="switch" style="float:right;">
	   
   <input type="checkbox" id="toggleNavColor"  onclick="mudarStatus(\''.$selecionada.'\')">
   <span class="slider round"></span>
</label></a></li>';
                                    }
                                   else{
                                       $botaoStatus='<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Se ativo, qualquer pessoa pode ver essa playlist" ><i class="fas fa-eye"></i> Público  <label class="switch" style="float:right;">
	   
   <input type="checkbox" id="toggleNavColor" checked onclick="mudarStatus(\''.$selecionada.'\')">
   <span class="slider round"></span>
</label></a></li>';
                                   }
                                    foreach($escutarPlaylist as $ep){
                                       
                                        $idPlaylist=$ep['idPlaylist'];
                                        $qtdMusicas=$playlists->qtdMusicasPlaylist($idPlaylist);
                                        $nomePlaylist=$ep['nomePlaylist'];
                                        $nomeUsuario=$ep['nome']." ".$ep['sobreNome'];
                                        $dataCriacao=date('d/m/Y',strtotime($ep['dataCriacao']));
                                    }
                                    if($nomePlaylist=="Favoritos"){
                                        $imagemPlaylist="imagens_sistema/".$ep['imagemPlaylist'];
                                        
                                    }
                                    else{
                                        $imagemPlaylist="imagens_sistema/imagens_playlist/".$ep['imagemPlaylist'];
                                   
                                    }
                                    if($qtdMusicas==1){
                                        $msgMusicas="Música";
                                    }
                                    else{
                                        $msgMusicas="Músicas";
                                    }
											  
                           
                                    echo ' 
											</div>
                       
                        <div class="panel-body" style="padding:0px">
                        
                        <div class="col-md-9" style="margin-left:;margin-top:10px;"><table style="float:left;">
                                <tr>
                                    <td rowspan="6">
                                        <div class="alert alert-info back-widget-set text-center" style="border-color:#ccc">
                                            <img src="'.$imagemPlaylist.'" width="200px" height="200px">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3><b>&nbsp;&nbsp;'.$nomePlaylist.'</b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-family:Times, Times New Roman, serif;color:#828282">&nbsp;&nbsp;&nbsp;&nbsp;'.$qtdMusicas.' '.$msgMusicas.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-family:Times, Times New Roman, serif;color:#828282">&nbsp;&nbsp;&nbsp;&nbsp;Criado por: '.$nomeUsuario.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-family:Times, Times New Roman, serif;color:#828282">&nbsp;&nbsp;&nbsp;&nbsp;Criado em: '.$dataCriacao.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       &nbsp;  <button type="button" class="btn btn-default btn-sm" onclick="anteMusica()"><i class="fas fa-step-backward" style="font-size:25px"></i></button>  <span id="botaoPlayPausePlaylist"><button type="button" class="btn btn-default btn-sm" onclick="playPlaylist()"><i class="fas fa-play-circle" style="font-size:25px"></i></button></span> <button type="button" class="btn btn-default btn-sm" onclick="proxMusica()"> <i class="fas fa-step-forward" style="font-size:25px"></i></button>
                                    </td>
                                </tr>
                            </table>';
                                
                            ?>
                           
                            </div>
                          
                            <div class="col-md-12 col-sm-3 col-xs-6" style="border-top:1px solid #ccc">
                            <br>
   <?php
                                $musicasArray= $playlists->selecionarMusicasPlaylist($selecionada);
                                $qtdMusicas= $playlists->qtdMusicasPlaylist($selecionada);
                                $musicas=$playlists->selecionarMusicasPlaylist($selecionada);
                                $i=0;
                                $idUsuario=$_SESSION['id_usuario'];
                                foreach($musicas as $m){
                                    $idMusica=$m['idMusica'];
                                    $nomeMusica=$m['nomeMusica'];
                                    $imgAlbum=$m['imgAlbum'];
                                    $diretorio=str_replace("view/","",$m['diretorio']);
                                    $albumAno=$m['album']."/".$m['anoLancamento'];
                                    $artista=$m['artista'];
                                    
                                    
                                    echo '  
                                    <div class="alert-info back-widget-set" style="border:1px solid #ccc;color:black">
           <a href="'.$diretorio.'" download style="display:none" id="baixar'.$idMusica.'"></a>
               <span data-toggle="tooltip" data-placement="top" title="Adcionar" style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" onclick="mudarNomePlaylist4(\''.$nomeMusica.'\',\''.$idMusica.'\')"><a  style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" data-toggle="modal" data-target="#ModalAddMusicPlaylist"   > <i class="fas fa-plus-square" ></i></a></span>
               
             <span  data-toggle="tooltip" data-placement="top" title="Compartilhar" style="vertical-align: top;float:right;margin-top:0px;margin-right:3px;font-size:20px;color:black;cursor:pointer" ><a  style="vertical-align: top;float:right;margin-top:0px;margin-right:0px;font-size:20px;color:black;cursor:pointer"  data-toggle="modal" data-target="#ModalCompartilharMusica" onclick="gerarLink(\''.$idMusica.'\',\''.$idUsuario.'\')"><i class="fas fa-share-alt-square"></i></a></span>
                     
             
               
                <span data-toggle="tooltip" data-placement="top" title="Baixar" style="vertical-align: top;float:right;margin-top:0px;margin-right:3px;font-size:20px;color:black;cursor:pointer" onclick="mudarNomePlaylist6(\''.$nomeMusica.'\',\''.$diretorio.'\')">
                    <a   style="vertical-align: top;float:right;margin-top:0px;margin-right:0px;font-size:20px;color:black;cursor:pointer"  data-toggle="modal" data-target="#ModalBaixarMusica"><i class="fas fa-caret-square-down"></i></a></span>
                <table>
                    <tr>
                        <td rowspan="3" >
                           <div style="position:relative; top:0px; left:0px;" id="divGeral" onmouseover="mostarImg(\'imgPlay'.$i.'\')" onmouseout="ocultaImg(\'imgPlay'.$i.'\')">
                              <img src="imagens_sistema/imagens_albuns/'.$imgAlbum.'" width="100px" class="h"  >
                               <div style="position:absolute; top:20px; left:15px;display:none;cursor:pointer" id="imgPlay'.$i.'">
                                   <img src="imagens_sistema/play.svg" width="70px" id="playPause'.$i.'" onclick="musica('.$i.',\''.$diretorio.'\',\'imagens_sistema/imagens_albuns/'.$imgAlbum.'\',\''.$nomeMusica.'\',\''.$albumAno.'\',\''.$artista.'\')">
                               </div>
                            </div>
                            
                        </td>
                        <td >
                            <span style="margin-left:10px;"><b style="font-size:16px;">'.$nomeMusica.'</b></span>
                           
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="margin-left:10px;font-family:Times, Times New Roman, serif;color:#828282">Álbum: '.$albumAno.'</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="margin-left:10px;font-family:Times, Times New Roman, serif;color:#828282">Artista: '.$artista.'</span>
                        </td>
                    </tr>
                </table>
              
                
        </div>
            <br>';
                                     $i++;
                                }
                            ?>
        
                            </div>
                        </div>
                    </div>
             </div>
             
             </div>
          
            

    </div>
    </div>
    <section class="footer-section" style=" border-top: 5px solid black;position:sticky;bottom: 0;padding:10px 0px 0px 0px;display:none" id="playerMusic">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <table>
                    <tr>
                        <td rowspan="3" >
                           <div style='position:relative; top:0px; left:0px;' >
                              <span id="imgMusica"></span>
                               <div style='position:absolute; top:20px; left:15px;display:none;cursor:pointer' >
                                   <img src="imagens_sistema/play.svg" width="70px" >
                               </div>
                            </div>
                            
                        </td>
                        <td >
                            <span style="float:left; margin-left:5px"><b style="font-size:16px;"><span id="nomeMusicas"></span></b></span>
                            
                            <input type="text" id="idMusica" style="display:none">
                             
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="font-family:Times, Times New Roman, serif;color:#828282; float:left; margin-left:5px">Álbum: <span id="albMusicas"></span></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="font-family:Times, Times New Roman, serif;color:#828282; float:left; margin-left:5px">Cantor: <span id="cantMusicas"></span></span>
                        </td>
                    </tr>
                     
                           
                       
                </table>
                 <div style="margin-top:10px">
                  <div class="input-group" style="width:150px;float:right;">
      <span class="form-group input-group-btn">
        <button class="btn btn-default btn-sm" type="button" ><i class="fas fa-volume-up" style="font-size:25px"></i></button>
      </span>
      <input type="range" class="form-control" min="0" max="1" step="0.1" value="0.2" onmousemove="MudarVolume(this.value)" id="volumeInput" style="height:39px">
     
    </div>
                   <center>
                    <button type="button" class="btn btn-default btn-sm" onclick="anteMusica()"><i class="fas fa-step-backward" style="font-size:25px"></i></button>  <span id="botaoPlayPause"><a href="#" class="btn btn-default btn-sm"><i class="fas fa-pause-circle" style="font-size:25px"></i></a></span> <button type="button" class="btn btn-default btn-sm" onclick="proxMusica()"> <i class="fas fa-step-forward" style="font-size:25px"></i></button> <span id="barraMusica"><input type="range" value="0" disabled id="barraStatusMusica"></span><span style="float:left" id="teste">00:00:00</span> <span style="float:right" id="teste1">00:00:00</span></center>
                    </div>
                    
                </div>
                
                <br>
                
                <div class="col-md-8">
 
                    <div id="wave1" style="margin-left:0px;margin-bottom:0px;cursor:pointer;">
                        <p id="progress1"></p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
      <script>
        
        var myArray = new Array(3);
        var qtdMusicas = <?php echo $qtdMusicas; ?>;
        for (i = 0; i <=qtdMusicas; i++){
             myArray[i] = new Array(6);
        }
        <?php
            $i=0;
           foreach ($musicasArray as $m){
                    $idMusica=$m['idMusica'];
                    $nomeMusica=$m['nomeMusica'];
                    $imgAlbum=$m['imgAlbum'];
                    $diretorio=str_replace("view/","",$m['diretorio']);
                    $albumAno=$m['album']."/".$m['anoLancamento'];
                    $artista=$m['artista'];
            echo ' 
        myArray['.$i.'][0]="'.$i.'";
        myArray['.$i.'][1]="'.$nomeMusica.'";
        myArray['.$i.'][2]="'.$albumAno.'";
        myArray['.$i.'][3]="'.$artista.'";
        myArray['.$i.'][4]="imagens_sistema/imagens_albuns/'.$imgAlbum.'";
        myArray['.$i.'][5]="'.$diretorio.'";
        ';
               $i++;
           }
        ?>       
    </script>
         <script src="js/wavesurfer.min.js"></script>
  <script>
  var wavesurfer   = Object.create(WaveSurfer);
var pausePlayBtn = document.getElementById('playPause1');



var progress     = document.getElementById('progress1');


wavesurfer.init({
    container: document.querySelector('#wave1'),
    waveColor: '#ccc',
    progressColor: 'red'
});

wavesurfer.on('loading', function (status) {
    wavesurfer.setVolume(0.2);
});
	
wavesurfer.on('finish', function () {
     var qtdMusicas = <?php echo $qtdMusicas; ?>;
     if(qtdMusicas<=1){
         wavesurfer.stop();
         document.getElementById("botaoPlayPause").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-play-circle" style="font-size:25px"></i></button>';
     }
    else{
        proxMusica();
    }
});

      function transforma_magicamente(s){
              
	function duas_casas(numero){
		if (numero <= 9){
			numero = "0"+numero;
        }
		return numero;
	}

    hora = duas_casas(Math.round(s/3600));
    minuto = duas_casas(Math.floor((s%3600)/60));
    segundo = duas_casas((s%3600)%60);
              
    formatado = hora+":"+minuto+":"+segundo;
              
    return formatado;
 }

function tempoAtual (){
    var tempo=wavesurfer.getCurrentTime();
     document.getElementById("teste").innerHTML= transforma_magicamente(Math.round(tempo));
     var duracao=wavesurfer.getDuration();
      document.getElementById("teste1").innerHTML= transforma_magicamente(Math.round(duracao)); 
      document.getElementById("barraStatusMusica").value=Math.round(tempo);  
    
    
}
function proxMusica(){
     var qtdMusicas = <?php echo $qtdMusicas; ?>;
   var idMusica= document.getElementById("idMusica").value;
    var intId=parseInt(idMusica,10);
    var numero=parseInt(1,10);
    var proxMusica = intId+numero;
    var numeroProxMusica=parseInt(proxMusica,10);
    if(numeroProxMusica>=qtdMusicas){
        numeroProxMusica=0;
    }
    document.getElementById("teste1").innerHTML= "00:00:00";
    musica(myArray[numeroProxMusica][0],myArray[numeroProxMusica][5],myArray[numeroProxMusica][4],myArray[numeroProxMusica][1],myArray[numeroProxMusica][2],myArray[numeroProxMusica][3]);
}
function anteMusica(){
    var idMusica= document.getElementById("idMusica").value;
    var ultimaMusica= <?php echo $i; ?> - 1;
    var intId=parseInt(idMusica,10);
    var numero=parseInt(1,10);
    var proxMusica = intId-numero;
    var numeroProxMusica=parseInt(proxMusica,10);
    if(numeroProxMusica<0){
        numeroProxMusica=ultimaMusica;
    }
    
    musica(myArray[numeroProxMusica][0],myArray[numeroProxMusica][5],myArray[numeroProxMusica][4],myArray[numeroProxMusica][1],myArray[numeroProxMusica][2],myArray[numeroProxMusica][3]);
}
function playPlaylist(){
   document.getElementById("botaoPlayPausePlaylist").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-pause-circle" style="font-size:25px"></i></button>';
  
         musica(myArray[0][0],myArray[0][5],myArray[0][4],myArray[0][1],myArray[0][2],myArray[0][3]);
    
   
}
function playPause(){
    wavesurfer.playPause();
    var taPausado= wavesurfer.isPlaying();
    if(taPausado ==true){
        document.getElementById("botaoPlayPause").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-pause-circle" style="font-size:25px"></i></button>';
        document.getElementById("botaoPlayPausePlaylist").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-pause-circle" style="font-size:25px"></i></button>';
    }
    else{
        document.getElementById("botaoPlayPause").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-play-circle" style="font-size:25px"></i></button>';
        document.getElementById("botaoPlayPausePlaylist").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-play-circle" style="font-size:25px"></i></button>';
    }
}
function musica (m,mus,img,nome,amb,cant){

    document.getElementById("playerMusic").style.display="block";
    document.getElementById("imgMusica").innerHTML='<img src="'+img+'" width="100px" class="h"  >';
    document.getElementById("nomeMusicas").innerHTML=nome;
    document.getElementById("albMusicas").innerHTML=amb;
    document.getElementById("cantMusicas").innerHTML=cant;
    document.getElementById("idMusica").value=m;
            
            wavesurfer.load(mus);
            var volumeAtual=0.2;
    wavesurfer.setVolume(volumeAtual);
     document.getElementById("volumeInput").value=volumeAtual;
	wavesurfer.on('ready', function () {
    wavesurfer.play();
        setInterval("tempoAtual()",0);
        var duracao=Math.round(wavesurfer.getDuration());
        document.getElementById("barraMusica").innerHTML='<input type="range" min="0" max="'+duracao+'" id="barraStatusMusica" disabled>';
        document.getElementById("botaoPlayPause").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-pause-circle" style="font-size:25px"></i></button>';
           document.getElementById("botaoPlayPausePlaylist").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-pause-circle" style="font-size:25px"></i></button>';
        });
		
}

function stopMusic1(i){
    wavesurfer.empty();
    document.getElementById("paused"+i).value=0;
}
function MudarVolume(v){
    document.getElementById("volumeInput").value=v;
    wavesurfer.setVolume(v);
}
var zoomLevel = Number(0);
wavesurfer.zoom(zoomLevel);

// Equalizer
wavesurfer.on('ready', function () {
  var EQ = [
    {
      f: 32,
      type: 'lowshelf'
    }, {
      f: 64,
      type: 'peaking'
    }, {
      f: 125,
      type: 'peaking'
    }, {
      f: 250,
      type: 'peaking'
    }, {
      f: 500,
      type: 'peaking'
    }, {
      f: 1000,
      type: 'peaking'
    }, {
      f: 2000,
      type: 'peaking'
    }, {
      f: 4000,
      type: 'peaking'
    }, {
      f: 8000,
      type: 'peaking'
    }, {
      f: 16000,
      type: 'highshelf'
    }
  ];  
});
  </script>
        
       
      <!-- FOOTER SECTION END-->
       <?php
        include "footer.php";
        ?>
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
     <script src="assets/js/jquery-1.10.2.js"></script>
     
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    
      <script src="js/pace.min.js"></script>
      <link href="css/jquery.notify.css" type="text/css" rel="stylesheet" />
    
    <!--jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.notify.min.js"></script>
    <script>
	 
jQuery( document ).ready(function( $ ) {

		   $('#demo-success').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Playlist criada com sucesso!",
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
                    title: "Música adcionada com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "Música adcionada a playlist com sucesso!",
                    autoHide: true
                });
               
           });
		   
   $('#demo-error').on('click', function(){
                 notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Playlist renomeada com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "",
                    autoHide: true
                });
       });
           $('#demo-error1').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Playlist excluida com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "",
                    autoHide: true
                });
                });
     $('#demo-success2').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Playlist compartilhada com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "",
                    autoHide: true
                });
               
           });
    $('#demo-success3').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Playlist copiada com sucesso!",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/checkmark.png" />',
                    message: "Músicas copiadas com sucesso!",
                    autoHide: true
                });
               
           });
        $('#demo-success4').on('click', function(){
                notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Música removida com sucesso!",
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
     if(isset($_SESSION['registrers']) && $_SESSION['registrers']==1){
            unset($_SESSION["registrers"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success1').trigger('click');});</script>";
        }
        if(isset($_SESSION['compartilhar']) && $_SESSION['compartilhar']==true){
            unset($_SESSION["compartilhar"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success2').trigger('click');});</script>";
        }
    if(isset($_SESSION['copiar']) && $_SESSION['copiar']==true){
            unset($_SESSION["copiar"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success3').trigger('click');});</script>";
        }
       if(isset($_SESSION['renomear']) && $_SESSION['renomear']==true){
            unset($_SESSION["renomear"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error').trigger('click');});</script>";
        }
     if(isset($_SESSION['excluir']) && $_SESSION['excluir']==true){
            unset($_SESSION["excluir"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error1').trigger('click');});</script>";
        } 
    if(isset($_SESSION['excluirMP']) && $_SESSION['excluirMP']==true){
            unset($_SESSION["excluirMP"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-success4').trigger('click');});</script>";
        }
    ?>
   

</body>
</html>
