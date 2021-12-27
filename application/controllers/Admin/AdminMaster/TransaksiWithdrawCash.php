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
            'title' => 'Transaksi Withdraw Cash - Master Admin',
            'active' => 'TransaksiWithdrawCash',
            'breadcumbs' => [
                'Transaksi WIthdraw Cash' => ['title' => 'Transaksi WIthdraw Cash', 'link' => 'admin-master/TransaksiWithdrawCash'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/TransaksiWithdrawCash/index', $data);
    }
}
