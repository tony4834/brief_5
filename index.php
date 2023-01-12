<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        lien:<input type="text" name="code">
             <input type="submit" value="ajouter">
    </form>

    <table>
        <tr>
                <th>nom</th>
                <th>lien</th>
                <th>description</th>
                <th>id</th>
        </tr>



    <?php
                //connexion vers la bdd
                include("include/connexion.php");

            // si tous va bien, on peut continuer

            // on récupère tout le contenu de la table lien
            $sql = 'SELECT * FROM lien';
            $lienStatement = $pdo->prepare($sql);
            $lienStatement->execute();
            $datas = $lienStatement->fetchAll();

            // on affiche chaque table une à une 
            foreach($datas as $ligne) {
                echo "<tr>";
                    echo "<td>".$ligne['nom_lien']."</td>";
                    echo "<td>".$ligne['url_lien']."</td>";
                    echo "<td>".$ligne['description_lien']."</td>";
                    echo "<td>".$ligne['id_categ']."</td>";
                }

        ?>
        </table>
        <a href="add_book"></a>
    </body>
</html>