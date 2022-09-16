<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    
    <header>
    <nav>
        <div class="navImg">
            <a href="./"><img src="./resources/img/WebDevLogo.png" alt=""></a>
        </div>
            <a href="./">Forum</a>
            <a href="?module=user&action=create">Inscription</a>
            <a href="?module=user&action=login">Connectez-vous</a>
    </nav>
    </header>

    <main class="centerMain">
        <?php
           echo $content;
        ?>
    </main>

    <footer>
            <small>© Tous droits réservés - 2022</small> 
    </footer>
</body>
</html>