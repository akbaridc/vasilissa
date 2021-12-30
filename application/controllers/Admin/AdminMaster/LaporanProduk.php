<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanProduk extends CI_Controller
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
            'title' => 'Laporan Produk - Master Admin',
            'active' => 'LaporanProduk',
            'breadcumbs' => [
                'Laporan Produk' => ['title' => 'Laporan Produk', 'link' => 'admin-master/LaporanProduk'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/LaporanProduk/index', $data);
    }
}
