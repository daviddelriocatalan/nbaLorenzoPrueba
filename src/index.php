<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Hail Hydra!</title>
</head>

<body>
    <div style="border: 1px solid black; border-radius:10%; width: 200px;">               
        <h1>LORENZO MAQUINA</h1>
        <form style="padding-left:10px; padding-right:10px; padding-bottom:10px;" name="formulario" method="post" action=".">
            <p>Número 1: <input type="text" name="num1"></p>
            <p>Número 2: <input type="text" name="num2"></p>
            <fieldset>
                <input type="radio"  name="signo" value="suma">+
                <input type="radio"  name="signo" value="resta">-
                <input type="radio"  name="signo" value="multi">*
                <input type="radio"  name="signo" value="division">/
            </fieldset>
            <input type="submit" name="calcular" value="calcular">
        </form>
    </div>
    
</body>

</html>