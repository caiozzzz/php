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
    
  </head>

  <body>
  <?php include("cabecalho.php") ?>

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1>Fuzzy Cardigan</h1>
          <p>por apenas R$ 129,00</p>
          <form action="./checkout.html"> 
            <fieldset class="cores">
              <legend>Escolha a cor</legend>

              <input checked type="radio" name="cor" id="verde" />
              <label for="verde">
                <img
                  src="img/produtos/foto1-verde.png"
                  alt="Produto na cor azul"
                />
              </label>

              <input type="radio" name="cor" id="rosa" />
              <label for="rosa">
                <img
                  src="img/produtos/foto1-rosa.png"
                  alt="Produto na cor azul"
                />
              </label>

              <input type="radio" name="cor" id="azul" />

              <label for="azul">
                <img
                  src="img/produtos/foto1-azul.png"
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
          Esse é o melhor casaco de Cardigã que voce já viu. Excelente material
          italiano com estampa desenhada pelos artesãos da comunidade de Krotor
          nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a
          jato.
        </p>
      </div>
    </div>

 
    <?php include("rodape.php"); ?>
    <script type="text/javascript" src="js/produto.js"></script>
   
  </body>
</html>
