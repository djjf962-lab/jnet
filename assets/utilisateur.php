<html>
    <head>
    <link rel="stylesheet" href="men.css">
        <title>Utilisateur</title>
    </head>
    <body>
        
        <?php
        include('menuu.html');
        if (isset($_POST['liste']) || isset($_GET['page'])) 
        {
            echo '<table border=2>';
           
       
        $connex=mysqli_connect('localhost','root','','jnet');
        $res=mysqli_query($connex,"select * from utilisateur");
        $nbr = mysqli_num_rows($res);
        
        if(isset($_GET['page']))
        {
            $deb=($_GET['page']-1)*2;
        }
        else
        {
            $deb=0;
        }
       
        $res=mysqli_query($connex,"select * from utilisateur limit $deb,2");

        echo "<table border=1>";
        echo "<tr><th>idutilisateur</th><th>nomutil</th><th>prenomutil</th><th>tel</th>
        <th>email</th><th>motpass</th><th>status</th><th>sex</th><th>photoutil</th>
        <th>proffession</th><th>dateinscript</th><th>localisation</th></tr>";

        while($ligne=mysqli_fetch_array($res))
        {
           
            echo "<tr><td>" . $ligne["Idutilisateur"] . "</td><td>" . $ligne["nomutil"] . "</td><td>" . $ligne["prenomutil"] . "</td><td>" . $ligne["tel"] . "</td><td>" . $ligne["email"] . "</td><td>" . $ligne["motpass"] . "</td><td>" . $ligne["status"] . "</td><td>" .$ligne["sex"] . "</td><td>" . $ligne["photoutil"] . "</td><td>" . $ligne["proffession"] . "</td><td>" . $ligne["dateinscript"] . "</td><td>" . $ligne["localisation"] . "</td></tr>";
        }
        echo "</table>" ;

        $np=$nbr/2;
        if(($nbr % 2)!=0)
        {
           $np+$np+1;
        }
        echo '<center>';
        for($i=1;$i<=$np;$i++)
        {
            echo '<a href="utilisateur.php?page=' . $i . '">' . $i ."   ".'</a>';
        }
        echo '</center>';
        echo "</table>";           
       
        }
        else if (isset($_POST['ajout']))
        {
            $connex=mysqli_connect('localhost','root','','jnet');
            $id=$_POST['Idutilisateur'];
            $nm=$_POST['nomutil'];
            $pr=$_POST['prenomutil'];
            $tel=$_POST['tel'];
            $ml=$_POST['email'];
            $mtp=$_POST['motpass'];
            $sts=$_POST['status'];
            $sex=$_POST['sex'];
            $ph=$_POST['photoutil'];
            $prof=$_POST['proffession'];
            $dt=$_POST['dateinscript'];
            $loc=$_POST['localisation'];

            $res=mysqli_query($connex,"insert into utilisateur (Idutilisateur,nomutil,prenomutil,tel,email,motpass,status,sex,photoutil,proffession,dateinscript,localisation) 
            values('$id','$nm','$pr','$tel','$ml','$mtp','$sts','$sex','$ph','$prof','$dt','$loc')");
            echo "enregitré"; 
        }
        else if (isset($_POST['rech']))
        { 
            $connex=mysqli_connect('localhost','root','','jnet');
            $id=$_POST['Idutilisateur'];
        $res=mysqli_query($connex,"select * from utilisateur where Idutilisateur='$id'");
        $nb=mysqli_num_rows($res); 

        if($nb==0)
       
       {
            echo('Introuvable');
        }
        else{
            $lig=mysqli_fetch_array($res);
            echo '<form action="utilisateur.php" name="utilisateur" method="POST">';
            echo '<label for="Idutilisateur">Id utilisateur: </label>';
            echo '<input type="text" name="Idutilisateur" value="' . $lig['Idutilisateur'] . '"><br>';
            echo '<label for="nomutil">Nom:</label>';
            echo '<input type="text"name="nomutil" value="' . $lig['nomutil']   .   '" ><br>';
            echo '<label for="prenomutil">Prénom:</label>';
            echo '<input type="text" name="prenomutil" value=" ' . $lig['prenomutil'] . ' "><br>';
            echo '<label for="tel">Telephonne:</label>';
            echo '<input type="text" name="tel" value=" ' . $lig['tel'] . ' "><br>';
            echo '<label for="email">Email:</label>';
            echo '<input type="text" name="email" value=" ' . $lig['email'] . ' "><br>';
            echo '<label for="motpass">Mot de passe:</label>';
            echo '<input type="text" name="motpass" value=" ' . $lig['motpass'] . ' "><br>';
            echo '<label for="status">Status:</label>';
            echo '<input type="text" name="status" value=" ' . $lig['status'] . ' "><br>';
            echo '<label for="sex">Sex:</label>';
            echo '<input type="text" name="sex" value=" ' . $lig['sex'] . ' "><br>';
            echo '<label for="photoutil">Photo Utilisateur:</label>';
            echo '<input type="file" name="photoutil" value=" ' . $lig['photoutil'] . ' "><br>';
            echo '<label for="proffession">Proffession:</label>';
            echo '<input type="text" name="proffession" value=" ' . $lig['proffession'] . ' "><br>';
            echo '<label for="dateinscript">Date inscription:</label>';
            echo '<input type="text" name="dateinscript" value=" ' . $lig['dateinscript'] . ' "><br>';
            echo '<label for="localisation">localisation:</label>';
            echo '<input type="text" name="localisation" value=" ' . $lig['localisation'] . ' "><br><br>';

            echo '<input type="submit" name="rech" value="rechercher">';
            echo '<input type="submit" name="ajout" value="ajouter">';
            echo '<input type="submit" name="modif" value="modifier">';
            echo ' <input type="submit" name="supprim" value="supprimer">';
            echo ' <input type="submit" name="liste" value="liste">';

            echo '</form>';
        }

        }

        else if (isset($_POST['modif']))
        {
        echo "ok";
           
                
            $connex=mysqli_connect('localhost','root','','jnet');
            $id=$_POST['Idutilisateur'];
            $nm=$_POST['nomutil'];
            $pr=$_POST['prenomutil'];
            $tel=$_POST['tel'];
            $ml=$_POST['email'];
            $mtp=$_POST['motpass'];
            $sts=$_POST['status'];
            $sex=$_POST['sex'];
            $ph=$_POST['photoutil'];
            $prof=$_POST['proffession'];
            $dt=$_POST['dateinscript'];
            $loc=$_POST['localisation'];

                $res=mysqli_query($connex,"update utilisateur set Idutilisateur='$id',
                nomutil='$nm',prenomutil='$pr',tel='$tel',email='$ml',motpass='$mtp',status='$sts',
                sex='$sex',photoutil='$ph',proffession='$prof',dateinscript='$dt',localisation='$loc'  where Idutilisateur='$id'");


            }
        else if (isset($_POST['supprim']))

            {
    
                $connex=mysqli_connect('localhost','root','','jnet');
                $id=$_POST['Idutilisateur'];
                $res=mysqli_query($connex,"delete from utilisateur where Idutilisateur='$id'");
            }
            else
                {

                echo '<form action="utilisateur.php" name="utilisateur" method="POST">';
                echo '<label for="Idutilisateur">Id utilisateur: </label>';
                echo '<input type="text" name="Idutilisateur"><br>';
                echo '<label for="nomutil">Nom:</label>';
                echo '<input type="text"name="nomutil"><br>';
                echo '<label for="prenomutil">Prénom:</label>';
                echo '<input type="text" name="prenomutil" ><br>';
                echo '<label for="tel">Telephonne:</label>';
                echo '<input type="text" name="tel" ><br>';
                echo '<label for="email">Email:</label>';
                echo '<input type="text" name="email"><br>';
                echo '<label for="motpass">Mot de passe:</label>';
                echo '<input type="text" name="motpass" ><br>';
                echo '<label for="status">Status:</label>';
                echo '<input type="text" name="status" ><br>';
                echo '<label for="sex">Sex:</label>';
                echo '<input type="text" name="sex" ><br>';
                echo '<label for="photoutil">Photo Utilisateur:</label>';
                echo '<input type="file" name="photoutil" ><br>';
                echo '<label for="proffession">Proffession:</label>';
                echo '<input type="text" name="proffession" ><br>';
                echo '<label for="dateinscript">Date inscription:</label>';
                echo '<input type="date" name="dateinscript" ><br>';
                echo '<label for="localisation">Ville:</label>';
                echo '<input type="text" name="localisation" ><br><br>';
               echo  '<div class="sub">';
               echo  '<input type="submit" name="rech" value="rechercher">';
               echo  '<input type="submit" name="ajout" value="ajouter">';
               echo  '<input type="submit" name="modif" value="modifier">';
               echo  '<input type="submit" name="supprim" value="supprimer">';
               echo  '<input type="submit" name="liste" value="liste">';
               echo  '</form>';
               echo  '</div>';
                }
    

               
        ?>

</body>
</html>