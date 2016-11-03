<?= form_open('cerdos/ingresarConsumo'); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );

  $cantidadConsumida = array(
    'name' => 'cantidadConsumida',
    'placeholder' => 'Cantidad'
    );
?>
    <div class="content">
    <div class="tituloformulario">
      Ingreso consumo 
    </div>
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Corral:', 'corral') ?></div>
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
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Clase comida:</label></div>
            <div class="col-md-6">
              <select name="claseComida">
                  <option values=''>Seleccione una comida</option>
                  <option value="1">Preiniciacion</option>
                  <option value="2">Iniciacion</option>
                  <option value="3">Maxilechon medicado</option>
                  <option value="4">Maxilechon</option>
                  <option value="5">Maxicerdo</option>
                  <option value="6">Maxicerdo medicado</option>
              </select>
            </div>
          </div>
          <div class="col-md-4"></div>
      </div> 

      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Cantidad:', 'cantidad') ?></div>
            <div class="col-md-6"><?= form_input($cantidadConsumida); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Fecha:', 'fecha') ?></div>
            <div class="col-md-6"><?= form_input($fecha); ?></div>
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