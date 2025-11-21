<?php
// Define o cabeçalho para UTF-8 e inicia a sessão para o HTML
header('Content-Type: text/html; charset=utf-8');

// VARIÁVEIS DE CONFIGURAÇÃO (Usuário e Senha "Corretos")
// Em um aplicativo real, estes dados viriam de um banco de dados!
$usuario_correto = "aluno_php";
$senha_correta = "123456";

// Variável para armazenar a mensagem de resultado
$mensagem = "";
$sucesso = false;

// 1. VERIFICAR SE O FORMULÁRIO FOI ENVIADO USANDO O MÉTODO POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. RECEBER OS DADOS DO FORMULÁRIO
    // A função htmlspecialchars() é usada por segurança
    $usuario_digitado = htmlspecialchars($_POST['usuario'] ?? '');
    $senha_digitada = htmlspecialchars($_POST['senha'] ?? '');

    // 3. VALIDAR SE OS CAMPOS FORAM PREENCHIDOS
    if (empty($usuario_digitado) || empty($senha_digitada)) {
        $mensagem = "Por favor, preencha o nome de usuário e a senha.";
    } else {
        // 4. COMPARAR OS DADOS DIGITADOS COM OS DADOS CORRETOS
        if ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
            $mensagem = "Login efetuado com sucesso! Bem-vindo(a), $usuario_digitado.";
            $sucesso = true;
        } else {
            $mensagem = "Erro: Usuário ou senha incorretos. Tente novamente.";
            $sucesso = false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples (Questão 21)</title>
    <!-- Incluindo Tailwind CSS para uma estética simples e moderna -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Definindo a fonte padrão */
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl">
        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">Acesso ao Sistema</h1>

        <?php
        // 5. EXIBIR A MENSAGEM DE RESULTADO
        if (!empty($mensagem)) {
            $estilo_alerta = $sucesso
                ? 'bg-green-100 text-green-800 border-green-400'
                : 'bg-red-100 text-red-800 border-red-400';
            echo '<div class="p-4 mb-4 rounded-lg border-l-4 ' . $estilo_alerta . '" role="alert">';
            echo '<span class="font-medium">' . $mensagem . '</span>';
            echo '</div>';
        }

        ?>

        <!-- O atributo method="POST" é a chave aqui -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-6">

            <div class="space-y-2">
                <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                >
            </div>

            <div class="space-y-2">
                <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                >
            </div>

            <button
                type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">Entrar</button>
        </form>

       
    </div>

</body>
</html>