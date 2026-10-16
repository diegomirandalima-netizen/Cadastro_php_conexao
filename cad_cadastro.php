<?php
include("conexao.php");                                                // Inclui o arquivo de conexão com o banco de dados.

$nome       = $_POST['nome'];                                          // Captura o valor enviado pelo campo "nome" do formulário.
$categoria  = $_POST['categoria'];                                     // Captura o valor enviado pelo campo "categoria".
$preco      = $_POST['preco'];                                         // Captura o valor enviado pelo campo "preco".
$quantidade = $_POST['quantidade'];                                    // Captura o valor enviado pelo campo "quantidade".
$fornecedor = $_POST['fornecedor'];                                    // Captura o valor enviado pelo campo "fornecedor".

$SQL = "INSERT INTO produtos (nome, categoria, preco, quantidade, fornecedor) 
        VALUES ('$nome', '$categoria', '$preco', '$quantidade', '$fornecedor')"; // Cria a instrução SQL para inserir os dados na tabela.

if ($conexao->query($SQL) === true) {                                  // Executa a consulta no banco e verifica se deu certo.
    echo "Produto cadastrado com sucesso!";                            // Exibe mensagem de sucesso se a inserção funcionar.
} else {                                                               // Entra aqui caso ocorra algum erro na execução.
    echo "Erro ao cadastrar produto: " . $conexao->error;              // Exibe o erro exato retornado pelo banco de dados.
}                                                                      // Fecha o bloco de validação condicional.
?>
