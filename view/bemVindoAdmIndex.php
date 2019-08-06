<?php
   include "model/usuario.class.php";
    $id=$_SESSION['id_usuario'];
    $usuario= new Usuario();
    $nome=$usuario->capturaNome($id);
   echo 'BEM VINDO  <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle"><b>'.$nome.'</b>&nbsp;&nbsp;<span class="caret"></span></button>
											  <ul class="dropdown-menu">
													<li><a href="view/logout.php">Sair</a></li>
											  </ul>
											</div>';
?>
                                          