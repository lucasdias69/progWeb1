<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Criar Conta - Carteira Acadêmica</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <main class="container">
    <h2>Criar conta</h2>

    <form action="auth.php" method="post" class="form">
      <input type="hidden" name="acao" value="register">

      <label>Nome completo
        <input type="text" name="fullname" required />
      </label>

      <label>Email
        <input type="email" name="email" required />
      </label>

      <label>Senha
        <input type="password" name="password" required />
      </label>

      <button class="btn" type="submit">Criar conta</button>
    </form>

    <p class="small">
      Já tem conta? <a href="login.php">Entrar</a>
    </p>
    <p><a href="index.php">← Voltar</a></p>
  </main>
</body>
</html>
