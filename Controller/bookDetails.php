<?php

require '..\Model\model.php';

if(! $_GET['id']){
    echo 'Veuillez fournir l\'identifiant du livre';
    return false;
}

$book = \Model\getBook(['id' => $_GET['id']]);

if(! $book instanceof \Model\Entity\Book){
    echo 'Le livre n\'existe pas ';
    return false;
}


require '../View\bookDetails.php';