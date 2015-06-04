<?php

class Model_pdf extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getReportes() {       	   
        $this->db->select('*');
        $q = $this->db->get('reportesystema');
        return $q->result();
        $q->free_result();
    }

}

?>
