<?php

class Libros_M extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_books($url = FALSE)
    {
        // si no recibimos parámetros, devolvemos todos...
        if ($url === FALSE) {
            //Para ordenar los datos que solicitamos
            $this->db->order_by('titulo');
            //Para hacer un join con otra tabla
            $this->db->join('categorias', 'categorias.id_categoria = libros.categoria');
            //libros es la tabla de la que queremos recoger los datos
            $query = $this->db->get('libros');
            return $query->result_array();
        }

        $this->db->join('categorias', 'categorias.id_categoria = libros.categoria');
        $query = $this->db->get_where('libros', array('url' => $url));
        return $query->row_array();
    }

    public function get_new_books()
    {
        $this->db->order_by('id_libro', 'DESC');
        $this->db->join('categorias', 'categorias.id_categoria = libros.categoria');
        $query = $this->db->get('libros');
        return $query->result_array();
    }

    public function get_books_by_category($id_categoria){
        $query = $this->db->get_where('libros', array('categoria' => $id_categoria));
        return $query->result_array();
    }

    public function create_book($imagen)
    {
        $url = url_title(htmlspecialchars($this->input->post('titulo')));

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'url' => $url,
            'autor' => $this->input->post('autor'),
            'editorial' => $this->input->post('editorial'),
            'categoria' => $this->input->post('categoria'),
            'resumen' => $this->input->post('resumen'),
            'imagen' => $imagen
        );

        return $this->db->insert('libros', $data);
    }

    public function update_book()
    {
        $id = $this->input->post('id');
        $url = url_title(htmlentities($this->input->post('titulo')));

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'url' => $url,
            'autor' => $this->input->post('autor'),
            'editorial' => $this->input->post('editorial'),
            'categoria' => $this->input->post('categoria'),
            'resumen' => $this->input->post('resumen')
        );


        $this->db->where('id_libro', $id);
        $this->db->update('libros', $data);
    }

    public function delete_book($id)
    {
        $this->db->where('id_libro', $id);
        $this->db->delete('libros');
        return true;
    }
}
