<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

    public function view($page = 'servicios')
    {
    	if ( ! file_exists(APPPATH.'/views/servicios/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('servicios/'.$page, $data);
    }
}
?>