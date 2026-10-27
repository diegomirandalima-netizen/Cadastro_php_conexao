<?php 
include("conexao.php"); 

$nome = $_POST['nome'];    
$descricao = $_POST['descricao']; 
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco']; 
$id_fornecedor = $_POST['id_fornecedor'];
$id_categoria = $_POST['id_categoria'];

$SQL = "INSERT INTO produtos (nome, descricao, quantidade, preco, id_categoria, id_fornecedor) 
        VALUES ('$nome', '$descricao', '$quantidade', '$preco', '$id_categoria', '$id_fornecedor')"; 

if ($conexao->query($SQL) === true) {
    echo "Produto cadastrado com sucesso!"; 
} else { 
    echo "Erro ao cadastrar produto: " . $conexao->error; 
} 
?>
