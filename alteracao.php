<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central</title>

  <link rel="icon" href="./img/Auxilia.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./css/style.css">
</head>

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
        <form class="form" action="./login.html">
          <div class="col-2">
            <label for="senha">Senha gov.br</label>
            <input type="text" id="cgov" name="gov">
          </div>
          <div class="col-2">
            <label for="senha">Alteração</label>
            <textarea type="text" id="description" rows="10" name="senha" placeholder="Descreva a alteração que deseja fazer."></textarea>
          </div>
          <a href="./central.html" class="botao col-2">Solicitar</a>
        </form>
      </section>
    </div>
  </main>

  <footer class="footer-bg">
  </footer>
  <script src="./js/script.js"></script>
</body>

</html>