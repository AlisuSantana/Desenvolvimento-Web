<?php

require_once "vendor/autoload.php";

use Allyson\ConsultaCep\Search;

$search = new Search();
$response = $search->getAddressFromZipcode('113003000');

print_r($response);

