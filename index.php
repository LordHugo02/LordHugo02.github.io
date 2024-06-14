<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le blog des poissons">
    <meta name="author" content="LordHugo02">
    <meta name="keywords" content="poisson, pêche, eau, lac, rivière, océan">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    <title>Poissontopia</title>
    <link rel="icon" type="image/png" href="img/favicon.webp">
<!--    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">-->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-grass">




<?php
    $request = $_SERVER['REQUEST_URI'];
    $pathlink = explode("/", $request); //tableau des paramètres du lien
    $GLOBALS['pathlink'] = $pathlink;
    
//    echo("request :");
//    var_dump($request, true);
//
//    echo("pathlink :");
//    var_dump($pathlink, true);
    
    //GERER LIEN VIDE OU RACINE /
    
    include("views/header.php");
    
    
    
    switch ($pathlink[1]) {
        case '':
            require __DIR__ . '/views/accueil.php';
            break;
        case 'login' :
            require __DIR__ . '/views/login.php';
            break;
        case 'forum' :
            $_GET['id'] = $pathlink[2] ;
            $pathlink[2] = "test";
            require __DIR__ . '/views/forum.php';
            break;
        default:
            http_response_code(404);
            break;
    }
    
//    echo("get :");
//    var_dump($_GET, true);
    
    
    include("views/footer.php");
    
    ?>

</body>

<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
</html>
