<?php

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        delete($id);
    }

    function delete($index){

        include "mySQL_connect.php";

        $query = mysqli_query($conection, "delete from pokemons where poke_index = $index");
        mysqli_close($conection);

    }

    function table($busca){

        include "mySQL_connect.php";

        $query = mysqli_query($conection, "select * from pokemons where nome like \"%$busca%\" group by 1");

        while($output = mysqli_fetch_array($query)){
            
            echo "<tr>";
            
            echo "<td>$output[0]</td>";
            echo "<td>$output[1]</td>";
            echo "<td>$output[2]</td>";
            echo "<td>$output[3]</td>";
            echo "<td>$output[4]</td>";
            echo "<td>$output[5]</td>";
            echo "<td><div>
                    <div class='$output[6]'>$output[6]</div>
                    <div class='$output[7]'>$output[7]</div>
                </div></td>";

            echo "<td><form method='post' action='pokemons.php'><input type='hidden' name='id' value='". $output[0] ."'> <input type='submit' name='delete' value='Deletar' class='delete'></form></td>";
            echo "<td><form method='post' action='edit.php'><input type='hidden' name='id' value='". $output[0] ."'> <input type='submit' name='edit' value='Editar' class='edit'></form></td>";

            echo "</tr>";

        }

        mysqli_close($conection);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/pokeball.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/pokemons.css">
    <title>Pokedéx</title>
</head>
<body>
    
    <div class="nav">
        <a href="../index.php"><img src="../images/pokedex.png" class="title"></a>
        <div class="logo"><img src="../images/pokeball.png"></div>
    </div>

    <div class="center">
        <div class="filter">
            <form action="pokemon.php" method="post">
                <select name="type1" id="type">
                    <option value="" selected hidden>Tipo...</option>
                    <option value="0">Normal</option>
                    <option value="1">Fogo</option>
                    <option value="2">Água</option>
                    <option value="3">Elétrico</option>
                    <option value="4">Grama</option>
                    <option value="5">Gelo</option>
                    <option value="6">Lutador</option>
                    <option value="7">Veneno</option>
                    <option value="8">Terrestre</option>
                    <option value="9">Voador</option>
                    <option value="10">Psiquico</option>
                    <option value="11">Inseto</option>
                    <option value="12">Pedra</option>
                    <option value="13">Fantasma</option>
                    <option value="14">Dragão</option>
                    <option value="15">Sombrio</option>
                    <option value="16">Aço</option>
                    <option value="17">Fada</option>
                </select>
            
                <input type="number" placeholder="Geração" min="1" max="9" step="1" name="geracao" id="geracao" oninput="int_js()">

                <input type="submit" name="filter" value="Filtrar">
            
            </form>
        </div>

        <form action="pokemons.php" method="post">
            <div class="table-search">
                <input type="text" name="search" id="search" placeholder="Pesquisar...">
                <input type="submit" name="buscar" value="🔎︎">
            </div>
            
        </form>

        <div class="table-holder">
            <table>
                <tr><th>Indice</th><th>Nome</th><th>Altura</th><th>Peso</th><th>Geração</th><th>Nº na Pokedéx</th><th>Tipos</th></tr>

                <?php
                    if(isset($_POST['buscar'])){
                        table($_POST['search']);
                    
                    }else if(isset($_POST['filter'])){
                        

                    }else{
                        table("");
                    
                    }
                ?>

            </table>
        </div>
    </div>

</body>
<script src="../js/functions.js"></script>
</html>