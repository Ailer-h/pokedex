<?php

    include "html/mySQL_connect.php";

    if(isset($_POST['cadastrar'])){

        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $gen = $_POST['geracao'];
        $n_pokedex = $_POST['n_pokedex'];
        $tipo_1 = $_POST['type1'];
        $tipo_2 = NULL;

        if(isset($_POST['type2'])){
            $tipo_2 = $_POST['type2'];
        }

        $query = mysqli_query($conection, "insert into pokemons(nome,altura_cm,peso_kg,geracao,n_pokedex,tipo_1,tipo_2) values('$nome','$altura','$peso','$gen','$n_pokedex','$tipo_1','$tipo_2')");
        mysqli_close($conection);

    }

    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/pokeball.png" type="image/x-icon">
    <title>Pokédex</title>
</head>
<body>

    <div class="nav">
        <img src="images/pokedex.png" class="title">
        <div class="logo">
            <a href="html/pokemons.php"><img src="images/pokeball.png"></a>
        </div>
    </div>

    <div class="center">
        <form action="index.php" method="post">
            <div class="form">
                <div class="title-box">
                    <img src="images/pokeball.png">
                    <h1>Cadastrar</h1>
                    <img src="images/pokeball.png">
                </div>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" oninput="letters_js(this.value,this)" required>

                <label for="altura">Altura:</label>
                <input type="number" min="1" name="altura" id="altura" oninput="int_js(this.value,this)" required>

                <label for="peso">Peso:</label>
                <input type="number" min="1" name="peso" step="any" id="peso" required>

                <label for="geracao">Geração:</label>
                <input type="number" min="1" max="9" step="1" name="geracao" id="geracao" oninput="int_js(this.value,this)" required>

                <label for="geracao">Número na Pokedéx:</label>
                <input type="number" min="1" max="1025" step="1" name="n_pokedex" id="n_pokedex" oninput="int_js(this.value,this)" required>

                <label for="type1">Tipo 1:</label>
                <select name="type1" id="type1" required>
                    <option value="" selected hidden>Tipo...</option>
                    <option value="Normal">Normal</option>
                    <option value="Fogo">Fogo</option>
                    <option value="Água">Água</option>
                    <option value="Elétrico">Elétrico</option>
                    <option value="Grama">Grama</option>
                    <option value="Gelo">Gelo</option>
                    <option value="Lutador">Lutador</option>
                    <option value="Veneno">Veneno</option>
                    <option value="Terrestre">Terrestre</option>
                    <option value="Voador">Voador</option>
                    <option value="Psiquico">Psiquico</option>
                    <option value="Inseto">Inseto</option>
                    <option value="Pedra">Pedra</option>
                    <option value="Fantasma">Fantasma</option>
                    <option value="Dragão">Dragão</option>
                    <option value="Sombrio">Sombrio</option>
                    <option value="Aço">Aço</option>
                    <option value="Fada">Fada</option>
                </select>

                <label for="type2">Tipo 2:</label>
                <select name="type2" id="type2">
                    <option value="" selected hidden>Tipo...</option>
                    <option value="Normal">Normal</option>
                    <option value="Fogo">Fogo</option>
                    <option value="Água">Água</option>
                    <option value="Elétrico">Elétrico</option>
                    <option value="Grama">Grama</option>
                    <option value="Gelo">Gelo</option>
                    <option value="Lutador">Lutador</option>
                    <option value="Veneno">Veneno</option>
                    <option value="Terrestre">Terrestre</option>
                    <option value="Voador">Voador</option>
                    <option value="Psiquico">Psiquico</option>
                    <option value="Inseto">Inseto</option>
                    <option value="Pedra">Pedra</option>
                    <option value="Fantasma">Fantasma</option>
                    <option value="Dragão">Dragão</option>
                    <option value="Sombrio">Sombrio</option>
                    <option value="Aço">Aço</option>
                    <option value="Fada">Fada</option>
                </select>
       
                <input type="submit" name="cadastrar" value="Cadastrar">
       
            </div>
        </form>
    </div>

</body>
<script src="js/functions.js"></script>
</html>