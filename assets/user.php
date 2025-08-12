<html>
    <head>
    <link rel="stylesheet" href="men.css">
        <title>User</title>
    </head>
    <body>
        <?php
            echo '<form class="form" action="user.php" name="user" method="POST">';
            echo '<label for="login">login: </label>';
            echo '<input type="texte" name="login"><br>';
            echo '<label for="motpass">mot de passe:</label>';
            echo '<input type="text" name="motpass"><br>';
            echo '<input class="submit" type="submit" name="ok" value="se connecter">';
            echo  '</form>';


            if (isset($_POST['ok']))
        { 
            $connex=mysqli_connect('localhost','root','','jnet');
            $lg=$_POST['login'];
            $mp=$_POST['motpass'];
        $res=mysqli_query($connex,"select * from user where login='$lg' and motpass='$mp'");
        $nb=mysqli_num_rows($res); 
        if($nb==0)
        {
            echo "<p class='p'>" . 'Introuvable' . "</p>";
        }
        else
        {
        header("location:http://localhost/dashboard/jnet/menu.html") ;
       }
    }
      
   
          
            ?>
</body>
</html>