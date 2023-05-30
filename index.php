<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form method="POST" class="form">
            <input type="text" name="N1" placeholder="Ingrese variable 1" class="datos"><br>
            <br>
            <select name="operation" class="btn">
                <option value="+">+ Suma</option>
                <option value="-">- Resta</option>
                <option value="/">/ Division</option>
                <option value="*">* Multiplicación</option>
                <option value="**">^ Potenciación</option>
                <option value="%">mod Modulo</option>
                <option value="por">% Porcentaje</option>
                <option value="sqr">√ Raíz</option>
            </select>
            <br>
            <input type="text" name="N2" placeholder="Ingrese variable 2" class="datos"><br>
            <br>
            <input type="submit" value="=" class="btn">
        </form>
     
</body>
</html>