<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/print.css">
    <title>Impressão</title>
</head>
<body>
    
    <div class="pokeball"><img src="../images/pokeball.png"></div>

    <div class="center">
	
		<?php
		
			if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['print'])){
		
				$id = $_POST['id'];
				
				include "mySQL_connect.php";
				
				$values = mysqli_fetch_array(mysqli_query($conection, "select * from pokemons where poke_index = $id"));
				
				echo"
					<h5>Pokemon - [NOME]</h5>
					<table>
					
					<tr>
						<td>Nome:</td>
						<td>$values[1]</td>
					</tr>
					
					<tr>
						<td>Altura (cm):</td>
						<td>$values[2]</td>
					</tr>
					
					<tr>
						<td>Peso (kg):</td>
						<td>$values[3]</td>
					</tr>
					
					<tr>
						<td>Geração:</td>
						<td>$values[4]</td>
					</tr>
					
					<tr>
						<td>Nº da Pokedéx:</td>
						<td>$values[5]</td>
					</tr>
					
					<tr>
						<td>Tipos:</td>
						<td>
							$values[6]
							$values[7]
						</td>
					</tr>
					
					</table>
				";
				
				mysqli_close($conection);
		
			}
		
		?>
	
	</div>

</body>

<script>
	window.print();
</script>

</html>