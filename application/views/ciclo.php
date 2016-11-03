<form id="form" method="GET" action="<?= base_url() ?>index.php/ciclo/index ">
<div class="content">
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4 camposformulario">
        <div class="col-md-6"><label>Corral:</label></div>
        <div class="col-md-6"><input type="text" id="query" name="query" min="1" max="10"/></div>
        <div class="col-md-4 camposformulario"></div>
      </div>
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
    <td>No Corral</td>
    <td>Cantidad de Cerdos</td>
    <td>Precio de Compra</td>
    <td>Cantidad Muertes</td>
    <td>Total Cerdos</td>
  </tr>
  <?php 
  if($result){
    foreach ($result as $row) {?>
      
      <tr>
        <td> <?= $row['ID_corral'];?> </td>
        <td> <?= $row['cantidad'];?> </td>
        <td> <?= $row['promedio'];?> </td>
        <td> <?= $row['muertes'];?> </td>
        <td> <?= $row['diferencia'];?> </td>       
      </tr>
      
    <?php }
  }
?>

</table>

