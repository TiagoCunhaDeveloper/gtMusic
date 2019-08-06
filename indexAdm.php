<?php
include "view/seguranca.php"; 
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
    <title>Home</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="view/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="view/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="view/assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="shortcut icon" href="view/assets/img/icon.png">
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
	<meta http-equiv="Refresh" content="0;URL=view/erros/erroJava.html" />
	</noscript>	

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
                <a class="navbar-brand" href="indexAdm.php">

                    <img src="view/assets/img/logo.png" />
                </a>

            </div>

          <div class="right-div">
               <?php
                     if(isset($_SESSION['login']) && $_SESSION['login']==true && $_SESSION['tipo']==1){
            include "view/bemVindoAdmIndex.php";
        }
        else{
            echo '<script>window.location.href="view/erros/erro_401.html";</script>';
           
        }
                ?>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
   <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li class='menu-top-active' ><a href="indexAdm.php" >Home</a></li>
                            <li ><a href="view/usuarios.php">Usuários</a></li>
                             <li ><a href="view/cadmusicas.php">Músicas</a></li>
                             
                            <!--<li><a href="blank.html">BLANK PAGE</a></li>-->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Home</h4>
                
                            </div>

        </div>
             
            <div class="row">
                <?php
                    include "model/musica.class.php";
                    include_once "model/usuario.class.php";
                    include_once "model/playlist.class.php";
                    $musica= new Musica();
                    $totalMusicas= $musica->qtdMusicas();
                    $usuarioss=new Usuario();
                    $allusers=$usuarioss->qtdUsers();
                    $playlists=new Playlist();
                    $allPlaylist=$playlists->listarAllPlaylist();
                ?>
                 <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                      
                            <i class="fas fa-music"  style="font-size:5em;"></i>
                            <h3><?php echo $totalMusicas; ?></h3>
                           Músicas
                        </div>
                    </div>
              <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                           <i class="far fa-play-circle" style="font-size:5em;"></i>
                            <h3><?php echo $allPlaylist; ?></h3>
                            Playlist's criadas
                        </div>
                    </div>
          
               <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fas fa-user" style="font-size:5em;"></i>
                           <h3><?php echo $allusers; ?></h3>
                             Usuários
                        </div>
                    </div>

        </div>           
           
            

             <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="panel panel-default" style="height:420px;">
                        <div class="panel-heading">
                          Gráfico
                        </div>
                        <div class="panel-body text-center recent-users-sec">
                           <center><div id="piechart_3d" style="width: 343px; height: 350px;"></div></center>
                        </div>
     </div>
             </div>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                           Músicas cadastradas por dia (Ultimos 5 dias)
                            
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="chart_div" style="width: 700px; height: 340px;"></div>
                            </div>
                        </div>
                    </div>
             </div>
             
             </div>
          
            

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
     <?php
            include "view/footer.php";
        ?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="view/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="view/assets/js/bootstrap.js"></script>
      <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="view/assets/js/custom.js"></script>
  <script src="view/js/pace.min.js"></script>
  	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Músicas',     <?php echo $totalMusicas; ?>],
          ['Playlist',      <?php echo $allPlaylist; ?>]
        
        ]);

        var options = {
          title: 'Músicas X Playlist ',
          is3D: true,
             colors:['#3399ff','#212529'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
        google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

         var data = google.visualization.arrayToDataTable([
         ['Element', 'Músicas'],
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $dataI = date("Y-m-d");
            $dataF = date('Y-m-d', strtotime('-5 days', strtotime($dataI)));
            $ultimasCadastradas=$musica->listarUltimasCadastradas($dataI,$dataF);
            foreach($ultimasCadastradas as $uc){
                $dataCad  = date('d/m/Y',strtotime($uc["dataCad"]));
                $qtdMusicasData=$musica->qtdMusicasData($uc["dataCad"]);
                echo " ['".$dataCad."', ".$qtdMusicasData."],";
            }
          ?>
        
      ]);
      var options = {
        title: 'Atividade',
      
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
</html>
