<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> 
    <title>Cadastro de Produtos</title> 
</head>
<body> 

    <h2>Cadastrar Novo Produto</h2>

    <form action="cad_envio_produtos.php" method="POST"> 
        <p> 
            <label>Nome do Produto:</label><br> 
            <input type="text" name="nome" required> 
        </p> 

        <p> 
            <label>Descrição:</label><br> 
            <input type="text" name="descricao" required>
        </p> 

        <p>
            <label>Preço:</label><br> 
            <input type="number" step="0.01" name="preco" required>
        </p> 

        <p>
            <label>Quantidade:</label><br>
            <input type="number" name="quantidade" required> 
        </p>

        <p>
            <label>Fornecedor:</label><br> 
            <select name="id_fornecedor" required>
                <option value="">Selecione...</option>
                <?php
                require('conexao.php');
                $sql = "SELECT id_fornecedor, nome FROM fornecedores";
                $result = mysqli_query($conexao, $sql);
                while($dados = mysqli_fetch_array($result)){
                    echo "<option value='".$dados['id_fornecedor']."'>".$dados['nome']."</option>";
                }
                ?>
            </select>
        </p> 
        
        <p>
            <label>Categoria:</label><br>
            <select name="id_categoria" required>
                <option value="">Selecione...</option>
                <?php
                $sql = "SELECT id_categoria, nome FROM categorias";
                $result = mysqli_query($conexao, $sql);
                while($dados = mysqli_fetch_array($result)){
                    echo "<option value='".$dados['id_categoria']."'>".$dados['nome']."</option>";
                }
                ?>
            </select>
        </p>

        <button type="submit">Cadastrar Produto</button> 
    </form>
</body> 
</html>
