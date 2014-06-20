<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=database_name', 'jen', 'letmein');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";