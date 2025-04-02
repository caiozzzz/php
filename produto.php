<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mirror Fashion</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/produtos.css" />
    <?php $cabecalho_css = 'link rel="stylesheet" href="css/produto.css';?>

    <?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos where id = $_GET[id]");
    
$produto = mysqli_fetch_array($dados);
?>
    
  </head>

  <body>
  <?php include("cabecalho.php") ?>

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1><?= $produto['nome']?></h1>
          <p>por apenas <?= $produto['preco']?></p>
          <form action="/php-main/checkout.php" method="POST"> 
           <input  type="hidden" name="nome" id="nome" value="<?= $produto['nome']?>" />
           <input  type="hidden" name="preco" id="preco" value="<?= $produto['preco']?>" />
           <input  type="hidden" name="id" id="id" value="<?= $produto['id']?>"/>
            
            <fieldset class="cores">
              <legend>Escolha a cor</legend>

              <input checked type="radio" name="cor" id="verde" value="verde" />
              <label for="verde">
                <img
                  src="img/produtos/foto<?=$produto['id'] ?>-verde.png"
                  alt="Produto na cor azul"
                />
              </label>

              <input type="radio" name="cor" id="rosa"value="rosa"  />
              <label for="rosa">
                <img
                  src="img/produtos/foto<?=$produto['id']?>-rosa.png"
                  alt="Produto na cor azul"
                />
              </label>

              <input type="radio" name="cor" id="azul" value="azul" />

              <label for="azul">
                <img
                  src="img/produtos/foto<?=$produto['id']?>-azul.png"
                  alt="Produto na cor azul"
                />
              </label>
            </fieldset>
            <fieldset class="tamanhos">
              <legend>o tamanho:</legend>
              <input
                type="range"
                min="36"
                max="46"
                value="42"
                step="2"
                name="tamanho"
                id="tamanho"
                />
                <output for="tamanho" name="valortamanho">42</output>
            </fieldset>

            <button class="comprar">comprar</button>
          </form>
        </div>

        <div class="detalhes"></div>
        <table>
          <thead>
            <tr>
              <th>Característica</th>
              <th>Detalhe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Modelo</td>
              <td>Cardigã 7845</td>
            </tr>

            <tr>
              <td>Modelo</td>
              <td>Algodaõ e poliester</td>
            </tr>
            <tr>
              <td>Cores</td>
              <td>Azul,Rosa e verde</td>
            </tr>

            <tr>
              <td>Lavagem</td>
              <td>Lavar a mão</td>
            </tr>
          </tbody>
        </table>
        <p>
         <?=$produto['descricao'] ?>
        </p>
      </div>
    </div>

    <iframe width="" height="44" frameborder="0" src="https://www.facebook.com/v9.0/plugins/like.php?action=recommend&amp;app_id=113869198637480&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df38739b8f21bc8%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff12b5052557ef34%26relation%3Dparent.parent&amp;container_width=734&amp;href=https://www.embedista.com/&amp;locale=en_US&amp;sdk=joey&amp;share=true" class="blocky" style="width: 500px;"></iframe><script type="text/javascript" src="https://www.embedista.com/j/likeshare.js"></script><div id="fbroot"></div><div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"><a href="https://www.embedista.com/fb-buttons">Facebook Like Button Generator</a></div><div class="fblike" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
    <?php include("rodape.php"); ?>
    <script type="text/javascript" src="js/produto.js"></script>
   
  </body>
</html>
