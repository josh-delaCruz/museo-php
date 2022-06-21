<!DOCTYPE html>
<html>
<head>
    <title>Riepilogo dati inseriti</title>
</head>
<body>

    <?php
            require ("../database.php");

            $nome = $_POST['nome_opera'];
            $tipo = $_POST['tipo_opera'];
            $id = $_POST['artista'];
            
            $query = "insert into opera (id_opera, nome_opera, tipo_opera, id_artista) values (0, '{$nome}' , '{$tipo}', '{$id}')";
            $mysqli->query($query);
    ?>
      
        <h2>RIEPILOGO OPERA</h2>
        <p>Inserisco l'opera con</p>

        <?php
            echo "<p>Nome Opera: </p>";
                echo $_POST['nome_opera'];
            echo "<p>Tipo Opera: </p>";
                echo $_POST['tipo_opera'];
            echo "<p>Fatto da: </p>";
                echo $_POST['artista'];
        ?>
        
        <a href="../index.php">Home</a>
</body>
</html>