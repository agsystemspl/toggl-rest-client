<?php

require __DIR__ . "/../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$client = new \AGSystems\REST\Toggl\Client(
    getenv('API_TOKEN')
);

var_export($client->me->get());

var_export($client->time_entries(1047990241)->put([
    'time_entry' => [
        'description' => '(e) Motonet :: wyciągnięcie listy zestawów ' . uniqid(),
    ],
]));
