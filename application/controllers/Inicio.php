<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Inicio extends CI_Controller {

        public function __construct(){
        
            parent::__construct();
            $this->load->model('inicio_model');
        }

        public function view($page = 'inicio'){

        	if ( ! file_exists(APPPATH.'/views/inicio/'.$page.'.php')){
                // Whoops, we don't have a page for that!
                show_404();
            }

            $this->load->helper('url');
            
            $data['inicio'] = $this->inicio_model->get_inicio();

            $this->load->view('inicio/'.$page, $data);
        }

    }
?>