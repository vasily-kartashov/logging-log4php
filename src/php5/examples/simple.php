<?php
define('LOG4PHP_DIR', dirname(__FILE__).'/../log4php');

require_once LOG4PHP_DIR.'/LoggerManager.php';

class Log4phpTest {

        private $_logger;
    
    public function Log4phpTest() {
        $this->_logger = LoggerManager::getLogger('Log4phpTest');
        $this->_logger->debug('Hello!');
    }

}

function Log4phpTestFunction() {
    $logger = LoggerManager::getLogger('Log4phpTestFunction');
    $logger->debug('Hello again!');    
}

$test = new Log4phpTest();
Log4phpTestFunction();

// Safely close all appenders with...
LoggerManager::shutdown();

?>
