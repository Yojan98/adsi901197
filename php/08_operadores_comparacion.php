<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores Comparación PHP</title>
    <style>
        body{
            text-align: center;
        }
        table{
            border: 0px solid #7086B4;
            color: #000;
            height: 200px;
            width: 400px;
            cursor: pointer;
            margin-left: 500px;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            height: 50px;
            width: 100px;
        }

        #s1{
            background-color: #7086B4;
        }
        #s2 {
            background-color: #3AA0BA;
        }

    </style>
</head>
<body>
    <h1>Operadores Comparación PHP</h1>
    <hr>

    <table>
        <tr>
            <td id="s1"><strong>Operador</strong></td>
            <td id="s1"><strong>Ejemplo</strong></td>
            <td id="s1"><strong>Es igual que</strong></td>
            <td id="s1"><strong>Resultado</strong></td>
        </tr>

        <tr>

            <td id="s2">==</td>
            <td id="s2">Es igual</td>
            <td id="s2">5 == 8</td>
            <td id="s2">
             <?php echo var_dump(5==8); ?>
         </td>
     </tr>

     <tr>

        <td id="s2">+=</td>
        <td id="s2">x + = y</td>
        <td id="s2">x = 20+10</td>
        <td id="s2">
            <?php echo var_dump(5!=8); ?>
        </td>
    </tr>

    <tr>
        
        <td id="s2">-=</td>
        <td id="s2">x = - y</td>
        <td id="s2">x = 20-10 </td>
        <td id="s2">
            <?php echo var_dump(5<>8); ?>
        </td>
    </tr>

    <tr>

        <td id="s2">*=</td>
        <td id="s2">x *= y</td>
        <td id="s2">x = 20*10</td>
        <td id="s2">
            <?php echo var_dump(5>8); ?>
        </td>
    </tr>

    <tr>

        <td id="s2">/=</td>
        <td id="s2">x /= y</td>
        <td id="s2">x = 20/10</td>
        <td id="s2">
            <?php echo var_dump(5<8); ?>
        </td>
    </tr>

    <tr>

        <td id="s2">.=</td> id="s2"
        <td id="s2">x .= y</td>
        <td id="s2">x = 20.10</td>
        <td id="s2">
            <?php echo var_dump(5>=8); ?>
        </td>
    </tr>

    <tr>

        <td id="s2">/=</td>
        <td id="s2">x /= y</td>
        <td id="s2">x = 20%10 </td>
        <td id="s2">
            <?php echo var_dump(5<=8); ?>
        </td>
    </tr>
</table>

</body>
</html>