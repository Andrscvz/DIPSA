<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    public function view($page = 'contacto')
    {
    	if ( ! file_exists(APPPATH.'/views/contacto/'.$page.'.php'))
        {
			echo APPPATH.'/views/contacto/'.$page.'.php';
			// Whoops, we don't have a page for that!
			show_404();
        }
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('contacto/'.$page, $data);
    }
}
?>