<?php

/**
 * Class with DB info
 */
class dbClass
{
  private $DBServer = 'server name or IP address'; // e.g 'localhost' or '192.168.1.100'
  private $DBUser   = 'DB_USER';
  private $DBPass   = 'DB_PASSWORD';
  private $DBName   = 'DB_NAME';
  public  $conect   = NULL;

  function __construct()
  {
    $this->dbConnect();
  }

  public function dbConnect(){
    $this->$conect = new mysqli($this->$DBServer, $this->$DBUser, $this->$DBPass, $this->$DBName);
    if ($this->$conect->connect_error) {
        trigger_error('Database connection failed: '  . $this->$conect->connect_error, E_USER_ERROR);
    }
  }
  
}
