<?php
//1. Declare => evitar operações entre variaveis de tipos diferentes 
declare(strict_types=1);

//Criar um Cálculo de Holerite em PHP

//2. Declarar as Constantes 
const TAXA_INSS = 0.08; //8% => 8/100
const DESCONTO_VT = 150.00;

// 3. Declarar as Variáveis 
// Dados do Empregado 
$nomeFuncionario = "Maria Silva";
$salarioBase = 3200.50;
$horasExtras = 10;

//declaração de variaveis usando LowerCamelCase
// regra -> primeira palavra toda minúsculo e depois as demais palavras usa-se maiúscula na primeira letr
//exemplo: $hojeEstaUmDiaBonito

// 4. Cálculos dos salários
$valorHoraExtra = ($salarioBase / 220) * 1.6;

// -> Crie a variavel $totalHorasExtras
$totalHorasExtras= $horasExtras * $valorHoraExtra;

// -> Crie a variavel $salarioBruto
$salarioBruto =$salarioBase + $totalHorasExtras;

// -> Crie a variavel $descontoINSS
$descontoINSS =$salarioBruto * TAXA_INSS;

// -> Crie a variavel $salarioLiquido
$salarioLiquido = ($salarioBruto - $descontoINSS) - DESCONTO_VT;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holerite - <?php $nomeFuncionario ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Demonstrativo de Pagamento</h2>
    <!-- Saída de Dados Misturando Html e PHP -->
    <table>
        <!-- Colaborador(a) -->
                 <tr> 
            <th>Colaborador(a)</th>
            <td><?php echo $nomeFuncionario ?></td>
        </tr>
        <tr>
            <th>Salário Base</th>
            <!-- usar uma função number format (formata saida de numeros) -->
            <td><?php echo number_format($salarioBase, 2, ",", ".") ?></td>
        </tr>  


        <!-- fazer as demais linhas da tabela utilizando as variaveis criadas  -->

        <!-- Horas Extras -->
        <tr>
            <th>Horas Extras</th>
            <td><?php echo $horasExtras ?></td>
        </tr>
        <tr>
            <th>Valor Hora Extra</th>
            <td><?php echo number_format($valorHoraExtra, 2, ",", ".") ?></td>
        </tr>
         
         <!-- Total de Horas Extras -->
        <tr>
            <th>Total Horas Extras</th>
            <td><?php echo number_format($totalHorasExtras, 2, ",", ".") ?></td>
        </tr>
        <tr>
            <th>Salário Bruto</th>
            <td><?php echo number_format($salarioBruto, 2, ",", ".") ?></td>
            <!-- Desconto INSS -->
        </tr>
        <tr>
            <th>Desconto INSS</th>
            <td><?php echo number_format($descontoINSS, 2, ",", ".") ?></td>
        </tr>
        <tr>
            <th>Desconto VT</th>
            <td><?php echo number_format(DESCONTO_VT, 2, ",", ".") ?></td>
        </tr>
        
        <!-- salario liquido -->
        <tr>
            <th>Salário Líquido</th>
            <td><?php echo number_format($salarioLiquido, 2, ",", ".") ?></td>
        </tr>

    </table>
</body>
</html>