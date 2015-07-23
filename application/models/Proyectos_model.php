<?php
	class Proyectos_model extends CI_Model {

	        public function __construct(){

	            $this->load->database();
	        
	        }

	        public function get_proyectos(){

                $query = $this->db->get('proyectos');
                return $query->result_array();

			}

			function get_categorias(){
				$query = $this->db->query("select distinct categoria from proyectos");
				return $query->result_array();
			}
	}

?>