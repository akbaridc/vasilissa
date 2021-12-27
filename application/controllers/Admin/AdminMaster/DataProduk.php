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
        $data = [
            'notif' => '',
            'title' => 'Data Produk - Master Admin',
            'active' => 'DataProduk',
            'breadcumbs' => [
                'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin-master/DataProduk'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataProduk/index', $data);
    }
}
