<?php
header("Content-Type: text/html; charset=utf-8");
Classes\ClassLayout::setHead('Cadastre-se | AuxiliaMei', 'Olá'); ?>

<body id="cadastro">
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html">
      <img src="<?php echo DIRPAGE.'img/soLogoCerto.jpeg';?>" alt="Bikcraft">
      </a>

      

      <nav aria-label="primaria">
        <ul class=" header-menu font-1-m c0">
        <li><a href="<?php echo DIRPAGE.'index';?>">Planos</a></li>
          <li><a href="<?php echo DIRPAGE.'cadastro';?>">Cadastro</a></li>
          <li><a href="<?php echo DIRPAGE.'login';?>">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>

    <form class="cadastro container" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE. 'controllers/controllerCadastro'; ?>" method="pst">
      <div class="cadastro-produto">
        <h2 class="font-1-xs c5">Escolha seu plano!</h2>

        <input type="radio" name="tipo" value="seguro" id="seguro">
        <label for="seguro">Planos</label>

        <div class="cadastro-conteudo" id="cadastro-seguro">
          <h2 class="font-1-xs c5">Escolha o plano</h2>

          <input type="radio" name="produto" value="prata" id="prata" required checked>
          <label for="prata">Básico <span>R$ 359,90</span></label>

          <input type="radio" name="produto" value="ouro" id="ouro" required>
          <label for="ouro">Completo <span>R$ 959,90</span></label>
        </div>
      </div>
      <div class="cadastro-dados form">
        <h2 class="font-1-xs c9 col-2">dados pessoais</h2>
        <div class="col-2">
          <label for="nome">Nome Completo</label>
          <input type="text" id="nome" name="nome" required>
        </div>
        <div class="col-2">
        <label for="cnpj">CNPJ</label>
          <input type="text" id="cnpj" name="cnpj" placeholder="000.000.000-00" required>
        </div>
        <div class="col-2">
        <label for="cpf">CPF</label>
          <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
        </div>
        <div class="col-2">
          <label for="tel">Telefone</label>
          <input type="text" id="tel" name="tel" placeholder="(00) 00000-0000" required>
        </div>
        <div class="col-2">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required>
        </div>
        <div class="col-2">
          <label for="cpf">Senha</label>
          <input type="password" id="senha" name="senha" required>
        </div>
        <div class="col-2">
          <label for="cpf">Confirme sua Senha</label>
          <input type="password" id="senhaConf" name="senhaConf" required>
        </div>
        <div class="col-2">
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
        </div>
        <div class="retornoCad">
        </div> 
        <button type="submit" form="formCadastro" name="submit" id="submit" class="botao col-2">Efetuar cadastro </a>
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
            <li><a href="<?php echo DIRPAGE.'index';?>">Planos</a></li>
            <li><a href="<?php echo DIRPAGE.'cadastro';?>">Cadastro</a></li>
            <li><a href="<?php echo DIRPAGE.'login';?>">Login</a></li>
            <li><a href="<?php echo DIRPAGE.'login';?>">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m c6">Bikcraft © Alguns direitos reservados.</p>
    </div>
  </footer>
  <?php \Classes\ClassLayout::setFooter(); ?>


  