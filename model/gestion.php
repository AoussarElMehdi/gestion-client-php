<?php 
require_once 'classes/DBconnect.php';

abstract class gestion {
    protected $tablename ;
    protected $sql;

    abstract protected function getAll();
    abstract protected function insert($object);
    abstract protected function update ($object);
    public function delete ($id) {
      $dbconnect= DBconnect::Connect();
      $requet=$dbconnect->query("delete From ".$this->tablename." where ID =".$id);
        
    }
    
    
 }

 ?>