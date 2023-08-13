<?php 
header("Content-Type: text/html; charset=utf-8");
require_once 'lib/vendor/autoload.php';
Classes\ClassLayout::setHead('Cadastre-se | AuxiliaMei', 'Olá'); ?>


<body id="termos">
  <header class="header-bg">
    <div class="header container">
      <a href="./index.html"><img src="./img/Auxilia.svg" alt="Andrade acessoria"></a>
      <nav aria-label="primaria">
        <ul class=" header-menu font-1-m c0">
          <li><a href="./login.html">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>

    <div class="login container">
      <section class="login-dados" aria-label="Endereço">
        <h2 class="font-1-xl c0">Central</h2>
        <div class="login-endereco font-2-s c4">
          <a href="./das.html" class="bcentral">Emitir DAS</a>
          <p></p>
          <a href="./parcelamento.html" class="bcentral">Solicitar Parcelamento</a>
          <p></p>
          <a href="./alteracao.html" class="bcentral">Solicitar Alteração</a>
          <p></p>
          <a href="./faturamento.html" class="bcentral">Consultar Faturamento</a>
          <p></p>
          <a href="./nfse.html" class="bcentral">Solicitar NFS-e</a>
          <p></p>
          <a href="./anual.html" class="bcentral">Solicitar Declaração Anual</a>
          <p></p>
          <a href="./central.html" class="bcentral">Geral</a>
        </div>
      </section>

      <section class="login-formulario" aria-label="Formulário">
        <form class="form" id="formSolNFSE" name="formSolNFSE" method="post" action="<?php echo DIRPAGE. 'controllers/controllerSolNFSE'; ?>">
          <div class="col-2">
            <label for="cnpj">CNPJ do tomador</label>
            <input type="text" id="tomadorCNPJ" name="tomadorCNPJ" placeholder="00.000.000/0000-00">
          </div>
          <div class="col-2">
            <label for="senha">valor NFS-e</label>
            <input type="text" id="valorNFSE" name="valorNFSE">
          </div>
          <div class="col-2">
            <label for="senha">Descrição</label>
            <textarea type="text" id="description" rows="10" name="description" placeholder="Descreva a NFS-e."></textarea>
          </div>
          <div class="retornoNFSE"></div>
          <button type="submit" form="formSolNFSE" name="submit" id="submit" class="botao col-2">Solicitar </a>
        </form>
      </section>
    </div>
  </main>

  <footer class="footer-bg">
  </footer>
  <?php \Classes\ClassLayout::setFooter(); ?>