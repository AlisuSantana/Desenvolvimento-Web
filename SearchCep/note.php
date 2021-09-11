<?php

/**
 * composer init 
 * configurar o composer.json com:
 *    "autoload": {
 *       "psr-0": {
 *           "Search": "src/"
 *       },
 *       "psr-4": {
 *           "allyson\\searchCep\\": "src/"
 *       }
 *   }
 * 
 *   Para pode usar o pacote, seguer:
 *   composer init
 *   composer require linkDaPackagist
 * 
 *   Caso não instale a pasta vendor. É so executar composer install
 *
 *   Trabalhando com teste unitarios
 *   composer require --dev phpunit/phpunit | SOMENTE SE NESCESSARIO USE --> --ignore-platform-reqs 
 *   Após isso, teste com o comando vendor/bin/phpunit --version
 * 
 *   Crie a pasta tests/ e coloque seus testes
 * 
 *   vendor/bin/phpunit --help
 *   vendor/bin/phpunit <caminhoPasta_OU_ArquivoEspecifico> --colors=always
 * 
 *   Para criar um arquivo de exibição do resultado basta:
 *   vendor/bin/phpunit tests --testdox-text=report-tests.txt 
 * 
 *   Não Esquece do padrão: nome da função de teste DEVE COMEÇA POR *test*
 * 
 *   No teste vc pode passar função de retorno caso precise de fazer mais de um teste
 *  
 *   *** PSRs Masi importante ***
 *   Site: https://www.php-fig.org/
 *   PSR4-4 (Padrãoes de Autoload)
 *   PSR-12 (Estilo de código)
 * 
 *   Instalar o pacote que auxilia na implementação das PSRs - Github do Sniffer
 *   https://github.com/squizlabs/PHP_CodeSniffer
 *      composer global require "squizlabs/php_codesniffer=*"  
 *                          ou
 *      composer require --dev squizlabs/php_codesniffer=3.*
 * 
 *   Para teste se foi instlado corretamente, segue:
 *      vendor/bin/phpcs --version
 *      vendor/bin/phpcs --help
 *   
 *   Comando de verificação: 
 *      vendor/bin/phpcs src/ --standard=PSR12 (Mostrar os erros de padrões presentes na pasta src)
 *      vendor/bin/phpcbf src/ --standard=PSR12 (Arruma automaticamente alguns padrões)
 *      vendor/bin/phpcs -i (Mostrar todos os padrões que ele é capas de realizar)
 *      vendor/bin/phpcs src/ --standard=Zend (Outro padrão de code)
 * 
 *   Site do PHP do jeito certo
 *      http://br.phptherightway.com/
 * 
 */


 

 