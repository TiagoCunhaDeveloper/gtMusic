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
    <title>Minhas playlist's</title>
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
       #scrollPlaylist::-webkit-scrollbar-track {
    background-color: #F4F4F4;
}
#scrollPlaylist::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
#scrollPlaylist::-webkit-scrollbar-thumb {
    background: #dad7d7;
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
       function compartilharPlaylist(i){
           document.getElementById("idPlaylistCompart").value=i;
       }
        function listarCompartilhados(i){
                 $.ajax
         ({
         type:'POST',
         url:'../controller/playlist.php',
         data:'ajaxCompartilhados='+i,
         success:function(html)
         {
         
         $('#listaCompartilhados').html(html);
         
         }
		  });
        }
    </script>
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
        
        if(isset($_SESSION['login']) && $_SESSION['login']==true){
            include "verPlaylist.php";
        }
        else{
            echo '<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Minhas playlists</h4>
                 
       
        
                            </div>

        </div>
         <div class="row">
                 <div class="col-md-12 col-sm-4 col-xs-12" >
                 <div class="alert alert-info">
                             <strong>É necessário estar logado no sistema para acessar essa pagina:</strong> Para efetuar login clique em <a href="login.php">Login/Cadastro</a>.
                          </div>
                 </div>
                 </div>
        </div>

        </div>';
        }
        include "footer.php";
        ?>
       
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
