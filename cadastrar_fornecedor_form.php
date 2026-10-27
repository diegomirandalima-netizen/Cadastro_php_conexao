<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cadastro de Fornecedores</title> 
</head> 
<body> 

    <form action="cadastrar_fornecedor.php" method="POST">
        <h1 class="titulo"><strong>Cadastro de Fornecedor</strong></h1> 

        <div> 
            <label for="nome">Nome:</label>                            
            <input type="text" id="nome" name="nome" required> 
        </div> 

        <div> 
            <label for="telefone">Telefone:</label>                    
            <input type="tel" id="telefone" name="telefone">   
        </div> 

        <div> 
            <label for="email">Email:</label>                           
            <input type="email" id="email" name="email">      
        </div>     
        
        <br>
        <button type="submit">Cadastrar Fornecedor</button> 
    </form>

</body> 
</html>
