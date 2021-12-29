<?php 

class commande {
    private $id ;
    private $date ;
    private $type ;
    private $payee ;
    private $idclient ;

    public function getId()    { return $this->id; }

    public function setId($id) { $this->id = $id; }

    public function getDate()      {  return $this->date; }

    public function setDate($date) {  $this->date = $date; }

    public function getType()      { return $this->type; }

    public function setType($type) { $this->type = $type; }

    public function getPayee()       {  return $this->payee; }

    public function setPayee($payee) {  $this->payee = $payee; }

    public function getIdclient()       {  return $this->idclient; }

    public function setIdclient($idclient) { $this->idclient = $idclient; }
    
   
    public function __construct ($id,$date,$type,$payee,$idclient)
    {   $this->id = $id;
        $this->date = $date;
        $this->type = $type;
        $this->payee = $payee;
        $this->idclient = $idclient;
    }
    
    
 }

 ?>