<!DOCTYPE html>
<html>

   <?php
   $cabecalho_title="produto da Mirror Fashion";
   include("cabecalho.php")
   ?>
  

    <div class="container destaque">
      <section class="busca">
        <h2>Busca</h2>

        <form>
          <input type="search" />
        </form>
        <!--fim .busca-->
      </section> 


      <section class="menu-departamentos">
        <h2>Departamentos</h2>

        <nav>
          
          <ul>
            <li><a href="#">Blusas e camisas</a>
            <ul>
              <li><a href="#">Manga curta</a></li>
              <li><a href="#">Manga comprida</a></li>
              <li><a href="#">Manga social</a></li>
              <li><a href="#">Manga casual</a></li>
            </ul>
            </li>
            <li><a href="#">Calças</a></li>
            <li><a href="#">Saias</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Sapatos</a></li>
            <li><a href="#">Bolsas e acessórios</a></li>
            <li><a href="#">Acessórios</a></li>
          </ul>
        </nav>
      </section>


      <!--fim .banner-destaque-->
      <section class="banner-destaque">
        <figure>
          <img src="img/destaque-home.png" alt="Promoção: Big City Night" />
        </figure>

      </section>
      
      <a href="#" class="pause"></a>
      <!--fim .container .destaque-->
    </div>
    <!--fim .container .destaque -->

    <div class="container paineis">
      <!--Os paineis de novidades e mais vendidos entrarão aqui dentro-->

      <section class="painel novidades">
        <h2>Novidades</h2>
        <ol>
          <!--primeiro produto-->
          <?php
          $conexao = mysqli_connect("127.0.0.1","root","","wd43");
          $dados = mysqli_query($conexao,"SELECT * FROM produtos");
          while ($produto = mysqli_fetch_array($dados)):
            ?>
          <li>
          
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura1.png" alt="miniatura1" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
        <?php endwhile; ?>
        </ol>
        <button type="button">Mostrar mais</button>

      </section>
      
      <section class="painel mais-vendidos">
        <h2>Mais vendidos</h2>
        <ol>
          <!--coloque vários produtos aqui-->
          
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura7.png" alt="miniatura7" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura8.png" alt="miniatura8" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura9.png" alt="miniatura9" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura10.png" alt="miniatura10" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura11.png" alt="miniatura11" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura12.png" alt="miniatura12" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura13.png" alt="miniatura12" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura14.png" alt="miniatura12" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura15.png" alt="miniatura12" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          
        </ol>
        <button type="button">Mostrar mais</button>
      </section>

    </div>
    <!--fim .container .paineis-->

    <footer>
      <div class="container">
        <img src="img/logo-rodape.png" alt="Logo da Mirror Fashion" />
        <ul class="social">
          <li><a href="http://facebook.com">Facebook</a></li>
          <li><a href="http://twitter.com"></a>Twitter</li>
          <li><a href="http://plus.google.com"></a>Google+</li>
        </ul>
      </div>
    </footer>
    <script type="text/javascript" src="js/banner.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/home.js"></script>

  </body>
</html>
