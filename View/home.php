<!doctype html>
<html lang="fr">
<head>
    <h1>Acceuil</h1>
</head>
<body>

<div id="contenu">
</div> <!-- #contenu -->
Auteur :
<select id="author">
    <option value='all' <?php if (!isset($authorSelected)) { ?> selected <?php } ?>>Tous</option>
    <?php foreach ($authors as $author) { ?>
        <option
            value= <?php echo $author->getId() ?> <?php if (isset($authorSelected) && $authorSelected === $author){ ?> selected <?php } ?> ><?php echo $author->getName() ?></option>
    <?php } ?>
</select>

<table style="width:100%">
    <tr>
        <td>Identifiant</td>
        <td>Titre</td>
        <td>Auteur</td>
    </tr>
    <?php foreach ($books as $book) { ?>
        <tr>
            <td><?php echo $book->getId() ?></td>
            <td><a href="bookDetails.php?id=<?php echo $book->getId() ?>"><?php echo $book->getTitle() ?></a></td>
            <td>
                <a href="authorDetails.php?id=<?php echo $book->getAuthor()->getId() ?>"><?php echo $book->getAuthor()->getFirstName() . ' ' . $book->getAuthor()->getName() ?></a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
    $("#author").change(function () {
        window.location.replace("home.php?author=" + $("#author").val());
    });

</script>

</html>