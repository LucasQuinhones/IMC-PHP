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
                <label for="name">Nome: </label>
                <input type="text" id="name" name=idade>
            </div>
            <div>
                <label for="age">Idade: </label>
                <input type="number" name="idade" id="age">
            </div>
            <div>
                <h2>Dados para o IMC:</h2>
            </div>
            <div>
                <label for="weight">Peso: </label>
                <input type="number" name="peso" id="weight">
            </div>
            <div>
                <label for="height">Altura: </label>
                <input type="number" name="altura" id="height">
            </div>
            <div class="botoes">
                <button type="submit">Calcular</button>
                <button type="reset">Limpar</button>                
            </div>
        </form>
    </div>
    <div class="imc">
        <h2>IMC - Índice de massa corporal</h2>
        <p>

        </p>
        <figure>
            <img src="img/tabela-imc.png" alt="Tabela Imc">
        </figure>
    </div>
</body>
</html>