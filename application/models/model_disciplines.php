<?php

/**
 * 
 */
class model_disciplines extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    protected $table = 'DISCIPLINES';

    function get_disciplines() {
        return $this->db->select('*')
                        ->from($this->table)
                        ->order_by("nom", "description")
                        ->get()
                        ->result();
    }

}
