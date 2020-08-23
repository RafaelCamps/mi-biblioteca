<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_ctrl extends CI_Controller
{

    public function view($page = 'home')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = ucfirst($page);

        if($page === 'home'){
            $data['libros'] = $this->libros_mdl->get_books();
        }


        $this->load->view('components/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('components/footer');
    }
}


/* Fin del archivo pages_ctrl.php*/