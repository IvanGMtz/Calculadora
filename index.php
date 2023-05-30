<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
*{
    padding: 0;
    margin: 0;
}

body {
	background: #1c1c1ce5;
	color: #fff;
	font-family: 'Roboto', sans-serif;
}

.container{
    width: 90%;
	max-width: 1200px;
	margin: auto;
	padding: 40px;
    gap: 20px;
    display: grid;
    grid-template-rows:  0.2fr 1fr;
}

.form{
    background-color: #1D202B;
    border-radius: 20px;
    padding: 10%;
    display: flex;
	flex-direction: row;
	justify-content: space-between;
    align-items: center;
}

.resultado{
    height: 100px;
    display: flex;
	flex-direction: column;
	justify-content: space-between;
    align-items: center;
}

.btn{
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

.datos{
    color: white;
    padding: 10px;
    border-radius: 5px;
    background: #1D202B;
    border: 1px solid #1f53c5;
}
</style>
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