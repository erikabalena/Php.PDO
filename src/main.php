<?php
require_once(__DIR__."/../vendor/autoload.php");
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//$logger = new \Monolog\Logger("MeuApp");
$logger = new Logger("aprendendoPDO");
$logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));

$logger->info("Meu primeiro log de verdade....");
echo "asdf";