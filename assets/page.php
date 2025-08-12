<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
       
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
          echo "</table>"; 

        $np=$nbr/2;
        if(($nbr % 2)!=0)
        {
           $np+$np+1;
        }
        echo '<center>';
        for($i=1;$i<=$np;$i++)
        {
            echo '<a href=".php?page=' . $i . '">' . $i .'</a>';
        }
        echo '</center>';
        echo "</table>";


      
       
        ?>
</body>
</html>