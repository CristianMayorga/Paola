 <div class="content">
     <div class="tituloformulario">
      Mostrar muertes
    </div>
    <form id="form" method="GET" action="<?= base_url() ?>index.php/ciclo/mostrarmuertes ">
     <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 camposformulario">
          <div class="col-md-6"><label>Corral:</label></div>
          <div class="col-md-6"><input type="text" id="query" name="query" min="1" max="10"/></div>
          <div class="col-md-4 camposformulario"></div>
        </div>

      <div class="row">
        <div class="col-md-6 centrartabla"></div>
        <div class="col-md-6 centrartabla"></div>
      </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 camposformulario centrartexto">
        <input type="submit" id ="buscar" value="BUSCAR" />
      </div>
    </div>
    </div>
    </form>
    <table align="center" style="width:90%" class="table table-bordered">
      <tr>
        <td> Registro Muertes </td>
        <td> No Corral </td>
        <td> No Grupo </td>
        <td> No de muertos </td>
        <td> Fecha de Muerte </td>
        <td> Causas </td>
        
        
      </tr>
<?php 
  if($result){
    foreach ($result->result() as $row) {?>
      
      <tr>
        <td> <?= $row->ID;?> </td>
        <td> <?= $row->ID_corral;?> </td>
        <td> <?= $row->ID_cerdo;?> </td>
        <td> <?= $row->cantidad;?> </td>
        <td> <?= $row->fecha_muerte;?> </td>
        <td> <?= $row->causa;?> </td>

        
        
      </tr>
      
    <?php }
  }
?>
</table>
</div>


