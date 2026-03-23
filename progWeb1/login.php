<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login - Carteira Acadêmica</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <main class="container">
    <h2>Entrar</h2>

    <form action="auth.php" method="post" class="form">
      <input type="hidden" name="acao" value="login">

      <label>Usuário (Email)
        <input type="text" name="username" required />
      </label>

      <label>Senha
        <input type="password" name="password" required />
      </label>

      <button class="btn" type="submit">Entrar</button>
    </form>

    <p class="small">
      Não tem login? <a href="register.php">Faça agora</a>
    </p>
    <p><a href="index.php">← Voltar</a></p>
  </main>
</body>
</html>
