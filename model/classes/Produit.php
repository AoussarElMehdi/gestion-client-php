<?php
class produit {
    private $id;
    private $designation ;
    private $qte_stock;
    private $prix_unit;

    public function __construct ($designation,$qte_stock,$prix_unit){
        $this->designation=$designation;
        $this->qte_stock=$qte_stock;
        $this->prix_unit=$prix_unit;
    }
    public function getId()    { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getDesignation()    { return $this->designation; }
    public function setDesignation($designation) { $this->designation = $designation; }
    public function getQte_stock()    { return $this->qte_stock; }
    public function setQte_stock($qte_stock) { $this->qte_stock = $qte_stock; }
    public function getPrix_unit()    { return $this->prix_unit; }
    public function setPrix_unit($prix_unit) { $this->prix_unit = $prix_unit; }

}
?>