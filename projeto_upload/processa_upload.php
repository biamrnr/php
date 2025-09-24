<?php
$pastaDestino = "uploads/";
if (!is_dir($pastaDestino)){
    mkdir($pastaDestino, 0755, true);
}
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {   
    $nome_arquivo = $_FILES['arquivo']['name'];
    $caminhoCompleto = $pastaDestino . $nome_arquivo;

    $tipoArquivo = strtolower(pathinfo($caminhoCompleto, PATHINFO_EXTENSION));
    $tiposPermitidos = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($tipoArquivo, $tiposPermitidos)) {
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoCompleto)) {
                echo "arquivo enviado com sucesso!";
            } else {
                echo "erro ao enviar o arquivo.";
            }
      } else {
        echo "tipo de arquivo não permitido. Apenas JPG, JPEG, PNG e GIF são aceitos.";
    }
} else {
    echo "Nenhum arquivo foi enviado ou ocorreu um erro no envio.";
}
    
?>