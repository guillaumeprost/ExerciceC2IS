<?php
namespace Model;

require_once "../bootstrap.php";
require_once '../Model/Entity/Author.php';
require_once '../Model/Entity/Book.php';

use Model\Entity\Author;
use Model\Entity\Book;

/**
 * recupere une liste de livres avec les criteres fournis
 *
 * @param array|null $filters
 * @return array
 */
function getBooks(array $criteria = [] ){
    global $entityManager;

    return $entityManager->getRepository('Model\Entity\Book')->findBy($criteria);
}

/**
 * recupere un seul livre avec les criteres fournis
 *
 * @param array $criteria
 * @return null|Book
 */
function getBook(array $criteria = []){
    global $entityManager;

    return $entityManager->getRepository('Model\Entity\Book')->findOneBy($criteria);
};

/**
 * recupere une liste d'auteurs avec les criteres fournis
 *
 * @param array|null $filters
 * @return array
 */
function getAuthors(array $criteria = []){
    global $entityManager;

    return $entityManager->getRepository('Model\Entity\Author')->findBy($criteria);
}

/**
 * recupere un seul auteur avec les criteres fournis
 *
 * @param array $criteria
 * @return null|Book
 */
function getAuthor(array $criteria = []){
    global $entityManager;

    return $entityManager->getRepository('Model\Entity\Author')->findOneBy($criteria);
};
