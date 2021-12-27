<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiWithdrawCash extends CI_Controller
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
            'title' => 'Transaksi Witdraw Cash - Admin',
            'active' => 'TransaksiWitdrawCash',
            'breadcumbs' => [
                'Transaksi Witdraw Cash' => ['title' => 'Transaksi Witdraw Cash', 'link' => 'admin/TransaksiWithdrawCash'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/TransaksiWithdrawCash/index', $data);
    }
}
