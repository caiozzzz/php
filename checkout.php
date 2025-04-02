<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Mirror Fashion</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css" />
    <link rel="stylesheet" href="css/checkout.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggleExternalContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.html">Mirror Fashion</a>
      <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="sobre.html">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perguntas frequentes</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Ótima Escolha!</h1>

        <p class="lead">
          Obrigado por comprar na Mirror Fashion! Preencha seus dados para
          efetivar a compra.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-header"><h2>Ótima Escolha!</h2></div>

            <div class="card-body">
              
            <img src="img/produtos/foto<?= $_POST['id'] ?>-<?=$_POST['cor']?>.png" 
            alt="<?= $_POST['nome']?>" />
              <dl>
                <dt>Produtos</dt>
                <dd><?=$_POST['nome']?></dd>

                <dt>Cor</dt>
                <dd><?=$_POST['cor']?></dd>

                <dt>Tamaho</dt>
                <dd><?=$_POST['tamanho']?></dd>

                <dt>Preço</dt>
                <dd id="preco"><?=$_POST['preco']?></dd>
              </dl>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <div class="form-group">
              <label for="qtd">Quantidade:</label>
              <input
                type="number"
                id="qtd"
                min="1"
                max="99"
                value="1"
                class="form-control"
              />
            </div>

            <div class="form-group">
              <label for="total">Total:</label>
              <output id="total" class="form-control"> R$ 129,90</output>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <form>
            <div class="row">
              <fieldset class="col-lg-6">
                <legend>Dados Pessoais</legend>
                <div class="form-group">
                  <label for="nome">Nome completo</label>
                  <input type="text" class="form-control" id="nome" />
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" />
                </div>
                <div class="form-group custom-control custom checkbox">
                  <input
                    type="checkbox"
                    class="custom-control input"
                    id="newletter"
                    value="sim"
                    checked
                  />
                  <label class="custom-control-label" for="newsletter">
                    Quero receber o newsletter da Mirror Fashion
                  </label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Cartão de crédito</legend>
                <div class="form-group">
                  <label for="Número-cartao">Número - CVV</label>
                  <input type="text" class="form-control" id="numero-cartao" />
                </div>
                <div class="form-group">
                  <label for="bandeira-cartao">Bandeira</label>
                  <select class="custom-select" id="bandeira-cartao">
                    <option disabled select>selecione uma opcao</option>
                    <option value="Master">MasterCard</option>
                    <option value="Visa">Visa</option>
                    <option value="Amex">American Express</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="numero">numero </label>
                  <input data-mask=" 9999 9999 9999 9999-999"
                    type="text"
                    class="form-control"
                    id="numero"
                    name="numero"
                    autofocus
                    required
                  />

                 
                  
                  <label for="Validade-cartao">Validade</label>
                  <input
                    type="mouth"
                    class="form-control"
                    id="Validade-cartao"
                    name="Validade-cartao"
                  />
                </div>
              </fieldset>

              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="email@exemplo.com"
              />

              <input
                data-mask="999.999.999-99"
                required
                type="text"
                class="form-control"
                id="cpf"
                name="cpf"
                placeholder="000.000.000-00"
              />

              <input type="text" pattern="^@\w{2,}" name="usuario_twitter" />

              <button type="submit" class="btn btn-primary">
                <span class="oi oi-thumb"></span>
                Confirmar Pedido
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/total.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
  </body>
</html>
