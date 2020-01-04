var $doc = $('html, body');
var base_url =  "http://" + window.location.host + "/git/CervejariaSevda/";
$(document).ready(function() {
        $("#ajaxPagination a").click(function(e){
            e.preventDefault();
            var href =$(this).attr('href');
            $("#RegistrosPagina").load(href); //eliminar ".conteudo" e trocar ".conteudo" por "#conteudo"
        });
        $("#menuFixo").scrollTop()
});

$('.scrollSuave').click(function() {
	$doc.animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500);
	return false;
});
$(".page-item a").attr('class','page-link');
	
function envia_visita(){

    var entidade = $("#entidade").val();
    var nome = $("#nome").val();
    var data = $("#data").val();
    var ob = $("#palavra").val();
    var fd = new FormData();
    fd.append('entidade', entidade);
    fd.append('data', data);
    fd.append('nome', nome);
    fd.append('ob', ob);

    if (nome != '' && entidade != '' && data != '') {
        $.ajax({
            method: "POST",
            url: base_url+"/visitacao/whatsapp",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            type: 'post'
        }).done(function(html) {
            window.open("https://api.whatsapp.com/send?phone=5535991220077&text="+html, "_blank");
        });
    } else {
        alert("Falta Preencher alguns dados");
    }
}
