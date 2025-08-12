<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposer une Annonce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            include('header.html');
            include('menu.html');
             echo '<section class="div1">';
             echo '<h1>';
          echo '<div id="d1">';
        echo '<h2>Deposer votre annonce</h2>';
        echo  '</div>';
        echo '<form action="depoann.php" method="POST" enctype="multipart/form-data">';
        echo   ' <label for="titre">Titre de lannonce :</label><br>';
        echo   '<input type="text" name="titre" ><br><br>';

        echo    '<label for="description">Description :</label><br>';
        echo    '<textarea  name="description" rows="4" required></textarea><br><br>';
        echo   ' <label for="titre">Prix de lannonce :</label><br>';
        echo   '<input type="text" name="prix" ><br><br>';
        echo   ' <label for="titre">Date de lannonce :</label><br>';
        echo   '<input type="date" name="titre" ><br><br>';



        echo   '<label for="categorie">Catégorie :</label><br>';
        echo    '<select name="categorie">';
        echo       '<option>Choisissez la categorie</option>';
        echo          '<option >Emplois</option>';
        echo         '<option >Vehicules</option>';
        echo         '<option >Immobilier</option>';
        echo         '<option >Multimedia</option>';
        echo         '<option >Maison-deco</option>';
        echo        '<option >Mode</option>';
        echo       '<option >Loisirs</option>';
        echo       '<option >Animalerie</option>';
        echo    '<option>Autres</option>';
                       echo '</select><br><br>';
                       echo '<label>Ville :</label><br>';
                       echo     '<select>';
          echo              '<option>Tout le Maroc</option>';
            echo         '<option> Casablanca</option>';
            echo    '<optio> Rabat</option>';
               echo   '<optio> Salé</option>';
               echo              '<option> Marrakech</option>';
               echo              '<option> Agadir</option>';
               echo              '<option> Fès</option>';
               echo             '<option> Meknès</option>';
               echo              '<option> Tanger</option>';
        echo                '<option> Tétouan</option>';					
        echo         '<option> Safi</option>';
        echo       '<option> Oujda</option>';
        echo         '<option> Mohammédia</option>';
                        echo            '<option> Kénitra</option>';			
                        echo         '<option> El-Jadida</option>';
                        echo             '<option> Nador</option>';
                        echo             '<option> Khourigba</option>';
                        echo            '<option> Béni Mellal</option>';
                        echo              '<option> Ouarzazate</option>';
                        echo     '</select><br><br>';

                        echo  '<label for="photo">Photo de lannonce :</label><br>';
                        echo  '<input type="file" name="photo" accept="image/*" required><br><br>';

                        echo       '<label for="contact">Informations de contact :</label><br>';
                        echo        '<input type="text" id="contact" name="contact" required><br><br>';

                        echo       '<button type="submit">Ajouter lAnnonce</button>';
                        echo    '</form>';
                        echo '</section>';

                include('footer.html');



    ?>
</body>
</html>
