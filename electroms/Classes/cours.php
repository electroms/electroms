<?php

Class cours {
    protected $_id_cours;
    protected $_date_debut;
    protected $_date_fin;
    
    public function __construct($id_cours, $date_debut, $date_fin) {
        $this->_id_cours = $id_cours;
        $this->_date_debut = $date_debut;
        $this->_date_fin = $date_fin;
    }
}