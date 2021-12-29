<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $this->db->order_by('jenis', 'DESC');
        $produk = $this->db->get_where('produk_tbl')->result();
        $data = [
            'notif' => '',
            'title' => 'Data Produk - Master Admin',
            'active' => 'DataProduk',
            'breadcumbs' => [
                'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin-master/DataProduk'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            'produk' => $produk,
        ];
        $this->template2->views('admin/master-admin/DataProduk/index', $data);
    }

    public function json_produk()
    {
        $id = $this->input->post('id');
        $foto_produk = $this->db->get_where('foto_produk_tbl', array('id_produk' => $id))->result_array();
        echo json_encode($foto_produk);
    }
}
