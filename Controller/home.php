<?php
require '../Model/model.php';

$booksFilters = [];

if( isset($_GET['author']) && $_GET['author'] != 'all'){

    $authorSelected = \Model\getAuthor(['id'=>$_GET['author']]);
    if($authorSelected instanceof \Model\Entity\Author){
        $booksFilters['author'] = $authorSelected;
    }
}

$books = \Model\getBooks($booksFilters);
$authors = \Model\getAuthors();

require '../View/home.php';

