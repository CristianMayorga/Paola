<?= form_open(); ?>
<?
  $usuario = array(
    'name' => 'usuario',
    'placeholder' => 'Escribe tu usuario'
    );
  $clave = array(
    'name' => 'clave',
    'placeholder' => 'Escribe tu contraseña'
    );
?>
<div class="content">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
        <div class="col-md-6"><?= form_label('Usuario:', 'usuario') ?></div>
        <div class="col-md-6"><?= form_input($usuario); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Contraseña:', 'contrasena') ?></div>
      <div class="col-md-6"><?= form_password($clave); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 
       
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario centrartexto">
      <?= form_submit('', 'OK'); ?>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<?= form_close(); ?>
    
    