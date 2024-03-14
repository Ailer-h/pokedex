<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])){
        $id = $_POST['id'];

        delete($id);
    }

    function delete($index){

        include "mySQL_connect.php";

        $query = mysqli_query($conection, "delete from pokemons where poke_index = $index");
        mysqli_close($conection);

    }


    function filter($s_filter){

        include "mySQL_connect.php";

        // echo 'select * from pokemons where '.$s_filter;
        $query = mysqli_query($conection, "select * from pokemons where ".$s_filter);

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

            echo "<td><form method='post' action='pokemons.php'><input type='hidden' name='id' value='". $output[0] ."'> <input type='submit' name='confirm' value='Deletar' class='delete'></form></td>";
            echo "<td><form method='post' action='edit.php'><input type='hidden' name='id' value='". $output[0] ."'> <input type='submit' name='edit' value='Editar' class='edit'></form></td>";

            echo "</tr>";

        }

        mysqli_close($conection);
    }

    function get_filter(){

        $tipo = "";
        $gen = "";
        $where = "1";

        if(isset($_POST['geracao']) && $_POST['geracao'] != "" && isset($_POST['type']) && $_POST['type'] != ""){
            $gen = $_POST['geracao'];
            $tipo = $_POST['type'];

            $where = "geracao='".$gen."' and tipo_1='".$tipo."' or tipo_2='".$tipo."' group by 1";


        }else{

            if(isset($_POST['geracao'])){
                $gen = $_POST['geracao'];

                $where = "geracao='".$gen."' group by 1";
            
            }

            if(isset($_POST['type']) && $_POST['type'] != ""){
                $tipo = $_POST['type'];
    
                $where = "tipo_1='".$tipo."' or tipo_2='".$tipo."' group by 1";

            }

        }

        return $where;

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

                
            echo "<td><form method='post' action='pokemons.php'><input type='hidden' name='id' value='". $output[0] ."'> <input type='submit' name='confirm' value='Deletar' class='delete'></form></td>";
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
            <form action="pokemons.php" method="post">
                <select name="type" id="type">
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
            
                <input type="number" placeholder="Geração" min="1" max="9" step="1" name="geracao" id="geracao" oninput="int_js()">

                <input type="submit" name="filter" value="Filtrar">
            
                <a href="pokemons.php"><button>Limpar</button></a>
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
                <tr><th></th><th>Nome</th><th>Altura (cm)</th><th>Peso (kg)</th><th>Geração</th><th>Nº na Pokedéx</th><th>Tipos</th></tr>

                <?php
                    if(isset($_POST['buscar'])){
                        table($_POST['search']);
                    
                    }else if(isset($_POST['filter'])){
                        $str_filter = get_filter();
                        filter($str_filter);

                    }else{
                        table("");
                    
                    }
                ?>

            </table>
        </div>
    </div>

    <div id="delbox">
    <div class='center-absolute'>
    <form action="pokemons.php" method="post">
        <div class='confirm-delete'>
                <h3>Deseja deletar as informações de [NOME]?</h3>
                <div class='btns'>
                    <form action='pokemons.php'><input type='hidden' value='1'><input type='submit' value='Deletar' class='del'></form>
                    <a href='pokemons.php'><div class='cancel'>Cancelar</div></a>
                </div>
            </div>
    </form>    
    </div>
    </div>

</body>
<script src="../js/functions.js"></script>
</html>

<?php
        
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])){
            
        }
    
    ?>