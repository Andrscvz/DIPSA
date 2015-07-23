<?php
	class Servicios_model extends CI_Model {

	        public function __construct(){

	            $this->load->database();
	        
	        }

	        public function get_servicios(){

                $query = $this->db->get('servicios');
                return $query->result_array();

			}
	}

?>