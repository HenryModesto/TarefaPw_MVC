<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    
    <header class="header">
        
    </header>
    
    <!-- header section ends -->
    
    
    <section class="icons-container">
        
    </section>
    
    <section class="book" id="book">
        
        <h1 class="heading"> Imposto de Renda </h1>    
        
        <div class="row">
            
            <div class="image">
                <img src="assets/images/coin.svg" alt="">
            </div>
            
            <form name="frmlogin" method="get" action="../controller/usuarioController.php">
                <h3>Calcular</h3>
                <input name="nome" id="fullNome" type="text" placeholder="Digite seu nome" class="box" required>
                <input name="cpf" id="fullCpf" type="text" placeholder="Digite seu CPF" class="box" required>
                <input name="renda" id="fullRenda" type="number" placeholder="Digite sua renda" class="box" required>
                <input id="btnRegister" type="submit" value="concluir" class="btn">
            </form>
            
        </div>
        
    </section>
    
    

</body>
</html>
