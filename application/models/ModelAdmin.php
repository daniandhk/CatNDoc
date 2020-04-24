<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelAdmin extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    public function get_products(){
		return $this->db->get('product')->result_array();
	}

}