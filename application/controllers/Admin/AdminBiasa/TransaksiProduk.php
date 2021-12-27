<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiProduk extends CI_Controller
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
            'title' => 'Transaksi Produk - Admin',
            'active' => 'TransaksiProduk',
            'breadcumbs' => [
                'Transaksi Produk' => ['title' => 'Transaksi Produk', 'link' => 'admin/TransaksiProduk'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/TransaksiProduk/index', $data);
    }

    public function tambah()
    {
        $data = [
            'notif' => '',
            'title' => 'Tambah Transaksi Produk - Admin',
            'active' => 'TransaksiProduk',
            'breadcumbs' => [
                'Transaksi Produk' => ['title' => 'Transaksi Produk', 'link' => 'admin/TransaksiProduk'],
                'Tambah' => ['title' => 'Tambah', 'link' => 'admin/TransaksiProduk/tambah'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/TransaksiProduk/tambah', $data);
    }

    public function edit()
    {
        $data = [
            'notif' => '',
            'title' => 'Edit Transaksi Produk - Admin',
            'active' => 'TransaksiProduk',
            'breadcumbs' => [
                'Transaksi Produk' => ['title' => 'Transaksi Produk', 'link' => 'admin/TransaksiProduk'],
                'Edit' => ['title' => 'Edit', 'link' => 'admin/TransaksiProduk/edit'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/TransaksiProduk/edit', $data);
    }
}
