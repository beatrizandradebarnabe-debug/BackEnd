<?php
declare(strict_types=1);

$cargoUsuario = "Funcionario";
$senhaDigitada = "SenhaSegura123";

$senhaSistema = "SenhaSegura123";

if ($senhaDigitada == $senhaSistema && // exemplo de if : O acesso só é liberado SE a senha estiver correta 
    ($cargoUsuario == "Diretor" || $cargoUsuario == "Gerente")) {
    
    echo "Acesso Liberado";
} else { //exemplo de else : caso contrário ou senão
    echo "Acesso Negado";
}

?>