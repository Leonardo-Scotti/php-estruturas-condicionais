<?php
include ('./includes/header-3.php');

$languages = $_POST['languages'];

echo '<a href="index.php"><button>Voltar</button></a>';

/*switch(valor){
    caso "valor 1":
        trecho de código a executar;
        break;
    caso "valor 2":
        trecho de código a executar;
        break;
    default:
        trecho de código para executar por padrão, caso os valores não sejam encontrados;
        break;
}*/

switch ($languages) {
    case 'python':
        echo "<p><strong>Python: </strong>É uma linguagem de alto nível, interpretada e muito utilizada em ciência de dados e desenvolvimento web, conhecida por sua sintaxe clara e biblioteca extensa.</p>";
        echo "<img src='../assets/python.png'>";
        break;
    case 'js':
        echo "<p><strong>JavaScript: </strong> Linguagem interpretada essencial para interatividade em páginas web, utilizada no front-end e back-end com Node.js.</p>";
        echo "<img src='../assets/js.png'>";
        break;
    case 'java':
        echo "<p><strong>Java: </strong>Linguagem compilada, orientada a objetos, popular em aplicações empresariais e Android, destacando-se pela portabilidade e gerenciamento automático de memória.</p>";
        echo "<img src='../assets/java.png'>";
        break;
    case 'c#':
        echo "<p><strong>C#: </strong>Linguagem compilada, orientada a objetos, popular em aplicações empresariais e Android, destacando-se pela portabilidade e gerenciamento automático de memória.</p>";
        echo "<img src='../assets/c#.png'>";
        break;
    case 'ts':
        echo "<p><strong>TypeScript: </strong>Superset do JavaScript que adiciona tipagem estática, melhorando a manutenção e escalabilidade do código em grandes aplicações web.</p>";
        echo "<img src='../assets/ts.png'>";
        break;
    }

include ('./includes/footer-3.php');