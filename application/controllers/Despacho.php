<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Despacho extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('despacho_model');
    }

    public function view($page = 'despacho'){
    	
        if ( ! file_exists(APPPATH.'/views/despacho/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('url');
        
        $data['despacho'] = $this->despacho_model->get_despacho();

        $this->load->view('despacho/'.$page, $data);
    }
}
?>