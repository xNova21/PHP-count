<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet">
    <title>Contador</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios();?></p>
        <p class="texto">Visitas</p>
    </div>
</body>
</html>