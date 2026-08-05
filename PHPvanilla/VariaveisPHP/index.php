<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Variáveis</title>
</head>
<body>
    <h1>Estudo de Variáveis</h1>
    <hr>
    <?php  
    // para criar variáveis em php basta usar o símbolo $ antes do nome da variável
    // variáveis em php são não tipadas, ou seja, não é necessário declarar o tipo da variável
    // ao atribuir um valor a uma variável, o php automaticamente define o tipo da variável
    $nome = "João"; // criação de uma variável nome com o valor textual "João"
    $idade = 25; // criação de uma variável idade com o valor numérico 25
    $ativo = true; // criação de uma variável ativo com o valor booleano true
    $salario = 1520.68; // variável numerica com valor decimal
    $status = null; // variável null 

    // Dica para criação de variáveis 
    // - Não inicie o nome de uma variável com números
    // - Não utilize espaços em branco
    // - Não utilize caracteres especiais, somente o underline
    // - crie variáveis com nomes que ajudarão a identificar melhor a mesma 
    // - Evite utilizar letras maiúsculas.

    echo $nome;
    echo "<br>";
    echo "idade: $idade";


    ?>


</body>
</html>
