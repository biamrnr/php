<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
</head>
<body>
    <h1> Galeria de imagens </h1>
    <a href="upload.php">Enviar nova imagem </a>
    <hr>

    <h2>Imagens enviadas:</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php
        $pasta = "upload/";
        if (is_dir($pasta)) {
            $arquivos = scandir($pasta);
            foreach ($arquivos as $arquivo) {
                if ($arquivo != "." && $arquivo != "..") {
                    echo "<div>
                <img src='$pasta$arquivo' width='150' style='border:1px solid #ccc;'>
                    </div>";
                }
            }
        } else {
            echo "<p>Nenhuma imagem enviada até o momento.</p>";
        }
        ?>
   

    </div>
</body>
</html>
