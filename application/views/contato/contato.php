<div class="container-fluid p-0">
	<div class="row">
	<img src="<?=base_url()?>/content/imagens/top_contato.jpg" class="w-100" alt="">
	</div>
</div>
<div class="container clearfix mb-5">
		<h1 class="display-4 text-center text-warning">Contato</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="row w-100 mx-auto">
				<div class="row">
					<div class="col-md-10">
						<div class="row">

							<div class="card w-100">
								<div class="card-header text-white" style="background-color: #844917 !important;">
										<h6>Entrar em Contato</h6>
								</div>
								<div class="card-body">
									<div class="card-text mb-3">
										<p class="text-justify">Entre em contato atravez do formulario a baixo que retornaremos para você.</p>
									</div>
										<form method="post" class="form-material">
											<div class="form-row">
												<div class="form-group col-md-11">
													<label for="email" class="col-form-label">Email: *</label>
													<input type="email" name="email" id="email" class="form-control" placeholder="Nome" />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-11">
													<label for="nome" class="col-form-label">Nome: *</label>
													<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-11">
													<label for="palavra" class="col-form-label">Mensagem:</label>
														<textarea id="palavra" class="form-control" name="" rows="3"></textarea>
												</div>
											</div>
									
										
										</form>
										
											<button onclick="envia_visita()" class="btn btn-success btn-block col-md-3"><i class="fas fa-envelope"></i>&nbsp;Enviar</button>
							</div>
							<div id="map"></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}