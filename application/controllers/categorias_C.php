<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorias_C extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Categorías";
        $data['categorias'] = $this->categorias_M->get_categorias();

        $this->load->view('components/header');
        $this->load->view('categorias/index', $data);
        $this->load->view('components/footer');
    }

    public function view($url){
        $categoria = $this->categorias_M->get_categoria($url);
        $id_categoria = $categoria['id_categoria'];
        
        $data['title'] = $categoria['nombre_cat'];
        $data['categorias'] = $this->categorias_M->get_categorias();
        $data['libros'] = $this->libros_M->get_books_by_category($id_categoria);

        $this->load->view('components/header');
        $this->load->view('categorias/view', $data);
        $this->load->view('components/footer');
    }

}
