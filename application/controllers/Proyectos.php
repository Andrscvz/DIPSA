<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    public function view($page = 'proyectos')
    {
    	if ( ! file_exists(APPPATH.'/views/proyectos/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('proyectos/'.$page, $data);
    }
}
?>