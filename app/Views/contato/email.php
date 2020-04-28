<!doctype html>
<html lang="en">
  <head>
    <title>Cervejaria Sevda</title>
    <style>
        .card{
          background-image: url("http://cervejariasevda.com.br/content/imagens/cervejaria-bg.jpg");
        }
        
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <img src="http://cervejariasevda.com.br/content/imagens/sevda_copia.png" width="150px">
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr><td colspan="2"  style="padding: 20px 5px 30px 5px;">Assunto: <b><?=$assunto?></b></td></tr>
        <tr><td colspan="2"  style="padding: 20px 5px 30px 5px;">Nome: <b><?=$nome?></b></td></tr>
        <tr><td colspan="2"  style="padding: 20px 5px 30px 5px;">Email: <a hfer="mailto:<?=$email?>"><?=$email?></a></td></tr>
        <tr><td>Mensagem:</b></td><td style="padding: 20px 5px 30px 5px;"><b><?=$mensagem?></b></td> </tr>
    </table>
  </body>
</html>