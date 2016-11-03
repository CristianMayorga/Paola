<?= form_open(); ?>
<?
  $fecha = array(
    'name' => 'fecha',
    'placeholder' => 'dia/mes/año'
    );

  $corralVentaCerdos = array(
    'name' => 'corralVentaCerdos',
    'placeholder' => 'Corral'
    );

  $pesoVentaCerdos = array(
    'name' => 'pesoVentaCerdos',
    'placeholder' => 'Peso'
    );

  $precioVentaCerdos = array(
    'name' => 'precioVentaCerdos',
    'placeholder' => 'Precio'
    );

  $cerdosEnAtraso = array(
    'name' => 'cerdosEnAtraso',
     'placeholder' => 'Cerdo en atraso'
    );

  $lugarCerdosVenta = array(
    'name' => 'lugarCerdosVenta',
    'placeholder' => 'Lugar'
    );
?>
    <div class="content">
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
            <div class="col-md-6"><?= form_label('Corral:', 'fecha') ?></div>
            <div class="col-md-6"><?= form_input($corralVentaCerdos); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Peso:', 'peso') ?></div>
            <div class="col-md-6"><?= form_input($pesoVentaCerdos); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Precio $:', 'precio') ?></div>
            <div class="col-md-6"><?= form_input($precioVentaCerdos); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Cerdos en Atraso:', 'Cerdos') ?></div>
            <div class="col-md-6"><?= form_input($cerdosEnAtraso); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Lugar:', 'lugar') ?></div>
            <div class="col-md-6"><?= form_input($lugarCerdosVenta); ?></div>
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