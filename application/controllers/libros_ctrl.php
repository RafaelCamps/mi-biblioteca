<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Libros_ctrl extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Listado de Libros';

        $data['libros'] = $this->libros_mdl->get_books();

        $this->load->view('components/header');
        $this->load->view('libros/index', $data);
        $this->load->view('components/footer');
    }

    public function view($url = NULL)
    {
        $data['libro'] = $this->libros_mdl->get_books($url);

        if (empty($data['libro'])) {
            show_404();
        }

        $data['title'] = $data['libro']['titulo'];

        $this->load->view('components/header');
        $this->load->view('libros/view', $data);
        $this->load->view('components/footer');
    }

    public function create()
    {
        $data['title'] = 'Añadir libro a la biblioteca';

        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('autor', 'Autor', 'required');
        $this->form_validation->set_rules('editorial', 'Editorial', 'required');
        $this->form_validation->set_rules('categoria', 'Categoría', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('components/header');
            $this->load->view('libros/create', $data);
            $this->load->view('components/footer');
        } else {
            $this->libros_mdl->create_Book();
            redirect('libros');
        }
    }

    public function edit($url)
    {
        $data['libro'] = $this->libros_mdl->get_books($url);
        $data['title'] = 'Editar datos del libro';

        $this->load->view('components/header');
        $this->load->view('libros/edit', $data);
        $this->load->view('components/footer');
    }

    public function update()
    {
        $this->libros_mdl->update_book();
        redirect('libros');
    }


    public function delete($id)
    {
        $this->libros_mdl->delete_book($id);
        redirect('libros');
    }
}


/* Fin del archivo libros_ctrl.php */