<div class="container clearfix mb-5">
  <div class="row mb-5">
    <h1 class="display-4 text-center col-md-12">{Sevda} Amor</h1>
	<div class="col-md-6 justify-content-center mt-4 mb-4 font-family:'Brandon Grotesque Light'">
				<p class="text-justify">Palavra de origem turca que significa <b>‘Amor’</b>, o profundo amor.<br> Pelo próximo, por alguém especial, pela cerveja artesanal, pela natureza e energia das montanhas, pelos valores da vida. Somos uma micro cervejaria localizada em Luminosa/MG, em um vale rodeado pelas montanhas da Serra da Mantiqueira, na <b>Hospedaria Rural Candelária</b>, na rota do Caminho da Fé.</p>
	</div>
	<div class="col-md-6">
		<img src="<?=base_url()?>/content/imagens/sevda.png" class="img-fluid d-sm-block d-none" alt="cervejaria sevda logotipo">
	</div>
  </div>
  <div class="row">
		<div class="col-md-6">
			<img src="<?=base_url()?>/content/imagens/1slide.jpg" class="img-fluid mb-4" alt="Sevda Nossa Fabrica">
		</div>
		<div class="col-md-6 justify-content-center mb-4 font-family:'Brandon Grotesque Light'">
			<p class="text-justify">
				Mais do que apreciar uma cerveja preparada com ingredientes altamente selecionados, <b>CERVEJARIA SEVDA</b> é uma experiência única de harmonização, amizade e celebração.<br />
				Faça uma visita inesquecível à cervejaria que se tornou parte da rota do Caminho da Fé.
      </p>
  </div>
  </div>
  <div class="row mb-5">
	<div class="col-md-6 justify-content-center mt-4 mb-4 font-family:'Brandon Grotesque Light'">
  <h1 class="display-5 text-center col-md-12">Coronavírus</h1>
        <p class="text-justify">Em meio a situação atual em que vivemos durante essa pandemia, nos da <b>Sevda</b>  estamos lutando sempre e preparamos um vídeo especial para você, assista o vídeo a seguir.</p>
        <div class="row">
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Veja as informações mais recentes do MS sobre o COVID-19.<br>
            <hr>
              <a href="https://coronavirus.saude.gov.br/" class="btn btn-block btn-danger mt-2" target="_blank">Veja mais</a>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
	</div>
	<div class="col-md-6">
  <div id="player" data-plyr-provider="vimeo" data-plyr-embed-id="411589909"></div>
	</div>
  </div>
</div>
<script src="<?= base_url();?>/assets/src/js/plyr.js"></script>
<script>
    // Change the second argument to your options:
// https://github.com/sampotts/plyr/#options
const player = new Plyr('#player', { captions: { active: true }});

// Expose player so it can be used from the console
window.player = player;
    //# sourceURL=pen.js
  </script>