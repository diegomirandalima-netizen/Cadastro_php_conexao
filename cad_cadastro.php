<?php // Abre a tag do PHP para o servidor começar a interpretar o script.


include("conexao.php"); // Importa e executa o arquivo externo que abre a conexão com o banco de dados.


$nome       = $_POST['nome'];       // Captura o texto digitado no campo "nome" do formulário HTML.
$categoria  = $_POST['categoria'];  // Captura o texto digitado no campo "categoria" do formulário HTML.
$preco      = $_POST['preco'];      // Captura o valor digitado no campo "preco" do formulário HTML.
$quantidade = $_POST['quantidade']; // Captura o número digitado no campo "quantidade" do formulário HTML.
$fornecedor = $_POST['fornecedor']; // Captura o texto digitado no campo "fornecedor" do formulário HTML.


$sql = "INSERT INTO produtos (nome, categoria, preco, quantidade, fornecedor)
VALUES ('$nome', '$categoria', '$preco', '$quantidade', '$fornecedor')"; // Cria o comando SQL para inserir as variáveis na tabela "produtos".


if ($conexao->query($sql) === TRUE) { // CORRIGIDO: Executa a consulta SQL no banco e testa se ela foi realizada com sucesso.
    echo "Produto cadastrado com sucesso!"; // Exibe esta mensagem na tela caso o comando SQL funcione perfeitamente.
    } else { // Caso o comando SQL falhe por algum motivo (ex: erro de digitação no nome da tabela).
        echo "Erro ao cadastrar produto: " . $conexao->error; // MELHORADO: Exibe a mensagem de erro juntamente com o motivo exato enviado pelo MySQL.
        } // Fecha o bloco do teste condicional (if/else).


        ?> // Fecha a tag do PHP.
        