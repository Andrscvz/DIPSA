<?php
	class Despacho_model extends CI_Model {

	        public function __construct(){

	            $this->load->database();
	        
	        }

	        public function get_despacho(){

                $query = $this->db->get('despacho');
                return $query->result_array();

			}
	}

?>