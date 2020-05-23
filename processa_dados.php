<html>

<head>
  <title>Dados</title>
</head>

<body>

  <?php
  $nome1 = $_POST['nome1'];
  $idade1 = $_POST['idade1'];
  $peso1 = floatval($_POST['peso1']);
  $altura1 = floatval($_POST['altura1']);
  $nome2 = $_POST['nome2'];
  $idade2 = $_POST['idade2'];
  $peso2 = floatval($_POST['peso2']);
  $altura2 = floatval($_POST['altura2']);
  $nome3 = $_POST['nome3'];
  $idade3 = $_POST['idade3'];
  $peso3 = floatval($_POST['peso3']);
  $altura3 = floatval($_POST['altura3']);

  $usuario1 = ['nome' => $nome1, 'idade' => $idade1, 'peso' => $peso1, 'altura' => $altura1];
  // calculaImc($peso1, $altura1);
  $usuario2 = ['nome' => $nome2, 'idade' => $idade2, 'peso' => $peso2, 'altura' => $altura2];
  $usuario3 = ['nome' => $nome3, 'idade' => $idade3, 'peso' => $peso3, 'altura' => $altura3];

  $mediaIdade = intval(($usuario1['idade'] + $usuario2['idade'] + $usuario3['idade']) / 3);

  function calculaImc($peso, $altura, $valida = false)
  {
    // print_r('peso ' . $peso . ' e altura ' . $altura);
    $imc = round($peso / ($altura * $altura), 2);
    if ($valida == true) {
      return $imc;
    } else {
      $categoria = '';

      if ($imc <= 18.5) {
        $categoria = 'Abaixo do peso';
      } elseif ($imc > 18.5 && $imc <= 24.9) {
        $categoria = 'Peso ideal';
      } elseif ($imc >= 25.0 && $imc <= 29.9) {
        $categoria = 'Levemente acima do peso';
      } elseif ($imc >= 30 && $imc <= 34.9) {
        $categoria = 'Obesidade grau 1';
      } elseif ($imc >= 35 && $imc <= 39.9) {
        $categoria = 'Obesidade grau 2 (severa)';
      } elseif ($imc > 40) {
        $categoria = 'Obesidade grau 3 (mórbida)';
      }
      return $categoria;
    }
  }

  function mostraDados($nome, $idade, $peso, $altura)
  {
    print_r('O internauta ' . $nome . ' de idade ' . $idade . ' anos. <br> <br>');
    print_r('Seu IMC é ' . calculaImc($peso, $altura, true) . ' e está na categoria ' . calculaImc($peso, $altura) . '. <br> <br>');
    print_r('Resultado obtido a partir do peso ' . $peso . 'kg e da altura ' . $altura . '. <br> <br>');
  }

  mostraDados($usuario1['nome'], $usuario1['idade'], $usuario1['peso'], $usuario1['altura']);
  mostraDados($usuario2['nome'], $usuario2['idade'], $usuario2['peso'], $usuario2['altura']);
  mostraDados($usuario3['nome'], $usuario3['idade'], $usuario3['peso'], $usuario3['altura']);

  print_r(
    'A média de IMC dos internautas é ' .
      calculaImc(($usuario1['peso'] + $usuario2['peso'] + $usuario3['peso']), ($usuario1['altura'] + $usuario2['altura'] + $usuario3['altura']), true)
      . ' corresponde a categoria ' . calculaImc(($usuario1['peso'] + $usuario2['peso'] + $usuario3['peso']), ($usuario1['altura'] + $usuario2['altura'] + $usuario3['altura'])) . '. <br> <br>'
  );

  print_r('A média de idade é ' . $mediaIdade . ' anos.');

  ?>
  <p><a href="index.php">Voltar</a>

</body>

</html>