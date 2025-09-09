<?php

class Connection {

private $hostname = "localhost";
private $username = "root";
private $password = "husna";
private $database = "informasiEvent";

public function connect(){
    $connect = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    return $connect;
}
}

?>