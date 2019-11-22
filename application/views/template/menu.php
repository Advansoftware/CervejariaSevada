
<nav class="navbar navbar-inverse navbar-expand-md navbar-light bottom-box menuFixo">
  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>content/imagens/LOGOMARCA.png" id="logo" alt="Câmara Municipal De Brazópolis" title="Câmara Municipal De Brazópolis"></a>
<button type="button" class="navbar-toggler border-warning text-light offcanvas-toggle offcanvas-toggle-close"
data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">&#x2630; <span class="sr-only">Toggle navigation</span>
</button>
  <div class="navbar-offcanvas navbar-offcanvas-touch justify-content-end navbar-collapse" id="js-bootstrap-offcanvas">
    <ul class="navbar-nav mr-4" style="left: 100px;">
        <?php 
        $get_id = isset($_GET['id']) ? $_GET['id']: null;

        if($get_id==null):
        ?>
        <li class="nav-item  active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
          <a class="nav-link" href="<?php echo base_url();?>">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <?php
        if($get_id==2):
        ?>
        <li class="nav-item  active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>historia?id=2">Histórico</a>
      </li>
      <?php
      if($get_id==3):
        ?>
        <li class="nav-item  active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>licitacoes?id=3">Licitações</a>
      </li>
      <?php
      if($get_id==4):
        ?>
        <li class="nav-item  active">
        <?php else : ?>
          <li class="nav-item">
        <?php endif;?>
        <a class="nav-link" href="<?php echo base_url();?>noticias?id=4">Notícias</a>
      </li>
       <?php
      if($get_id>4 && $get_id < 10):
        ?>
        <li class="nav-item dropdown active">
        <?php else : ?>
         <li class="nav-item dropdown">
        <?php endif;?>
	</ul>
  </div>
</nav>
<div class="mt-5">
	<br/>
</div>
