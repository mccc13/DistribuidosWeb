<?php

require_once 'config.php';

class database {

    private static $db = null;
    private static $pdo;

    final private function __construct() {
        try {
            self::getDb();
        } catch (Exception $ex) {
            
        }
    }

    public function getDb() {
        if (self::$pdo == null) {
            self::$pdo = NewADOConnection($GLOBALS['dbdriver']);
            self::$pdo->Connect($GLOBALS['dbserver'], $GLOBALS['dbuser'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);

            //self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        }
        return self::$pdo;
    }

    public static function getInstance() {
        if (self::$db === null) {
            self::$db = new self();
        }
        return self::$db;
    }

    function __destruct() {
        self::$pdo = null;
    }

}
