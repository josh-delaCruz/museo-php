<!DOCTYPE html>
<html>
<head>
    <title>Tabella Opere</title>
</head>
<body>
        <table>
        <thead>
            <tr>
                <th>Id opera</th>
                <th>Nome opera</th>
                <th>Tipo opera</th>
                <th>Nome Artista</th>
                <th>Cognome Artista</th>
            </tr>
        </thead>
   <?php
        require ("../database.php");

        $query = "SELECT opera.id_opera AS opera, opera.nome_opera AS nOpera, opera.tipo_opera AS tipo, artista.nome_artista AS nome, artista.cognome_artista AS cognome
                  FROM opera
                  INNER JOIN artista ON artista.id_artista = opera.id_artista
                  WHERE artista.id_artista = $_GET[artista] ";

        if ($result = $mysqli->query($query)) {
            while ($row=$result->fetch_assoc()) {
               echo '<tr>';
                echo '<td>'.$row["opera"].'</td>';
                echo '<td>'.$row["nOpera"].'</td>';
                echo '<td>'.$row["tipo"].'</td>';
                echo '<td>'.$row["nome"].'</td>';
                echo '<td>'.$row["cognome"].'</td>';
               echo '</tr>';
            }
        }      
   ?>
        </table>

        <a href="../index.php">Home</a>
</body>
</html>