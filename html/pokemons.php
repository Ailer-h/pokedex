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
            <form action="post">
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

                <input type="number" placeholder="Nº Pokedéx" min="1" max="1025" step="1" name="geracao" id="geracao" oninput="int_js()">

                <input type="submit" value="Filtrar">
            
            </form>
        </div>

        <div class="table-holder">
            <table>
                <tr><th>Indice</th><th>Nome</th><th>Altura</th><th>Peso</th><th>Geração</th><th>Nº na Pokedéx</th><th>Tipos</th></tr>

                <tr>
                    <td>1</td>
                    <td>Charmander</td>
                    <td>170</td>
                    <td>40</td>
                    <td>1</td>
                    <td>4</td>
                    <td>Fogo no cu</td>
                </tr>

            </table>
        </div>
    </div>

</body>
<script src="../js/functions.js"></script>
</html>