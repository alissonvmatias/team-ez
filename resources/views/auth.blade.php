<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <div class="left-content">
                <h1 class="title">Team Ez</h1>
                <p class="subtitle">Encontre seu time. Mostre seu jogo.</p>
            </div>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <button class="btn-login">Login</button>

                <div class="auth-links">
                    <a href="#">Recuperar senha</a> |
                    <a href="#">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
