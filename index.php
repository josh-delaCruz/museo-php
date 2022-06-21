<!DOCTYPE html>
<html>
<head>
    <title>Museo</title>
</head>
<body>
    <h1>INSERIMENTO OPERA</h1>
    <p>Completare i vari campi</p>
    <form action="./pages/pagina1.php" method="POST">
        <?php
            require('database.php');

            $query = "SELECT * FROM compito_prep.artista";

            if ($result = $mysqli->query($query)) {
                echo "<p>Scegli l'artista</p>";
                echo "<select name = 'artista'>";
            
                while ($row=$result->fetch_assoc()) {
                    echo '<option value="'.$row['id_artista'].'">'. $row["cognome_artista"].$row["nome_artista"].'</option>';
                }
            }   
                echo " </select>";
            
            //$_POST["artista"] =
        ?>

        <p>Nome Opera</p>
        <input type="text" name="nome_opera"><br>

        <p>Tipo di Opera</p>
        <input type="text" name="tipo_opera"><br><br>

        <input type="submit" value="Continua">    

    </form>
    <br>


    <h1>Tabella Opere</h1>
    <p>pagina per visualizzare le opere dell'autore</p>
    <form action="./pages/pagina2.php" method="GET">
    <?php
       $query = "SELECT * FROM compito_prep.artista";

       if ($result = $mysqli->query($query)) {
           echo "<p>Scegli l'artista</p>";
           echo "<select name = 'artista'>";
       
           while ($row=$result->fetch_assoc()) {
               echo '<option value="'.$row['id_artista'].'">'. $row["cognome_artista"].$row["nome_artista"].'</option>';
           }
       }   
           echo " </select>";
    ?>
        <input type="submit" value="Continua">
    </form>
    
    <h1>Numero di opere dei vari artisti</h1>


</body>

</html>