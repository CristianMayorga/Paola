<?= form_open('cerdos/ingresarComida'); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );

  $cantidadComida = array(
    'name' => 'cantidadComida',
    'placeholder' => 'cantidad'
    );

  $precioComida = array(
    'name' => 'precioComida',
    'placeholder' => 'precio'
    );
?>
  <div class="content">
    <div class="tituloformulario">
      Ingreso comida 
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
            <div class="col-md-6"><?= form_label('Cantidad:', 'precioComida') ?></div>
            <div class="col-md-6"><?= form_input($cantidadComida); ?></div>
          </div>
     </div>

      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Precio de Comida c/u:', 'precioComida') ?></div>
            <div class="col-md-6"><?= form_input($precioComida); ?></div>
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

    
    