<div class="container-fluid p-0">
	<div class="row">
	<img src="<?=base_url()?>/content/imagens/top_visita.png" class="w-100" alt="">
	</div>
</div>
<div class="container clearfix mb-5">
	<h1 class="display-4 text-center text-warning">Contato</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="row w-100 mx-auto">
				<div class="col-md-6">
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
					</div>	
				</div>
				<div class="col-md-6">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var map;
	function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -22.585369, lng: -45.639253},
		zoom: 15
	});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9quA_cEdny0JAx-NLbhUvOf6WEA5cnNY&callback=initMap"
async defer></script>