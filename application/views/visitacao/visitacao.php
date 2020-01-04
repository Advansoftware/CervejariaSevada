<div class="container-fluid p-0">
	<div class="row">
	<img src="<?=base_url()?>/content/imagens/top_visita.png" class="w-100 no-gutters" alt="">
	</div>
</div>
<div class="container clearfix mb-5">
		<h1 class="display-4 text-center text-warning">Agendar Visita</h1>
	<div class="row">

		<div class="col-md-12">
			<div class="row w-100 mx-auto">

				<div class="card w-100">
					<div class="card-header text-white" style="background-color: #844917 !important;">
							<h6>Agendamento de Visitas</h6>
					</div>
					<div class="card-body">
						<div class="card-text mb-3">
							Olá! Preencha as informações abaixo e clique em enviar para abrir a tela de envio para nosso whatsapp.
						</div>
							<form method="post" class="form-material">
								<div class="form-row">
									<div class="form-group col-md-11">
										<label for="entidade" class="col-form-label">Entidade: *</label>
										<select class="form-control " id="entidade" name="entidade">
											<option value="Cervejaria" default>Cervejaria Sevda</option>
										</select>
									</div> 
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="nome" class="col-form-label">Nome: *</label>
										<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" />
									</div>
									<div class="form-group col-md-5">
										<label for="data" class="col-form-label">Data para Agendamento:</label>
										<input type="date" name="data" id="data" class="form-control"/>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-11">
										<label for="palavra" class="col-form-label">Observação:</label>
											<textarea id="palavra" class="form-control" name="" rows="3"></textarea>
									</div>
								</div>
						
							
							</form>
							
								<button onclick="envia_visita()" class="btn btn-success btn-block col-md-3"><i class="fab fa-whatsapp" aria-hidden="true"></i> Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
