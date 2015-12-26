<!doctype html>
<html lang="fr">
<head>

    <h1>Details de l'auteur</h1>
</head>
<body>
<p>Prenom : <?php echo $author->getFirstName() ?></p>
<p>Nom de famille : <?php echo $author->getName() ?></p>
<p>Description : <?php echo $author->getDescription() ?></p>
<img src="../img/author/<?php echo $author->getImage() ?>" alt="Image <?php echo $author->getName() ?>">

<p>Books :</p>
<ul>
    <?php foreach ($author->getBooks() as $book) { ?>
        <li><a href="bookDetails.php?id=<?php echo $book->getId() ?>"><?php echo $book->getTitle() ?></li>
    <?php } ?>
</ul>
<a href="home.php">Retour a la liste des livres</a>
</body>
</html>