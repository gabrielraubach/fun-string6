<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
        a{
            height: 500px;
            font-size: 45pt;
            text-decoration: none;
            color: black;
        }

        form {
            margin-top: 20px;
            margin-left: 500px;
            border: black 2px solid;
            width: 300px;
            height: 500px;
            text-align: center;
        }

        p {
            padding-top: 120px;
        }
    </style>
    <title>link</title>
</head>

<body>
    <form method="POST">
        <h1>
            Digite um link
            <br> ao contrario
        </h1>
        <a href="<?php
if (isset($_POST['C'])) {
    $palavra =$_POST['texto'];
    $A = "";
    $I = strlen($palavra);
    $Inv2 = "https://";
    
    for($i = $I;$i > 0;$i--){
        $Inv = substr($palavra,$i-1,1);
        $A .= $Inv;
    }
    echo $Inv2.$A;  
}
?>">Clique aqui</a>
        <p>digite o link</p>
        <input type="text" name="texto">
        <input type="submit" name="C" value="buscar">
    </form>
</body>

</html>
