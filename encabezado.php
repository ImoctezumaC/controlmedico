  <section class="menu cid-rjNExqlaOq" once="menu" id="menu1-e">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo"><a name="inicio"></a>
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://cemecoes.com">
                         <img src="assets/images/mbr-182x102.jpg" alt="Centro Médico" title="Centro Médico" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://www.cemce.com" target="_blank">
                        Centro Médico Costa Esmeralda S.A.P.I. de C.V.
                    </a><a name="inicio"></a></span>
                    

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="controlcitas/index.php">
                        <span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                          Gestión Citas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="productos/index.php">
                        <span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>
                          Gestión Pacientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="clientes/index.php">
                        <span class="mbri-database mbr-iconfont mbr-iconfont-btn"></span>
                          Gestión Notas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="salir.php">
                        <span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>  Salir:                
                          <?php if (!empty($_SESSION['usuario'])){ echo $_SESSION['usuario'];} else { echo 'usuario';}?>
                    </a>
                </li>
                <li class="nav-text">              
                    <span class="nav-text text text-white display-4">  
                    <?php $fecha=new DateTime("now",new DateTimeZone('America/Mexico_city')); echo $fecha->format('d/m/Y, H:i:s'); ?>         
                     </span>     
                </li>
            </ul>
            
        </div>
    </nav>
</section>