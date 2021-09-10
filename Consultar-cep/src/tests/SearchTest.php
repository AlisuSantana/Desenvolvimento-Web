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
