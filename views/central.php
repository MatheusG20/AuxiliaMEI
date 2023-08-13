<?php require_once 'lib/vendor/autoload.php';  ?> 
<?php \Classes\ClassLayout::setHeadRestrito("user"); ?>
<?php \Classes\ClassLayout::setHead('Área Restrita | AuxiliaMei', 'Olá'); ?>

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
        </div>
      </section>

      <section class="login-formulario" aria-label="Formulário">
        <p class="col-2 font-1-xl">Bem vindo, Renan Breves</p>
      </section>
    </div>
  </main>

  <?php \Classes\ClassLayout::setFooter(); ?>