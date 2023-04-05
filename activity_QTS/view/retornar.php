<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casos de Testes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
   

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
                <img src="assets/images/img2.svg" alt="">
            </div>

            <form name="frmlogin" method="get" action="index.php">
                <h3>Valores calculado</h3> 
                <input name="nome" id="fullNome" type="text" class="box" readonly
                    value="<?php echo($_GET['nome']);?>">
                <input name="cpf" id="fullCpf" type="text" class="box" readonly
                    value="<?php echo($_GET['cpf']);?>">
                <input name="renda" id="fullRenda" type="text"  class="box"readonly
                    value="<?php echo($_GET['renda']);?>">
                <input name="aliquota" id="fullAliquota" type="text" class="box" readonly
                    value="<?php echo($_GET['aliquota']);?>">
                <input name="imposto" id="fullImposto" type="text" class="box" readonly
                    value="<?php echo($_GET['imposto']);?>">
                <input id="btnRegister" type="submit" value="calcular novamente" class="btn" readonly>
            </form>

        </div>

    </section>
    
</body>
</html>
