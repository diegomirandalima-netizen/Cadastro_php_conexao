<?php 
include("conexao.php"); 
$nome = $_POST['nome'];    
$SQL = "INSERT INTO categorias (nome) VALUES ('$nome')"; 
if ($conexao->query($SQL) === true) {
    echo "Categoria cadastrada com sucesso!"; 
} else { 
    echo "Erro ao cadastrar categoria: " . $conexao->error; 
} 
?>
