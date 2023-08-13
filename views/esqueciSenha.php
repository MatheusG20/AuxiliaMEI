<?php
header("Content-Type: text/html; charset=utf-8");
require_once("lib/vendor/autoload.php");

\Classes\ClassLayout::setHead('Recupere sua senha | AuxiliaMei', 'Olá'); ?>

<body id="cadastro">
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html">
      <img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt="Bikcraft">
      </a>
    </div>
  <main>

    <form class="cadastro container" name="formSenha" id="formSenha" action="<?php echo DIRPAGE. 'controllers/controllerSenha.php'; ?>" method="post">
      <div class="cadastro-dados form">
        <h2 class="font-1-xs c9 col-2">dados pessoais</h2>
        <div class="col-2">
        <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="" required>
        </div>
        
        <div class="col-2">
          <label for="email">CNPJ</label>
          <input type="text" id="cnpj" name="cnpj" required>
        </div>
        <div class="col-2">
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
        </div>
        <div class="retornoSen">
        </div> 
        <button type="submit" form="formSenha" name="submit" id="submit" class="botao col-2">Solicitar </a>
      </div>
    </form>
  </main>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="./img/fotos/Logotopo.png" alt="Bikcraft">
      <div class="footer-login">
        <h3 class="font-2-l-b c0">login</h3>
        <ul class="font-2-m c5">
          <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
          <li><a href="mailto:login@bikcraft.com">login@bikcraft.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="./img/redes/instagram.svg" alt="Instagram">
          </a>
          <a href="./">
            <img src="./img/redes/facebook.svg" alt="Facebook">
          </a>
          <a href="./">
            <img src="./img/redes/youtube.svg" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b c0">Informações</h3>
        <nav>
          <ul class="font-1-m c5">
            <a href="./index.html" pagamento></a></li>
            <li><a href="<?php echo DIRPAGE.'views/index.php';?>">Planos</a></li>
            <li><a href="<?php echo DIRPAGE.'views/cadastro.php';?>">Cadastro</a></li>
            <li><a href="<?php echo DIRPAGE.'login';?>">Login</a></li>
            <li><a href="<?php echo DIRPAGE.'views/login.php';?>">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m c6">Bikcraft © Alguns direitos reservados.</p>
    </div>
  </footer>
  <?php \Classes\ClassLayout::setFooter(); ?>


  