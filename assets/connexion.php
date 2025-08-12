<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>

 <?php

     include('header.html');
     include('menu.html');
 
        echo '<div class="conect">';
        echo '<form action="connexion.php" name="connexion" method="POST">';
        echo '<h2>Connectez-vous ici !!!</h2>';
        echo '<div class="div">';
        echo '<label for="email">Email *</label>';
        echo '<input type="email" name="email" >';
        echo '</div>';
        echo '<div class="div">';
        echo '<label for="motpass">Mot de passe *</label>';
        echo '<input type="password" name="motpass" >';
        echo '<a href="">Mot de passe oublié</a>';
        echo '</div>';
        echo '<div class="butt"><button type="submit" name="ok">Connexion</button></div><br><br>';
        echo '<div class="insrip">';
        echo '<a href="inscription.php" ><strong>Inscription</strong></a>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        
      if (isset($_POST['ok']))
        { 
            $connex=mysqli_connect('localhost','root','','jnet');
            $ml=$_POST['email'];
            $mtp=$_POST['motpass'];
        $res=mysqli_query($connex,"select * from utilisateur where email='$ml' and motpass='$mtp'");
        $nb=mysqli_num_rows($res); 
        if($nb==0)
         {
            echo "<p class='conectp'>" . 'Veuillez vous inscrit svp !!!' . "</p>";
         }
          else
           {
        header("location:http://localhost/dashboard/jnet/homeconnex.html") ;
           }
        }
        include('footer.html');

    ?>
</body>
</html>