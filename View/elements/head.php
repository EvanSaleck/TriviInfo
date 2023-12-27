<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Feuilles de style -->
    
    <link rel="stylesheet" href="/triviinfo/assets/CSS/index.css" type="text/css">

    <!--------------------------- Bootstrap 5 -------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

    <!-- Fichier général JS -->
    <script src="\triviinfo\assets\JS\functions.js"></script>

    <!-- Chargement du PHP -->
    <link rel="stylesheet" href="/triviinfo/assets/CSS/<?php echo(str_replace(".php","",explode("/", $_SERVER['PHP_SELF'])[array_key_last(explode("/", $_SERVER['PHP_SELF']))]));?>.css" type="text/css"> <!-- Lien vers un css au nom de la page php actuel-->

    <!-- Icone -->
    <link rel="icon" href="/triviinfo/assets/img/icons/logo.png" type="image/png">
    <script>
        let path = window.location.pathname.split("/");
        // console.log(path);
        let page = path[3];
        // console.log(page); 

        switch(page){

            case "index.php" :
                document.querySelector("head").innerHTML += '<title>Trivi-info</title>';
                document.querySelector("head").innerHTML += '<link rel="stylesheet" href="/app_Meca/CSS/chang.css" type="text/css">';
                break;
            case "Jeu.php" :
                document.querySelector("head").innerHTML += '<title>Jeu - Trivi-info</title>';
                document.querySelector("head").innerHTML += '<link rel="stylesheet" href="/app_Meca/CSS/jeu.css" type="text/css">';
                break;
        }
        
    </script>



</head>