 <!-- MENU SECTION END-->
    <div class="content-wrapper" style="padding-bottom: 0px">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Minhas playlist's</h4>
                    
       
        
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
                                         <form action="../controller/playlist.php" method="POST" enctype='multipart/form-data' >
                                        <div class="modal-body">
                                             <div class="form-group">
                                            <label style="font-weight: normal">Imagem da playlist</label>
                                          
                                            	<center><div id="thumb-output" name="imgp"><img src="imagens_sistema/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer"></div><br><span id="selectImg">Selecione uma imagem</span></center>
								<input class="form-control" id="file-input" name="imagemPlaylist" type="file" required style="display:none">
                                          <a href="#" id="clear" style="display:none">Clear</a>
                                        </div>
                                                <div class="form-group">
                                            <label style="font-weight: normal">Nome da playlist*</label>
                                             <input class="form-control" type="text" id="nomePlaylist" name="nomePlaylist" style="text-transform: capitalize;">
                                          
                                        </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary" name="criar">Criar</button>
                                        </div>
                                        </form>
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
                                        <form action="../controller/playlist.php" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nome playlist*</label>
                                                <input class="form-control" type="text" id="namePlaylist" name="nomePlaylist" style="text-transform: capitalize;">
                                                <input class="form-control" type="hidden" id="idPlaylist" name="idPlaylist">
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <p class="help-block" style="float:left">Campos com * são obrigatórios</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary" name="renomear">Salvar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                             <div class="modal fade" id="ModalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="../controller/playlist.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir a playlist <b><span id="namePlaylist1"></span></b></h4></center>
                                            <input class="form-control" type="hidden" id="idPlaylist1" name="idPlaylist">
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="submit" class="btn btn-primary" name="excluir">Sim</button>
                                            </center>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                 <div class="modal fade" id="ModalRemover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="../controller/playlist.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja remover a playlist <b><span id="namePlaylistR"></span></b></h4></center>
                                            <input class="form-control" type="hidden" id="idPlaylistR" name="idPlaylist">
                                        </div>
                                       
                                        <div class="modal-footer">
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="submit" class="btn btn-primary" name="remover">Sim</button>
                                            </center>
                                        </div>
                                        </form>
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
                                  <div class="modal fade" id="ModalExcluirMusica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="myModalLabel" >Deseja excluir a música <b><span id="nomeM1"></span></b> da playlist?</h4></center>
                                        </div>
                                       
                                        <div class="modal-footer">
                                          <form action="../controller/playlist.php" method="POST">
                                          <input type="hidden" id="idPlaylistE" name="idPlaylist"/>
                                          <input type="hidden" id="fkMusica" name="fkMusica"/>
                                           <center>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                            <button type="submit" class="btn btn-primary" name="excluirMusicaPlaylist">Sim</button>
                                            </center>
                                            </form>
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
                                  <div class="modal fade" id="ModalVerCompartilhados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" >Compartilhado com</h4>
                                        </div>
                                           <div class="modal-body" id="listaCompartilhados">
                                               
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
                                          <input type="hidden" name="paginaPlaylist"/>
                                          <input type="hidden" name="p" value="<?php echo $_GET['p']; ?>"/>
                                           
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
                                        <form action="../controller/playlist.php" method="POST">
                                        <div class="modal-body">
                                           
                                            <div class="form-group">
                                                <label>Pessoas*</label>
                                                <input type="hidden" id="resultadoUsuarios" name="usuarios"/>
                                                <input type="hidden" id="idPlaylistCompart" name="fkPlaylist"/>
                                                <input type="hidden" name="compartilhar"/>
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

        var data = [
            <?php
                include_once "../model/usuario.class.php";
                $usuarios=new Usuario();
                $idUsuario=$_SESSION['id_usuario'];
                $allUsers=$usuarios->listarUsers($idUsuario);
                foreach($allUsers as $aU){
                    $idUsuario=$aU['idUsuario'];
                    $nome=$aU['nome']." ".$aU['sobreNome'];
                    $email=$aU['email'];
                    echo ' {
         
            "id": "'.$idUsuario.'",
            "name": "'.$nome.'",
            "email": "'.$email.'"
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
					
					document.getElementById("resultadoUsuarios").value=resultado;
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
                                            <button type="submit" class="btn btn-primary" >Compartilhar</button>
                                        </div>
                                        </form>
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
                                        <form action="../controller/playlist.php" method="POST">
                                        <div class="modal-body">
                                       <div class="form-group">
                                                <label style="font-weight: normal">Playlist's*</label>
                                                <input type="hidden" id="resultadoCompart" name="playlists"/>
                                                <input type="hidden" id="idPlaylistC" name="idPlaylist"/>
                                                <input type="hidden" name="copiar"/>
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

        var data = [    <?php
              
            $idUsuario=$_SESSION['id_usuario'];
               
             $allPlaylistUsers=$playlists->listarPlaylist($idUsuario);
            foreach($allPlaylistUsers as $pu){
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
            ?>];

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
					
					document.getElementById("resultadoCompart").value=resultado;
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
                                            <button type="submit" class="btn btn-primary" name="copiar">Copiar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    

             <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-12" >
 <div class="panel panel-default" style="height:700px;">
                        <div class="panel-heading" style="background-color:#fff;">
                      Playlist's
										
										<span data-toggle="tooltip" data-placement="left" title="Nova playlist" style="float:right"><a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalNovoProjeto" style="float:right" ><i class="fas fa-plus-square"></i></a></span>
											
                        </div>
                       <div id="scrollPlaylist" style="height:650px;overflow-y: scroll;" >
                        <?php
                            
                           
                            $idUsuario=$_SESSION['id_usuario'];
                            $allPlaylistUser=$playlists->listarPlaylistF($idUsuario);
                            $allPlaylistCompart=$playlists->listarPlaylistCompart($idUsuario);
                            foreach($allPlaylistUser as $pu){
                                $idPlaylist=$pu['idPlaylist'];
                                $nomePlaylist=$pu['nomePlaylist'];
                                $imagemPlaylist=$pu['imagemPlaylist'];
                                $qtdMusicas=$playlists->qtdMusicasPlaylist($idPlaylist);
                                $foiCompart=$playlists->verificarPlaylistCompartF($idUsuario,$idPlaylist);
                                if($foiCompart>=1){
                                    $msgCompart='<span data-toggle="tooltip" data-placement="bottom" title="Compartilhados" style="float:right;margin-right:5px">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalVerCompartilhados" onclick="listarCompartilhados(\''.$idPlaylist.'\')"><i class="fas fa-eye"></i></a></span>';
                                }
                                else{
                                    $msgCompart="";
                                }
                                if($nomePlaylist=="Favoritos"){
                                    $imagemPlaylist="imagens_sistema/".$pu['imagemPlaylist'];
                                    $opcoes='';
                                }
                                else{
                                    $imagemPlaylist="imagens_sistema/imagens_playlist/".$pu['imagemPlaylist'];
                                    $opcoes='<span data-toggle="tooltip" data-placement="bottom" title="Renomear">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalRenomear" onclick="mudarNomePlaylist(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-pen-square"></i></a></span>
                      
                          <span data-toggle="tooltip" data-placement="bottom" title="Excluir">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalExcluir" onclick="mudarNomePlaylist1(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-window-close"></i></a></span>
                         
                         <span data-toggle="tooltip" data-placement="bottom" title="Compartilhar">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalCompartilhar" onclick="compartilharPlaylist(\''.$idPlaylist.'\')"><i class="fas fa-share-alt-square"></i></a></span>';
                                }
                                if($qtdMusicas==1){
                                    $msgMusicas="Música";
                                }
                                else{
                                     $msgMusicas="Músicas";
                                }
                                echo '  <div class="panel-body recent-users-sec" >
                              <div class="alert-info back-widget-set" style="border:1px solid #ccc;color:black">
                               <table>
                    <tr>
                        <td rowspan="3" >
                           <div  id="divGeral" >
                              <a href="minhasplaylists.php?p='.$idPlaylist.'"><img src="'.$imagemPlaylist.'" width="80px" height="100px" class="h" style="cursor:pointer" ></a>
                              
                            </div>
                            
                        </td>
                        <td >
                            <span ><b style="font-size:16px;">'.$nomePlaylist.'</b></span>
                           
                        </td>
                        '.$msgCompart.'
                    </tr>
                    
                    <tr>
                        <td>
                            <span style="font-family:Times, Times New Roman, serif;color:#828282">'.$qtdMusicas.' '.$msgMusicas.'</span>
                        </td>
                    </tr>
                   <tr>
                        <td>
                        '.$opcoes.'
                          
                        </td>
                    </tr>
                </table>
                            </div>
                    </div>
       
                        ';

                            }
                           foreach($allPlaylistCompart as $pu){
                                $idPlaylist=$pu['idPlaylist'];
                                $nomePlaylist=$pu['nomePlaylist'];
                                $imagemPlaylist=$pu['imagemPlaylist'];
                                $email=$pu['email'];
                                $qtdMusicas=$playlists->qtdMusicasPlaylist($idPlaylist);
                                if($nomePlaylist=="Favoritos"){
                                    $imagemPlaylist="imagens_sistema/".$pu['imagemPlaylist'];
                                     $opcoes='
                      
                          <span data-toggle="tooltip" data-placement="bottom" title="Remover de minhas playlists">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalRemover" onclick="removerPlaylist(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-window-close"></i></a></span>
                         
                        ';
                                }
                                else{
                                    $imagemPlaylist="imagens_sistema/imagens_playlist/".$pu['imagemPlaylist'];
                                    $opcoes='
                      
                          <span data-toggle="tooltip" data-placement="bottom" title="Remover de minhas playlists">
                         <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalRemover" onclick="removerPlaylist(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-window-close"></i></a></span>
                         
                        ';
                                }
                                if($qtdMusicas==1){
                                    $msgMusicas="Música";
                                }
                                else{
                                     $msgMusicas="Músicas";
                                }
                                echo '  <div class="panel-body recent-users-sec" >
                              <div class="alert-info back-widget-set" style="border:1px solid #ccc;color:black">
                               <table>
                    <tr>
                        <td rowspan="3" >
                           <div  id="divGeral" >
                               <a href="minhasplaylists.php?p='.$idPlaylist.'"><img src="'.$imagemPlaylist.'" width="80px" height="100px" class="h" style="cursor:pointer" ></a>
                              
                            </div>
                            
                        </td>
                        <td >
                            <span ><b style="font-size:16px;">'.$nomePlaylist.'</b></span> 
                        
                        </td>
                         <span style="float:right;margin-right:5px" ><a class="btn btn-default btn-xs"  style="cursor:default" data-toggle="tooltip" data-placement="right" title=" Compartilhada por '.$email.'"><i class="fas fa-share"></i></a></span>
                           
                    </tr>
                    <tr>
                        <td>
                            <span style="font-family:Times, Times New Roman, serif;color:#828282">'.$qtdMusicas.' '.$msgMusicas.'</span>
                        </td>
                    </tr>
                    
                   <tr>
                        <td>
                        '.$opcoes.'
                          
                        </td>
                    </tr>
                </table>
                            </div>
                    </div>
       
                        ';

                            }
                        ?>
                      </div>
     </div>
             </div>
                  <div class="col-md-8 col-sm-8 col-xs-12" >
                      <div class="panel panel-default" style="height:700px;">
                       <div class="btn-group" style="float:right;margin-top:10px;margin-right:10px">
                           
                           <?php 
                                if(isset($_GET['p'])){
                                    $selecionada=$_GET['p'];   
                                }
                                else{
                                    $selecionada=$_SESSION['idPlaylist'];
                                }
                                    $idUsuario=$_SESSION['id_usuario'];
                                    $foiCompart=$playlists->verificarPlaylistCompartF1($idUsuario,$selecionada);
                                    $escutarPlaylist=$playlists->selecionarPlaylist($selecionada);
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
                                        $opcoes='<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle" ><i class="fas fa-cog"></i> <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												
												<li><a href="" data-toggle="modal" data-target="#ModalCompartilhar" onclick="compartilharPlaylist(\''.$idPlaylist.'\')"><i class="fas fa-share-alt-square"></i> Compartilhar</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#ModalCopiar" onclick="copiarPlaylist(\''.$idPlaylist.'\')"><i class="fas fa-copy"></i> Copiar músicas </a></li>
														<li><a href="" data-toggle="modal" data-target="#ModalBaixar" onclick="baixarMusica(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')" ><i class="fas fa-download"></i> Baixar</a></li>
												<li class="divider"></li>
												'.$botaoStatus.'
													
											  </ul>';
                                    }
                                    else{
                                        $imagemPlaylist="imagens_sistema/imagens_playlist/".$ep['imagemPlaylist'];
                                        if($foiCompart>=1){
                                            $opcoes='<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle" ><i class="fas fa-cog"></i> <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												
												<li><a href="#"  data-toggle="modal" data-target="#ModalRemover" onclick="removerPlaylist(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-window-close"></i> Remover</a></li>
                                                
											  </ul>';
                                        }
                                        else{
                                            
                                       
                                        $opcoes='<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle" ><i class="fas fa-cog"></i> <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="" data-toggle="modal" data-target="#ModalRenomear" onclick="mudarNomePlaylist(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-pen-square"></i> Renomear</a></li>
												<li><a href="" data-toggle="modal" data-target="#ModalExcluir" onclick="mudarNomePlaylist1(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')"><i class="fas fa-trash-alt"></i> Excluir</a></li>
												<li><a href="" data-toggle="modal" data-target="#ModalCompartilhar" onclick="compartilharPlaylist(\''.$idPlaylist.'\')"><i class="fas fa-share-alt-square"></i> Compartilhar</a></li>
													<li><a href="" data-toggle="modal" data-target="#ModalCopiar" onclick="copiarPlaylist(\''.$idPlaylist.'\')"><i class="fas fa-copy"></i> Copiar músicas </a></li>
														<li><a href="" data-toggle="modal" data-target="#ModalBaixar" onclick="baixarMusica(\''.$nomePlaylist.'\',\''.$idPlaylist.'\')" ><i class="fas fa-download"></i> Baixar</a></li>
												
												<li class="divider"></li>
												'.$botaoStatus.'
											  </ul>';
                                             }
                                    }
                                    if($qtdMusicas==1){
                                        $msgMusicas="Música";
                                    }
                                    else{
                                        $msgMusicas="Músicas";
                                    }
											  
                           
                                    echo ' '.$opcoes.'
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
                          
                            <div class="col-md-12 col-sm-3 col-xs-6" style="border-top:1px solid #ccc;height:425px;overflow-y: scroll;overflow-x: hidden;" id="scrollPlaylist" >
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
                     
             <span data-toggle="tooltip" data-placement="top" title="Excluir da playlist" style="vertical-align: top;float:right;margin-top:0px;margin-right:3px;font-size:20px;color:black;cursor:pointer" onclick="mudarNomePlaylist5(\''.$nomeMusica.'\',\''.$selecionada.'\',\''.$idMusica.'\')">
                 <a   style="vertical-align: top;float:right;margin-top:0px;margin-right:0px;font-size:20px;color:black;cursor:pointer"  data-toggle="modal" data-target="#ModalExcluirMusica"><i class="fas fa-window-close"></i></a></span>
               
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