<?php header("Content-Type: text/html; charset=utf-8");?>
<?php \Classes\ClassLayout::setHead('Login | AuxiliaMei', 'Olá'); ?>

<body id="termos">
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html"><img src="./img/fotos/Logotopo.png" alt="Andrade acessoria"></a>
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
        <form class="form" id="formLogin" name="formLogin" action="<?php echo DIRPAGE.'controllers/controllerLogin';?>" method="post">
          <div class="col-2">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="" required>
          </div>
          <div class="col-2">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
          </div>
          <div class="col-2">
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
          </div>
          <div class="resultadoForm"></div>
          <button type="submit" form="formLogin" class="botao col-2" id="formLogin">Login </a></button>
          <div class="col-2"> 
            <label for="forgetP"><a href="<?php echo DIRPAGE.'esqueciSenha';?>">Esqueci minha senha</label></a>
          </div>
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
            <a href="./index.html" pagamento></a></li>
            <li><a href="<?php echo DIRPAGE.'views/index.php';?>">Planos</a></li>
            <li><a href="<?php echo DIRPAGE.'views/cadastro.php';?>">Cadastro</a></li>
            <li><a href="<?php echo DIRPAGE.'login';?>">Login</a></li>
            <li><a href="<?php echo DIRPAGE.'login';?>">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m c6">Andrade acessoria © Alguns direitos reservados.</p>
    </div>
  </footer>
  <?php \Classes\ClassLayout::setFooter(); ?>