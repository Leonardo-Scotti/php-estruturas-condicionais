<?php
include ('./includes/header.php');

echo "<h2>Exemplo de utilização de IF / ELSE</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$number = $_POST['number'];
//if(condição){
//      trecho de código para executar, caso a condição seja atendida.
//}else{
//      trecho de código para executar, caso nenhuma condição seja atendida.
//}
$mod = $number % 2;
if($mod == 0){
    echo "O número {$number} é par.";
}else{
    echo "O número {$number} é impar.";
}

include ('./includes/footer.php');