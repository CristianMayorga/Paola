<?= form_open('cerdos/index'); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );

  $cantidadCerdos = array(
    'name' => 'CantidadCerdos',
    'placeholder' => 'Cantidad'
    );

  $precioCerdos = array(
    'name' => 'precioCerdos',
    'placeholder' => 'Precio'
    );

  $pesoCerdos = array(
    'name' => 'pesoCerdos',
    'placeholder' => 'Peso'
    );

  $sexo = array(
    'macho' => 'Macho',
    'hembra' => 'Hembra'
    );
?>

 <div class="content">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
        <div class="col-md-6"><?= form_label('Fecha de entrada:', 'FechaEntrada') ?></div>
        <div class="col-md-6"><?= form_input($fecha); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Cantidad de Cerdos:', 'CantidadCerdos') ?></div>
      <div class="col-md-6"><?= form_input($cantidadCerdos); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="content">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
        <div class="col-md-6"><?= form_label('Precios $:', 'PrecioCerdos') ?></div>
        <div class="col-md-6"><?= form_input($precioCerdos); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Peso:', 'PesoCerdo') ?></div>
      <div class="col-md-6"><?= form_input($pesoCerdos); ?></div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Sexo:', 'SexoCerdo') ?></div>
      <div class="col-md-6">
        <?= form_dropdown('dropdownSexo', $sexo) ?>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div> 

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 camposformulario">
      <div class="col-md-6"><?= form_label('Corral:', 'Corral') ?></div>
      <div class="col-md-6">
        <select name='corral'>
          <option values=''>Seleccionen un corral</option>
          <?php foreach ($corrales->result() as $corrals) {?>
            <option value='<?= $corrals->ID; ?>'> <?= $corrals->ID; ?></option>
          <?php } ?>
        </select>
      </div>
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