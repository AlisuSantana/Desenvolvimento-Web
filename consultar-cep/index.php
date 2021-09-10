<?php

require_once "vendor/autoload.php";

use allyson\searchCep\Search;

$search = new Search();
$response = $search->getAddressFromZipcode('11335000');

print_r($response);

/** Para pode usar o pacote, seguer
 * composer init
 * composer require wead/digital-cep
 */

/** Trabalhando com teste unitarios
 * composer require --dev phpunit/phpunit --ignore-platform-reqs *  
 */

<?php
use PHPUnit\Framework\TestCase;
use allyson\searchCep\Search;

class SearchTest extends TestCase {
    public function getAddressFromZipcodeDefaultUsage(){
        $result = "ok";
        $this->assertEquals('ok', $result);
    }
}

// vendor/bin/phpunit/ --help
// vendor/bin/phpunit/ <caminhoPasta_OU_ArquivoEspecifico> --colors=always
