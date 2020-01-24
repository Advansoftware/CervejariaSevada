
<nav class="navbar navbar-inverse navbar-expand-md navbar-light bottom-box menuFixo">
  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>content/imagens/LOGOMARCA.png" id="logo" class="large" alt="Cervejaria Sevda" title="Cervejaria Sevda"></a>
<button type="button" class="navbar-toggler border-warning text-light offcanvas-toggle offcanvas-toggle-close"
data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">&#x2630; <span class="sr-only">Toggle navigation</span>
</button>
  <div class="navbar-offcanvas navbar-offcanvas-touch justify-content-end navbar-collapse" id="js-bootstrap-offcanvas">
    <ul class="navbar-nav mr-4" style="left: 100px;">
        <?php 
        $get_id = isset($_GET['id']) ? $_GET['id']: null;

        if($get_id==null):
        ?>
        <li class="nav-item bounceIn active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
          <a class="nav-link" href="<?php echo base_url();?>">Cervejaria<span class="sr-only">(current)</span></a>
      </li>
      <?php
        if($get_id==2):
        ?>
        <li class="nav-item bounceIn active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>produtos?id=2">Produtos</a>
      </li>
      <?php
      if($get_id==3):
        ?>
        <li class="nav-item bounceIn active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>visitacao?id=3">Visitação</a>
      </li>
      <?php
      if($get_id==4):
        ?>
        <li class="nav-item bounceIn active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>galeria?id=4">Galeria</a>
      </li>
      <?php
      if($get_id==5):
        ?>
        <li class="nav-item bounceIn active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>contato?id=5">Contato</a>
      </li>
	</ul>
  </div>
</nav>
<div class="bg-dark">
	<br/>
</div>
