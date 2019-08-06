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
    <link rel="shortcut icon" href="assets/img/icon.png">
     <link href="dist/css/file-tree.min.css" rel="stylesheet">
     <link href="css/imghover.css" rel="stylesheet" />
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


    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    
    <noscript>
	<meta http-equiv="Refresh" content="0;URL=erros/erroJava.html" />
	</noscript>	 
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
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script>
        function mudarNomePlaylist(m){
            document.getElementById("namePlaylist").value=m;
        } 
        function mudarNomePlaylist1(m){
            document.getElementById("namePlaylist1").innerHTML=m;
        } 
        function mudarNomePlaylist2(m){
            document.getElementById("namePlaylist2").innerHTML=m;
        } 
        function mudarNomePlaylist4(m){
            document.getElementById("nomeM2").innerHTML=m;
        }
        function mudarNomePlaylist5(m){
            document.getElementById("nomeM1").innerHTML=m;
        }
        function mudarNomePlaylist6(m){
            
            document.getElementById("nomeM").innerHTML=m;
        }
          
        function gostei(c,i){
            var curtido=document.getElementById(c).innerHTML;
            if(curtido=='<svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> -->'){
                document.getElementById(c).innerHTML='<i class="fas fa-heart" ></i>';
                      $.ajax
         ({
         type:'POST',
         url:'../controller/musica.php',
         data:'ajaxGostei='+i,
         success:function(html)
         {
         
         
         
         }
		  });
            }
            else{
                       $.ajax
         ({
         type:'POST',
         url:'../controller/musica.php',
         data:'ajaxNaoGostei='+i,
         success:function(html)
         {
         
        
         
         }
		  });
                document.getElementById(c).innerHTML='<i class="far fa-heart" ></i>';
            }
            
        } 
        function gosteiPlaylist(c,id,p){
            var curtido=document.getElementById(c).innerHTML;
            var i=0;
            if(curtido=='<svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> -->'){
                document.getElementById(c).innerHTML='<i class="fas fa-heart" ></i>';
                      $.ajax
         ({
         type:'POST',
         url:'../controller/playlist.php',
         data:'ajaxGosteiPlaylist='+i+"&usuario="+id+"&fkPlaylist="+p,
         success:function(html)
         {
         
         
         
         }
		  });
            }
            else{
                       $.ajax
         ({
         type:'POST',
         url:'../controller/playlist.php',
        data:'ajaxGosteiPlaylist='+i+"&usuario="+id+"&fkPlaylist="+p,
         success:function(html)
         {
         
        
         
         }
		  });
                document.getElementById(c).innerHTML='<i class="far fa-heart" ></i>';
            }
            
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
         #musicas::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
#musicas::-webkit-scrollbar-thumb {
    background: #dad7d7;
}
        #musicas::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
