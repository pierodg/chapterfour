<html>
    <head>
        <meta charset="utf-8">
        <title>Gestione dei file</title>
    </head>
    <body>
        <h1>fopen / fclose</h1>
        
        <?php
            if(file_exists("text.txt")) {
                $mioFile = fopen("text.txt", "r");
                echo "File esiste";
                //fclose($mioFile);
            } else {
            echo "<h1>File non trovato</h1>";
            }
        ?>

        <h1>fread</h1>

        <?php 
        $gestioneFile = fopen("text.txt", "r") or die("<h6>Impossibile aprire il file</h6>");
        $contenutoFile = fread($gestioneFile, filesize("text.txt")); 
        
        fclose($gestioneFile);

        //echo $contenutoFile;
        var_dump($contenutoFile);

        ?>


        <h1>file_get_contents</h1>

        <?php
        $contenutoFile = file_get_contents("text.txt") or die ("<h6>Contenuto non accessibile</h6>");


        echo $contenutoFile."<br>";
        var_dump($contenutoFile);
        ?>
    </body>
</html>