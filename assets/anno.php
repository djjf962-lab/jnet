<html>
    <head>
    <link rel="stylesheet" href="men.css">
        <title>Annonce</title>
    </head>
    <body>
        
        <?php
        include('menuu.html');
        if (isset($_POST['liste']) || isset($_GET['page'])) 
        {
            echo '<table border=2>';
           
       
        $connex=mysqli_connect('localhost','root','','jnet');
        $res=mysqli_query($connex,"select * from annonce");
        $nbr = mysqli_num_rows($res);
        
        if(isset($_GET['page']))
        {
            $deb=($_GET['page']-1)*2;
        }
        else
        {
            $deb=0;
        }
       
        $res=mysqli_query($connex,"select * from annonce limit $deb,2");

        echo "<table border=1>";
        echo "<tr><th>idannonce</th><th>titre</th><th>description</th><th>prix</th><th>date</th>
        <th>contact</th><th>localisation</th><th>idcat</th><th>idutilisateur</th></tr>";

        while($ligne=mysqli_fetch_array($res))
        {
           
            echo "<tr><td>" . $ligne["idannonce"] . "</td><td>" . $ligne["titre"] . "</td><td>" . $ligne["description"] . "</td><td>" . $ligne["prix"] . "</td><td>" . $ligne["date"] . "</td><td>" . $ligne["contact"] . "</td><td>" . $ligne["localisation"] . "</td><td>" . $ligne["idcat"] . "</td><td>" .$ligne["idutilisateur"] . "</td></tr>";
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
            echo '<a href="annonce.php?page=' . $i . '">' . $i ."   ".'</a>';
        }
        echo '</center>';
        echo "</table>";           
       
        }        
        else if (isset($_POST['ajout']))
        {
            $connex=mysqli_connect('localhost','root','','jnet');
            $an=$_POST['idannonce'];
            $tr=$_POST['titre'];
            $dc=$_POST['description'];
            $pr=$_POST['prix'];
            $dt=$_POST['date'];
            $ct=$_POST['contact'];
            $loc=$_POST['localisation'];
            $cat=$_POST['idcat'];
            $id=$_POST['idutilisateur'];

            $res=mysqli_query($connex,"insert into annonce (idannonce,titre,description,date,contact,localisation,idcat,idutilisateur) 
            values('$an','$tr','$dc','$pr','$dt','$ct','$loc','$cat','$id')");
            echo "enregitré"; 
        }
        else if (isset($_POST['rech']))
        { 
            $connex=mysqli_connect('localhost','root','','jnet');
            $an=$_POST['idannonce'];
        $res=mysqli_query($connex,"select * from annonce where idannonce='$an'");
        $nb=mysqli_num_rows($res); 

        if($nb==0)
       
       {
            echo('Introuvable');
        }
        else{
            $lig=mysqli_fetch_array($res);
            echo '<form action="annonce.php" name="annonce" method="POST">';
            echo '<label for="idannonce">Id annonce: </label>';
            echo '<input type="text" name="idannonce" value="' . $lig['idannonce'] . '"><br>';
            echo '<label for="titre">Titre:</label>';
            echo '<input type="text"name="titre" value="' . $lig['titre']   .   '" ><br>';
            echo '<label for="description">Description:</label>';
            echo '<input type="text" name="description" value=" ' . $lig['description'] . ' "><br>';
            echo '<label for="prix">Prix:</label>';
            echo '<input type="text" name="prix" value=" ' . $lig['prix'] . ' "><br>';
            echo '<label for="date">Date:</label>';
            echo '<input type="date" name="date" value=" ' . $lig['date'] . ' "><br>';
            echo '<label for="contact">Contact:</label>';
            echo '<input type="text" name="contact" value=" ' . $lig['contact'] . ' "><br>';
            echo '<label for="localisation">Localisation:</label>';
            echo '<input type="text" name="localisation" value=" ' . $lig['localisation'] . ' "><br>';
            echo '<label for="idcat">id Cat:</label>';
            echo '<input type="text" name="idcat" value=" ' . $lig['idcat'] . ' "><br>';
            echo '<label for="idutilisateur">id Utilisateur:</label>';
            echo '<input type="text" name="idutilisateur" value=" ' . $lig['idutilisateur'] . ' "><br><br>';

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
            $an=$_POST['idannonce'];
            $tr=$_POST['titre'];
            $dc=$_POST['description'];
            $pr=$_POST['prix'];
            $dt=$_POST['date'];
            $ct=$_POST['contact'];
            $loc=$_POST['localisation'];
            $cat=$_POST['idcat'];
            $id=$_POST['idutilisateur'];

                $res=mysqli_query($connex,"update annonce set idannonce='$an',
                titre='$tr',description='$dc',prix='$pr',date='$dt',contact='$ct',localisation='$loc',idcat='$cat',
                idutilisateur='$id' where idannonce='$an'");


            }
        else if (isset($_POST['supprim']))

            {
    
                $connex=mysqli_connect('localhost','root','','jnet');
                $an=$_POST['idannonce'];
                $res=mysqli_query($connex,"delete from annonce where idannonce='$an'");
            }
            else
                {

                echo '<form action="annonce.php" name="annonce" method="POST">';
                echo '<label for="idannonce">Id annonce: </label>';
                echo '<input type="text" name="idannonce"><br>';
                echo '<label for="titre">Titre:</label>';
                echo '<input type="text"name="titre"><br>';
                echo '<label for="description">Description:</label>';
                echo '<input type="text" name="description" ><br>';
                echo '<label for="prix">Prix:</label>';
                echo '<input type="text" name="prix" ><br>';
                echo '<label for="date">Date:</label>';
                echo '<input type="date" name="date" ><br>';
                echo '<label for="contact">Contact:</label>';
                echo '<input type="text" name="contact"><br>';
                echo '<label for="localisation">Localisation:</label>';
                echo '<input type="text" name="localisation" ><br>';
                echo '<label for="idcat">id Cat:</label>';
                echo '<input type="text" name="idcat" ><br>';
                echo '<label for="idutilisateur">id Utilisateur:</label>';
                echo '<input type="text" name="idutilisateur" ><br><br>';
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