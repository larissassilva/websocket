<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websocket</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src='js/app.js'></script>
    <style>
        /* Estilo para centralizar o conteúdo */
        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh; /* Ajuste conforme necessário */
            text-align: center;
        }
        /* Estilo para o rodapé */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: auto; /* Mantém o rodapé no final da página */
        }
    </style>
</head>
<body>
    <!-- Topo (Header) -->
    <header class="bg-dark text-white p-3 text-center">
        <h1>Websocket</h1>
        <p>Projeto desenvolvido com Laravel Echo Server, Redis, Socket.io-Client.</p>
    </header>

    <!-- Conteúdo Centralizado -->
    <div class="container centered-content">
        <h5> Toda vez que essa <a href="http://localhost:8000/notificacao" target="_blank">página</a> for acessada, vamos receber uma notificação.</h5>
        <h2>Notificação</h2>
        <div id="notificacao" class="mt-3"></div>
    </div>

    <!-- Rodapé (Footer) -->
    <footer class="bg-dark text-white p-3">
        <p>&copy; 2025 - Todos os direitos reservados. <a href="https://github.com/larissassilva/" target="_blank" style="color: white;">Larissa Soares Silva</a></p>
    </footer>

    <script src="/js/note.js"></script>
</body>
</html>
