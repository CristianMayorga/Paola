
    <div class="content">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Fecha de entrada:', 'FechaEntrada') ?></div>
            <div class="col-md-6"><input type="text" id="fecha-ingreso-cerdos" style="width: 80%;" /></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><?= form_label('Cantidad de Cerdos:', 'CantidadCerdos') ?></div>
            <div class="col-md-6"><input type="text" name="cantidad de cerdos" min="1" max="10"/></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Precio $:</label></div>
            <div class="col-md-6"><input type="text" name="precio" min="1" max="10"/></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Peso:</label></div>
            <div class="col-md-6"><input type="text" name="peso" min="1" max="10"/></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Sexo:</label></div>
            <div class="col-md-6">
          <select>
                  <option>HEMBRA</option>
                  <option>MACHO</option>
          </select>
          </div>
          </div>
               <div class="col-md-4"></div>
          
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario">
            <div class="col-md-6"><label>Corral:</label></div>
            <div class="col-md-6"><input type="text" name="corral" min="1" max="10"/></div>
          </div>
          <div class="col-md-4"></div>
      </div> 
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 camposformulario centrartexto">
            <input type="button" value="GUARDAR" />
          </div>
          <div class="col-md-4"></div>
      </div>
    </div>
   