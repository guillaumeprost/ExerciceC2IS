<!doctype html>
<html lang="fr">
<head>
    <h1>Details du livre</h1>
</head>
<body>
<p>Titre : <?php echo $book->getTitle() ?></p>
<img src="../img/book/<?php echo $book->getImage() ?>" alt="Image <?php echo $book->getTitle() ?>">
<p>Description : <?php echo $book->getDescription() ?></p>
<p>Auteur : <a
        href="authorDetails.php?id=<?php echo $book->getAuthor()->getId() ?>"><?php echo $book->getAuthor()->getFirstName() ?><?php echo $book->getAuthor()->getName() ?></a>
</p>

<a href="home.php">Retour a la liste des livres</a>

</body>
</html>