# Exercícios : Funções em PHP

## Conceito de Função
Uma função é uma parte do programa criada para realizar uma tarefa específica.
#### Duas vantagens de usar funções:

1. Deixa o código mais **organizado e fácil de entender**.
2. Permite *reutilizar o mesmo código*, evitando repetições.

## Princípio do DRY (Don't Repeat Yourself)
Se uma mesma parte do código aparece duas ou mais vezes, o ideal é transformá-la em uma função, evitando repetir a mesma lógica e deixando o programa mais organizado.

## Parâmetros e retorno
**Parâmetros**: são os valores que a função recebe para conseguir realizar sua tarefa. 
- No exemplo:
```php
function calcularTotal(float $preco, int $quantidade): float {     return $preco * $quantidade;
```
 - **$preco** e **$quantidade** são os parâmetros.


**Valor retornado**: é o resultado que a função devolve depois de executar sua operação.
 Nesse caso:
 ```php
function calcularTotal(float $preco, int $quantidade): float {     return $preco * $quantidade;
```
  `return $preco * $quantidade retorna o valor total da compra`

**Exemplo**: se `$preco = 10` e `$quantidade = 3`, a função retorna *30*.

## Tipagem
Na Declaração:
```php
function cadastrar(string $nome, int $idade): bool
```
- `cadastrar` → nome da função
- `string $nome` → parâmetro `$nome` do tipo string
- `int $idade` → parâmetro `$idade` do tipo inteiro
- `bool` → tipo de retorno da função, que será `true`ou `false`.

## void e return
ma função que retorna string precisa devolver um texto usando `return`.
```php 
function saudacao(): string {
    return "Olá!";
```

}

Já uma função void não retorna um valor. Ela pode, por exemplo, apenas executar uma ação:
```php
function mostrarMensagem(): void {
    echo "Olá!";
}
```
**Resumindo**: `string` → devolve um texto. `void` → apenas executa a função, sem devolver um valor.

## Escopo
A função não consegue acessar `$cliente` diretamente porque essa variável foi criada **fora do escopo da função**. Dentro da função, ela não é reconhecida automaticamente.
Duas formas de corrigir:

1. Forma 1 — passar como parâmetro (mais recomendada):
```php
$cliente = "Mariana";

function exibirCliente(string $cliente): string {
    return $cliente;
}

echo exibirCliente($cliente);
```
2. Forma 2 — usar global:
```php
$cliente = "Mariana";

function exibirCliente(): string {
    global $cliente;
    return $cliente;
}

echo exibirCliente();
```
**A primeira forma é mais recomendada**, porque deixa a função mais independente, organizada e reutilizável.

## Referência
Quando usamos `float &$valor`, o `&` indica que o parâmetro será passado por referência.

Sem `&`, a função trabalha com uma cópia do valor. Alterar essa cópia não modifica a variável original.

Com `&`, a função trabalha diretamente com a variável original, então qualquer alteração feita nela permanece depois que a função termina.

Exemplo:
```php
function alterar(float $valor): void {
    $valor = 50;
}

$numero = 10;
alterar($numero);
// $numero continua sendo 10
```
Com referência:
```php
function alterar(float &$valor): void {
    $valor = 50;
}

$numero = 10;
alterar($numero);
// $numero agora é 50
```

## Funções Nativas

tabela:


| Função | Categoria | O que faz | Como usar |
|---|---|---|---|
| `strlen()` | Strings | Retorna a quantidade de caracteres de um texto. | `$tamanho = strlen($texto);` |
| `strtoupper()` | Strings | Converte o texto para letras maiúsculas. | `$resultado = strtoupper($texto);` |
| `strtolower()` | Strings | Converte o texto para letras minúsculas. | `$resultado = strtolower($texto);` |
| `ucfirst()` | Strings | Converte a primeira letra do texto para maiúscula. | `$resultado = ucfirst($texto);` |
| `trim()` | Strings | Remove espaços e quebras de linha no início e no fim do texto. | `$limpo = trim($texto);` |
| `str_replace()` | Strings | Substitui uma parte do texto por outra. | `$novo = str_replace("-", "", $cpf);` |
| `substr()` | Strings | Extrai uma parte do texto a partir de uma posição. | `$inicio = substr($texto, 0, 3);` |
| `explode()` | Strings | Divide um texto e cria um array usando um separador. | `$palavras = explode(" ", $nome);` |
| `implode()` | Arrays | Junta os itens de um array em um único texto. | `$lista = implode(", ", $nomes);` |
| `count()` | Arrays | Conta a quantidade de itens de um array. | `$total = count($produtos);` |
| `in_array()` | Arrays | Verifica se um valor existe dentro de um array. | `$existe = in_array("SP", $estados, true);` |
| `array_push()` | Arrays | Adiciona um ou mais itens ao final de um array. | `array_push($nomes, "Ana");` |
| `array_pop()` | Arrays | Remove e retorna o último item de um array. | `$ultimo = array_pop($nomes);` |
| `sort()` | Arrays | Ordena um array em ordem crescente e reorganiza suas chaves. | `sort($notas);` |
| `array_keys()` | Arrays | Retorna um array contendo as chaves de outro array. | `$chaves = array_keys($produtos);` |
| `number_format()` | Números | Formata um número com casas decimais e separadores definidos. | `$preco = number_format($valor, 2, ',', '.');` |
| `round()` | Números | Arredonda um número para a quantidade de casas informada. | `$media = round($nota, 2);` |
| `max()` | Números | Retorna o maior valor de uma lista ou array. | `$maior = max($notas);` |
| `min()` | Números | Retorna o menor valor de uma lista ou array. | `$menor = min($notas);` |
| `is_numeric()` | Validação | Verifica se o valor é um número ou uma string numérica. | `if (is_numeric($entrada)) { ... }` |
| `isset()` | Validação | Verifica se uma variável existe e não possui valor `null`. | `if (isset($usuario)) { ... }` |
| `empty()` | Validação | Verifica se uma variável está vazia. | `if (empty($pedido)) { ... }` |
| `date()` | Data e hora | Formata uma data ou hora conforme uma máscara. | `$hoje = date('d/m/Y');` |
| `file_exists()` | Arquivos | Verifica se um arquivo ou diretório existe. | `if (file_exists('dados.txt')) { ... }` |
| `file_get_contents()` | Arquivos | Lê todo o conteúdo de um arquivo ou endereço. | `$conteudo = file_get_contents('dados.txt');` |
| `file_put_contents()` | Arquivos | Grava conteúdo em um arquivo, criando-o se necessário. | `file_put_contents('log.txt', $mensagem);` |

## Previsão de saída
o Código é:
```php
function aplicarDesconto(float $preco): float {
    return $preco * 0.90;
}

$valor = 100.00;
echo aplicarDesconto($valor);
echo $valor;
```
O Resultado será:
`90100`

Isso acontece porque:

- `aplicarDesconto(100)` retorna 90;
- o echo seguinte imprime o valor original de `$valor`, que continua sendo **100**;
- não existe espaço ou quebra de linha entre os dois echo.

Portanto:

**90 + 100** → `90100`

## Documentação 
Segundo a **documentação oficial do PHP**, a sintaxe é:
```php
strlen(string $string): int
```
**Parâmetro**: `$string`, que é a string cujo tamanho será calculado.
**Retorno**: `int`, representando o tamanho da string em **bytes**.