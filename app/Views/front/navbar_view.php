
 <style>
  /* Estilos para el nav y enlaces de ul y li */
nav {
    background-color: #4c5f4c;
    padding: 10px;
    }
    nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
    }
    nav ul li {
    display: inline-block;
    margin-right: 20px;
    }
    nav ul li a {
    color: #aaa;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 5px;
    }
    nav ul li a:hover {
    background-color: #2f186f;
    }

 </style>
 <!-- Navegación -->
 <?php
 $session = session();
 $nombre = $session->get('nombre');
 $perfil = $session->get('perfil_id');
 ?>
<nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href=" <?php echo base_url('head_view')?>">
              <!--marca de la empresa-->
              <img src="<?php echo base_url('assets/img/informatica2.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php if(session()->perfil_id == 1): ?>
                   <div class="btn btn-secundary active btnUser btn-sm">
                      <a href="">ADMIN:  <?php echo session('nombre'); ?> </a>
                  </div>
          <a class="navbar-brand " href="#"></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registro">REGISTRARSE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">INICAR SESION</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion </a>
              </li>
              </ul>
            </div>
            <?php elseif(session()->perfil_id== 2):?>
            <div class="btn btn-info active btnUser btn-sm">
              <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
            </div>  
             <!-- Clientes que pueden comprar -->
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="quienes_somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="tienda">Tienda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesion
                </a>
              </li>
            </ul>
            </div>
            <?php else:?>
               <!-- Clientes no logueados -->
               <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="quienes_somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="acerca_de">Acerca De
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="tienda">Tienda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="registro">Registrarse
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="login">Iniciar Sesion
                </a>
              </li>
            </ul>
            </div>
              
            <form class="d-flex" role="Buscar">
              <input class="form-control me-2" type="search" placeholder="PC" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <?php endif;?>
          </div>
        </div>
</nav>

