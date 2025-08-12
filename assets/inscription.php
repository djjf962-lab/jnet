<html>
<head>

    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <?php
    
    include('header.html');
    include('menu.html');

            echo '<div class="container">';
            echo '<form action="inscription.php" method="POST">' ;           
            echo '<fieldset>';
            echo'<legend><h2>Formulaire dinscription</h2></legend>';
            
            echo '<label>Nom Utilisateur :</label>';
            echo '<input type="text" name="Idutilisateur" required>';
            echo'<label>Nom :</label>';
            echo'<input type="text" name="nomutil" required>';

            echo '<label>Prenom :</label>';
            echo '<input type="text"  name="prenomutil" required>';

            echo '<label>Numéro de téléphone :</label>';
            echo'<input type="tel"  name="tel">';
                
            echo '<label>Adresse email :</label>';
            echo  '<input type="email"  name="email" required>';

            echo '<label>Mot de passe :</label>';
            echo '<input type="password" name="motpass" required>';

            echo '<label for="ville">Ville :</label>';
            echo '<input type="text"  name="ville">';
            echo '</fieldset>';

            echo '<fieldset>';
            echo  '<legend>Conditions générales :</legend>';
            echo '<input type="checkbox" name="conditions" required>';
            echo '<label >Jaccepte les conditions générales dutilisation du site.</label>';
            echo '</fieldset>';

            echo '<fieldset>';
            echo '<legend>Validation :</legend>';
            echo '<input type="checkbox" name="validation" required>';
            echo '<label for="validation">Je certifie que les informations fournies sont exactes et complètes.</label>';
            echo '</fieldset>';

            echo '<button type="submit" name="valider">Valider</button>';
            echo'</form>';
            echo '</div>';

            if (isset($_POST['valider']))
        {
            $connex=mysqli_connect('localhost','root','','jnet');
            $id=$_POST['Idutilisateur'];
            $nm=$_POST['nomutil'];
            $pr=$_POST['prenomutil'];
            $tel=$_POST['tel'];
            $ml=$_POST['email'];
            $mtp=$_POST['motpass'];
            $loc=$_POST['ville'];

            $res=mysqli_query($connex,"insert into utilisateur (Idutilisateur,nomutil,prenomutil,tel,email,motpass,ville) 
            values('$id','$nm','$pr','$tel','$ml','$mtp','$loc')");
            header("location:http://localhost/dashboard/jnet/bienvenue.php") ;
            ; 
        }
        include('footer.html');

    ?>
</body>
</html>
