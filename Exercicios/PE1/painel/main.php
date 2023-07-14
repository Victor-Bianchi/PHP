<?php 

    if(isset($_GET['logout'])) {
        Painel::logout();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PE1 - Painel de Controle</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/082f47588d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu-aside" id="aside">
        <div class="box-usuario">
            <?php 
                if($_SESSION['img'] == '' || $_SESSION['img'] == null) {
            ?>
                <div class="avatar-usuario">
                    <i class="fa-solid fa-user"></i>
                </div><!--avatar-->
            <?php } else { ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img']?>" alt="imagem do usuário">
                </div><!--imagem-->
            <?php } ?>
            
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']?></p>
                <p><?php echo Painel::getCargo($_SESSION['cargo'])?></p>
            </div><!--nome-user-->
        </div><!--box-usuario-->

        <div class="menu-menu">
            <p class="title-menu">Cadastro</p>
            <p><a href="">Cadastrar Depoimento</a></p>
            <p><a href="">Cadastrar Serviço</a></p>
            <p class="title-menu">Gestão</p>
            <p><a href="">Listar Depoimentos</a></p>
            <p><a href="">Listar Serviços</a></p>
            <p class="title-menu">Administração do Painel</p>
            <p><a href="">Editar Usuários</a></p>
            <p><a href="">Adicionar Usuários</a></p>
            <p class="title-menu">Geral</p>
            <p><a href="">Editar</a></p>
            <p><a href="">Sessão Ativa</a></p>
        </div><!--menu-menu-->

    </div><!--menu-aside-->

    <header>
        <div class="center">
            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL?>?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>

            <div class="clear"></div>
        </div><!--center-->
    </header>

    <div class="content" id="content">
        <div class="box-content w100">
            <div class="title">
                <h1>Painel de Controle</h1>
                <h3>Bem-vindo(a), <?php echo $_SESSION['nome']?>!</h3>
            </div>
            
            <div class="box-wraper">
                <div class="box-single">
                    <h2>Usuários Online</h2>
                    <p>10</p>
                </div>

                <div class="box-single">
                    <h2>Total de Visitas</h2>
                    <p>10</p>
                </div>

                <div class="box-single">
                    <h2>Visitas Hoje</h2>
                    <p>10</p>
                </div>
            </div><!--box-wraper-->
        </div><!--box-content-->

        <!--<div class="box-content w100">

        </div>

        <div class="box-content w50 left">

        </div>

        <div class="box-content w50 right">

        </div>-->

        <div class="clear"></div>
    </div>

    <script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
</body>
</html>