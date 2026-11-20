<?php
declare(strict_types=1);
require __DIR__.'/../bootstrap.php';
if ($argc!==3) throw new InvalidArgumentException('Uso: php examples/cadastro.php SEU_CNPJ SEU_CEP');
$api=client();
$empresa=$api->query('cnpj',['cnpj'=>$argv[1]]);
$endereco=$api->query('cep',['cep'=>$argv[2]]);
echo json_encode(['empresa'=>$empresa,'endereco'=>$endereco],JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR).PHP_EOL;
