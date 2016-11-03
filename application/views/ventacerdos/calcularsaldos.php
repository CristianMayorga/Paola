<?= form_open(); ?>
<?
  $corralCalculoCerdo = array(
    'name' => 'corralCalculoCerdo',
    'placeholder' => 'Corral'
    );

  $valorCalculoCerdo = array(
    'name' => 'valorCalculoCerdo',
    'placeholder' => 'Valor Venta Cerdos'
    );

  $servicioCalculoCerdo = array(
    'name' => 'servicioCalculoCerdo',
    'placeholder' => 'Servicio'
    );

  $trabajadorCalculoCerdo = array(
    'name' => 'trabajadorCalculoCerdo',
    'placeholder' => 'Valor a pagar'
    );

  $totalCalculoCerdo = array(
    'name' => 'totalCalculoCerdo',
    'placeholder' => 'Total'
    );
?>
    <div class="content">
    <div class="tituloformulario">
      Calculo saldos finales
    </div>
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Corral:', 'corral') ?></div>
            <div class="col-md-6"><?= form_input($corralCalculoCerdo); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
            <div class="col-md-4 camposformulario">
              <div class="col-md-6"><label>Etapa:</label></div>
              <div class="col-md-6">
                <select>
                        <option>PREINICIACION</option>
                        <option>INICIACION</option>
                        <option>MAXILECHON</option>
                        <option>MAXICERDOS</option>
                </select>
              </div>
            </div>
          <div class="col-md-4"></div>

      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Valor Venta Cerdos:', 'valor') ?></div>
            <div class="col-md-6"><?= form_input($valorCalculoCerdo); ?></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
          </div>
          <div class="col-md-4"></div>
      </div> 
       <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Servicios:</label></div>
            <div class="col-md-6">
          <select>
                  <option>AGUA</option>
                  <option>LUZ</option>
                  <option>GAS</option>
          </select>
          </div>
          </div>
          </div>

       <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Valor a pagar', 'servicios') ?></div>
            <div class="col-md-6"><?= form_input($trabajadorCalculoCerdo); ?></div>
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

    