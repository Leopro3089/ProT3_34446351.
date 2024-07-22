<br>
<br>
<br>
<div class="container d-flex justify-content-center">
  <?php $validation = \Config\Services::validation(); ?>
  <form method="post" action="<?php echo base_url('/enviar-form') ?>">
    <?=csrf_field();?>
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata ('fail');?></div>
      <?php endif?>
      <?php if(!empty (session()->getFlashdata('success'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata ('success');?></div>
      <?php endif?>

    <div class="mb-3">
        <label  for="apellido"class="form-label">Apellido</label>
        <input name="apellido" type="text" class="form-control" id="Nombre">

        <?php if($validation->getError('apellido')) {?>
        <div class='alert alert-danger mt-2'> 
          <?= $error = $validation->getError('apellido'); ?>
        </div>  
        <?php }?>
        
    </div>
    <div class="mb-3">
        <label  for="Nombre"class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="Nombre">
        <?php if($validation->getError('nombre')) {?>
        <div class='alert alert-danger mt-2'> 
          <?= $error=$validation->getError('nombre'); ?>
        </div>  
        <?php }?>
    </div>
      <div class="mb-3">
        <label  for="usuario"class="form-label">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="usuario">
        <?php if($validation->getError('usuario')) {?>
        <div class='alert alert-danger mt-2'> 
          <?= $error=$validation->getError('usuario'); ?>
        </div>  
        <?php }?>
      </div> 

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <?php if($validation->getError('email')) {?>
        <div class='alert alert-danger mt-2'> 
          <?= $error=$validation->getError('email'); ?>
        </div>  
        <?php }?>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
      <?php if($validation->getError('pass')) {?>
        <div class='alert alert-danger mt-2'> 
          <?= $error=$validation->getError('pass'); ?>
        </div>  
        <?php }?>
    </div>
      <p>Sexo: Hombre<input type="radio" name="sexo" value="h"> Mujer<input type="radio" name="sexo" value="m" ></p>
      <p>Acepto condiciones: <input type="checkbox" value="acepta" name="condiciones" ></p>
      
    <button type="submit" class="btn btn-primary">Enviar</button>
      
</div>
</form> 
<br>
<br>
<br>

