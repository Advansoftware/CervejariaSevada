<div class="container-fluid">
    <div class="row no-gutters  d-none d-sm-block"  style="background-image: url('<?=base_url();?>content/imagens/fundos/<?=$produtos[0]['img_fundo'];?>'); background-position: 100px; background-size: 100%, 50%; background-repeat: no-repeat;">
        <div class="col-md-4">
            <img src="<?=base_url();?>content/imagens/cervejas/<?= $produtos[0]['imagem'];?>" alt="<?= $produtos[0]['nome'];?>" class="img-fluid img-thumbnail">
        </div>
    </div>
    <div class="row d-block d-sm-none">
        <div class="col-sm-12 p-0 mb-3">
            <img src="<?=base_url();?>content/imagens/fundos/<?=$produtos[0]['img_fundo'];?>" alt="<?= $produtos[0]['nome'];?>" class="img-fluid w-100" style="height: 15rem;">
        </div>
    </div>
    <div class="row mb-3 mt-2">
            <div class="col-12">
                <h5 class="display-5 text-center mt-2 pt-1">
                    Descrição
                </h5>
            </div>
    </div>
    <!--Inicia os icones e descrição-->
    <div class="row">
    <!-- coluna esquerda -->
        <div class="col-md-1 col-sm-12 pt-3 d-none d-sm-block"">

            <!--Icone/texto -->
                <div class="col-md-12 col-sm-6 text-left">
                    <p class="icon-sprite abv"><span class="display-5" style="font-size: 1.5rem; position: relative !important;top: 20px;left: 27px;"><?= $produtos[0]['abv'];?> %</span></p>
                </div>
            <!--Fim icone/texto-->

                <!--Icone/texto -->
                <div class="col-md-12 col-sm-6 text-left">
                    <p class="icon-sprite grau"><span class="display-5" style="font-size: 1.5rem; position: relative !important;top: 18px;left: 30px;"><?= $produtos[0]['grau'];?></span></p>
                </div>
            <!--Fim icone/texto-->

                <!--Icone/texto -->
                <div class="col-md-12 col-sm-6 text-left">
                    <p class="icon-sprite ibu"><span class="display-5" style="font-size: 1.5rem; position: relative !important;top: 25px;left: 30px;"><?= $produtos[0]['ibu'];?></span></p>
            </div>
            <!--Fim icone/texto-->

                <!--Icone/texto -->
                <div class="col-md-12 col-sm-6 text-left">
                    <p class="icon-sprite ebc"><span class="display-5" style="font-size: 1.5rem; position: relative !important;top: 23px;left: 38px;"><?= $produtos[0]['ebc'];?></span></p>
            </div>
            <!--Fim icone/texto-->

    </div>
    <!--Fim coluna-->
    <!-- coluna direita -->
        <div class="col-md-11">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-12 text-justify">
					<?= $produtos[0]['descricao'];?>
                    </div>
                    <div class="col-12 text-justify">
                        <h5 style="font-size: 1.8rem;" class="display-4 text-left"><?= $produtos[0]['nome'];?> combina com:</h5>
                        <p>
                        <?= $produtos[0]['combinacao'];?>
						</p>

                    </div>
                </div>
            </div>
    </div>
</div>
