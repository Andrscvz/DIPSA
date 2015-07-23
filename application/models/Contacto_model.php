<?php
	class Inicio_model extends CI_Model {

	        public function __construct(){

	            $this->load->database();
	        
	        }

	        public function get_inicio(){

                $query = $this->db->get('inicio');
                return $query->result_array();

			}
	}

?>