<?php

require '..\Model\model.php';

if(! $_GET['id']){
    echo 'Veuillez fournir l\'identifiant de l\'auteur';
    return false;
}

$author = \Model\getAuthor(['id' => $_GET['id']]);


if(! $author instanceof \Model\Entity\Author){
    echo 'Cet auteur n\'existe pas ';
    return false;
}


require '../View\authorDetails.php';