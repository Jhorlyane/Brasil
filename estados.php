<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
      body{
        color: black;
        backgorund: pink;
      }
      p{
    font-family:arial;
    color:green;
  }
    </style>
</head>
<body>
    <?php
    $estado = $_GET["estado"];

    switch ($estado){
        case 1:
            echo "<h1> REGIÃO NORTE </h1>";
           
            echo "<img src='https://www.suapesquisa.com/uploads/site/mapa_regiao_norte_grande.jpg'>";
           
            echo "<p><strong>A região Norte é composta por sete estados e corresponde à maior região em extensão territorial do Brasil. <br> <br>
            Nome oficial: Estado do Acre. <br>
            Sigla: AC. <br>
            Capital: Rio Branco. <br>
            Gentílico: acriano. <br>
            Área territorial: 164.123.738 km2. <br>
            Número de municípios: 22. <br>
            População: 869.265 habitantes.</strong></p>";
             break;

        case 2:
            echo "<h1> REGIÃO NORDESTE </h1>";
           
            echo "<img src='https://www.grupoescolar.com/a/b/8C5F0.jpg'>";
            
            echo "<p><strong>Nordeste
            A Região Nordeste é composta por nove estados, portanto, é a região que possui o maior número de unidades federativas e também a região de maior costa litorânea do país. <br><br>
            
            Nome oficial: Estado do Maranhão. <br>
            Capital: São Luís. <br>
            Gentílico: maranhense. <br>
            Área territorial: 329.642 km2. <br>
            Número de municípios: 217. <br>
            População: 7.035.055 habitantes</strong></p>";
            break;

        case 3:
            echo "<h1> REGIÃO CENTRO-OESTE </h1>";
            
            echo "<img src='https://www.coladaweb.com/wp-content/uploads/2014/12/20180126-regiao-centro-oeste.jpg'>";
            
            echo "<p><strong>A região Centro-Oeste é composta por três estados, os quais se destacam na agropecuária e no extrativismo mineral. <br> <br>

            Nome oficial: Estado de Goiás.<br>
            Capital: Goiânia.<br>
            Gentílico: goiano.<br>
            Área territorial: 340.121 km2.<br>
            Número de municípios: 246.<br>
            População: 6.921.161 habitantes.</strong></p>";
             break;
        case 4:
            echo "<h1> REGIÃO SUDESTE </h1>";
           
            echo "<img src='https://www.suapesquisa.com/uploads/site/mapa_sudeste_brasil_medio.jpg'>";
           
            echo "<p><strong>A região Sudeste é composta por quatro estados e representa a região mais representativa economicamente do país.<br>

            Nome oficial: Estado do Espírito Santo.<br>
            Capital: Vitória.<br>
            Gentílico: espírito-santense ou capixaba.<br>
            Área territorial: 46.095 km2.<br>
            Número de municípios: 78.<br>
            População: 4.016.356 habitantes.</strong></p>";
            
             break;

        case 5:
            echo "<h1> REGIÃO SUL</h1>";
           
            echo "<img src='https://www.suapesquisa.com/uploads/site/mapa_sul_brasil_medio.jpg'>";
           
            echo "<p><strong>A região Sul é composta por três estados e é a menor região do Brasil em extensão territorial.<br><br>

            Nome oficial: Estado de Santa Catarina.<br>
            Capital: Florianópolis.<br>
            Gentílico: catarinense.<br>
            Área territorial: 95.736 km2.<br>
            Número de municípios: 295.<br>
            População: 6.910.553 habitantes.<strong>/</p>";
             break;
    }

    ?>
    
</body>
</html>