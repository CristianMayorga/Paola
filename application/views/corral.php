<?= form_open("corral/index"); ?>
<?
  $nombreCorral = array(
    'name' => 'nombreCorral',
    'placeholder' => 'Corral'
    );

  $descripcionCorral = array(
    'name' => 'descripcionCorral',
    'placeholder' => 'Descripcion'
    );
?>
<div class="content">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
        <div class="col-md-6"><?= form_label('Nombre Corral:', 'corral') ?></div>
        <div class="col-md-6"><?= form_input($nombreCorral); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Descripcion:', 'descripcion') ?></div>
      <div class="col-md-6"><?= form_input($descripcionCorral); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 
       
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario centrartexto">
      <?= form_submit('', 'Guardar'); ?>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<?= form_close(); ?>