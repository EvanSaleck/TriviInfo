<?php
function dd($param1){
    echo '<pre>';
    var_dump($param1);
    echo '</pre>';

    die();
}

function unsetJeu (){
    unset($_SESSION['Jeu']);
    header('Location: index.php');
    exit();
}