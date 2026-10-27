<!DOCTYPE html>
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cadastro de Categoria</title> 
</head> 
<body> 

    <form action="cadastrar_categoria.php" method="POST">                      
        <h1 class="titulo"><strong>Cadastro de Categoria</strong></h1>   

        <div> 
            <label for="nome">Nome da Categoria:</label>                            
            <input type="text" id="nome" name="nome" required>         
        </div> 
        
        <br>
        <button type="submit">Cadastrar Categoria</button> 
    </form>

</body> 
</html>
