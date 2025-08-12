<html>
    <head>
    <link rel="stylesheet" href="men.css">
        <title>Categorie</title>
    </head>
    <body>
        
        <?php
        include('menuu.html');
        if (isset($_POST['liste']) || isset($_GET['page'])) 
        {
            echo '<table border=2>';
           
       
        $connex=mysqli_connect('localhost','root','','jnet');
        $res=mysqli_query($connex,"select * from categorie");
        $nbr = mysqli_num_rows($res);
        
        if(isset($_GET['page']))
        {
            $deb=($_GET['page']-1)*2;
        }
        else
        {
            $deb=0;
        }
       
        $res=mysqli_query($connex,"select * from categorie limit $deb,2");

        echo "<table border=1>";
        echo "<tr><th>idcat</th><th>nomcat</th></tr>";

        while($ligne=mysqli_fetch_array($res))
        {
           
            echo "<tr><td>" . $ligne["idcat"] . "</td><td>" . $ligne["nomcat"] . "</td></tr>";
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
            echo '<a href="categorie.php?page=' . $i . '">' . $i ."   ".'</a>';
        }
        echo '</center>';
        echo "</table>";           
       
        }
           
        else if (isset($_POST['ajout']))
        {
            $connex=mysqli_connect('localhost','root','','jnet');
            $cat=$_POST['idcat'];
            $nc=$_POST['nomcat'];

            $res=mysqli_query($connex,"insert into categorie (idcat,nomcat) 
            values('$cat','$nc')");
            echo "enregitré"; 
        }
        else if (isset($_POST['rech']))
        { 
            $connex=mysqli_connect('localhost','root','','jnet');
            $cat=$_POST['idcat'];
        $res=mysqli_query($connex,"select * from categorie where idcat='$cat'");
        $nb=mysqli_num_rows($res); 

        if($nb==0)
       
       {
            echo('Introuvable');
        }
        else{
            $lig=mysqli_fetch_array($res);
            echo '<form action="categorie.php" name="categorie" method="POST">';
            echo '<label for="Idutilisateur">Id categorie: </label>';
            echo '<input type="text" name="idcat" value="' . $lig['idcat'] . '"><br>';
            echo '<label for="nomcat">Nom categorie:</label>';
            echo '<input type="text"name="nomcat" value="' . $lig['nomcat']   .   '" ><br><br>';

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
            $cat=$_POST['idcat'];
            $nc=$_POST['nomcat'];

                $res=mysqli_query($connex,"update categorie set idcat='$cat',
                nomutil='$nc' where idcat='$cat'");


            }
        else if (isset($_POST['supprim']))

            {
    
                $connex=mysqli_connect('localhost','root','','jnet');
                $cat=$_POST['idcat'];
                $res=mysqli_query($connex,"delete from utilisateur where idcat='$cat'");
            }
            else
                {

                echo '<form action="categorie.php" name="categorie" method="POST">';
                echo '<label for="idcat">Id categorie: </label>';
                echo '<input type="text" name="idcat"><br>';
                echo '<label for="nomcat">Nom categorie:</label>';
                echo '<input type="text"name="nomcat"><br><br>';

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