<?= form_open('cerdos/ingresarmuertes'); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );

  $cantidad = array(
    'name' => 'cantidadConsumida',
    'placeholder' => 'Cantidad'
    );

  $cantidadCerdosMuertos = array(
    'name' => 'cantidadCerdosMuertos',
    'placeholder' => 'Cantidad'
    );

  $causaDeMuerte = array(
    'name' => 'causaDeMuerte',
    'placeholder' => 'Causa de las muertes'
    );
?>

    <div class="content">
    <div class="tituloformulario">
      Ingreso muertes 
    </div>
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Fecha:', 'fecha') ?></div>
            <div class="col-md-6"><?= form_input($fecha); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Grupo No cerdos:', 'corral') ?></div>
            <div class="col-md-6">
              <select name='grupoCerdosMuertos'>
                <option values=''>Seleccionen un grupo de cerdos</option>
                <?php foreach ($corrales->result() as $corrals) {?>
                  <option value='<?= $corrals->ID; ?>'> <?= $corrals->ID; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          </div>

      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Cantidad:', 'cantidad') ?></div>
            <div class="col-md-6"><?= form_input($cantidadCerdosMuertos); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Causas:', 'cantidad') ?></div>
            <div class="col-md-6"><?= form_textarea($causaDeMuerte)?></div>
          </div>
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