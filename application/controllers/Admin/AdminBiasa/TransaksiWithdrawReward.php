<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiWithdrawReward extends CI_Controller
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
            'title' => 'Transaksi Witdraw Reward - Admin',
            'active' => 'TransaksiWitdrawReward',
            'breadcumbs' => [
                'Transaksi Witdraw Reward' => ['title' => 'Transaksi Witdraw Reward', 'link' => 'admin/TransaksiWithdrawReward'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/TransaksiWithdrawReward/index', $data);
    }
}
