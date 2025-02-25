<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<?php $oeuvres = include 'oeuvres.php'; ?>

<body>
    
    <?php include 'header.php'; ?>
    
    <main>
    <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?= $oeuvre['id']; ?>">
                        <img src="<?= $oeuvre['image']; ?>" alt="<?= $oeuvre['titre']; ?>">
                        <h2><?= $oeuvre['titre']; ?></h2>
                        <p class="description"><?= $oeuvre['auteur']; ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
                // ESSAI //
    <?php include 'footer.php'; ?>
   <a href="http://" target="_blank" rel="noopener noreferrer"></a>
    
</body>
</html>