#musicas::-webkit-scrollbar-thumb {
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
	<link rel="stylesheet" href="js/jquery.typeahead.css">
  <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
   <script src="js/jquery.typeahead.js"></script>
   <script>
         function  nomeMusica(m,idm){
          var x = m.replace(".mp3","");
           document.getElementById("musicaAdd").innerHTML=x;
          document.getElementById("criarPlaylist").style.display="none";
          document.getElementById("selecionarPlaylist").style.display="none";
          document.getElementById("botaoAddPlaylist").innerHTML='';
          document.getElementById("fk_musica").value=idm;
          document.getElementById("fk_musica1").value=idm;
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
        function mostarCriarPlaylist(){
            document.getElementById("selecionarPlaylist").style.display="none";
            document.getElementById("criarPlaylist").style.display="block";
            document.getElementById("botaoAddPlaylist").innerHTML='<button type="button" class="btn btn-primary" onclick="submitCriarPlaylist()">Criar e adcionar</button>';
        }
        function mostarSelecionarPlaylist(){
            document.getElementById("criarPlaylist").style.display="none";
            document.getElementById("selecionarPlaylist").style.display="block";
            document.getElementById("botaoAddPlaylist").innerHTML='<button type="submit" class="btn btn-primary" onclick="submitAddPlaylist()">Adcionar</button>';
        }
        function submitCriarPlaylist(){
            $('#botaoSubmitCriarPlaylist').trigger('click');            
        }
        function submitAddPlaylist(){
            $('#botaoSubmitAddPlaylist').trigger('click');            
        }
        function ajaxPesquisarMusicas(m){
                          $.ajax
         ({
         type:'POST',
         url:'../controller/musica.php',
        data:'ajaxProcurarMusica='+m,
         success:function(html)
         {
         $('#musicas').html(html);
        
         
         }
		  });
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
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Músicas</h4>
                 
       
        
                            </div>

        </div>
             
                
           
   <a id="demo-success"  style="display:none">Success notification</a>
                              <a id="demo-success1"  style="display:none">Success notification</a>
                                <a id="demo-error" style="display:none">Error notification</a>
                                <a id="demo-error1" style="display:none">Error notification</a>
                             <div class="modal fade" id="ModalCompartilhar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Adcionar a música <b><span id="musicaAdd"></span></b> a uma playlist</h4>
                                        </div>
                                       
                                        <div class="modal-body" >
                                            <center><button type="button" class="btn btn-default" onclick="mostarCriarPlaylist()" >Criar nova playlist</button>  <button type="button" class="btn btn-default" onclick="mostarSelecionarPlaylist()" >Selecionar playlist</button></center>
                                         <div style="display:none" id="criarPlaylist">
                                          <form action="../controller/playlist.php" method="POST" enctype='multipart/form-data' >
                                          <h5 style="font-size:15px"><b>CRIAR UMA PLAYLIST</b></h5>
                                           <div class="form-group">
                                            <label style="font-weight: normal">Imagem da playlist</label>
                                          
                                            	<center><div id="thumb-output" ><img src="imagens_sistema/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer"></div><br><span id="selectImg">Selecione uma imagem</span></center>
								<input class="form-control" id="file-input" name="imagemPlaylist" type="file"  style="display:none" required >
                                          <a href="#" id="clear" style="display:none">Clear</a>
                                        </div>
                                                <div class="form-group">
                                            <label style="font-weight: normal">Nome da playlist*</label>
                                             <input class="form-control" type="text" id="nomePlaylist" name="nomePlaylist" required style="text-transform: capitalize;">
                                             <input class="form-control" type="hidden" id="fk_musica" name="fk_musica" required>
                                          
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="criarAdd" id="botaoSubmitCriarPlaylist" style="display:none">Criar e adcionar</button>
                                        </form>
                                        </div>
                                              <div style="display:none" id="selecionarPlaylist">
                                              <form action="../controller/playlist.php" method="POST" enctype='multipart/form-data' >
                                              <h5 style="font-size:15px"><b>SELECIONAR PLAYLIST'S</b></h5>
                                            <div class="form-group">
                                                <label style="font-weight: normal">Playlist's*</label>
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
                                              
                                               
                        
                                               
                                            </div>
                                            <input type="hidden" name="addPlaylist"/>
                                            <input type="hidden" name="paginaAllmusicas"/>
                                            <input type="hidden" name="playlists" id="resultado"/>
                                            <button type="submit" class="btn btn-primary" style="display:none" id="botaoSubmitAddPlaylist">Adcionar</button>
                                            <input class="form-control" type="hidden" id="fk_musica1" name="fk_musica" required>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <span id="botaoAddPlaylist"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             
                            
                            
                            
                               
                            
                            
                       
                    

             <div class="row">
                 <div class="col-md-12 col-sm-4 col-xs-12" >
 <div class="panel panel-default" >
                       <form action="" method="POST">
                        <div class="panel-heading" style="background-color:#fff;">
                       
                      <?php
                         if(isset($_POST['procurar'])){
                    echo "<a href='musicas.php'>MÚSICAS ></a> RESULTADO ENCONTRADO";
                }     
                            else{
                                 echo "MÚSICAS";
                            }
                    ?>
                            <div class="input-group" style="width:320px;float:right">
     
      <input type="text" class="form-control" placeholder="Digite o nome da música que procura" name="musicaDigitada">
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="submit" name="procurar"><i class="fas fa-search"></i></button>
       
      </span>
   
    </div><hr>
                        </div>
                           
                            </form>
                            
                        <div class="panel-body" id="musicas"  >
                                         <div class="col-md-12 col-sm-3 col-xs-6"  >
                                         <div id="musicas" style="overflow-y:scroll;height:800px">
                            
    
    <?php
                include "../model/musica.class.php";
                include_once "../model/playlist.class.php";
                $playlists=new Playlist();
                $musica= new Musica();
                if(isset($_POST['procurar'])){
                    $musicas= $musica->procurarMusica($_POST['musicaDigitada']);
                }
                else{
                    $musicas= $musica->listarTodos();                             
                }
                
                $musicasArray= $musica->listarTodos();
                $qtdMusicas= $musica->qtdMusicas();
                $i=0;
                foreach ($musicas as $m){
                    $idMusica=$m['idMusica'];
                    $nomeMusica=$m['nomeMusica'];
                    $imgAlbum=$m['imgAlbum'];
                    $diretorio=str_replace("view/","",$m['diretorio']);
                    $albumAno=$m['album']."/".$m['anoLancamento'];
                    $artista=$m['artista'];
                    @$fk_playlist=$_SESSION['idPlaylist'];
                    $gostei=$musica->verificarGostei($fk_playlist,$idMusica);
                    if($gostei>=1){
                        $botaoGostei='<a  data-toggle="tooltip" data-placement="top" title="Favoritar" style="vertical-align: top;float:right;margin-top:0px;margin-right:3px;font-size:20px;color:black;cursor:pointer" onclick="gostei(\'coracao'.$i.'\','.$idMusica.')" id="coracao'.$i.'"><i class="fas fa-heart" ></i></a>';
                    }
                    else{
                        $botaoGostei='<a  data-toggle="tooltip" data-placement="top" title="Favoritar" style="vertical-align: top;float:right;margin-top:0px;margin-right:3px;font-size:20px;color:black;cursor:pointer" onclick="gostei(\'coracao'.$i.'\','.$idMusica.')" id="coracao'.$i.'"><i class="far fa-heart" ></i></a>';
                    }
                    echo ' <div class="alert-info back-widget-set" style="border:1px solid #ccc;color:black">';
                    if(isset($_SESSION['login']) && $_SESSION['login']==true){
                        echo '   <span data-toggle="tooltip" data-placement="right" title="Adcionar a uma playlist" style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" onclick="nomeMusica(\''.$nomeMusica.'\',\''.$idMusica.'\')"><a  style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" data-toggle="modal" data-target="#ModalCompartilhar"  > <i class="far fa-plus-square" ></i></a></span>'.$botaoGostei.'
                        ';
                    }
                    else{

                    }
                    echo ' <table>
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
                  <div class="col-md-12 col-sm-8 col-xs-12" >
                      <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#fff;">
                            Playlist's Públicas <!--<div class="btn-group" style="float:right">
                           
                           
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" ><i class="fas fa-cog"></i> <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="" data-toggle="modal" data-target="#ModalRenomear"><i class="fas fa-pen-square"></i> Renomear</a></li>
												<li><a href="" data-toggle="modal" data-target="#ModalExcluir"><i class="fas fa-trash-alt"></i> Excluir</a></li>
												<li><a href="" data-toggle="modal" data-target="#ModalCompartilhar"><i class="fas fa-share-alt-square"></i> Compartilhar</a></li>
													<li><a href="" ><i class="fas fa-download"></i> Baixar</a></li>
												
												<li class="divider"></li>
												<li><a href=""><i class="fas fa-times-circle"></i>Fechar</a></li>
											  </ul>
											</div>-->
                        </div>
                        <div class="panel-body" style="overflow-y:scroll;height:500px" id="musicas">
                            
                            <?php
                            @$idUsuario=$_SESSION['id_usuario'];
                                $listarPlaylists=$playlists->listarPlaylistPublicas($idUsuario);
                            $i=0;
                                foreach ($listarPlaylists as $lp){
                                  $idPlaylist=$lp['idPlaylist'];
                                $nomePlaylist=$lp['nomePlaylist'];
                                $imagemPlaylist=$lp['imagemPlaylist'];
                                $nomeUsu=$lp['nome'];
                                $idUsuarioP=$lp['idUsuario'];
                                $qtdMusicas=$playlists->qtdMusicasPlaylist($idPlaylist);
                                $foiCompart=$playlists->verificarPlaylistCompart($idUsuarioP,$idUsuario,$idPlaylist);
                                $qtdCompartilhada=$playlists->qtdCompartilhada($idPlaylist);
                                     if($nomePlaylist=="Favoritos"){
                                    $imagemPlaylist="imagens_sistema/".$lp['imagemPlaylist'];
                                    
                                }
                                else{
                                    $imagemPlaylist="imagens_sistema/imagens_playlist/".$lp['imagemPlaylist'];
                                 
                                }
                                    if($qtdMusicas==1){
                                    $msgMusicas="Música";
                                }
                                else{
                                     $msgMusicas="Músicas";
                                }
                                if($foiCompart>=1){
                                    $fav='   
            <a  data-toggle="tooltip" data-placement="top" title="Favoritar" style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" onclick="gosteiPlaylist(\'coracaop'.$i.'\',\''.$idUsuarioP.'\',\''.$idPlaylist.'\')" id="coracaop'.$i.'"><i class="fas fa-heart" ></i></a>';
                                }
                                else{
                                    $fav='   
            <a  data-toggle="tooltip" data-placement="top" title="Favoritar" style="vertical-align: top;float:right;margin-top:0px;margin-right:5px;font-size:20px;color:black;cursor:pointer" onclick="gosteiPlaylist(\'coracaop'.$i.'\',\''.$idUsuarioP.'\',\''.$idPlaylist.'\')" id="coracaop'.$i.'"><i class="far fa-heart" ></i></a>';      
                                }
                                if($qtdCompartilhada==1){
                                    $msgPessoas="Pessoa gostou";   
                                }
                                else{
                                    $msgPessoas="Pessoas gostaram";    
                                }
                                    echo '<div class="panel-body recent-users-sec" style="overflow-y: auto;">
                              <div class="alert-info back-widget-set" style="border:1px solid #ccc;color:black">
                               <table>
                    <tr>
                        <td rowspan="3" >
                           <div  id="divGeral" >
                               <a href="escutarPlaylist.php?p='.$idPlaylist.'&n='.$nomePlaylist.'"><img src="'.$imagemPlaylist.'" width="80px" height="100px" class="h" style="cursor:pointer" ></a>
                              
                            </div>
                            
                        </td>
                        <td >
                            <span ><b style="font-size:18px;">'.$nomePlaylist.'</b></span> 
                           
                        </td>
                    </tr>
                    
                     ';
                       if(isset($_SESSION['login']) && $_SESSION['login']==true){
            echo $fav;
        }
        else{
           
        }
           echo'
                    <tr>
                        <td>
                            <span style="font-family:Times, Times New Roman, serif;color:#828282">'.$qtdMusicas.' '.$msgMusicas.'<br>Criado por: '.$nomeUsu.'</span>
                        </td>
                    </tr>
                   <tr>
                         <td>
                             <span style="font-family:Times, Times New Roman, serif;color:#828282">'.$qtdCompartilhada.' '.$msgPessoas.'  dessa playlist</span>
                        </td>
                    </tr>
                </table>
                            </div>
                   
       
                        </div>';
                                    $i++;
                                }
                            ?>
                             
                              
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
   var idMusica= document.getElementById("idMusica").value;
    var qtdMusicas = <?php echo $qtdMusicas; ?>;
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
        
    }
    else{
        document.getElementById("botaoPlayPause").innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="playPause()"><i class="fas fa-play-circle" style="font-size:25px"></i></button>';
        
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
     <?php
            include "footer.php";
        ?>
         <script>

        var data = [
            <?php
             
            $idUsuario=$_SESSION['id_usuario'];
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
      <!-- FOOTER SECTION END-->
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
                    message: "Música adcionada a nova playlist com sucesso!",
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
                    type: "error", //alert | success | error | warning | info
                    title: "Playlist já cadastrada!",
					 theme: "dark-theme",
					 position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/error.png" />',
                    message: "Essa playlist ja esta em suas playlists!",
                    autoHide: true
                });
       });
           $('#demo-error1').on('click', function(){
                notify({
                    type: "error", //alert | success | error | warning | info
                    title: "Música ja adcionada!",
					 theme: "dark-theme",
					 position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="imagens_sistema/error.png" />',
                    message: "Essa música ja esta nessa playlists!",
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
       if(isset($_SESSION['registrer']) && $_SESSION['registrer']==false){
            unset($_SESSION["registrer"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error').trigger('click');});</script>";
        }
     if(isset($_SESSION['registrer']) && $_SESSION['registrer']==0){
            unset($_SESSION["registrer"]);  
            session_write_close();
            echo "<script>$(function () { $('#demo-error1').trigger('click');});</script>";
        }
    ?>                   

</body>
</html>
