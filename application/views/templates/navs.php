  <div class="container-fluid">
    <div class="header">
      <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url('images/main.jpg'); ?>" width="100%">
      </div>
      </div>

     <div class="menu">
      <div class="row">
      <div class="col-md-2 item"><a href="<?php echo site_url('login');?>">Iniciar sesion</a></div>
      <div class="col-md-2 item"><a href="<?php echo site_url('corral');?>">Ingresar Corral</a></div>
      <div class="col-md-2 item">
        <a href="<?php echo site_url('cerdos');?>">Ingresar cerdos</a>
        <div class="submenu">
          <a href="<?php echo site_url('cerdos/ingresarcomida');?>">Ingresar comida</a>
          <a href="<?php echo site_url('cerdos/ingresarvacuna');?>">Ingresar vacunas</a>
          <a href="<?php echo site_url('cerdos/ingresarconsumo');?>">Ingresar consumo</a>
          <a href="<?php echo site_url('cerdos/ingresarmuertes');?>">Ingresar muertes</a>
        </div>
      </div>
      <div class="col-md-2 item">
       <a href="<?php echo site_url('ciclo');?>">Mostrar ciclo</a>
        
          </div>
      <div class="col-md-2 item">
      <a href="<?php echo site_url('ventacerdos');?>">Venta de cerdos</a>
      <div class="submenu">
        <a href="<?php echo site_url('ventacerdos/calcularsaldos');?>">Calculo saldos</a>
      </div>
        </div> 
      </div>