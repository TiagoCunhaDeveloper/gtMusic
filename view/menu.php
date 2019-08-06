<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li <?php if($menu==1){ echo "class='menu-top-active'";} ?> ><a href="../index.php" >Home</a></li>
                           
                            
                            <li <?php if($menu==2){ echo "class='menu-top-active'";} ?> >
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Músicas <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="minhasplaylists.php">Minhas playlist's</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="musicas.php">Procurar músicas</a></li>
                                </ul>
                            </li>
                  

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>