<?php

require_once "vendor/autoload.php";

use allyson\searchCep\Search;

$search = new Search();
$response = $search->getAddressFromZipcode('11335000');

print_r($response);