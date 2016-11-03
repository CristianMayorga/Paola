<?= form_open('cerdos/ingresarVacuna'); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );
?>

    <div class="content">
    <div class="tituloformulario">
      Vacunas
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
          </div>

      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>TIPOS DE VACUNA</label></div>
            <div class="col-md-6">
              <input type="radio" name="opcionVacuna" value="1" checked="true"> Hibapentina </br>
              <input type="radio" name="opcionVacuna" value="2"> Inmuno castracion </br>
              <input type="radio" name="opcionVacuna" value="3"> Peste porcina </br>
          </div>
          <div class="col-md-4"></div>
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

    