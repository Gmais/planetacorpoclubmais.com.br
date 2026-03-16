<?php
/**
 * Gatilho de Atualização Automática
 * Acesse: planetacorpoclubmais.com.br/deploy.php para atualizar o site
 */

echo "<h1>Iniciando Atualização...</h1>";

// Executa o script de atualização que já criamos
$output = shell_exec('sh atualizar.sh 2>&1');

echo "<pre>$output</pre>";
echo "<h2>Atualização Concluída!</h2>";
