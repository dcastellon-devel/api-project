<?php
/**
 * Principal CLass for notes API
 */
 require_once('dbClass.php');
if(!class_exists('NotesApi')):
  class NotesApi extends dbClass
  {

    function __construct()
    {
      return $this->router();
      $this->connection = new dbClass();

    }

    public function router(){
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
        case 'GET':
            $this->getMethod();
            break;
        case 'POST':
            $this->postMethod();
            break;
        case 'PUT':
              $this->putMethod();
            break;
        default:
            break;
        }
    }

    private function getMethod(){
      $action = $_GET['do'];
      $id = $_GET['id'];

    }

  }
  new NotesApi();
endif;
