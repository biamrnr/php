<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista chamada</title>
</head>
<body style="background-color: rgb(185, 218, 229); text-align: center; font-family: Arial, sans-serif;">
    <h1 style="text-align: center;">Lista de chamada</h1>
    <div style = "border: 2px solid black; width: 300px; padding: 10px; background-color: lightblue; color: black; text-align: center; margin-bottom: 20px; margin-left: auto; margin-right: auto; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px;">
        <p>Preencha o formulário abaixo para registrar sua presença:</p>
</body>
</html>
<div style="border: 10px; ">
<form action="gravarchamada.php" method="post">
    Nome: <br>
    <input type="text" name="nome"> <br>
    Sala: <br>
    <input type="text" name="sala"> <br>
    R.A.: <br>
    <input type="text" name="ra"> <br><br>
    <input type="submit" value="Confirmar">
</form>
</div>
