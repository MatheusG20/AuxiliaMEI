<?php 

use Classes\ClassValidate;


$validate= new Classes\ClassValidate();
echo $validate;

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="pagamento elétricas de alta precisão e qualidade feitas sob medida para o cliente. Explore o mundo na sua velocidade com a Bickecraft">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento | cartão</title>

  <link rel="icon" href="./img/favicon.png" type="image/svg+xml">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body id="termos">
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html"><img src="./img/fotos/Logotopo.png" alt="Andrade acessoria"></a>
      <nav aria-label="primaria">
        <ul class=" header-menu font-1-m c0">
          <li><a href="./index.html">Planos</a></li>
          <li><a href="./cadastro.html">Cadastro</a></li>
          <li><a href="./login.html">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="titulo-bg">
    </div>

    <div class="login container">
      <section class="login-dados" aria-label="Endereço">
        <h2 class="font-1-m c0">Facilita Mei</h2>
        <div class="login-endereco font-2-s c4">
          <p>Rua Ali Perto, 35</p>
          <p>Rio de Janeiro - RJ</p>
          <p>Brasil - Terra - Vita Láctea</p>
        </div>
        <address class="login-meios font-2-s c4">
          <a href="mailto:login@bikcraft.com">login@bikcraft.com</a>
          <a href="mailto:assistencia@bikcraft.com">assistencia@bikcraft.com</a>
          <a href="tel:+552199999999">+55 21 9999-9999</a>
        </address>
      </section>
      <section class="login-formulario" aria-label="Formulário">
        <form class="form" action="./login.html">
          <div class="col-2">
            <label for="cartao-nmr">Número do cartão</label>
            <input type="text" id="cartao-nmr" name="cartao-nmr">
          </div>
          <div class="col-2">
            <label for="cnpj-cpf">CNPJ ou CPF</label>
            <input type="text" id="cnpj-cpf" name="cnpj-cpf">
          </div>
          <div class="col-2">
            <label for="titular">Nome do titular</label>
            <input type="text" id="titular" name="titular">
          </div>
          <div class="col-2">
            <label for="vencimento">Vencimento</label>
            <input type="text" id="vencimento" name="vencimento">
          </div>
          <div class="col-2">
            <label for="segurança">Código de segurança</label>
            <input type="text" id="segurança" name="segurança">
          </div>
          <button class="botao col-2">realizar pagamento</button>
        </form>
      </section>
    </div>
  </main>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="./img/fotos/Logotopo.png" alt="">
      <div class="footer-login">
        <h3 class="font-2-l-b c0">login</h3>
        <ul class="font-2-m c5">
          <li><a href="tel:+5535998986346">+55 (35) 998987349</a></li>
          <li><a href="mailto:login@Andrade acessoria.com">login@Andrade acessoria.com</a></li>
          <li>Rua ali perto, 42 - Jd.Primavera</li>
          <li>São Paulo</li>
        </ul>
        <div class="footer-redes">
          <a href="./"><img src="./img/redes/instagram.svg" alt=""></a>
          <a href="./"><img src="./img/redes/facebook.svg" alt=""></a>
          <a href="./"><img src="./img/redes/youtube.svg" alt=""></a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b c0">Informações</h3>
        <nav>
          <ul class="font-1-m c5">
            <a href="./index.html" pagamento</a></li>
              <li><a href="./index.html">Planos</a></li>
              <li><a href="./login.html">login</a></li>
              <li><a href="./termos.html">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m c6">Andrade acessoria © Alguns direitos reservados.</p>
    </div>
  </footer>
  <script src="./js/script.js"></script>
</body>

</html>