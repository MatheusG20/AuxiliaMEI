<?php header("Content-Type: text/html; charset=utf-8");
include('../config/config.php');
include(DIRREQ.'lib/vendor/autoload.php');

\Classes\ClassLayout::setHead('Homepage', 'Olá'); ?>

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
      <div class="titulo container">
        <p class="font-2-l-b c5">Termos de uso</p>
        <h1 class="font-1-xxl c0">termos e condições<span class="p1">.</span></h1>
      </div>
    </div>

    <div class="termos font-2-s c10 container">
      <h2 class="font-1-l c11">1. Política de Estorno</h2>
      <p>1.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <p>1.2 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <p>1.3 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <h2 class="font-1-l c11">2. Conta do Usuário</h2>
      <p>2.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <h2 class="font-1-l c11">3. Seguro Bikcraft</h2>
      <p>3.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
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
            <a href="./index.html" pagamento></a></li>
            <li><a href="<?php echo DIRPAGE.'views/index.php';?>">Planos</a></li>
            <li><a href="<?php echo DIRPAGE.'views/cadastro.php';?>">Cadastro</a></li>
            <li><a href="<?php echo DIRPAGE.'views/login.php';?>">Login</a></li>
            <li><a href="<?php echo DIRPAGE.'views/login.php';?>">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m c6">Andrade acessoria © Alguns direitos reservados.</p>
    </div>
  </footer>
  <?php \Classes\ClassLayout::setFooter(); ?>