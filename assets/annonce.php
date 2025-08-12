<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Annonces</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
             include('header.html');
             include('menu.html');

    echo '<div class="ann-liste">';
        echo '<div class="ann">';
            echo '<div class="pho">';
            echo'  <img src="informatique.png">';
          echo'  </div>';
            echo '<div class="details">';
            echo'     <h2>Titre de lannonce 1</h2>';
          echo'      <p>Description de lannonce 1.</p>';
          echo'      <p>Prix : 100DH</p>';
              echo'  <a href="#" class="contactez">Contactez-nous</a>';
           echo' </div>';
       echo' </div>';
          echo '<div class="ann">';
            echo '<div class="pho">';
         echo'       <img src="loisir.png">';
          echo'  </div>';
            echo '<div class="details">';
            echo'    <h2>Titre de lannonce 2</h2>';
           echo'     <p>Description de lannonce 2.</p>';
            echo'    <p>Prix : 150DH</p>';
             echo  ' <a href="#" class="contactez">Contactez-nous</a>';
             echo  '</div>';
          echo'  </div>';
            echo '<div class="ann">';
                echo '<div class="pho">';
                echo'  <img src="loisir.png">';
                echo'   </div>';
                echo '<div class="details">';
              echo'        <h2>Titre de lannonce 3</h2>';
        echo'            <p>Description de lannonce 3.</p>';
        echo'          <p>Prix : 9.000DH</p>';
        echo'        <a href="#" class="contactez">Contactez-nous</a>';
        echo'    </div>';
            echo'    </div>';
            echo '<div class="ann">';
             echo '<div class="pho">';
             echo'          <img src="informatique.png">';
             echo'      </div>';
              echo '<div class="details">';
              echo'          <h2>Titre de lannonce 4</h2>';
              echo'          <p>Description de lannonce 4.</p>';
              echo'         <p>Prix : 4.580DH</p>';
              echo'         <a href="#" class="contactez">Contactez-nous</a>';
              echo'      </div>';
              echo'      </div>';
            echo' <div class="ann">';
             echo' <div class="pho">';
             echo'    <img src="mode.png">';
             echo'  </div>';
            echo' <div class="details">';
            echo'   <h2>Titre de lannonce 5</h2>';
             echo'   <p>Description de lannonce 5.</p>';
             echo'   <p>Prix : 10.105DH</p>';
             echo'   <a href="#" class="contactez">Contactez-nous</a>';
             echo' </div>';
           echo' </div>';
            echo' <div class="ann">';
                echo' <div class="pho">';
                echo'  <img src="maisondecor.png">';
                echo'  </div>';
                echo' <div class="details">';
                echo'  <h2>Titre de lannonce 6</h2>';
                 echo'   <p>Description de lannonce 6.</p>';
                 echo'   <p>Prix : 40.210DH</p>';
                 echo'   <a href="#" class="contactez">Contactez-nous</a>';
                 echo' </div>';
               echo' </div>';
                echo' <div class="ann">';
                    echo' <div class="pho">';
                    echo'<img src="twitter.png">';
                    echo'  </div>';
                    echo' <div class="details">';
                    echo'     <h2>Titre de lannonce 7</h2>';
                  echo'      <p>Description de lannonce 7.</p>';
                  echo'      <p>Prix : 45DH</p>';
                  echo'     <a href="#" class="contactez">Contactez-nous</a>';
                  echo'  </div>';
                  echo'  </div>';
                 echo' <div class="ann">';
                        echo' <div class="pho">';
                  echo'      <img src="voiture.png">';
                  echo'   </div>';
                        echo' <div class="details">';
                        echo'      <h2>Titre de lannonce 8</h2>';
                      echo'      <p>Description de lannonce 8.</p>';
                      echo'    <p>Prix : 8.500DH</p>';
                      echo'     <a href="#" class="contactez">Contactez-nous</a>';
                      echo' </div>';
                   echo'  </div>';
         echo   '</div>';
         include('footer.html');

    ?>
</body>
</html>
