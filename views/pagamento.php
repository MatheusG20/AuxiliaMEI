<?php
header("Content-Type: text/html; charset=utf-8");
include('../config/config.php');
include(DIRREQ.'lib/vendor/autoload.php');

\Classes\ClassLayout::setHead('Homepage', 'Olá'); ?>

<body id="pagamento">
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
    <form class="cadastro container" action="./cadastro.html">
      <div class="cadastro-produto">
        <h2 class="font-1-xl c9">escolha a forma de pagamento</h2>
      </div>

      <div class="cadastro-dados form">

        <a href="./pix.html" class="botao col-2">Pagar via pix</a>
        <a href="./cartao.html" class="botao col-2">Pagar via cartão de crédito/débito</a>
      </div>
    </form>
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
  <?php \Classes\ClassLayout::setFooter(); ?>