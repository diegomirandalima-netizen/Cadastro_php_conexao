<?php
// Abre a tag do PHP. Diz ao servidor que o código a partir dali deve ser interpretado.

$servidor = "localhost";
// Guarda o endereço do servidor (sua própria máquina local).

$usuario = "root";
// Guarda o nome do administrador padrão do MySQL.

$senha = "";
// Guarda a senha de acesso (vazia por padrão no ambiente local).

$banco = "cadastro_produtos";
// Guarda o nome exato do banco de dados que você quer acessar.

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
// CORRIGIDO: Adicionado '$' em $conexao e em $servidor.
// A palavra-chave new cria uma "instância" (um objeto) da extensão mysqli. 

if ($conexao->connect_error) {
    // O operador -> acessa uma propriedade interna da nossa conexão. 
    // Aqui, o código pergunta: "Existe algum erro de conexão?"

        die("Falha na conexão: " . $conexao->connect_error);
            // Se o erro for verdadeiro, a função die() para o site imediatamente.
}
// Fecha o bloco do teste condicional (if).

?>