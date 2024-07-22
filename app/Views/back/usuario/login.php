
  <br>
  <br>
  <br>  

<div class="container d-flex justify-content-center">
  
    <!-- Mensaje error -->
     <?php if( session()->getFlashdata ('msg')):?>
      <div class="alert alert-warning">
        <?=session()->getFlashdata('msg')?>
    </div>
    <?php endif;?>
    <!-- Inicio del formulario de login -->
    <form method="post" action"<?php echo base_url('/enviarlogin') ?>">

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input name="pass"type="password" class="form-control" id="exampleInputPassword1">
      </div>

      <input type="submit" value="INICIAR SESION" class="btn btn-success">
      <a href="<?php echo base_url('/login'); ?>" class="btn btn-danger"> CANCELAR</a>

      <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Mantenerme conectado </label>
    </div>
    
    <div id="emailHelp" class="form-text">¿No tienes una cuenta?</div>

    <div class="my-3">
      <span> <a href="<?php echo base_url('/registro');?>">Registrate</a> </span> 
      <button  class="btn btn-link" >Recuperar Contraseña</button>
      <button  class="btn btn-link" >Recuperar Usuario</button>
    </div>
    </div>
 </div>
 <br>
 <br>
 <br>

