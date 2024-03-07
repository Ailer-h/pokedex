<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar'])){

        include "mySQL_connect.php";

        $id = $_POST['id'];

        $query = mysqli_query($conection, "update pokemons set nome='".$_POST['nome']."', altura_cm=".$_POST['altura'].", peso_kg=".$_POST['peso'].",geracao=".$_POST['geracao'].", n_pokedex=".$_POST['n_pokedex'].", tipo_1='".$_POST['type1']."', tipo_2='".$_POST['type2']."' WHERE poke_index=".$_POST['id']."");
        
        mysqli_close($conection);
        header("Location: pokemons.php");
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])){
        $id = $_POST['id'];

        $values = load_item($id);
    }

    function load_item($id){

        include "mySQL_connect.php";


        $query = mysqli_query($conection, "select * from pokemons where poke_index=$id group by 1");
        mysqli_close($conection);

        return mysqli_fetch_array($query);

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="shortcut icon" href="../images/pokeball.png" type="image/x-icon">
    <title>Pokedéx</title>
</head>
<body>
    
    <div class="nav">
        <a href="../index.php"><img src="../images/pokedex.png" class="title"></a>
        <div class="logo"><img src="../images/pokeball.png"></div>
    </div>

    <?php
        echo"
            <div class='center'>
                <form action='edit.php' method='post'>
                    <input type='hidden' value='$values[0]' name='id'>
                    <div class='form'>
                        <div class='title-box'>
                            <img src='../images/pokeball.png'>
                            <h1>Editar</h1>
                            <img src='../images/pokeball.png'>
                        </div>

                        <label for='nome'>Nome:</label>
                        <input type='text' name='nome' id='nome' oninput='letters_js(this.value,this)' value='$values[1]' required>

                        <label for='altura'>Altura (em cm):</label>
                        <input type='number' min='1' name='altura' id='altura' oninput='int_js(this.value,this)' value='$values[2]' required>

                        <label for='peso'>Peso (em kg):</label>
                        <input type='number' min='1' name='peso' step='any' id='peso' value='$values[3]' required>

                        <label for='geracao'>Geração:</label>
                        <input type='number' min='1' max='9' step='1' name='geracao' id='geracao' oninput='int_js(this.value,this)' value='$values[4]' required>

                        <label for='geracao'>Número na Pokedéx:</label>
                        <input type='number' min='1' max='1025' step='1' name='n_pokedex' id='n_pokedex' oninput='int_js(this.value,this)' value='$values[5]' required>

                        <label for='type1'>Tipo 1:</label>
                        <select name='type1' id='type1' required>
                            <option value='Normal'>Normal</option>
                            <option value='Fogo'>Fogo</option>
                            <option value='Água'>Água</option>
                            <option value='Elétrico'>Elétrico</option>
                            <option value='Grama'>Grama</option>
                            <option value='Gelo'>Gelo</option>
                            <option value='Lutador'>Lutador</option>
                            <option value='Veneno'>Veneno</option>
                            <option value='Terrestre'>Terrestre</option>
                            <option value='Voador'>Voador</option>
                            <option value='Psiquico'>Psiquico</option>
                            <option value='Inseto'>Inseto</option>
                            <option value='Pedra'>Pedra</option>
                            <option value='Fantasma'>Fantasma</option>
                            <option value='Dragão'>Dragão</option>
                            <option value='Sombrio'>Sombrio</option>
                            <option value='Aço'>Aço</option>
                            <option value='Fada'>Fada</option>
                        </select>

                        <label for='type2'>Tipo 2:</label>
                        <select name='type2' id='type2'>
                            <option value=''>----</option>
                            <option value='Normal'>Normal</option>
                            <option value='Fogo'>Fogo</option>
                            <option value='Água'>Água</option>
                            <option value='Elétrico'>Elétrico</option>
                            <option value='Grama'>Grama</option>
                            <option value='Gelo'>Gelo</option>
                            <option value='Lutador'>Lutador</option>
                            <option value='Veneno'>Veneno</option>
                            <option value='Terrestre'>Terrestre</option>
                            <option value='Voador'>Voador</option>
                            <option value='Psiquico'>Psiquico</option>
                            <option value='Inseto'>Inseto</option>
                            <option value='Pedra'>Pedra</option>
                            <option value='Fantasma'>Fantasma</option>
                            <option value='Dragão'>Dragão</option>
                            <option value='Sombrio'>Sombrio</option>
                            <option value='Aço'>Aço</option>
                            <option value='Fada'>Fada</option>
                        </select>

                        <input type='submit' name='salvar' value='Salvar'>

                    </div>
                </form>
            </div>";

            echo "<script>
                document.querySelector('#type1').value = '$values[6]';

                document.querySelector('#type2').value = '$values[7]';
            </script>";
    ?>

</body>
</html>