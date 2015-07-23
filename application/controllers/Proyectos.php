<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Proyectos extends CI_Controller {

        public function __construct(){

            parent::__construct();
            $this->load->model('proyectos_model');
        }

        public function view($page = 'proyectos'){

        	if ( ! file_exists(APPPATH.'/views/proyectos/'.$page.'.php')){
                // Whoops, we don't have a page for that!
                show_404();
            }

            $this->load->helper('url');
           
            $data['proyectos'] = $this->proyectos_model->get_proyectos();
            $data['categorias'] = $this->proyectos_model->get_categorias();

            $this->load->view('proyectos/'.$page, $data);
        }
    }
?>