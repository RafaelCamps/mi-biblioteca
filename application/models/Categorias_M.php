<?php
class Categorias_M extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function get_categorias()
    {
        $this->db->order_by('nombre_cat');
        $query = $this->db->get('categorias');
        return $query->result_array();
    }

    public function get_categoria($categoria)
    {
        $query = $this->db->get_where('categorias', array('url_cat' => $categoria));
        return $query->row_array();
    }
}
