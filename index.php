<?php

require_once __DIR__ . "/OutputInterface.php";
require_once __DIR__ . "/Client.php";

$array = array (
                array("Nome" => "Wanderlei", "Idade" => 34 ),
                array("Nome" => "Fabiane", "Idade" => 27 ),
                array("Nome" => "Maria", "Idade" => 45 ),
                array("Nome" => "Pedro", "Idade" => 30 )
               );

$client = new Client();

// Quer um array?
$client->setOutput(new ArrayOutput( ));
$data = $client->loadOutput();

// Quer um JSON?
$client->setOutput(new JsonStringOutput( ));
$data = $client->loadOutput();
