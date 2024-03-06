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
                <input type="text" name="altura" id="altura" required>

                <label for="peso">Peso:</label>
                <input type="text" name="peso" id="peso" required>

                <label for="geracao">Geração:</label>
                <input type="number" min="1" max="9" step="1" name="geracao" id="geracao" oninput="int_js()" required>

                <label for="geracao">Número na Pokedéx:</label>
                <input type="number" min="1" max="1025" step="1" name="geracao" id="geracao" oninput="int_js()" required>

                <label for="type1">Tipo 1:</label>
                <select name="type1" id="type1" required>
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

                <label for="type2">Tipo 2:</label>
                <select name="type2" id="type2" oninput="changeColour(this.value,'type2')">
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
       
                <input type="submit" value="Cadastrar">
       
            </div>
        </form>
    </div>

</body>
<script src="js/functions.js"></script>
</html>