<?php
header("Content-Type: text/html; charset=utf-8");






\Classes\ClassLayout::setHead('Homepage', 'Olá'); ?>
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html"><img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt="Andrade assssoria"></a>
      <nav aria-label="primaria">
        <ul class=" header-menu font-1-m c0">
          <li><a href="<?php echo DIRPAGE.'index';?>">Planos</a></li>
          <li><a href="<?php echo DIRPAGE.'cadastro';?>">Cadastro</a></li>
          <li><a href="<?php echo DIRPAGE.'login';?>">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="introducao-bg" data-anime="400">
    <div class="introducao container">
      <div class="introducao-conteudo">
        <h1 class="font-1-xxl c0">Facilita Mei<span class="p1">.</span></h1>
        <p class="font-2-l c5">Uma iniciativa para facilitar e auxiliar os pequenos empreendedores em seu dia a dia.</p>
        <a class="botao" href="<?php echo DIRPAGE.'views/cadastro.php';?>">Cadastre-se</a>
      </div>
    </div>
  </main>

  <article class="planos-bg">
    <div class="planos container">
      <h2 class="font-1-xxl">Planos<span class="p1">.</span></h2>
      <div class="planos-item">
        <h3 class="font-1-xl c6">BÁSICO</h3>
        <span class="font-1-xl c0">R$ 359,90 <span class="font-1-xs cor-6">p/ ano</span></span>
        <ul class="font-2-m c0">
          <li>Emissor de guias;</li>
          <li>Declaração Anual de Faturamento;</li>
          <li>Suporte para dúvidas.</li>
        </ul>
        <a class="botao secundario" href="<?php echo DIRPAGE.'views/cadastro.php';?>">Assinar</a>
      </div>

      <div class="planos-item">
        <h3 class="font-1-xl p1">COMPLETO</h3>
        <span class="font-1-xl c0">R$ 959,90 <span class="font-1-xs cor-6">p/ ano</span></span>
        <ul class="font-2-m c0">
          <li>Emissor de guias;</li>
          <li>Declaração Anual de Faturamento;</li>
          <li>Suporte para dúvidas;</li>
          <li>Alteração/Atualização de dados;</li>
          <li>Emissão de NFS-e;</li>
          <li>Acompanhamento de faturamento;</li>
          <li>Parcelamento de débitos.</li>
        </ul>
        <a class="botao" href="<?php echo DIRPAGE.'views/cadastro.php';?>">ASSINAR</a>
      </div>
    </div>
  </article>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt="">
      <div class="footer-login">
        <h3 class="font-2-l-b c0">contato</h3>
        <ul class="font-2-m c5">
          <li><a href="tel:+5535998986346">+55 (35) 998987349</a></li>
          <li><a href="mailto:login@Andrade acessoria.com">login@Andrade acessoria.com</a></li>
          <li>Rua ali perto, 42 - Jd.Primavera</li>
          <li>São Paulo</li>
        </ul>
        <div class="footer-redes">
          <a href="./"><img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt=""></a>
          <a href="./"><img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt=""></a>
          <a href="./"><img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>"></a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b c0">Informações</h3>
        <nav>
          <ul class="font-1-m c5">
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