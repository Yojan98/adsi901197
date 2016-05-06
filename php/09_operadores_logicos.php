<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores  Lógicos</title>
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
    <h1 align="center">Operadores    Lógicos</h1>
    <hr>
    <table border="1px" align="center">
        <tr >
        <td id="s1">Operador</td>
        <td id="s1">Descirpción</td>
        <td id="s1">Ejemplo</td>
        <td id="s1">Resultado</td>
        </tr>
        <tr>
            <td id="s2">&&</td>
            <td id="s2">"Y"</td>
            <td id="s2">$x=6;<br>$y =3;<br>
                ($x<10 && $y>1)</td>
                <td id="s2">
                    <?php 
                    $x = 6;
                    $y = 3;
                    echo var_dump($x<10 && $y>1)
                    ?>
                </td>
            </tr>
            <tr>
                <td id="s2">||</td>
                <td id="s2">"O"</td>
                <td id="s2">$x=6;<br>$y=3;<br>
                    ($x==5 || $y==5)</td></td>
                    <td id="s2">
                        <?php 
                        $x = 6;
                        $y = 3;
                        echo var_dump($x==5 || $y==5)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td id="s2">!</td>
                    <td id="s2">"NO"</td>
                    <td id="s2">$x=6;<br>$y =3;<br>
                        !($x==$y)</td></td>
                        <td id="s2">
                            <?php 
                            $x = 6;
                            $y = 3;
                            echo var_dump(!($x==$y))
                            ?>
                        </td>
                    </tr>
                </table>
            </body>
            </html>