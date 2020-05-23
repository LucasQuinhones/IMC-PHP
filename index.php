<?php
// Start the session
session_start();
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" text="text/css" href="style.css">
    <title>Calculo IMC</title>
</head>

<body>
    <h1>Calcule o IMC</h1>
    <div class="formulario">
        <form action="processa_dados.php" method="post">
            <div>
                <h2>Dados do internauta 1:</h2>
            </div>
            <div>
                <label for="name">Nome: </label>
                <input type="text" id="name" name="nome1" required>

                <label for="age">Idade: </label>
                <input type="number" name="idade1" id="age" required>

                <label for="weight">Peso: </label>
                <input type="text" name="peso1" id="weight" required>

                <label for="height">Altura: </label>
                <input type="text" name="altura1" id="height" required>
            </div>

            <div>
                <h2>Dados do internauta 2:</h2>
            </div>
            <div>
                <label for="name">Nome: </label>
                <input type="text" id="name" name="nome2" required>

                <label for="age">Idade: </label>
                <input type="number" name="idade2" id="age" required>

                <label for="weight">Peso: </label>
                <input type="text" name="peso2" id="weight" required>

                <label for="height">Altura: </label>
                <input type="text" name="altura2" id="height" required>
            </div>
            <div>
                <h2>Dados do internauta 3:</h2>
            </div>
            <div>
                <label for="name">Nome: </label>
                <input type="text" id="name" name="nome3" required>

                <label for="age">Idade: </label>
                <input type="number" name="idade3" id="age" required>

                <label for="weight">Peso: </label>
                <input type="text" name="peso3" id="weight" required>

                <label for="height">Altura: </label>
                <input type="text" name="altura3" id="height" required>
            </div>
            <div class="botoes">
                <button type="submit">Mostar resultado</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>