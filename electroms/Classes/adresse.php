<?php

Class adresse {
    protected $_id_adresse;
    protected $_num_adresse;
    protected $_rue_adresse;
    protected $_cp_adresse;
    protected $_ville_adresse;
    protected $_pays_adresse;
    
    public function __construct($id_adresse, $num_adresse, $rue_adresse, $cp_adresse, $ville_adresse, $pays_adresse) {
        $this->_id_adresse = $id_adresse;
        $this->_num_adresse = $num_adresse;
        $this->_rue_adresse = $rue_adresse;
        $this->_cp_adresse = $cp_adresse;
        $this->_ville_adresse = $ville_adresse;
        $this->_pays_adresse = $pays_adresse;
    }
}