<?php
/**
 * Created by PhpStorm.
 * User: chalomberdah
 * Date: 29/10/2018
 * Time: 17:43
 */
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mon premier blog</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<h1>Mon super blog !</h1>
		<p>
Derniers billets du blog :
		</p>
        <?php

        while ($donnee = $requete->fetch()) {
            ?>

            <div class="news">
                <h3>
                    <?=
                     $donnee['titre'] . ' <em>le ' . $donnee['date_fr'] . '</em>'
                    ?>
                </h3>
                <p>
                    <?= $donnee['contenu'] ?>
                    <br/>
                    <a href="commentaires.php?billet=<?= $donnee['id'] ?>">Commentaire</a>
                </p>
            </div>
            <?php

        }
        ?>

	</body>
</html>