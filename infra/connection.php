<?php

class Connection {

    private $connection;

    function __construct() {

        $this->connection = new PDO('mysql:host=localhost;dbname=u885379061_db_brazuca', 'root', '');
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection(){

        return $this->connection;
    }
}

?>