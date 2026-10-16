<?php // Abre a tag do PHP para o servidor começar a interpretar o script.

include("conexao.php"); // CORRIGIDO: O comando correto é "include" (e não "incluir").

// CORRIGIDO: A variável global correta é $_POST (e não $_PUBLICAR).
// Também removemos os acentos e caracteres especiais dos nomes das variáveis PHP.
$nome       = $_POST['nome'];       // Captura o texto digitado no campo "nome" do formulário HTML.
$categoria  = $_POST['categoria'];  // CORRIGIDO: Corresponde ao name="categoria" do HTML.
$preco      = $_POST['preco'];      // CORRIGIDO: Corresponde ao name="preco" do HTML.
$quantidade = $_POST['quantidade']; // CORRIGIDO: Corresponde ao name="quantidade" do HTML.
$fornecedor = $_POST['fornecedor']; // Captura o texto digitado no campo "fornecedor" do formulário HTML.

// CORRIGIDO: O comando SQL precisa ser em inglês (INSERT INTO e VALUES).
// As colunas do banco de dados também devem evitar acentos se seguiram o padrão do formulário anterior.
$SQL = "INSERT INTO produtos (nome, categoria, preco, quantidade, fornecedor) 
        VALUES ('$nome', '$categoria', '$preco', '$quantidade', '$fornecedor')"; 

// CORRIGIDO: Alterado "se", "verdadeiro", "eco" e "outro" para os equivalentes em inglês da linguagem PHP.
if ($conexao->query($SQL) === true) { // Executa a consulta SQL no banco e testa se ela foi realizada com sucesso.
    echo "Produto cadastrado com sucesso!"; // Exibe esta mensagem na tela caso o comando SQL funcione perfeitamente.
} else { // Caso o comando SQL falhou por algum motivo.
    echo "Erro ao cadastrar produto: " . $conexao->error; // Exibe uma mensagem de erro juntamente com o motivo exato enviado pelo MySQL.
} // Fecha o bloco do teste condicional (if/else).

?>
