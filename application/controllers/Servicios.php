<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Servicios extends CI_Controller {

        public function __construct(){

            parent::__construct();
            $this->load->model('servicios_model');
        }

        public function view($page = 'servicios'){

        	if ( ! file_exists(APPPATH.'/views/servicios/'.$page.'.php')){
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
            $this->load->helper('url');
           
            $data['servicios'] = $this->servicios_model->get_servicios();

            $this->load->view('servicios/'.$page, $data);
        }
    }
?>